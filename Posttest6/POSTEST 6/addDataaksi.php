<?php
  require "koneksi.php";

  if (isset($_POST["tambah"])) {

    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $kapasitas = $_POST["kapasitas"];
    $gambar = $_FILES["bukti"]["name"];
    $gambarBaru = "$nama.png";
    $tmp = $_FILES["bukti"]["tmp_name"];

    if (move_uploaded_file($tmp, 'databaseImages/'.$gambarBaru)){
      $sql = "INSERT INTO tb_konser VALUES(NULL, '$nama', '$harga', '$kapasitas', '$gambarBaru' )";

      $result = mysqli_query($koneksi, $sql);
      if ($result) {
        echo "
          <script>
            alert('Data berhasil ditambah');
            document.location.href = 'test.php';
          </script>
        ";
      } else {
        echo "
          <script>
            alert('Data gagal ditambah');
            document.location.href = 'test.php';
          </script>
        ";
      }
    }
  }
?>