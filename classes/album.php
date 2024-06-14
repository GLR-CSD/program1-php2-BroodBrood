<?php
// Set strict types
declare(strict_types=1);

class album {

    private ?int $album;

    private string $Naam;

    private string $Artiesten;

    private string $Release_datum;

    private ?string $Afbeelding;

    private string $Prijs;

    private ?string $Url;

    /**
     * @param int|null $album
     * @param string $Naam
     * @param string $Artiesten
     * @param string $Release_datum
     * @param string|null $Afbeelding
     * @param string $Prijs
     * @param string|null $Url
     */
    public function __construct(?int $album, string $Naam, string $Artiesten, string $Release_datum, ?string $Afbeelding, string $Prijs, ?string $Url)
    {
        $this->album = $album;
        $this->Naam = $Naam;
        $this->Artiesten = $Artiesten;
        $this->Release_datum = $Release_datum;
        $this->Afbeelding = $Afbeelding;
        $this->Prijs = $Prijs;
        $this->Url = $Url;
    }

    /**
     * @return int|null
     */
    public function getAlbum(): ?int
    {
        return $this->album;
    }

    /**
     * @param int|null $album
     */
    public function setAlbum(?int $album): void
    {
        $this->album = $album;
    }

    /**
     * @return string
     */
    public function getNaam(): string
    {
        return $this->Naam;
    }

    /**
     * @param string $Naam
     */
    public function setNaam(string $Naam): void
    {
        $this->Naam = $Naam;
    }

    /**
     * @return string
     */
    public function getArtiesten(): string
    {
        return $this->Artiesten;
    }

    /**
     * @param string $Artiesten
     */
    public function setArtiesten(string $Artiesten): void
    {
        $this->Artiesten = $Artiesten;
    }

    /**
     * @return string
     */
    public function getReleaseDatum(): string
    {
        return $this->Release_datum;
    }

    /**
     * @param string $Release_datum
     */
    public function setReleaseDatum(string $Release_datum): void
    {
        $this->Release_datum = $Release_datum;
    }

    /**
     * @return string|null
     */
    public function getAfbeelding(): ?string
    {
        return $this->Afbeelding;
    }

    /**
     * @param string|null $Afbeelding
     */
    public function setAfbeelding(?string $Afbeelding): void
    {
        $this->Afbeelding = $Afbeelding;
    }

    /**
     * @return string
     */
    public function getPrijs(): string
    {
        return $this->Prijs;
    }

    /**
     * @param string $Prijs
     */
    public function setPrijs(string $Prijs): void
    {
        $this->Prijs = $Prijs;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->Url;
    }

    /**
     * @param string|null $Url
     */
    public function setUrl(?string $Url): void
    {
        $this->Url = $Url;
    }


    /**
     * Haalt alle personen op uit de database.
     *
     * @param PDO $db De PDO-databaseverbinding.
     * @return album[] Een array van album-objecten.
     */
    public static function getAll(PDO $db): array
    {
        // Voorbereiden van de query
        $stmt = $db->query("SELECT * FROM album");

        // Array om personen op te slaan
        $albums = [];

        // Itereren over de resultaten en personen toevoegen aan de array
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $album = new album(
                $row['album'],
                $row['Naam'],
                $row['Artiesten'],
                $row['Release_datum'],
                $row['Afbeelding'],
                $row['Prijs'],
                $row['Url']
            );
            $albums[] = $album;
        }

        // Retourneer array met personen
        return $albums;
    }
}
