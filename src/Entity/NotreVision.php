<?php

namespace App\Entity;

use App\Repository\NotreVisionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NotreVisionRepository::class)
 */
class NotreVision
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $paragraphe1;

    /**
     * @ORM\Column(type="text")
     */
    private $paragraphe2;

    /**
     * @ORM\Column(type="string", length=255 )
     */
    private $lienvideo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParagraphe1(): ?string
    {
        return $this->paragraphe1;
    }

    public function setParagraphe1(string $paragraphe1): self
    {
        $this->paragraphe1 = $paragraphe1;

        return $this;
    }

    public function getParagraphe2(): ?string
    {
        return $this->paragraphe2;
    }

    public function setParagraphe2(string $paragraphe2): self
    {
        $this->paragraphe2 = $paragraphe2;

        return $this;
    }

    public function getLienvideo(): ?string
    {
        return $this->lienvideo;
    }

    public function setLienvideo(string $lienvideo): self
    {
        $this->lienvideo = $lienvideo;

        return $this;
    }

}
