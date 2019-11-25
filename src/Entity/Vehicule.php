<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VehiculeRepository")
 */
class Vehicule
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cvFiscaux;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCvFiscaux(): ?string
    {
        return $this->cvFiscaux;
    }

    public function setCvFiscaux(string $cvFiscaux): self
    {
        $this->cvFiscaux = $cvFiscaux;

        return $this;
    }
}
