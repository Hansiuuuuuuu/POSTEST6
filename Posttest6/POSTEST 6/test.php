<?php
  require "koneksi.php";
  




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>




<body>
<header>
        <h1>SUKARAMAI</h1>
        

        <section class="menu">

            <input type="checkbox" id="menuCheck">
            <label for="menuCheck" class="menu-icon">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </label>

            <ul class="menu-list">
            <h2>Pendataan Konser</h2>
        </section>
    </header>
</body>

<body>

  <div class="bg">
    <div class="container">
      <div class="head">
        <div class="title">
        <form action="" method="GET" class="search">
          <input type="text" name="keyword" id="" placeholder="Search...">
          <button type="submit" class="btn-search" name="search">
            <i class="uil uil-search"></i>
          </button>
        </form>
        <p id="jam">
          <?php
          date_default_timezone_set("asia/pontianak");
          echo date("l, d F Y - H:i:s");
          ?>
        </p>
      </div>
      </div>
      <div class="table-box">
        <table>
          <tr>
            <td class="">No</td>
            <td class="">Nama Konser</td>
            <td class="">Harga</td>
            <td class="">Kapasitas</td>
            <td class="">Bukti Pembayaran</td>
            <td class="">Action</td>
          </tr>
          <?php
          $query = mysqli_query($koneksi, "SELECT * FROM tb_konser");
          $no = 1;

          while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$row[nama]</td>";
            echo "<td>$row[harga]</td>";
            echo "<td>$row[kapasitas]</td>";        
            echo "<td>
                <img src = 'databaseImages/$row[bukti]' class = 'gambar-cover' alt = 'Gambar';
            </td>";
            echo "<td class='action'>
                <a href='editData.php?id=$row[id]' class='kuning'><i class='uil uil-edit'></i></a>
                <a href='deleteDataaksi.php?id=$row[id]' class='merah'><i class='uil uil-trash-alt'></i></a>
                </td>";
            echo "</tr>";
            $no++;
          }
          ?>
        </table>
        <div class="tombol">
          <a href="addData.php">Tambah Data</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>