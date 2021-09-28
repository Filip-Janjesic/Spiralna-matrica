<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Spiralna Matrica </title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="main();">
    <div class="naslov">
        <h1 id="glavninaslov">
            Spiralna Matrica u PHP-u
        </h1>
        <p id="objašnjenje">
            Cilj ove vježbe je stvoriti aplikaciju koja će generirati spiralnu matricu. <br/>
              Spiralna matrica ima ulaz od dva broja. Brojevi određuju širinu i visinu matrice. <br/>
              Aplikacija će, klikom na "Generiraj matricu", stvoriti spiralnu matricu koja počinje u donjem desnom kutu. <br/>
              Matrica će ispuniti kvadrate brojevima od 1 do 'n' gdje je 'n' umnožak dva broja koja je dao korisnik. <br/>
              Matrica će biti ispunjena na način sličan spirali.
        </p>
    </div>
<div class="main">
<div class="input">
    <form method="get">
        <div>
            <p>
                Redovi:
            </p>
            <input type="text" size="20" name="redovi">
        </div>
        <div>
            <p>
                Stupci:
            </p>
            <input type="text" size="20" name="stupci">
        </div>
        <button type="submit" size="10">Generiraj matricu</button>                
    </form>
</div>
<div class="output">
    <div class="matrica">
        <?php
        require 'matrix.php';
        ?>
    </div>
</div>
</div>
</body>
</html>