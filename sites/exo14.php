<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>projet</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <meta name="Author" content="Galet">
	<meta name="description" content="rendu_galet"/>	
  </head>
    <header>
        <h1 class="titre">EXO14</h1>
    </header>
    <body>
    <form method="post" action="">
    <label for="adresseIP">Entrez une adresse IP :</label>
    <input type="text" id="adresseIP" name="adresseIP">
    <input type="submit" value="Envoyer">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adresseIP = $_POST["adresseIP"];

    function determinerClasseIP($adresseIP) {
        $adresseIP = explode(".", $adresseIP);
        $premierOctet = $adresseIP[0];
        if ($premierOctet >= 0 && $premierOctet <= 127) {
            $classe = "A";
            $identificationReseau = $adresseIP[0] . "." . $adresseIP[1] . "." . $adresseIP[2] . "." . 0;
        } elseif ($premierOctet >= 128 && $premierOctet <= 191) {
            $classe = "B";
            $identificationReseau = $adresseIP[0] . "." . $adresseIP[1] . "." . 0 . "." . 0;
        } elseif ($premierOctet >= 192 && $premierOctet <= 223) {
            $classe = "C";
            $identificationReseau = $adresseIP[0] . "." . 0 . "." . 0 . "." . 0;
        } else {
            echo "Adresse IP non valide";
            return;
        }
        echo "Classe : " . $classe . "<br>";
        echo "Identification adresse réseau : " . $identificationReseau;
    }

    determinerClasseIP($adresseIP);
}
?>
    <h2>code brute :  </h2>
    ?php<br>
if ($_SERVER["REQUEST_METHOD"] == "POST") {<br>
    $adresseIP = $_POST["adresseIP"];<br>

    function determinerClasseIP($adresseIP) {<br>
        $adresseIP = explode(".", $adresseIP);<br>
        $premierOctet = $adresseIP[0];<br>
        if ($premierOctet >= 0 && $premierOctet <= 127) {<br>
            $classe = "A";<br>
            $identificationReseau = $adresseIP[0] . "." . $adresseIP[1] . "." . $adresseIP[2] . "." . 0;<br>
        } elseif ($premierOctet >= 128 && $premierOctet <= 191) {<br>
            $classe = "B";<br>
            $identificationReseau = $adresseIP[0] . "." . $adresseIP[1] . "." . 0 . "." . 0;<br>
        } elseif ($premierOctet >= 192 && $premierOctet <= 223) {<br>
            $classe = "C";<br>
            $identificationReseau = $adresseIP[0] . "." . 0 . "." . 0 . "." . 0;<br>
        } else {<br>
            echo "Adresse IP non valide";<br>
            return;<br>
        }<br>
        echo "Classe : " . $classe . "<br>";<br>
        echo "Identification adresse réseau : " . $identificationReseau;<br>
    }<br>

    determinerClasseIP($adresseIP);<br>
}<br>
?><br>
    </p>
    <a href="../index.php">retours</a>
         </body>
</html>