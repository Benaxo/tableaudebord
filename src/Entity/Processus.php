<?php

namespace App\Entity;

use App\Repository\ProcessusRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProcessusRepository::class)
 */


class Processus
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
    private $responsable;

    /**
     * @ORM\Column(type="smallint")
     */
    private $suppleant;

    /**
     * @ORM\OneToMany(targetEntity=Activites::class, mappedBy="processus")
     */
    private $activites;

    public function __construct()
    {
        $this->activites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    

    public function getNom(): ?string
    {
        return $this->nom;

    }
    
    public function __toString()
    {
        return $this->nom;
        return $this->activites;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
   

    public function getResponsable(): ?int
    {
        return $this->responsable;
    }

    public function setResponsable(int $responsable): self
    {
        $this->responsable = $responsable;

        return $this;
    }

    public function getSuppleant(): ?int
    {
        return $this->suppleant;
    }

    public function setSuppleant(int $suppleant): self
    {
        $this->suppleant = $suppleant;

        return $this;
    }

    /**
     * @return Collection|Activites[]
     */
    public function getActivites(): Collection
    {
        return $this->activites;
    }

    public function addActivite(Activites $activite): self
    {
        if (!$this->activites->contains($activite)) {
            $this->activites[] = $activite;
            $activite->setProcessus($this);
        }

        return $this;
    }

    public function removeActivite(Activites $activite): self
    {
        if ($this->activites->removeElement($activite)) {
            // set the owning side to null (unless already changed)
            if ($activite->getProcessus() === $this) {
                $activite->setProcessus(null);
            }
        }

        return $this;
    }

}
