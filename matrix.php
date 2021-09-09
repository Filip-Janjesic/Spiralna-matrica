<?php
    main();
class MatricaSadrzaj
{
    private $broj;
    private $smjer;

    publci function __construct(int $broj, int $smjer )
    {
        $this->broj = $number;
        $this->smjer = $smjer;
    }

    public function dobijBroj() : int 
    {
        return $this->broj;
    }

    public function dobijSmijer() : int
    {
        return $this->smjer;
    }
}

function main() : void
{
    $ulaznaValjanost = checkInput ();

    if ($ulaznaValjanost !=0)
    {
        printError($ulaznaValjanost);
        exit(1);
    }

    $stupci = ((int) $_GET['stupci']);
    $redovi = ((int) $_GET['redovi']);
    $zeljeniBroj = $redovi * $stupci;
    $brojevi
    $brojevi
}