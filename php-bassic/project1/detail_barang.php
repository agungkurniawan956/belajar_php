<?php
require 'functions.php';

$id = $_GET['id'];

$item = query("SELECT * FROM tb_items WHERE id = $id");
?>
<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Detail Barang</title>
</head>
<h1>Detail Barang</h1>

<body>
  <ul>
    <li>Nama Barang : <?= $item["nama"]; ?></li>
    <li>Harga : <?= $item["harga"]; ?></li>
    <li>Stok Barang : 1kg</li>
  </ul>
  <a href="index.php">Kembali</a> |
  <a href="edit.php?id=<?= $item["id"]; ?>">Edit</a> |
  <a href="hapus.php?id=<?= $item["id"]; ?>" onclick="return confirm('Yakin Ingin Menghapus Data')">Hapus</a>
</body>

</html>