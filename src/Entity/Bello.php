<?php

namespace App\Entity;

use App\Repository\BelloRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BelloRepository::class)
 */
class Bello
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
     * @ORM\OneToMany(targetEntity=Celestin::class, mappedBy="bello")
     */
    private $celestins;

    public function __construct()
    {
        $this->celestins = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Celestin>
     */
    public function getCelestins(): Collection
    {
        return $this->celestins;
    }

    public function addCelestin(Celestin $celestin): self
    {
        if (!$this->celestins->contains($celestin)) {
            $this->celestins[] = $celestin;
            $celestin->setBello($this);
        }

        return $this;
    }

    public function removeCelestin(Celestin $celestin): self
    {
        if ($this->celestins->removeElement($celestin)) {
            // set the owning side to null (unless already changed)
            if ($celestin->getBello() === $this) {
                $celestin->setBello(null);
            }
        }

        return $this;
    }
}
