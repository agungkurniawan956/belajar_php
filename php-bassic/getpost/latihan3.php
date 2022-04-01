<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Post</title>
</head>

<?php if (isset($_POST["submit"])) : ?>
  <h1>Selamat datang <?php echo $_POST["nama"] ?></h1>
<?php endif ?>

<body>
  <form action=" " method="post">
    Nama :<input type="text" name="nama">
    <button type="submit" name="submit">Kirim</button>
  </form>
</body>

</html>