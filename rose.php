<?php
  // *  8. Sukurkite du puslapius pink.php ir rose.php. Nuspalvinkite juos atitinkamo spalvom. 
  // * << Į pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”. 
  // *    Formą nukreipkite, kad ji atsidarinėtų rose.php puslapyje. 
  // !  <<  Padarykite taip, kad surinkus naršyklėje tiesiogiai adresą į rose.php puslapį, naršyklė būtų peradresuojama į pink.php puslapį. 
  
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header("Location: ./pink.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>8.  Rose</title>
  <style>
    h1 {text-align: center;}
    .forms {
      max-width: 400px;
      margin-inline: auto;
      display: flex;
      justify-content: space-between;
    }
    form {
      text-align: center;
    }
    input {margin-bottom: 10px;}
  </style>
</head>
<body style="background-color: #ff9966;">
  
</body>
</html>