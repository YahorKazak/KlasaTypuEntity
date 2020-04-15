<?php

namespace App\Entity;

use Doctrine\DBAL\Types\DateImmutableType;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Boolean;
use phpDocumentor\Reflection\Types\Integer;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SklepRepository")
 */
class Sklep
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
    private $Produkt;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Cena;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Waga;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DataWaznosci;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DataPrzybycia;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $KodProduktu;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $CzyBIO;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Ilosc;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $WartoscKaloryczna;

    /**
     * Sklep constructor.
     * @param $id
     * @param $Produkt
     * @param $Cena
     * @param $Waga
     * @param $DataWaznosci
     * @param $DataPrzybycia
     * @param $KodProduktu
     * @param $CzyBIO
     * @param $Ilosc
     * @param $WartoscKaloryczna
     */
    public function __construct( $Cena = null, $Waga = null, $DataWaznosci = null, $DataPrzybycia = null, $KodProduktu = null, $CzyBIO = null, $Ilosc = null, $WartoscKaloryczna = null)
    {
        $this->Cena = $Cena;
        $this->Waga = $Waga;
        $this->DataWaznosci = $DataWaznosci;
        $this->DataPrzybycia = $DataPrzybycia;
        $this->KodProduktu = $KodProduktu;
        $this->CzyBIO = $CzyBIO;
        $this->Ilosc = $Ilosc;
        $this->WartoscKaloryczna = $WartoscKaloryczna;
    }


    public function getId(): ?int
    {
        return $this->id;
    }






    public function getProdukt(): ?string
    {
        return $this->Produkt;
    }

    public function setProdukt(string $Produkt): self
    {
        $this->Produkt = $Produkt;

        return $this;
    }

    public function getCena(): ?int
    {
        return $this->Cena;
    }

    public function setCena(?int $Cena): self
    {
        $this->Cena = $Cena;

        return $this;
    }

    public function getWaga(): ?int
    {
        return $this->Waga;
    }

    public function setWaga(?int $Waga): self
    {
        $this->Waga = $Waga;

        return $this;
    }

    public function getDataWaznosci(): ?\DateTimeInterface
    {
        return $this->DataWaznosci;
    }

    public function setDataWaznosci(?\DateTimeInterface $DataWaznosci): self
    {
        $this->DataWaznosci = $DataWaznosci;

        return $this;
    }

    public function getDataPrzybycia(): ?\DateTimeInterface
    {
        return $this->DataPrzybycia;
    }

    public function setDataPrzybycia(?\DateTimeInterface $DataPrzybycia): self
    {
        $this->DataPrzybycia = $DataPrzybycia;

        return $this;
    }

    public function getKodProduktu(): ?int
    {
        return $this->KodProduktu;
    }

    public function setKodProduktu(?int $KodProduktu): self
    {
        $this->KodProduktu = $KodProduktu;

        return $this;
    }

    public function getCzyBIO(): ?bool
    {
        return $this->CzyBIO;
    }

    public function setCzyBIO(?bool $CzyBIO): self
    {
        $this->CzyBIO = $CzyBIO;

        return $this;
    }

    public function getIlosc(): ?int
    {
        return $this->Ilosc;
    }

    public function setIlosc(?int $Ilosc): self
    {
        $this->Ilosc = $Ilosc;

        return $this;
    }

    public function getWartoscKaloryczna(): ?int
    {
        return $this->WartoscKaloryczna;
    }

    public function setWartoscKaloryczna(?int $WartoscKaloryczna): self
    {
        $this->WartoscKaloryczna = $WartoscKaloryczna;

        return $this;
    }




}
