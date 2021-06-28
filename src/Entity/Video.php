<?php

namespace App\Entity;

use App\Repository\VideoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VideoRepository::class)
 */
class Video
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
    private $lienvideo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bgimage;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getBgimage(): ?string
    {
        return $this->bgimage;
    }

    public function setBgimage(string $bgimage): self
    {
        $this->bgimage = $bgimage;

        return $this;
    }
}
