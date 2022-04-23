<?php

namespace App\Entity;

use App\Repository\UtilisateursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateursRepository::class)
 */
class Utilisateurs
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
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motdepasse;

    /**
     * @ORM\ManyToOne(targetEntity=profils::class)
     */
    private $profil;

    /**
     * @ORM\ManyToOne(targetEntity=emplois::class)
     */
    private $emploi;

    /**
     * @ORM\ManyToOne(targetEntity=services::class)
     */
    private $service;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $utilisateur;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMotdepasse(): ?string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(string $motdepasse): self
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    public function getProfil(): ?profils
    {
        return $this->profil;
    }

    public function setProfil(?profils $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    public function getEmploi(): ?emplois
    {
        return $this->emploi;
    }

    public function setEmploi(?emplois $emploi): self
    {
        $this->emploi = $emploi;

        return $this;
    }

    public function getService(): ?services
    {
        return $this->service;
    }

    public function setService(?services $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getUtilisateur(): ?string
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(string $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
}
