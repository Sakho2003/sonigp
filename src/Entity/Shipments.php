<?php

namespace App\Entity;

use App\Repository\ShipmentsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ShipmentsRepository::class)]
class Shipments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Package = null;

    #[ORM\Column(length: 255)]
    private ?string $origin = null;

    #[ORM\Column(length: 255)]
    private ?string $Destination = null;

    #[ORM\Column(length: 255)]
    private ?string $Shipper = null;

    #[ORM\Column(length: 255)]
    private ?string $deliveryStatus = null;

    #[ORM\Column(length: 255)]
    private ?string $EstimatedDeliveryDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPackage(): ?string
    {
        return $this->Package;
    }

    public function setPackage(string $Package): static
    {
        $this->Package = $Package;

        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setOrigin(string $origin): static
    {
        $this->origin = $origin;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->Destination;
    }

    public function setDestination(string $Destination): static
    {
        $this->Destination = $Destination;

        return $this;
    }

    public function getShipper(): ?string
    {
        return $this->Shipper;
    }

    public function setShipper(string $Shipper): static
    {
        $this->Shipper = $Shipper;

        return $this;
    }

    public function getDeliveryStatus(): ?string
    {
        return $this->deliveryStatus;
    }

    public function setDeliveryStatus(string $deliveryStatus): static
    {
        $this->deliveryStatus = $deliveryStatus;

        return $this;
    }

    public function getEstimatedDeliveryDate(): ?string
    {
        return $this->EstimatedDeliveryDate;
    }

    public function setEstimatedDeliveryDate(string $EstimatedDeliveryDate): static
    {
        $this->EstimatedDeliveryDate = $EstimatedDeliveryDate;

        return $this;
    }
}
