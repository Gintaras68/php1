<?php
  // *  Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. 
  // *  Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. 
  // *  Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas.

  $color = "black";
  $text = "white";
  
  if (isset($_GET["background"]) && $_GET["background"]==1) {
    $color = "red";
    $text = "blue";
  }
?>

<!DOCTYPE html>
<html lang="lt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Black-Red</title>
  <style>
    .block {
      padding: 50px 15px;
      max-width: 400px;
      margin-inline: auto;
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>

<body style="background-color: <?=$color?>;">
<div class="block">
  <a href="./black.php" style="color: <?=$text?>; margin-right: 20px">Juodas fonas</a>
  <a href="./black.php?background=1" style="color: <?=$text?>">Raudonas fonas</a>
</div>
</body>
</html>