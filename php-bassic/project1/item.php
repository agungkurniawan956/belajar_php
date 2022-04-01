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

      <?php $i = 1; ?>
      <?php foreach ($items as $item) : ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?= $item["nama"]; ?></td>
          <td><?= $item["harga"]; ?></td>
          <td>
            <a href="">Delete</a>|
            <a href="">Edit</a>
          </td>
        </tr>
        <?php $i++ ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>