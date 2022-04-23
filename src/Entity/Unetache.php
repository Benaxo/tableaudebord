<?php

namespace App\Entity;

use App\Repository\UnetacheRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UnetacheRepository::class)
 */
class Unetache
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

   

    /**
     * @ORM\OneToOne(targetEntity=taches::class, cascade={"persist", "remove"})
     */
    private $tache;

    /**
     * @ORM\ManyToOne(targetEntity=activites::class)
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

    public function getTache(): ?taches
    {
        return $this->tache;
    }

    public function setTache(?taches $tache): self
    {
        $this->tache = $tache;

        return $this;
    }
}
