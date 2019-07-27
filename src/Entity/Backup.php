<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BackupRepository")
 */
class Backup
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
     * @ORM\Column(type="date")
     */
    private $data;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $hash;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etykieta_plan;

    /**
     * @ORM\Column(type="integer")
     */
    private $fbackup;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $komunikat;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\vm")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vm;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\plan")
     * @ORM\JoinColumn(nullable=false)
     */
    private $plan;

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

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    public function getEtykietaPlan(): ?string
    {
        return $this->etykieta_plan;
    }

    public function setEtykietaPlan(string $etykieta_plan): self
    {
        $this->etykieta_plan = $etykieta_plan;

        return $this;
    }

    public function getFbackup(): ?int
    {
        return $this->fbackup;
    }

    public function setFbackup(int $fbackup): self
    {
        $this->fbackup = $fbackup;

        return $this;
    }

    public function getKomunikat(): ?string
    {
        return $this->komunikat;
    }

    public function setKomunikat(?string $komunikat): self
    {
        $this->komunikat = $komunikat;

        return $this;
    }

    public function getVm(): ?vm
    {
        return $this->vm;
    }

    public function setVm(?vm $vm): self
    {
        $this->vm = $vm;

        return $this;
    }

    public function getPlan(): ?plan
    {
        return $this->plan;
    }

    public function setPlan(?plan $plan): self
    {
        $this->plan = $plan;

        return $this;
    }
}
