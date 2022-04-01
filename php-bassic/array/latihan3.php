<?php
$data = [
  ["Agung Kurniawan", 2017804307, "Sistem Informasi", "Kuningan, 06-Agustus 1998"],
  ["Harist Maulana", 2017804307, "Sistem Informasi", "Brebes, 25-Februri 1998"]
];

$mahasiswa = [
  [
    "nama" => "Ii Irianto",
    "npm" => 2017804307,
    "jurusan" => "Sistem Informasi",
    "ttl" => "Pandeglang, 06-Agustus 1998"
  ],
  [
    "nama" => "Ikhwan Munfarid",
    "npm" => 2017804307,
    "jurusan" => "Sistem Informasi",
    "ttl" => "Bogor, 25-Februri 1998"
  ]
];
?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Data Mahasiswa</title>
</head>

<body>
  <h1>Data Mahasiswa</h1>

  <?php foreach ($data as $d) : ?>
    <ul>
      <?php foreach ($d as $b) : ?>
        <li>Nama :<?php echo $b; ?></li>
      <?php endforeach ?>
    </ul>
  <?php endforeach ?>
  <br>

  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>Nama :<?php echo $mhs["nama"]; ?></li>
      <li>NPM :<?php echo $mhs["npm"]; ?></li>
      <li>Jurusan :<?php echo $mhs["jurusan"]; ?></li>
      <li>TTL :<?php echo $mhs["ttl"]; ?></li>
    </ul>
  <?php endforeach; ?>


</body>

</html>