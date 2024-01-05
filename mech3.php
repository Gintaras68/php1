<?php
  // *  Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį 
  // *  ir ją išsiųsti mygtuku GET metodu formoje.
  
  $color = "#ffff00";
  if (isset($_GET['spalva'])) {
    $color = "#" . $_GET['spalva'];
  }
?>

<!DOCTYPE html>
<html lang="lt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spalva per forma</title>
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
    <a href="./mech3.php" >Pradinis fonas</a>

    <form action="" method="get">
      <input type="text" name="spalva" id="">
    <button type="submit">Siųsti</button>
    </form>
  </div>

</body>
</html>