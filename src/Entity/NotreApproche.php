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
    private $horizon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $finalite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resultat;

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
     * @param mixed $mot_clef
     */
    public function setMotClef($mot_clef): void
    {
        $this->mot_clef = $mot_clef;
    }

    /**
     * @return mixed
     */
    public function getHorizon()
    {
        return $this->horizon;
    }

    /**
     * @param mixed $horizon
     */
    public function setHorizon($horizon): void
    {
        $this->horizon = $horizon;
    }

    /**
     * @return mixed
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * @param mixed $objet
     */
    public function setObjet($objet): void
    {
        $this->objet = $objet;
    }

    /**
     * @return mixed
     */
    public function getFinalite()
    {
        return $this->finalite;
    }

    /**
     * @param mixed $finalite
     */
    public function setFinalite($finalite): void
    {
        $this->finalite = $finalite;
    }

    /**
     * @return mixed
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * @param mixed $resultat
     */
    public function setResultat($resultat): void
    {
        $this->resultat = $resultat;
    }
}
