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

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM tb_items WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function edit($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $harga = htmlspecialchars($data['harga']);

  $query = "UPDATE tb_items SET 
            nama = '$nama',
            harga = '$harga'
            WHERE id = $id ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
