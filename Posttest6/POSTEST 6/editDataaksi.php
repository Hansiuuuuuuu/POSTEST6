<?php
  require "koneksi.php";

  if (isset($_POST["ubah"])) {

    $id = $_GET["id"];
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $kapasitas = $_POST["kapasitas"];
    $gambar = $_FILES["bukti"]["name"];
    $gambarBaru = "$nama.png";
    $tmp = $_FILES["bukti"]["tmp_name"];

    if (move_uploaded_file($tmp, 'databaseImages/' . $gambarBaru)){
      $sql = "UPDATE tb_konser SET nama = '$nama', harga = '$harga', kapasitas = '$kapasitas',  bukti = '$gambarBaru' WHERE id = '$id' ";

      $result = mysqli_query($koneksi, $sql);
      if ($result) {
        echo "
            <script>
              alert('Data berhasil diubah');
              document.location.href = 'test.php';
            </script>
          ";
      } else {
        echo "
          <script>
            alert('Data gagal diubah');
            document.location.href = 'test.php';
          </script>
          ";
      }
    }
  }
?>