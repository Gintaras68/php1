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
  echo "<p>";
?>

<!-- 8. Įmonė parduoda žvakes po 1 EUR. 
        Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. 
        Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. 
        Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000. -->
<?php
  $discount = 0;
  $unitPrice = 1;
  $candlesAmount = rand(5, 3000);
  echo "Buvo užsakyta ".$candlesAmount." žvakių.";
  
  if ($candlesAmount * $unitPrice > 2000) {
    $discount = 4;
    echo " Taikoma ".$discount."% nuolaida. ";
  } else if ($candlesAmount * $unitPrice > 1000) {
    $discount = 3;
    echo " Taikoma ".$discount."% nuolaida. ";
  } else {
    echo " Smulkius užsakymas be nuolaidos. ";
  }
  $unitPrice -= ($discount / 100);

  echo "Žvakės parduotos po ".$unitPrice." Eur/vnt., kas sudaro ".$unitPrice * $candlesAmount." Eur.";
  echo "<p>";
?>

<!-- 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. 
        Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. 
        Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus. -->
<?php 
  $randNum1 = rand(0, 100);
  $randNum2 = rand(0, 100);
  $randNum3 = rand(0, 100);

  echo "Sugeneruoti skaičiai: ".$randNum1." | ".$randNum2." | ".$randNum3." .";
  $average = round(($randNum1 + $randNum2 + $randNum3) / 3);
  echo " Jų aritmetinis vidurkis - ".$average;

  $sum = 0;
  $counter = 0;
  if ($randNum1 >= 10 && $randNum1 <= 90) {
    $sum += $randNum1;
    $counter ++;
  } 
  if ($randNum2 >= 10 && $randNum2 <= 90) {
    $sum += $randNum2;
    $counter ++;
  }
  if ($randNum3 >= 10 && $randNum3 <= 90) {
    $sum += $randNum3;
    $counter ++;
  }
  
  if ($counter) {
    $average = round($sum / $counter);  
    echo " Atmetus reikšmes, kurios <10 arba >90, gaunams vidurkis bus ".$average;
  } else {
    echo " Visos reikšmės ribinės.";
  }
  echo "<p>";
?>

<!-- 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. 
        Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). 
        Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. 
        Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių. -->
  <?php 
    $hour = rand(0, 23);
    $minutes = rand(0, 59);
    $seconds = rand(0, 59);
    $randNum = rand(0, 300);
    $addMinutes;
    $addSeconds;
    
    ($hour < 10) ? $hourString = '0' . $hour : $hourString = $hour;
    ($minutes < 10) ? $minutesString = '0' . $minutes : $minutesString = $minutes;
    ($seconds < 10) ? $secondsString = '0' . $seconds : $secondsString = $seconds;

    echo "Sugeneruotas laikas . : " . $hourString . ":" . $minutesString . ":" . $secondsString . "<br>";
    echo "Papildomos sekundės: " . $randNum . " , o tai sudaro " ;

    if ($randNum > 59) {
      $addMinutes = floor($randNum / 60);
      echo $addMinutes . " min. ir ";
      $addSeconds = $randNum - $addMinutes * 60;
    } else {
      $addMinutes = 0;
      $addSeconds = $randNum;
    }
    echo $addSeconds . " sekundes.<br>";

    $minutes += $addMinutes; //  minutės pridėjus
    $seconds += $addSeconds; //  sekundės pridėjus

    if ($seconds >= 60) {
      $minutes ++;    //  pridedam minutę
      $seconds -= 59; //  likutis - sekundės
    }

    if ($minutes >= 60) {
      $hour ++;    //  pridedam minutę
      $minutes -= 59; //  likutis - sekundės
    }

    if ($hour > 23) {   //  jei 24-a valanda - nulis
      $hour = 0;
    }

    ($hour < 10) ? $hourString = '0' . $hour : $hourString = $hour;
    ($minutes < 10) ? $minutesString = '0' . $minutes : $minutesString = $minutes;
    ($seconds < 10) ? $secondsString = '0' . $seconds : $secondsString = $seconds;

    echo "Laikas po korekcijos  : " . $hourString . ":" . $minutesString . ":" . $secondsString . "<p>";

  ?>

