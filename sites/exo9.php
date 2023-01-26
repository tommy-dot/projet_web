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
        <h1 class="titre">EXO9</h1>
    </header>
    <body>
    <?php
    $prix_table = 150;
    $prix_armoire = 350;
    $nombre = 10;
    $prixHT = $prix_armoire * $nombre;
    echo "Prix HT total pour " . $nombre . " armoires : " . $prixHT . "<br>";

    if ($prix_table > $prix_armoire) {
        echo "Le prix de la table est plus élevé que celui de l'armoire.";
    } elseif ($prix_table < $prix_armoire) {
        echo "Le prix de l'armoire est plus élevé que celui de la table.";
    } else {
        echo "Le prix de la table et celui de l'armoire sont égaux.";
    }
    ?>
   <h2>code brute :  </h2>
    <p>
    ?php<br>
    $prix_table = 150;<br>
    $prix_armoire = 350;<br>
    $nombre = 10;<br>
    $prixHT = $prix_armoire * $nombre;<br>
    echo "Prix HT total pour " . $nombre . " armoires : " . $prixHT . "";<br>

    if ($prix_table > $prix_armoire) {<br>
        echo "Le prix de la table est plus élevé que celui de l'armoire.";<br>
    } elseif ($prix_table < $prix_armoire) {<br>
        echo "Le prix de l'armoire est plus élevé que celui de la table.";<br>
    } else {<br>
        echo "Le prix de la table et celui de l'armoire sont égaux.";<br>
    }<br>
    ?>
    </p>
    <a href="../index.php">retours</a>
         </body>
</html>