<?php

namespace App\Entity;

use App\Repository\CelestinRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CelestinRepository::class)
 */
class Celestin
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
     * @ORM\ManyToOne(targetEntity=Bello::class, inversedBy="celestins")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bello;

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

    public function getBello(): ?Bello
    {
        return $this->bello;
    }

    public function setBello(?Bello $bello): self
    {
        $this->bello = $bello;

        return $this;
    }
}
