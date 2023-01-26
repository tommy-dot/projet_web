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
        <h1 class="titre">EXO7</h1>
    </header>
    <body>
    <h1>Calcul sur les variables</h1>
      <?php
      $TVA = 0.206;
      $prix = 150;
      $nombre = 10;
      $prixHT = $prix * $nombre;
      $prixTTC = $prixHT + ($prixHT * $TVA);

      echo "Type de la variable TVA : " . gettype($TVA) . "<br>";
      echo "Type de la variable prix : " . gettype($prix) . "<br>";
      echo "Type de la variable nombre : " . gettype($nombre) . "<br>";
      echo "Prix HT pour " . $nombre . " articles : " . $prixHT . "<br>";
      echo "Prix TTC pour " . $nombre . " articles : " . $prixTTC . "<br>";
      ?>


    <h2>code brute :  </h2>
    <p>
    ?php<br>
      $TVA = 0.206;<br>
      $prix = 150;<br>
      $nombre = 10;<br>
      $prixHT = $prix * $nombre;<br>
      $prixTTC = $prixHT + ($prixHT * $TVA);<br>

      echo "Type de la variable TVA : " . gettype($TVA) . ;<br>
      echo "Type de la variable prix : " . gettype($prix) . ;<br>
      echo "Type de la variable nombre : " . gettype($nombre) . ;<br>
      echo "Prix HT pour " . $nombre . " articles : " . $prixHT . ;<br>
      echo "Prix TTC pour " . $nombre . " articles : " . $prixTTC . ;<br>
      ?>

    </p>
    <a href="../index.php">retours</a>
         </body>
</html>