<?php
// *  Pakartokite 6 uždavinį. 
// *  Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu.

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Location: ./mech7.php?post_field=".$_POST["post_field"]);
    $color = 'yellow';
    die;
  } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $color = 'green';
  }
?>
  
<!DOCTYPE html>
<html lang="en">
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
        <input type="text" name="get_field" id="">
        <button type="submit">Siunciam su GET</button>
      </form>
      <form action="" method="post">
        <input type="text" name="post_field" id="">
        <button type="submit">Siunciam su POST</button>
      </form>
    </div>
  </body>
</html>