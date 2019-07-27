<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VmRepository")
 */
class Vm
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_vm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nazwa_vm;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $ip;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVm(): ?int
    {
        return $this->id_vm;
    }

    public function setIdVm(int $id_vm): self
    {
        $this->id_vm = $id_vm;

        return $this;
    }

    public function getNazwaVm(): ?string
    {
        return $this->nazwa_vm;
    }

    public function setNazwaVm(string $nazwa_vm): self
    {
        $this->nazwa_vm = $nazwa_vm;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }
}
