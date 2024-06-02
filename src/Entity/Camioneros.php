<?php

namespace App\Entity;

use App\Repository\CamionerosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CamionerosRepository::class)]
class Camioneros
{

    #[ORM\Column(length: 9, nullable:false, name:"dni")]
    #[ORM\GeneratedValue(strategy:"NONE")]
    #[ORM\Id]
    private ?string $dni;

    #[ORM\Column(length: 45)]
    private ?string $nombre = null;

    #[ORM\Column(length: 9)]
    private ?string $telefono = null;

    #[ORM\Column(length: 200)]
    private ?string $direccion = null;

    #[ORM\Column]
    private ?float $salario = null;

    #[ORM\Column(length: 45)]
    private ?string $poblacion = null;

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(string $dni): static
    {
        $this->dni = $dni;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): static
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): static
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getSalario(): ?float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): static
    {
        $this->salario = $salario;

        return $this;
    }

    public function getPoblacion(): ?string
    {
        return $this->poblacion;
    }

    public function setPoblacion(string $poblacion): static
    {
        $this->poblacion = $poblacion;

        return $this;
    }
}
