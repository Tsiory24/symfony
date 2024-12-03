<?php

namespace App\Controller\API;

use App\Repository\StudentsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

class EtudiantApiController extends AbstractController
{
    #[Route("/api/etudiants", methods: "GET")]
    // EtudiantApiController.php

    public function sendStudents(StudentsRepository $studentRepository, SerializerInterface $serializer, Request $request): Response
{
    // Récupérer tous les étudiants avec leurs relations
    $students = $studentRepository->findAllWithRelations();
    
    // Initialiser explicitement les collections dans les relations OneToMany
    foreach ($students as $student) {
        // Force l'initialisation de la collection 'semestre' dans Promotion
        $promotion = $student->getPromotion();
        if ($promotion) {
            // Initialisation de la relation OneToMany
            $promotion->getSemestre()->toArray();
        }

        // Force l'initialisation de la collection 'students' dans Semestre
        $semestre = $student->getSemestre();
        if ($semestre) {
            // Initialisation de la relation OneToMany
            $semestre->getStudents()->toArray();
        }
    }

    // Sérialisation des étudiants en JSON
    $jsonData = $serializer->serialize($students, 'json', [
        AbstractNormalizer::CIRCULAR_REFERENCE_HANDLER => function($object) {
            return $object->getId();
        },
    ]);
    
    return new Response($jsonData, 200, ['Content-Type' => 'application/json']);
}

}

?>