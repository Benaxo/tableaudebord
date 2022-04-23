<?php

namespace App\Entity;

use App\Repository\TachesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TachesRepository::class)
 */
class Taches
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

   

    /**
     * @ORM\ManyToOne(targetEntity=Profils::class)
     */
    private $profilattache1;

    /**
     * @ORM\ManyToOne(targetEntity=Profils::class)
     */
    private $profilattache2;

    /**
     * @ORM\ManyToOne(targetEntity=Profils::class)
     */
    private $profilattache3;

    /**
     * @ORM\ManyToOne(targetEntity=Profils::class)
     */
    private $profilattache4;

    /**
     * @ORM\ManyToOne(targetEntity=Profils::class)
     */
    private $profilattache5;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="time")
     */
    private $tempsexecution;

    /**
     * @ORM\ManyToOne(targetEntity=Activites::class, inversedBy="Taches")
     */
    private $activite;

    

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getActivite(): ?activites
    {
        return $this->activite;
    }

    public function setActivite(?activites $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

    public function getProfilattache1(): ?profils
    {
        return $this->profilattache1;
    }

    public function setProfilattache1(?profils $profilattache1): self
    {
        $this->profilattache1 = $profilattache1;

        return $this;
    }

    public function getProfilattache2(): ?profils
    {
        return $this->profilattache2;
    }

    public function setProfilattache2(?profils $profilattache2): self
    {
        $this->profilattache2 = $profilattache2;

        return $this;
    }

    public function getProfilattache3(): ?profils
    {
        return $this->profilattache3;
    }

    public function setProfilattache3(?profils $profilattache3): self
    {
        $this->profilattache3 = $profilattache3;

        return $this;
    }

    public function getProfilattache4(): ?profils
    {
        return $this->profilattache4;
    }

    public function setProfilattache4(?profils $profilattache4): self
    {
        $this->profilattache4 = $profilattache4;

        return $this;
    }

    public function getProfilattache5(): ?profils
    {
        return $this->profilattache5;
    }

    public function setProfilattache5(?profils $profilattache5): self
    {
        $this->profilattache5 = $profilattache5;

        return $this;
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

    public function getTempsexecution(): ?\DateTimeInterface
    {
        return $this->tempsexecution;
    }

    public function setTempsexecution(\DateTimeInterface $tempsexecution): self
    {
        $this->tempsexecution = $tempsexecution;

        return $this;
    }

    public function __toString()
    {
        return $this->nom;
        return $this->activite;
    }

    public function getActivites(): ?Activites
    {
        return $this->activites;
    }

    public function setActivites(?Activites $activites): self
    {
        $this->activites = $activites;

        return $this;
    }
}
