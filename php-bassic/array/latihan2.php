<?php
$names = ["agung", "harist", "Irianto", "Wanabud", "Lasbi"];

?>
<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <style>
    .bulat {
      width: 50px;
      height: 50px;
      background-color: aqua;
      text-align: center;
      line-height: 50px;
      border-radius: 50px;
      margin: 5px;
      float: left;
    }

    .clear {
      clear: both;
    }
  </style>
  <title>Belajar Array</title>
</head>

<body>
  <?php for ($i = 0; $i < 5; $i++) { ?>
    <div class="bulat"><?php echo $names[$i]; ?></div>
  <?php } ?>

  <div class="clear"></div>

  <?php foreach ($names as $name) { ?>
    <div class="bulat"><?php echo $name; ?></div>
  <?php } ?>

  <div class="clear"></div>

  <?php foreach ($names as $name) : ?>
    <div class="bulat"><?php echo $name; ?></div>
  <?php endforeach ?>
</body>

</html>