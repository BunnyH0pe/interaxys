<?php

namespace App\Entity;

use App\Repository\MotCleApprocheRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MotCleApprocheRepository::class)
 */
class MotCleApproche
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
    private $motcle1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motcle2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motcle3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motcle4;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMotcle1(): ?string
    {
        return $this->motcle1;
    }

    public function setMotcle1(string $motcle1): self
    {
        $this->motcle1 = $motcle1;

        return $this;
    }

    public function getMotcle2(): ?string
    {
        return $this->motcle2;
    }

    public function setMotcle2(string $motcle2): self
    {
        $this->motcle2 = $motcle2;

        return $this;
    }

    public function getMotcle3(): ?string
    {
        return $this->motcle3;
    }

    public function setMotcle3(string $motcle3): self
    {
        $this->motcle3 = $motcle3;

        return $this;
    }

    public function getMotcle4(): ?string
    {
        return $this->motcle4;
    }

    public function setMotcle4(string $motcle4): self
    {
        $this->motcle4 = $motcle4;

        return $this;
    }
}
