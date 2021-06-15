<?php

namespace App\Entity;

use App\Repository\LienMenuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LienMenuRepository::class)
 */
class LienMenu
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
    private $lien1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logoImg;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLien1(): ?string
    {
        return $this->lien1;
    }

    public function setLien1(string $lien1): self
    {
        $this->lien1 = $lien1;

        return $this;
    }

    public function getLien2(): ?string
    {
        return $this->lien2;
    }

    public function setLien2(string $lien2): self
    {
        $this->lien2 = $lien2;

        return $this;
    }

    public function getLien3(): ?string
    {
        return $this->lien3;
    }

    public function setLien3(string $lien3): self
    {
        $this->lien3 = $lien3;

        return $this;
    }

    public function getLien4(): ?string
    {
        return $this->lien4;
    }

    public function setLien4(string $lien4): self
    {
        $this->lien4 = $lien4;

        return $this;
    }

    public function getLogoImg(): ?string
    {
        return $this->logoImg;
    }

    public function setLogoImg(string $logoImg): self
    {
        $this->logoImg = $logoImg;

        return $this;
    }
}
