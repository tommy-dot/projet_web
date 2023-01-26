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
        <h1 class="titre">EXO5</h1>
    </header>
    <body>
    <h2>code php executer par le serveur</h2>
    <h3> 2 commandes echo :</h3>
        <?php
    $nom = "Dupont";
    $prenom = "Louis";
    echo "Nom : ";
    echo $nom;
    echo "<br>";
    echo "Prénom : ";
    echo $prenom;
    ?>

    <h3> 1 commande echo avec 1 seule chaîne de caractère :</h3>
        <?php
    $nom = "Dupont";
    $prenom = "Louis";
    echo "Nom : $nom <br> Prénom : $prenom";
    ?>

    <h3>1 commande echo avec le point de concaténation : </h3>
        <?php
    $nom = "Dupont";
    $prenom = "Louis";
    echo "Nom : " . $nom . "<br> Prénom : " . $prenom;
    ?>
    <h2>code brute :  </h2>
    <br>
    <h3> 2 commandes echo :</h3>
    <br>
    <p> 
        ?php
        <br>
    $nom = "Dupont";
    <br>
    $prenom = "Louis";
    <br>
    echo "Nom : ";
    <br>
    echo $nom;
    <br>
    echo "Prénom : ";
    <br>
    echo $prenom;
    ?>
    </p>
    <br>
    <h3> 1 commande echo avec 1 seule chaîne de caractère :</h3>
    <p> 
        ?php
    $nom = "Dupont";
    <br>
    $prenom = "Louis";
    <br>
    echo "Nom : $nom Prénom : $prenom";
    ?>
    </p>
    <h3>1 commande echo avec le point de concaténation : </h3>
    <br>
    <p> 
        ?php
    $nom = "Dupont";
    <br>
    $prenom = "Louis";
    <br>
    echo "Nom : " . $nom . " Prénom : " . $prenom;
    ?>
    </p>
    <a href="../index.php" class="button">Retour</a>         
           </body>
</html>