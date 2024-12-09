<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column]
    private ?float $Price = null;

    #[ORM\Column]
    private ?float $StockXS = null;

    #[ORM\Column]
    private ?float $StockS = null;

    #[ORM\Column]
    private ?float $StockM = null;

    #[ORM\Column]
    private ?float $StockL = null;

    #[ORM\Column]
    private ?float $StockXL = null;

    #[ORM\Column(length: 255)]
    private ?string $Image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->Price;
    }

    public function setPrice(float $Price): static
    {
        $this->Price = $Price;

        return $this;
    }

    public function getStockXS(): ?float
    {
        return $this->StockXS;
    }

    public function setStockXS(float $StockXS): static
    {
        $this->StockXS = $StockXS;

        return $this;
    }

    public function getStockS(): ?float
    {
        return $this->StockS;
    }

    public function setStockS(float $StockS): static
    {
        $this->StockS = $StockS;

        return $this;
    }

    public function getStockM(): ?float
    {
        return $this->StockM;
    }

    public function setStockM(float $StockM): static
    {
        $this->StockM = $StockM;

        return $this;
    }

    public function getStockL(): ?float
    {
        return $this->StockL;
    }

    public function setStockL(float $StockL): static
    {
        $this->StockL = $StockL;

        return $this;
    }

    public function getStockXL(): ?float
    {
        return $this->StockXL;
    }

    public function setStockXL(float $StockXL): static
    {
        $this->StockXL = $StockXL;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): static
    {
        $this->Image = $Image;

        return $this;
    }
}
