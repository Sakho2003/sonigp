<?php

namespace App\Entity;

use App\Repository\PackagesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PackagesRepository::class)]
class Packages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $Weight = null;

    #[ORM\Column(length: 255)]
    private ?string $Dimensions = null;

    #[ORM\Column]
    private ?int $SenderId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->Weight;
    }

    public function setWeight(string $Weight): static
    {
        $this->Weight = $Weight;

        return $this;
    }

    public function getDimensions(): ?string
    {
        return $this->Dimensions;
    }

    public function setDimensions(string $Dimensions): static
    {
        $this->Dimensions = $Dimensions;

        return $this;
    }

    public function getSenderId(): ?int
    {
        return $this->SenderId;
    }

    public function setSenderId(int $SenderId): static
    {
        $this->SenderId = $SenderId;

        return $this;
    }
}
