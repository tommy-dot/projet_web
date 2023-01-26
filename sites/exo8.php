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
        <h1 class="titre">EXO8</h1>
    </header>
    <body>
    <?php
$x="PHP5";
$a[]=&$x;
echo "Initialement: \n"."<br>";
echo "x = $x (".gettype($x).")\n"."<br>";
echo "a = ";
print_r($a);
echo " (".gettype($a).")\n"."<br>";
$y=" 5 eme version de PHP"."<br>";
echo "Après l'affectation de y : \n"."<br>";
echo "x = $x (".gettype($x).")\n"."<br>";
echo "a = ";
print_r($a);
echo " (".gettype($a).")\n"."<br>";
echo "y = $y (".gettype($y).")\n"."<br>";
$z=$y*10;
echo "Après l'affectation de z : \n"."<br>";
echo "x = $x (".gettype($x).")\n"."<br>";
echo "a = ";
print_r($a);
echo " (".gettype($a).")\n"."<br>";
echo "y = $y (".gettype($y).")\n"."<br>";
echo "z = $z (".gettype($z).")\n"."<br>";
$x.=$y;
echo "Après l'affectation de x : \n"."<br>";
echo "x = $x (".gettype($x).")\n"."<br>";
echo "a = ";
print_r($a);
echo " (".gettype($a).")\n"."<br>";
echo "y = $y (".gettype($y).")\n"."<br>";
echo "z = $z (".gettype($z).")\n"."<br>";
$y*=$z;
echo "Après l'affectation de y : \n"."<br>";
echo "x = $x (".gettype($x).")\n"."<br>";
echo "a = ";
print_r($a);
echo " (".gettype($a).")\n"."<br>";
echo "y = $y (".gettype($y).")\n"."<br>";
echo "z = $z (".gettype($z).")\n"."<br>";
$a[0]="MySQL";
echo "Après l'affectation de a : \n"."<br>";
echo "x = $x (".gettype($x).")\n"."<br>";
echo "a = ";
print_r($a);
echo " (".gettype($a).")\n"."<br>";
echo "y = $y (".gettype($y).")\n"."<br>";
echo "z = $z (".gettype($z).")\n"."<br>";
?>
   <h2>code brute :  </h2>
    <p>
    ?php
$x="PHP5";<br>
$a[]=&$x;<br>
echo "Initialement: \n";<br>
echo "x = $x (".gettype($x).")\n";<br>
echo "a = ";<br>
print_r($a);<br>
echo " (".gettype($a).")\n";<br>
$y=" 5 eme version de PHP";<br>
echo "Après l'affectation de y : \n";<br>
echo "x = $x (".gettype($x).")\n";<br>
echo "a = ";<br>
print_r($a);<br>
echo " (".gettype($a).")\n";<br>
echo "y = $y (".gettype($y).")\n";<br>
$z=$y*10;<br>
echo "Après l'affectation de z : \n";<br>
echo "x = $x (".gettype($x).")\n";<br>
echo "a = ";<br>
print_r($a);<br>
echo " (".gettype($a).")\n";<br>
echo "y = $y (".gettype($y).")\n";<br>
echo "z = $z (".gettype($z).")\n";<br>
$x.=$y;<br>
echo "Après l'affectation de x : \n";<br>
echo "x = $x (".gettype($x).")\n";<br>
echo "a = ";<br>
print_r($a);<br>
echo " (".gettype($a).")\n";<br>
echo "y = $y (".gettype($y).")\n";<br>
echo "z = $z (".gettype($z).")\n";<br>
$y*=$z;<br>
echo "Après l'affectation de y : \n";<br>
echo "x = $x (".gettype($x).")\n";<br>
echo "a = ";<br>
print_r($a);<br>
echo " (".gettype($a).")\n";<br>
echo "y = $y (".gettype($y).")\n";<br>
echo "z = $z (".gettype($z).")\n";<br>
$a[0]="MySQL";<br>
echo "Après l'affectation de a : \n";<br>
echo "x = $x (".gettype($x).")\n";<br>
echo "a = ";<br>
print_r($a);<br>
echo " (".gettype($a).")\n";<br>
echo "y = $y (".gettype($y).")\n";<br>
echo "z = $z (".gettype($z).")\n";<br>
?>

    </p>
    <a href="../index.php" class="button">Retour</a>         
           </body>
</html>