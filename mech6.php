<?php
// *  Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skirtingas formas- vieną GET ir kitą POST. 
// *  Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, o tik tikrindami pačius masyvus, nuspalvinkite foną žaliai, 
// *  kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST.
// todo reikės perdaryti kad tikrintų ne kreipimosi metodą, o pačius kintamuosius  GET ir POST (jų ilgį ar buvimą)

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = 'yellow';
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
  <title>6.  GET ir POST</title>
  <style>
    body {
      background-color: <?=$color?>;
    }

    h1 {text-align: center;}
    .forms {
      max-width: 300px;
      margin-inline: auto;
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>
<body>
  <h1>Dvi formos GET ir POST</h1>

  <div class="forms">
    <form action="" method="get">
      <button type="submit">Siunciam su GET</button>
    </form>
    <form action="" method="post">
      <button type="submit">Siunciam su POST</button>
    </form>

  </div>
</body>
</html>