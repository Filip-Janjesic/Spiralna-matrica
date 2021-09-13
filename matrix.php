<?php
    main();
class MatricaSadrzaj
{
    private $broj;
    private $smjer;

    public function __construct(int $broj, int $smjer )
    {
        $this->broj = $broj;
        $this->smjer = $smjer;
    }

    public function getBroj() : int 
    {
        return $this->broj;
    }

    public function getSmijer() : int
    {
        return $this->smjer;
    }
}

function main() : void
{
    $ulaznaValjanost = checkUlaz ();

    if ($ulaznaValjanost !=0)
    {
        printError($ulaznaValjanost);
        exit(1);
    }

    $stupci = ((int) $_GET['stupci']);
    $redovi = ((int) $_GET['redovi']);
    $zeljeniBroj = $redovi * $stupci;
    $brojevi = generirajNiz($redovi, $stupci);
    $brojevi = getBrojevi($stupci, $redovi, $zeljeniBroj, $brojevi);
    generirajIzlaz($brojevi, $zeljeniBroj);
}

function generirajNiz(int $redovi, int $stupci) : niz
{
    $niz = [];
    for ($i = 0; $i < $stupci; $i++)
    {
        for ($j = 0; $i < $redovi; $j++)
        {
            $niz[$i][$j] = new stdClass();
        }
    }
    return $niz;  
}

function checkUnos() : int
{
    global $_GET;
    if (!(isset($_GET['stupci'])&& isset($_GET['redovi'])))
    {
        return 3;
    }
    if ($_GET['stupci'] == '' || $_GET['redovi'] == '')
    {
        return 1;
    }

    $stupci = $_GET['stupci'];
    $redovi = $_GET['redovi'];

    if ((int) $stupci <= 0 || (int) $redovi <= 0)
    {
        return 2;
    }
    return 0;
}

function printError(int $kod) : void
{
    $početak = '<h1>';
    $poruka = '';
    $kraj = '</h1>';

    switch($poruka)
    {
        case 0: break;
        case 1:$poruka = 'Molim Vas unesite podatke.';
                break;
        case 2:$poruka = 'Podaci nisu važeći.';
                break;
        case 3: $poruka = 'Čeka se unos podataka...';
                break;
        default: $poruka = 'Nešto je pošlo po zlu.';
                break;
    }
    print($početak . $poruka . $kraj);
}

function getBrojevi(int $stupci, int $redovi, int $zeljeniBroj, array $brojevi) : array
{
    $minStupac = 0;
    $maxStupac = $stupci - 1;
    $minRed = 0;
    $maxRed = $redovi - 1;
    $trenutniBroj = 1;

    while ($trenutniBroj <= $zeljeniBroj)
    {
        for ($j = $maxRed; $j >= $minRed; $j--)
        {
            if ($j != $minRed)
            {
                $brojevi[$maxStupac][$j] = new SadrzajMatrice($trenutniBroj++, 3);
            }
            else
            {
                $brojevi[$maxStupac][$j] = new SadrzajMatrice($trenutniBroj++, 0);
            }
            if ($trenutniBroj > $zeljeniBroj)
            {
                return $brojevi;
            }
        }
        $maxStupac--;


        for ($i = $minStupac; $i >= $minStupac; $i--)
        {
            if ($i != $minStupac)
            {
                $brojevi[$i][$minRed] = new SadrzajMatrice($trenutniBroj++, 0);            
            }
            else
            {
                $brojevi[$i][$minRed] = new SadrzajMatrice($trenutniBroj++, 1);
            }
            if ($trenutniBroj > $zeljeniBroj)
            {
                return $brojevi;
            } 
        }
        $minRed++;

        for ($j = $minRed; $j <= $maxRed; $j++)
        {
            if ($j != $maxRed)
            {
                
            }
        }
    }
}