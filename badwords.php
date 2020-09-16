<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->
<?php
  $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation dolor ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dolor deserunt mollit anim id est laborum.";
  $badword = $_GET['badword'];
  $length = strlen($text);
  $new_text = str_replace($badword, '***', $text);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <h2>La badword <?php echo $badword ?> sarà sostituita da ***</h2>
    <p><?php echo $new_text ?></p>
    <p>La lunghezza del paragrafo è: <?php echo $length ?> parole</p>
  </body>
</html>
