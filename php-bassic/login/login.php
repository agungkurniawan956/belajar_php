<?php
// cek apakah button submit sudah sitekan
if (isset($_POST["submit"])) {

  // cek username dan password
  if ($_POST["username"] == "admin" && $_POST["password"] == "321") {

    // jika benar redairect ke halaman admin 
    header("Location: admin.php");
    exit;

    // jika salah, tampilkan pesan kesalahan 
  } else {
    $eror = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>form login</title>
</head>

<body>
  <?php if (isset($eror)) : ?>
    <h5>username / password Salah</h5>
  <?php endif; ?>

  <h1>FORM LOGIN</h1>
  <form action="admin.php" method="post">
    <label for="username">User Name : </label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Password : </label>
    <input type="password" name="password" id="password">
    <br>
    <button type="submit" name="submit">Sigin</button>
  </form>
</body>

</html>