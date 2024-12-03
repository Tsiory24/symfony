<?php

namespace App\Controller\API;

use App\Annotation\TokenRequired;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\DeleteService;
use App\Service\JwtTokenManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Requirement\Requirement;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

class UserApiController extends AbstractController
{
    private $jwtTokenManager;

    public function __construct(JwtTokenManager $jwtTokenManager)
    {
        $this->jwtTokenManager = $jwtTokenManager;
    }

    // *[CREATE]*

    #[Route("/api/users", methods: "POST")]
    // #[TokenRequired]
    public function create(#[MapRequestPayload(serializationContext: [
        'groups' => ['users.create']
    ])] User $user, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $em)
    {
        $user->setPassword($userPasswordHasher->hashPassword($user, $user->getPassword()));
        $em->persist($user);
        $em->flush();
        return $this->json($user, 200, [], [
            'groups' => ['users.show']
        ]);
    }

    // *[READ]*

    #[Route("/api/users", methods: "GET")]
    #[TokenRequired]
    public function findAll(UserRepository $repository)
    {
        $users = $repository->findAll();
        return $this->json($users, 200, [], [
            'groups' => ['users.show']
        ]);
    }

    #[Route("/api/users/{id}", methods: "GET", requirements: ['id' => Requirement::DIGITS])]
    #[TokenRequired]
    public function findById(User $user)
    {
        return $this->json($user, 200, [], [
            'groups' => ['users.show']
        ]);
    }

    // *[UPDATE]*

    #[Route("/api/users/{id}", methods: "PUT")]
    #[TokenRequired]
    public function update(
        int $id,
        Request $request,
        UserRepository $repository,
        EntityManagerInterface $em,
        SerializerInterface $serializer,
    ) {
        // Récupérer le projet existant
        $user = $repository->find($id);
        if (!$user) {
            throw new NotFoundHttpException('User non trouvé');
        }

        // Désérialisation partielle en indiquant que les propriétés existantes de $project doivent être conservées
        $updatedProject = $serializer->deserialize(
            $request->getContent(),
            User::class,
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE => $user,  'groups' => ['users.update']]
        );

        $em->persist($updatedProject);
        $em->flush();
        return $this->json($updatedProject, 200, [], [
            'groups' => ['projects.show']
        ]);
    }

    // *[DELETE]*

    #[Route("/api/projects/{id}", methods: "DELETE")]
    #[TokenRequired]
    public function delete(
        int $id,
        DeleteService $deleteService,
        UserRepository $repository,
    ) {
        // Récupérer le projet existant
        $user = $repository->find($id);
        if (!$user) {
            throw new NotFoundHttpException('User non trouvé');
        }

        // Delete user
        $deleteService->softDelete($user);

        // Return no content code
        return new Response(null, 204);
    }

    #[Route("/api/users/login", methods: "POST")]
    public function login(Request $request, UserRepository $repository,  UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $em)
    {
        $data = json_decode($request->getContent(), true);
        $email = $data['email'] ?? '';
        $password = $data['password'] ?? '';

        $user = $repository->findOneBy(['email' => $email]);
        if (!$user || !$userPasswordHasher->isPasswordValid($user, $password)) {
            return new JsonResponse(['message' => 'Invalid credentials'], Response::HTTP_UNAUTHORIZED);
        }

        $claims = [
            'userId' => $user->getId(),
            // 'email' => $user->getEmail(),
        ];
        $token = $this->jwtTokenManager->createToken($claims, 3600);

        // Generate token and update database
        $user->setApiToken($token->toString());
        $em->persist($user);
        $em->flush();

        return new JsonResponse(['token' => $user->getApiToken()]);
    }
}
