
<?php
// *  10. Pakartokite 9 uždavinį. 
// *  Padarykite taip, kad atsirastų du skaičiai. 
// *  Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota.

  $char = ["A","B","C","D","E","F","G","H","I","K"];
  $count;
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // var_dump($_POST);
    // print_r($_POST);
    // ! reikalingas kintamasis, kur saugome kiek elementu buvo
    // * panaudoti formos tip1  input type="hidden"
    
    echo $count;
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
    
    $start = '<form action="" method="post"><input type="text" name="post_field" id="">';
    for ($i=0; $i < $count; $i++) { 
      $html = $html.'<label for=""><input type="checkbox" name="'.$char[$i].'" id="">'.$char[$i].'</label>';
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