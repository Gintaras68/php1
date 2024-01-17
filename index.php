<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Kintamieji ir sąlygos</h1>
  <h3>Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų.<br> 
    PHP funkcijas žinoma naudokite (pageidautina).
  </h3>

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

<!-- 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. 
     Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti). -->
<?php 
  $randNum1 = rand(0, 2);
  $randNum2 = rand(0, 2);
  $randNum3 = rand(0, 2);
  $randNum4 = rand(0, 2);
  $count0 = 0;
  $count1 = 0;
  $count2 = 0;

  if ($randNum1 == 0) {
    $count0 ++;
  } else if ($randNum1 == 1) {
    $count1 ++;
  } else {
    $count2 ++;
  }
 
  if ($randNum2 == 0) {
    $count0++;
  } else if ($randNum2 == 1) {
    $count1++;
  } else {
    $count2++;
  }

  if ($randNum3 == 0) {
    $count0++;
  } else if ($randNum3 == 1) {
    $count1++;
  } else {
    $count2++;
  }

  if ($randNum4 == 0) {
    $count0++;
  } else if ($randNum4 == 1) {
    $count1++;
  } else {
    $count2++;
  }

  echo "Sugeneruoti 4 skaičiai: ".$randNum1.", ".$randNum2.", ".$randNum3." ir ".$randNum4.".<br>";
  echo "Nulių  : ".$count0."<br>";
  echo "Vienetų: ".$count1."<br>";
  echo "Dvejetų: ".$count2."<p>";
?>

<!-- 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. 
        Pvz skaičius 3- rezultatas: <h3>3</h3> -->
<?php 
   $randNumber = rand(1, 6);
   echo "<h".$randNumber.">Atsitiktinė antraštė: ".$randNumber."</h".$randNumber.">";
?>

<!-- 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. 
        Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 - mėlyni.  -->
<?php 
  $randNum1 = rand(-10, 10);
  $randNum2 = rand(-10, 10);
  $randNum3 = rand(-10, 10);

  if ($randNum1 < 0) {
    $string1 = "<span style='color: green'>".$randNum1."</span>";
  } else if($randNum1 == 0) {
    $string1 = "<span style='color: red'>".$randNum1."</span>";
  } else {
    $string1 = "<span style='color: blue'>".$randNum1."</span>";
  }

  if ($randNum2 < 0) {
    $string2 = "<span style='color: green'>".$randNum2."</span>";
  } else if($randNum2 == 0) {
    $string2 = "<span style='color: red'>".$randNum2."</span>";
  } else {
    $string2 = "<span style='color: blue'>".$randNum2."</span>";
  }

  if ($randNum3 < 0) {
    $string3 = "<span style='color: green'>".$randNum3."</span>";
  } else if($randNum3 == 0) {
    $string3 = "<span style='color: red'>".$randNum3."</span>";
  } else {
    $string3 = "<span style='color: blue'>".$randNum3."</span>";
  }

  echo $string1 . " | " . $string2 . " | " . $string3;
?>

</body>
</html>