<?php

namespace App\Entity;

use App\Repository\UserAccountsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserAccountsRepository::class)]
class UserAccounts
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $UserName = null;

    #[ORM\Column(length: 255)]
    private ?string $PasswordHash = null;

    #[ORM\Column]
    private ?int $CustomerId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->UserName;
    }

    public function setUserName(string $UserName): static
    {
        $this->UserName = $UserName;

        return $this;
    }

    public function getPasswordHash(): ?string
    {
        return $this->PasswordHash;
    }

    public function setPasswordHash(string $PasswordHash): static
    {
        $this->PasswordHash = $PasswordHash;

        return $this;
    }

    public function getCustomerId(): ?int
    {
        return $this->CustomerId;
    }

    public function setCustomerId(int $CustomerId): static
    {
        $this->CustomerId = $CustomerId;

        return $this;
    }
}
