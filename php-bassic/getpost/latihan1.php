<?php
$mahasiswa = [
  [
    "nama" => "Agung Kurniawan",
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
  <title>Belajar get</title>
</head>

<body>
  <h1>Data Mahasiswa</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>

      <li>
        <a href="latihan2.php?nama=<?php echo $mhs["nama"]; ?>&npm=<?php echo $mhs["npm"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>&ttl=<?php echo $mhs["ttl"]; ?>">
          <?php echo $mhs["nama"]; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>


</body>

</html>