<?php

namespace App\Entity;

use App\Repository\ProfilsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfilsRepository::class)
 */
class Profils
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="smallint")
     */
    private $niveauadmin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNiveauadmin(): ?int
    {
        return $this->niveauadmin;
    }

    public function setNiveauadmin(int $niveauadmin): self
    {
        $this->niveauadmin = $niveauadmin;

        return $this;
    }
}
