
<?php
// *  10. Pakartokite 9 uždavinį. 
// *  Padarykite taip, kad atsirastų du skaičiai. 
// *  Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota.

  $char = ["A","B","C","D","E","F","G","H","I","K"];
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $html = '<p>Buvo pažymėti '.count($_POST)-1 .' čekboksai iš '.$_POST["number"].' .</p>';
    $bgcolor = "white";
    $color = 'black';
    $count = 0;
  } else {
    $count = rand(3, 10);
    echo "Sugeneruotas skaicius: ".$count;
    $bgcolor = "black";
    $color = "white";
    $html = '<form action="" method="post"><input type="hidden" name="number" value="'.$count.'">';
    for ($i=0; $i < $count; $i++) { 
      $html = $html.'<label for=""><input type="checkbox" name="'.$char[$i].'">'.$char[$i].'</label>';
    }
    $end = '<button type="submit">SUBMIT</button></form>';
    $html = $html.$end;
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