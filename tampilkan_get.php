<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input (GET)</title>
</head>
<body>
    <h2>Hasil Input Anda</h2>
    <?php
    if (isset($_GET["nama"]) && isset($_GET["usia"])) {
        $nama = $_GET["nama"];
        $usia = $_GET["usia"];

        echo "<p>Nama Anda: <strong>$nama</strong></p>";
        echo "<p>Usia Anda: <strong>$usia</strong> tahun</p>";
    } else {
        echo "<p>Silakan isi form terlebih dahulu.</p>";
    }
    ?>
</body>
</html>