<?php
require 'functions.php';

//jika tidak ada id
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

//ambil id
$id = $_GET['id'];

//query data
$item = query("SELECT * FROM tb_items WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo "<script>
    alert('data berhasil diedit');
    document.location.href = 'index.php';
  </script>";
  } else {
    echo "data gagal diedit";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Edit Data</title>
</head>

<body>

  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $item['id']; ?>">
    <div class="container">
      <h3 class="mt-4">Edit Data</h3>
      <div class="mb-2 col-sm-4">
        <label for="nama" class="form-label">Nama</label>
        <input type="texs" name="nama" class="form-control" id="nama" placeholder="Nama" autofocus required value="<?= $item['nama']; ?>">
      </div>
      <div class="mb-2 col-sm-4">
        <label for="harga" class="form-label">Harga</label>
        <input type="texs" name="harga" class="form-control" id="harga" placeholder="contoh : 100000" required value="<?= $item['harga']; ?>">
      </div>
      <button type="edit" name="edit" class="btn btn-primary">Edit</button>
      <a href="index.php" class="btn btn-danger">Kembali</a>
    </div>
  </form>

</body>

</html>