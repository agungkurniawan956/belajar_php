<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href = 'item.php';
  </script>";
  } else {
    echo "<script>
      alert('data gagal ditambahkan');
    </script>";
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

  <title>Tambah Data</title>
</head>

<body>

  <form action="" method="POST">
    <div class="container">
      <h3 class="mt-4">Tambah Data</h3>
      <div class="mb-2 col-sm-4">
        <label for="nama" class="form-label">Nama</label>
        <input type="texs" name="nama" class="form-control" id="nama" placeholder="Nama" autofocus required>
      </div>
      <div class="mb-2 col-sm-4">
        <label for="harga" class="form-label">Harga</label>
        <input type="texs" name="harga" class="form-control" id="harga" placeholder="contoh : 100000" required>
      </div>
      <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
      <a href="item.php" class="btn btn-danger">Kembali</a>
    </div>
  </form>

</body>

</html>