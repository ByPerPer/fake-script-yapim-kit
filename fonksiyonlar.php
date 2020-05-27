<?php

function veriyaz($yazilacak,$veri,$yonlendir){
$file = fopen("$yazilacak", 'a');
fwrite($file, $veri.  "\n\n</br>");
fclose($file);
header("Refresh:0; url=$yonlendir");
}
/*
Kullanım;

veriyaz("yazilacak_dosya.php","girilecek_degerler","yönlendirelecek sayfa");
Coded ByPerPer
*/

?>