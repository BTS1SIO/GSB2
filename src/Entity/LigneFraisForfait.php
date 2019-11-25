<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LigneFraisForfaitRepository")
 */
class LigneFraisForfait
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateMois;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $quantite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateMois(): ?\DateTimeInterface
    {
        return $this->dateMois;
    }

    public function setDateMois(\DateTimeInterface $dateMois): self
    {
        $this->dateMois = $dateMois;

        return $this;
    }

    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(string $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }
}
