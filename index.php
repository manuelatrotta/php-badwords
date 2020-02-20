<?php
$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
var_dump($text);
$change = $_GET['word'];
var_dump($_GET); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p> <?php echo $text; ?> </p>
    <p>lunghezza paragrafo: <?php echo strlen($text); ?></p>
    <p> <?php $filter_text = str_replace($change, '***', $text);
     echo $filter_text; ?> </p>
    <p>lunghezza paragrafo: <?php echo strlen($filter_text); ?></p>
  </body>
</html>
