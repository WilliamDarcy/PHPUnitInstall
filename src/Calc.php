<?php
declare(strict_types=1);

final class Calc
{
    private $Nombre;

    public function __construct(int $nombre)
    {
        $this->Nombre = $nombre;
    }
    /**
     * Retourne un nombre au carré
     *
     * @return integer
     */
    public function AuCarre() : int
    {
        return $this->Nombre * $this->Nombre;
    }

   
}