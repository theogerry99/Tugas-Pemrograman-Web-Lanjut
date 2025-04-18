<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input</title>
</head>
<body>
    <h2>Hasil Input Anda</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $usia = $_POST["usia"];

        echo "<p>Nama Anda: <strong>$nama</strong></p>";
        echo "<p>Usia Anda: <strong>$usia</strong> tahun</p>";
    } else {
        echo "<p>Silakan isi form terlebih dahulu.</p>";
    }
    ?>
</body>
</html>