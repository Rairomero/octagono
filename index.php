<?php
  $area = null;
  if(isset($_POST['apotema']) && isset($_POST['lados'])) {
    $apotema = $_POST['apotema'];
    $lados = $_POST['lados'];
    if(!empty($apotema) or !empty($lados)) {
      $area = 4 * $lados * $apotema;
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Octagono Regular</title>
</head>
<body>
  <h1>Octagono Regular</h1>
  <form method="post">
    <label for="lados">Tamaño de los lados: </label>
    <input type="text" name="lados">
    <label for="apotema">Apotema: </label>
    <input type="text" name="apotema">
    <input type="submit" name="btn" value="Calcular">
  </form>
  <?php
    if ($area != null) {
  ?>
    <h2><?php echo $area ?></h2>
  <?php
    }
  ?>
</body>
</html>