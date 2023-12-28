<?php

namespace App\Entity;

use App\Repository\DepartmentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table('departments')]
#[ORM\Entity(repositoryClass: DepartmentRepository::class)]
class Department
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name:'dept_no')]
    private ?int $id = null;

   

    #[ORM\Column(length: 255)]
    private ?string $deptName = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $roi_url = null;

    

    public function getId(): ?int
    {
        return $this->id;
    }

  

    public function getDeptName(): ?string
    {
        return $this->deptName;
    }

    public function setDeptName(string $deptName): static
    {
        $this->deptName = $deptName;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getRoi_url(): ?string
    {
        return $this->roi_url;
    }

    public function setRoi_url(?string $roi_url): static
    {
        $this->roi_url = $roi_url;

        return $this;
    }

    public function __toString(): string {
        return "{$this->deptName}";
    }

    

   
}
