<?php
 $badword = $_GET["censura"];
 $title = "Verso Divina Commedia";
 $verso = ' "…VIDI UNO CON LA TESTA COSÌ SPORCA DI MERDA
 CHE NON CAPIVO SE FOSSE UN LAICO O UN ECCLESIASTICO…" ';
 $lunghezzaStringa = strlen($verso);
 $autore = "[cit.] Dante, canto XVIII";
 $versoCens = str_replace($badword, "*****", $verso);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php badwords</title>
  </head>
  <body>
    <h1><?php echo $title; ?></h1>
    <p><strong> <?php echo $versoCens; ?></strong></p>
    <p>(Numero dei caratteri = <?php echo $lunghezzaStringa; ?>)</p>
    <h3><?php echo $autore; ?></h3>
  </body>
</html>
