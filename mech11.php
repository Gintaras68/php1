<?php
  // *  Suprogramuokite žaidimą. 
  // *  Žaidimas prasideda dviem laukeliais, kuriuose žaidėjai įveda savo vardus ir mygtuku “pradėti”. 
  // *  Šone yra rodomas žaidėjų rezultatas. 
  // *  Paspaudus “pradėti” turi atsirasti pirmo žaidėjo vardas ir mygtukas “mesti kauliuką”. 
  // *  Jį nuspaudus skriptas automatiškai sugeneruoja skaičių nuo 1 iki 6 ir jį prideda prie žaidėjo rezultato, o pirmo žaidėjo vardas pakeičiamas antro žaidėjo vardu (parodo kieno eilė “mesti kauliuką”).
  // *  Žaidimas tęsiamas iki tol, kol kažkuris žaidėjas surenka 30 taškų. Tada parodomas pranešimas apie laimėjimą ir vėl leidžiama suvesti žaidėjų vardus ir pradėti žaidimą iš naujo.
  
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {      //*  jei jau žaidžiame ....
    $login = "";            //*  <----  prasidėjus žaidimui šios formos nebereikia
    $one = $_POST['one'];
    $two = $_POST['two'];
    $oneTotal = $_POST['oneTotal'];
    $twoTotal = $_POST['twoTotal'];
    $active = $_POST['active'];         //* prieš tai kauliuką metęs žaidėjas
    $score = $_POST['score'];           //* ir jam iškritęs skaitmuo

    $number = rand(1, 6);               //* sugeneruoju kauliuko metimą sekančiam žaidėjui

    if ($active == "") {                //* nustatau koks žaidėjas dabar mes kauliuką, o ankstesniam pridedu jo rezultatą
      $active = $one;
    } elseif ($active == $one) {
      $oneTotal += $number;
      $active = $two;
    } else {
      $twoTotal += $number;
      $active = $one;
    }
  } else {      //* --------------  veiksmai naujai patekus į puslapį (žaidimo pradžia)
    // *  naujo žaidimo atveju įeinama su GET - reikai suvesti žaidėjus
    $login = '<h1>Žaidėjų registracija</h1>
              <form action="" method="post">
                <input type="text" name="one" placeholder="Įveskite savo vardą" required>
                <input type="text" name="two" placeholder="Įveskite savo vardą" required>
                <input type="hidden" name="active" value="">
                <input type="hidden" name="score" value="">
                <input type="hidden" name="oneTotal" value="0">
                <input type="hidden" name="twoTotal" value="0">
                <button type="submit">Pradėti</button>
              </form>';
    $oneTotal = 0;
    $twoTotal = 0;
  }
?>

<!DOCTYPE html>
<html lang="lt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style11.css">
  <title>11. - Žaidimas</title>
</head>
<body>

  <div class="container">
    <?php echo $login ?>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>      
      <h1>Žaidimas vyksta</h1>
      <div class="gamefield">
        <div class="users">
          <!-- pateikaime žaidėjų rezultatus -->
          <div class="item">
            <p class="name"><?= $one ?></p>
            <p class="score"><?= $oneTotal ?></p>
          </div>
          <div class="item">
            <p class="name"><?= $two ?></p>
            <p class="score"><?= $twoTotal ?></p>
          </div>
        </div>

        <div class="game">
          <!-- Žaidėjo vardas ir mygtukas generacijai (FORMA !) -->
          <?php if ($oneTotal < 30 && $twoTotal < 30) { ?> 
            <h2><?= $active ?></h2>
            <form class="walking" action="" method="post">
              <input type="hidden" name="one" value="<?= $one ?>">
              <input type="hidden" name="two" value="<?= $two ?>">
              <input type="hidden" name="oneTotal" value="<?= $oneTotal ?>">
              <input type="hidden" name="twoTotal" value="<?= $twoTotal ?>">
              <input type="hidden" name="active" value="<?= $active ?>">
              <input type="hidden" name="score" value="<?= $number ?>">
              <button type="submit">Mesti kauliuką</button>
            </form>
          <?php } ?> 
        </div>
      </div>
    <?php } ?>

    <?php if ($oneTotal >= 30 || $twoTotal >= 30) { ?>  
      <?php if ($oneTotal > $twoTotal) { ?> 
        <h2>Turime laimėtoją - <?= $one ?> !</h2>
      <?php } else { ?> 
        <h2>Turime laimėtoją - <?= $two ?> !</h2>
      <?php } ?>
        <a href="./mech11.php">Pradėti iš naujo</a>
    <?php } ?>

  </div>

</body>
</html>