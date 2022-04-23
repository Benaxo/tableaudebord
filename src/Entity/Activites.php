<?php

namespace App\Entity;

use App\Repository\ActivitesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActivitesRepository::class)
 */
class Activites
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
     * @ORM\OneToMany(targetEntity=Taches::class, mappedBy="activites")
     */
    private $tache;

    /**
     * @ORM\ManyToOne(targetEntity=Processus::class, inversedBy="activites")
     */
    private $processus;

    public function __construct()
    {
        $this->tache = new ArrayCollection();

    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->nom;

        return $this->tache;
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

    public function getProcessus(): ?processus
    {
        return $this->processus;
    }

    public function setProcessus(?processus $processus): self
    {
        $this->processus = $processus;

        return $this;
    }

    /**
     * @return Collection|Taches[]
     */
    public function getTache(): Collection
    {
        return $this->tache;

    }

    public function addTache(Taches $tache): self
    {
        if (!$this->tache->contains($tache)) {
            $this->tache[] = $tache;
            $tache->setActivites($this);
        }

        return $this;
    }

    public function removeTache(Taches $tache): self
    {
        if ($this->tache->removeElement($tache)) {
            // set the owning side to null (unless already changed)
            if ($tache->getActivites() === $this) {
                $tache->setActivites(null);
            }
        }

        return $this;
    }
}
