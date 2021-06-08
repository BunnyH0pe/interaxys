<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 */
class Contact
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
    private $email;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien_twitter;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien_linkedin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien_facebook;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getLienTwitter(): ?string
    {
        return $this->lien_twitter;
    }

    public function setLienTwitter(string $lien_twitter): self
    {
        $this->lien_twitter = $lien_twitter;

        return $this;
    }

    public function getLienLinkedin(): ?string
    {
        return $this->lien_linkedin;
    }

    public function setLienLinkedin(string $lien_linkedin): self
    {
        $this->lien_linkedin = $lien_linkedin;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienFacebook()
    {
        return $this->lien_facebook;
    }

    /**
     * @param mixed $lien_facebook
     */
    public function setLienFacebook($lien_facebook): void
    {
        $this->lien_facebook = $lien_facebook;
    }
}
