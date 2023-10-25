<!DOCTYPE html>
<html>
<head>
    <title>Hasil Saran</title>
</head>
<body>
    <h1>Hasil Saran</h1>
    <?php
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $saran = $_POST['saran'];

    // Tampilkan hasil
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Saran: " . $saran . "<br>";
    ?>
</body>
</html>
     