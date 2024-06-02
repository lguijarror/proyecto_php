<?php

namespace App\Entity;

use App\Repository\TransportesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransportesRepository::class)]
class Transportes
{
    #[ORM\Column(length: 10, nullable:false, name:"idTransporte")]
    #[ORM\GeneratedValue(strategy:"NONE")]
    #[ORM\Id]
    private ?string $idTransporte;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha;

    #[ORM\Column(length: 9, nullable:false, name:"dniCamionero")]
    private ?string $dniCamionero;

    #[ORM\Column(length: 7, nullable:false, name:"matriculaCamion")]
    private ?string $matriculaCamion;

    public function getIdTransporte(): ?string
    {
        return $this->idTransporte;
    }

    public function setIdTransporte(string $idTransporte): static
    {
        $this->idTransporte = $idTransporte;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getDniCamionero(): ?string
    {
        return $this->dniCamionero;
    }

    public function setDniCamionero(string $dniCamionero): static
    {
        $this->dniCamionero = $dniCamionero;

        return $this;
    }

    public function getMatriculaCamion(): ?string
    {
        return $this->matriculaCamion;
    }

    public function setMatriculaCamion(string $matriculaCamion): static
    {
        $this->matriculaCamion = $matriculaCamion;

        return $this;
    }
}
