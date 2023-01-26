<?php
function somme1($tableau) {
    $somme = 0;
    foreach ($tableau as $nombre) {
        $somme += $nombre;
    }
    return $somme;
}
?>
