<?php

namespace App\Entity;

use App\Repository\InventoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InventoryRepository::class)]
class Inventory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Product = null;

    #[ORM\Column(length: 255)]
    private ?string $NameProduct = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $QuantityInStock = null;

    #[ORM\Column(length: 255)]
    private ?string $Price = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?string
    {
        return $this->Product;
    }

    public function setProduct(string $Product): static
    {
        $this->Product = $Product;

        return $this;
    }

    public function getNameProduct(): ?string
    {
        return $this->NameProduct;
    }

    public function setNameProduct(string $NameProduct): static
    {
        $this->NameProduct = $NameProduct;

        return $this;
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

    public function getQuantityInStock(): ?string
    {
        return $this->QuantityInStock;
    }

    public function setQuantityInStock(string $QuantityInStock): static
    {
        $this->QuantityInStock = $QuantityInStock;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->Price;
    }

    public function setPrice(string $Price): static
    {
        $this->Price = $Price;

        return $this;
    }
}
