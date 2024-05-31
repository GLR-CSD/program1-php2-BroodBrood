<?php

class album
{
/** @var int/null het ID van het album */
    private ?int $id;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /** @var string de naam van de album */
    private string $naam;

    /**
     * @return string
     */
    public function getNaam(): string
    {
        return $this->naam;
    }

    /**
     * @param string $naam
     */
    public function setNaam(string $naam): void
    {
        $this->naam = $naam;
    }

    /**
     * @return string
     */
    public function getArtiesten(): string
    {
        return $this->artiesten;
    }

    /**
     * @param string $artiesten
     */
    public function setArtiesten(string $artiesten): void
    {
        $this->artiesten = $artiesten;
    }

    /** @var string|null  */
    private string $artiesten;

}