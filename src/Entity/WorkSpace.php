<?php

namespace App\Entity;

use App\Repository\WorkSpaceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WorkSpaceRepository::class)]
class WorkSpace
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'workspace', orphanRemoval: true)]
    private Collection $users;

    /**
     * @var Collection<int, Days>
     */
    #[ORM\OneToMany(targetEntity: Days::class, mappedBy: 'wokspace', orphanRemoval: true)]
    private Collection $days;

    /**
     * @var Collection<int, Level>
     */
    #[ORM\OneToMany(targetEntity: Level::class, mappedBy: 'workspace', orphanRemoval: true)]
    private Collection $levels;

    /**
     * @var Collection<int, Matter>
     */
    #[ORM\OneToMany(targetEntity: Matter::class, mappedBy: 'worksPace', orphanRemoval: true)]
    private Collection $matters;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->days = new ArrayCollection();
        $this->levels = new ArrayCollection();
        $this->matters = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setWorkspace($this);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getWorkspace() === $this) {
                $user->setWorkspace(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Days>
     */
    public function getDays(): Collection
    {
        return $this->days;
    }

    public function addDay(Days $day): static
    {
        if (!$this->days->contains($day)) {
            $this->days->add($day);
            $day->setWokspace($this);
        }

        return $this;
    }

    public function removeDay(Days $day): static
    {
        if ($this->days->removeElement($day)) {
            // set the owning side to null (unless already changed)
            if ($day->getWokspace() === $this) {
                $day->setWokspace(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Level>
     */
    public function getLevels(): Collection
    {
        return $this->levels;
    }

    public function addLevel(Level $level): static
    {
        if (!$this->levels->contains($level)) {
            $this->levels->add($level);
            $level->setWorkspace($this);
        }

        return $this;
    }

    public function removeLevel(Level $level): static
    {
        if ($this->levels->removeElement($level)) {
            // set the owning side to null (unless already changed)
            if ($level->getWorkspace() === $this) {
                $level->setWorkspace(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Matter>
     */
    public function getMatters(): Collection
    {
        return $this->matters;
    }

    public function addMatter(Matter $matter): static
    {
        if (!$this->matters->contains($matter)) {
            $this->matters->add($matter);
            $matter->setWorksPace($this);
        }

        return $this;
    }

    public function removeMatter(Matter $matter): static
    {
        if ($this->matters->removeElement($matter)) {
            // set the owning side to null (unless already changed)
            if ($matter->getWorksPace() === $this) {
                $matter->setWorksPace(null);
            }
        }

        return $this;
    }
}