<!-- 11. Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. 
        Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. 
        Naudoti ciklų ir masyvų NEGALIMA. -->
  <?php 
    $randNum1 = rand(1000, 9999);
    $randNum2 = rand(1000, 9999);
    $randNum3 = rand(1000, 9999);
    $randNum4 = rand(1000, 9999);
    $randNum5 = rand(1000, 9999);
    $randNum6 = rand(1000, 9999);

    echo "Buvo sugeneruoti skaičiai: ".$randNum1." | ".$randNum2." | ".$randNum3." | ".$randNum4." | ".$randNum5." | ".$randNum6."<br>";

    $num = 0;
    if ($randNum1 > $num) {$num =  $randNum1;}
    if ($randNum2 > $num) {$num =  $randNum2;}
    if ($randNum3 > $num) {$num =  $randNum3;}
    if ($randNum4 > $num) {$num =  $randNum4;}
    if ($randNum5 > $num) {$num =  $randNum5;}
    if ($randNum6 > $num) {$num =  $randNum6;}
    $num1 = $num;
    
    $num = 0;
    if ($randNum1 < $num1 && $randNum1 > $num) {$num =  $randNum1;}
    if ($randNum2 < $num1 && $randNum2 > $num) {$num =  $randNum2;}
    if ($randNum3 < $num1 && $randNum3 > $num) {$num =  $randNum3;}
    if ($randNum4 < $num1 && $randNum4 > $num) {$num =  $randNum4;}
    if ($randNum5 < $num1 && $randNum5 > $num) {$num =  $randNum5;}
    if ($randNum6 < $num1 && $randNum6 > $num) {$num =  $randNum6;}
    $num2 = $num;

    $num = 0;
    if ($randNum1 < $num2 && $randNum1 > $num) {$num =  $randNum1;}
    if ($randNum2 < $num2 && $randNum2 > $num) {$num =  $randNum2;}
    if ($randNum3 < $num2 && $randNum3 > $num) {$num =  $randNum3;}
    if ($randNum4 < $num2 && $randNum4 > $num) {$num =  $randNum4;}
    if ($randNum5 < $num2 && $randNum5 > $num) {$num =  $randNum5;}
    if ($randNum6 < $num2 && $randNum6 > $num) {$num =  $randNum6;}
    $num3 = $num;

    $num = 0;
    if ($randNum1 < $num3 && $randNum1 > $num) {$num =  $randNum1;}
    if ($randNum2 < $num3 && $randNum2 > $num) {$num =  $randNum2;}
    if ($randNum3 < $num3 && $randNum3 > $num) {$num =  $randNum3;}
    if ($randNum4 < $num3 && $randNum4 > $num) {$num =  $randNum4;}
    if ($randNum5 < $num3 && $randNum5 > $num) {$num =  $randNum5;}
    if ($randNum6 < $num3 && $randNum6 > $num) {$num =  $randNum6;}
    $num4 = $num;

    $num = 0;
    if ($randNum1 < $num4 && $randNum1 > $num) {$num =  $randNum1;}
    if ($randNum2 < $num4 && $randNum2 > $num) {$num =  $randNum2;}
    if ($randNum3 < $num4 && $randNum3 > $num) {$num =  $randNum3;}
    if ($randNum4 < $num4 && $randNum4 > $num) {$num =  $randNum4;}
    if ($randNum5 < $num4 && $randNum5 > $num) {$num =  $randNum5;}
    if ($randNum6 < $num4 && $randNum6 > $num) {$num =  $randNum6;}
    $num5 = $num;

    $num = 0;
    if ($randNum1 < $num5 && $randNum1 > $num) {$num =  $randNum1;}
    if ($randNum2 < $num5 && $randNum2 > $num) {$num =  $randNum2;}
    if ($randNum3 < $num5 && $randNum3 > $num) {$num =  $randNum3;}
    if ($randNum4 < $num5 && $randNum4 > $num) {$num =  $randNum4;}
    if ($randNum5 < $num5 && $randNum5 > $num) {$num =  $randNum5;}
    if ($randNum6 < $num5 && $randNum6 > $num) {$num =  $randNum6;}
    $num6 = $num;
    $numberString = $num1." ".$num2." ".$num3." ".$num4." ".$num5." ".$num6;
    echo "Pradedam nuo didžiausio : ".$numberString;
  ?>

</body>
</html>