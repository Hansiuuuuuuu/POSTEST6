<!DOCTYPE html>
<html>
<head>
    <title>Hasil Saran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #99ccff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        h1 {
            color: #333;
        }
        a {
            text-decoration: none;
            color: #0074d9;
            font-weight: bold;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Saran</h1>
        <?php
        // Ambil data dari formulir
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $saran = $_POST['saran'];

        // Tampilkan hasil
        echo "<p>Nama: " . $nama . "</p>";
        echo "<p>Email: " . $email . "</p>";
        echo "<p>Saran: " . $saran . "</p>";
        ?>
        <a href="index.php">Kembali ke Menu Utama</a>
    </div>
</body>
</html>
