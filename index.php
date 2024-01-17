<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=Labas, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Labas</h1>
  <!-- <?php for ($i=1; $i < 7; $i++) {  ?>
      <h<?= $i ?>> <?= $i ?> </h<?= $i ?>>
  <?php } ?> -->

  <!-- 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". -->
  <?php
    $name = "Gintaras";
    $surname = "Misevičius";
    $date = 1968;
    $now = 2023;

    echo '<p> Aš esu ' . $name . ' ' . $surname . '. Man yra ' . ($now - $date) . ' metų.</p>';
  ?>

<!-- 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. -->
<?php
  $a = rand(0, 4);
  $b = rand(0, 4);
  echo "<p>Pirmas sk.: " . $a . " , o antras: " . $b . " . Dalyba ";
  if ($a == 0 || $b == 0) {
    echo " is nulio negalima" . "<p>";
  } else if ($a >= $b) {
    echo $a . " / " . $b . " = " . $a / $b . "</p>";
  } else {
    echo $b . " / " . $a . " = " . $b / $a . "</p>";
  }
?>

<!-- 3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę. -->
<?php
  $rand1 = rand(0, 25);
  $rand2 = rand(0, 25);
  $rand3 = rand(0, 25);

  echo "<p>Skaičiai: " . $rand1 . " ,  " . $rand2 . "  ir " . $rand3 . " . Vidurinė reikšmė yra ";
  if (($rand1 <= $rand2 && $rand2 <= $rand3) || ($rand1 >= $rand2 && $rand2 >= $rand3)) {
    echo  $rand2;
  } else if (($rand2 <= $rand1 && $rand1 <= $rand3) || ($rand2 >= $rand1 && $rand1 >= $rand3)) {
    echo $rand1;
  } else {
    echo $rand3;
  }
  echo "</p>";
?>

<!-- 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.  -->
<?php
    $a = rand(1, 10);
    $b = rand(1, 10);
    $c = rand(1, 10);

    echo "<p>Trikampio kraštinės: " . $a . " ,  " . $b . "  ir " . $c . "   ";
    if ($a + $b < $c || $a + $c < $b || $b + $c < $a) {
      echo " ir trikampio suformuoti negalima.";
    } else {
      echo " ir iš jų galima suformuoti trikampį.";
    }
    echo "</p>";
?>

</body>
</html>