<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MenuRepository::class)
 */
class Menu
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
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Dishes::class)
     */
    private $plat;

    public function __construct()
    {
        $this->plat = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Dishes[]
     */
    public function getPlat(): Collection
    {
        return $this->plat;
    }

    public function addPlat(Dishes $plat): self
    {
        if (!$this->plat->contains($plat)) {
            $this->plat[] = $plat;
        }

        return $this;
    }

    public function removePlat(Dishes $plat): self
    {
        if ($this->plat->contains($plat)) {
            $this->plat->removeElement($plat);
        }

        return $this;
    }
}
