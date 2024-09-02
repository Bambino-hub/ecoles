<?php

namespace App\Entity;

use App\Repository\DaysRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DaysRepository::class)]
class Days
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'days')]
    #[ORM\JoinColumn(nullable: false)]
    private ?WorkSpace $workspace = null;

    #[ORM\ManyToOne(inversedBy: 'days')]
    #[ORM\JoinColumn(nullable: true)]
    private ?WorkSpace $wokspace = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getWorkspace(): ?WorkSpace
    {
        return $this->workspace;
    }

    public function setWorkspace(?WorkSpace $workspace): static
    {
        $this->workspace = $workspace;

        return $this;
    }

    public function getWokspace(): ?WorkSpace
    {
        return $this->wokspace;
    }

    public function setWokspace(?WorkSpace $wokspace): static
    {
        $this->wokspace = $wokspace;

        return $this;
    }
}
