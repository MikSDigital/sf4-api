<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoleRepository")
 */
class Role
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Person", inversedBy="roles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $person;

    /**
     * @return mixed
     */
    public function getPlayedName()
    {
        return $this->playedName;
    }

    /**
     * @param mixed $playedName
     */
    public function setPlayedName($playedName): void
    {
        $this->playedName = $playedName;
    }

    /**
     * @return mixed
     */
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * @param mixed $movie
     */
    public function setMovie($movie): void
    {
        $this->movie = $movie;
    }

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $playedName;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Movie", inversedBy="roles")
     */
    private $movie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPerson(): ?Person
    {
        return $this->person;
    }

    public function setPerson(?Person $person): self
    {
        $this->person = $person;

        return $this;
    }
}
