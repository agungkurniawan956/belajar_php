<?php
// koneksi ke database
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'umkm');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = $data['nama'];
  $harga = $data['harga'];

  $query = "INSERT INTO tb_items VALUES (null, '$nama', '$harga');";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
