<?php
// pengulangan
// for
// while
// do..while
// foreach :pengulangan khusus array

// for ($i = 0; $i < 5; $i++) {
//   echo "hello Metaverse <br>";
// }

// $i = 0;
// while ($i < 5) {
//   echo " hello world <br>";
//   $i++;
// }
// $i = 0;
// do {
//   echo "hello Agung <br>";
//   $i++;
// } while ($i < 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengulangan</title>
</head>
<style>
  .sip {
    background-color: aqua;
  }
</style>

<body>
  <table border="1" cellpadding="10" cellspacing="0" align="center">
    <?php
    for ($i = 1; $i <= 4; $i++) {
      echo "<tr>";
      for ($j = 1; $j <= 5; $j++) {
        echo "<td> $i, $j</td>";
      }
      echo "</tr>";
    }
    ?>
  </table>

  <!-- atau -->

  <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
      <?php if ($i % 2 == 1) : ?>
        <tr class="sip">
        <?php else : ?>
        <tr>
        <?php endif ?>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
          <td> <?php echo "$i, $j" ?></td>
        <?php endfor ?>
        </tr>
      <?php endfor ?>
  </table>

</body>

</html>