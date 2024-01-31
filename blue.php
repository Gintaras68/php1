<?php
  // ** 4. Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). 
  // **    Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!) 
  // **    naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai).

  if (isset($_GET['self']) && $_GET['self'] == 1) {
    header("Location: ./red.php");
    die;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5.  Blue</title>
  <style>
    body {
      background-color: blue;
    }
    h1, a {color: yellow}
  </style>
</head>
<body>
  <h1>Blue</h1>
    <a href="./blue.php?self=1">Nuoroda į savę</a>
</body>
</html>