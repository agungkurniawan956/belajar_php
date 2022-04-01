<?php

//validasi data
if (!isset($_GET["nama"]) || !isset($_GET["npm"])) {
  header("Location : latihan1.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Deetail Mahasiswa</title>
</head>

<h1>Detail Mahasiswa</h1>

<body>

  <ul>
    <li>Nama :<?php echo $_GET["nama"]; ?></li>
    <li>NPM :<?php echo $_GET["npm"]; ?></li>
    <li>Jurusan :<?php echo $_GET["jurusan"]; ?></li>
    <li>TTL :<?php echo $_GET["ttl"]; ?></li>
  </ul>

  <a href="latihan1.php">Kembali</a>

</body>

</html>