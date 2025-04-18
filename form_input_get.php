<!DOCTYPE html>
<html>
<head>
    <title>Form Input (GET)</title>
</head>
<body>
    <h2>Masukkan Nama dan Usia Anda</h2>
    <form action="tampilkan_get.php" method="get">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="usia">Usia:</label><br>
        <input type="number" id="usia" name="usia" required><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>