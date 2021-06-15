<?php

namespace App\Entity;

use App\Repository\NotreApprocheRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NotreApprocheRepository::class)
 */
class NotreApproche
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
    private $texte_bouton;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $description;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mot_clef;

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

    /**
     * @return mixed
     */
    public function getTexteBouton()
    {
        return $this->texte_bouton;
    }

    /**
     * @return mixed
     */
    public function gettexte_bouton()
    {
        return $this->texte_bouton;
    }

    /**
     * @param mixed $texte_bouton
     */
    public function setTexteBouton($texte_bouton): void
    {
        $this->texte_bouton = $texte_bouton;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMotClef()
    {
        return $this->mot_clef;
    }

    /**
     * @return mixed
     */
    public function getmot_clef()
    {
        return $this->mot_clef;
    }

    /**
     * @param mixed $mot_clef
     */
    public function setMotClef($mot_clef): void
    {
        $this->mot_clef = $mot_clef;
    }

    /**
     * @return mixed
     */
    public function getmotcle1()
    {
        return $this->motcle1;
    }

    /**
     * @param mixed $motcle1
     */
    public function setmotcle1($motcle1): void
    {
        $this->motcle1 = $motcle1;
    }

    /**
     * @return mixed
     */
    public function getmotcle2()
    {
        return $this->motcle2;
    }

    /**
     * @param mixed $motcle2
     */
    public function setmotcle2($motcle2): void
    {
        $this->motcle2 = $motcle2;
    }

    /**
     * @return mixed
     */
    public function getmotcle3()
    {
        return $this->motcle3;
    }

    /**
     * @param mixed $motcle3
     */
    public function setmotcle3($motcle3): void
    {
        $this->motcle3 = $motcle3;
    }

    /**
     * @return mixed
     */
    public function getmotcle4()
    {
        return $this->motcle4;
    }

    /**
     * @param mixed $motcle4
     */
    public function setmotcle4($motcle4): void
    {
        $this->motcle4 = $motcle4;
    }
}
