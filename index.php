
<?php
$testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
//var_dump = $testo;
$change_word = $GET["cambio"];

 ?>






<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php badwords</title>
  </head>
  <body>
    <p><?php echo $testo; ?></p>
    <p>lunghezza paragrafo: <?php echo strlen($testo);?> caratteri</p>
    <p><?php $testo_filtrato =  str_replace($change_word, '***', $testo);
     echo $testo_filtrato;
    ?></p>
    <p>lunghezza paragrafo : <?php echo strlen($testo_filtrato);?>caratteri</p>

  </body>
</html>
