<?php
  require "koneksi.php";

  $id = $_GET["id"];
  $sql = "SELECT * FROM tb_konser WHERE id = $id";
  $query = mysqli_query($koneksi, $sql);
  $row = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <link rel="stylesheet" href="add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="editDataaksi.php?id=<?php echo $row["id"] ?>" method="POST" enctype="multipart/form-data">
        <h3>Edit Baju</h3>
        <div class="inputBox">
          <label for="">Nama</label>
          <input type="text" name="nama" value="<?php echo $row["nama"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Harga</label>
          <input type="number" name="harga" value="<?php echo $row["harga"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Kapasitas</label>
          <input type="text" name="kapasitas" value="<?php echo $row["kapasitas"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Bukti Pembayaran</label>
          <input type="file" name="bukti" value="<?php echo $row["bukti"] ?>" required>
        </div>
        <input type="submit" value="Ubah Tiket" name="ubah">
        <a href="test.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>