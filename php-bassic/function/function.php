<?php
function salam($waktu = "datang", $nama = "Administrator")
{
  return "Selamat $waktu, $nama !";
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Belajar Function</title>
</head>

<body>
  <h1><?= salam("pagi", "Agung"); ?></h1>
</body>

</html>