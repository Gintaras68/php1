
<?php
//*  9. Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… 
//*     Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, 
//*     rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek). 

  $char = ["A","B","C","D","E","F","G","H","I","K"];
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $html = '<p>Buvo pažymėti '.count($_POST)-1 .' čekboksai.</p>';
    $bgcolor = "white";
    $color = 'black';
    $count = 0;
  } else {
    $count = rand(3, 10);
    echo "Sugeneruotas skaicius: ".$count;
    $bgcolor = "black";
    $color = "white";
    $html ="";
    
    $start = '<form action="" method="post"><input type="text" name="post_field">';
    for ($i=0; $i < $count; $i++) { 
      $html = $html.'<label for=""><input type="checkbox" name="'.$char[$i].'">'.$char[$i].'</label>';
    }
    $end = '<button type="submit">SUBMIT</button></form>';
    $html = $start.$html.$end;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>9  Black</title>
</head>
<body style="color: <?=$color?>; background-color: <?=$bgcolor?>">  
  <?php echo $html; ?>
</body>
</html>