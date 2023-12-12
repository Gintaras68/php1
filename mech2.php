<?php
  // *  Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, 
  // *  o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.
 
  $color = "#ffff00";
  if (isset($_GET['spalva'])) {
    $color = "#" . $_GET['spalva'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spalva adreso eiluteje</title>
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
 
<?php  echo "Kintamojo \$color reiksme: " . $color . "."; ?>

<body style="background-color: <?=$color?>;">

  <div class="block">
    <a href="./mech2.php" >Pradinis fonas</a>
  </div>

</body>
</html>