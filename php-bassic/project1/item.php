<?php
require 'functions.php';

$items = query("SELECT * FROM tb_items");

?>
<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Daftar Menu</title>
</head>

<body>
  <h1>Daftar Menu</h1>
  <a href="tambah.php">Tambah</a>
  <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <thead>
      <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>

      <?php $i = 1;
      foreach ($items as $item) : ?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td><?php echo $item["nama"]; ?></td>
          <td><?php echo $item["harga"]; ?></td>
          <td>
            <a href="detail_barang.php?id=<?= $item['id']; ?>">Detail</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>