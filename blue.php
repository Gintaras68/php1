<?php
  if (isset($_GET['self']) && $_GET['self'] == 1) {
    header("Location: ./red.php");
    die;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5.  Blue</title>
  <style>
    body {
      background-color: blue;
    }
    h1, a {color: yellow}
  </style>
</head>
<body>
  <h1>Blue</h1>
    <a href="./blue.php?self=1">Nuoroda į savę</a>
</body>
</html>