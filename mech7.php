<?php
// *  Pakartokite 6 uždavinį. 
// *  Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu.

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Location: ./mech7.php");
    $color = 'yellow';
    die;
  } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $color = 'green';
  }
?>
  
<!DOCTYPE html>
<html lang="lt">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7. peradresacija su GET</title>
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
  <body style="background-color: <?=$color?>;">
    <h1>Dvi formos GET ir POST</h1>
  
    <div class="forms">
      <form action="" method="get">
        <button type="submit">Siunčiam su GET</button>
      </form>
      <form action="" method="post">
        <button type="submit">Siunčiam su POST</button>
      </form>
    </div>
  </body>
</html>