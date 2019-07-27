<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlanRepository")
 */
class Plan
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
    private $etykieta_plan;

    /**
     * @ORM\Column(type="datetime")
     */
    private $data_start;

    /**
     * @ORM\Column(type="array")
     */
    private $lista_vm = [];

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ip_storage_f;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ip_storage_db;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ip_storage_vm;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ip_final_storage;

    /**
     * @ORM\Column(type="integer")
     */
    private $flag;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $interwal;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $days = [];

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDataStart(): ?\DateTimeInterface
    {
        return $this->data_start;
    }

    public function setDataStart(\DateTimeInterface $data_start): self
    {
        $this->data_start = $data_start;

        return $this;
    }

    public function getListaVm(): ?array
    {
        return $this->lista_vm;
    }

    public function setListaVm(array $lista_vm): self
    {
        $this->lista_vm = $lista_vm;

        return $this;
    }

    public function getIpStorageF(): ?string
    {
        return $this->ip_storage_f;
    }

    public function setIpStorageF(string $ip_storage_f): self
    {
        $this->ip_storage_f = $ip_storage_f;

        return $this;
    }

    public function getIpStorageDb(): ?string
    {
        return $this->ip_storage_db;
    }

    public function setIpStorageDb(string $ip_storage_db): self
    {
        $this->ip_storage_db = $ip_storage_db;

        return $this;
    }

    public function getIpStorageVm(): ?string
    {
        return $this->ip_storage_vm;
    }

    public function setIpStorageVm(string $ip_storage_vm): self
    {
        $this->ip_storage_vm = $ip_storage_vm;

        return $this;
    }

    public function getIpFinalStorage(): ?string
    {
        return $this->ip_final_storage;
    }

    public function setIpFinalStorage(string $ip_final_storage): self
    {
        $this->ip_final_storage = $ip_final_storage;

        return $this;
    }

    public function getFlag(): ?int
    {
        return $this->flag;
    }

    public function setFlag(int $flag): self
    {
        $this->flag = $flag;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getInterwal(): ?string
    {
        return $this->interwal;
    }

    public function setInterwal(?string $interwal): self
    {
        $this->interwal = $interwal;

        return $this;
    }

    public function getDays(): ?array
    {
        return $this->days;
    }

    public function setDays(?array $days): self
    {
        $this->days = $days;

        return $this;
    }
    public function addBackup (Backup $backup): self
	{
		if(!$this->backups->contains($backup)) {
            $this->backups[] = $backup;
            $backup->setPlan($this);
        }
        return $this;
    }
    public function removeBackup(Backup $backup): self
    {
        if ($this->backups->contains($backup)) {
            $this->backups->removeElement($backup);
            // set the owning side to null (unless already changed)
            if ($backup->getPlan() === $this) {
                $backup->setPlan(null);
            }
        }
        return $this;
    }
	}
}
