<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <h1>Form Data Covid19</h1>
    <form action="input.php" method="post">
        <label for="wilayah">Nama Wilayah</label>
        <select name="wilayah" id="wilayah">
            <option value="0">======Pilih Wilayah=====</option>
            <option value="1">DKI Jakarta</option>
            <option value="2">Jawa Barat</option>
            <option value="3">Banten</option>
            <option value="4">Jawa Tengah</option>
        </select><br>
        <label for="jpositif">Jumlah Positif</label>
        <input type="number" name="jpositif"><br>
        <label for="jrawat">Jumlah Dirawat</label>
        <input type="number" name="jrawat"><br>
        <label for="jsembuh">Jumlah Sembuh</label>
        <input type="number" name="jsembuh"><br>
        <label for="jtewas">Jumlah Meninggal</label>
        <input type="number" name="jtewas"><br>
        <label for="noperator">Nama Operator</label>
        <input type="text" name="noperator"><br>
        <label for="nim">NIM</label>
        <input type="text" name="nim"><br>
        <input type="submit">
    </form>
    <a href="index.php"><button>Back</button></a>
</body>
</html>