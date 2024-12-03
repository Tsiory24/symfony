<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotionRepository::class)]
class Promotion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: "date")]
    private ?\DateTimeInterface $date_promotion = null;

    /**
     * @var Collection<int, Students>
     */
// Cette propriété contient une relation vers Students
#[ORM\OneToMany(mappedBy: 'promotion', targetEntity: Students::class)]
// Exclure de la sérialisation si vous ne souhaitez pas l'inclure
private Collection $semestre;



    public function __construct()
    {
        $this->semestre = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatePromotion(): ?\DateTimeInterface
    {
        return $this->date_promotion;
    }

    public function setDatePromotion(\DateTimeInterface $date_promotion): static
    {
        $this->date_promotion = $date_promotion;

        return $this;
    }

    /**
     * @return Collection<int, Students>
     */
    public function getSemestre(): Collection
    {
        return $this->semestre;
    }

    public function addSemestre(Students $semestre): static
    {
        if (!$this->semestre->contains($semestre)) {
            $this->semestre->add($semestre);
            $semestre->setPromotion($this);
        }

        return $this;
    }

    public function removeSemestre(Students $semestre): static
    {
        if ($this->semestre->removeElement($semestre)) {
            // set the owning side to null (unless already changed)
            if ($semestre->getPromotion() === $this) {
                $semestre->setPromotion(null);
            }
        }

        return $this;
    }
}
