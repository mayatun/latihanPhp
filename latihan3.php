<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<th><label for="Biodata" style="font-size: 30px; font-family: Franklin Gothic Demi;"> Biodata </label></th>
<body align="center" bgcolor="pink" style="height: 100vh;">
    <form action="" method="POST">
    <br>
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama"><br><br>

    <label for="lname">Agama:</label>
    <input type="text" id="agama" name="agama"><br><br>

    <label for="jumlah">Jumlah anak :</label>
    <input type="number" id="jumlah" name="jumlah"><br><br>
    <label for="jabatan">Jabatan :</label>
    <select name="jabatan" id="jabatan">
        <option value="Manager">Manager</option>
        <option value="Asisten">Asisten</option>
        <option value="Kabag">Kabag</option>
        <option value="Staff">Staff</option>
    </select>

    <tr><label for="status">Status :</label>
    <select name="status" id="status">
        <option value="menikah">Menikah</option>
        <option value="Belum Menikah">Belum Nikah</option>
    </select></tr>
    <br><br>
    <input type="submit" value="submit">
    </form>
<br>
<?php 
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $agama = $_POST["agama"];
    $jabatan = $_POST["jabatan"];
    $status = $_POST["status"];
    $jumlah = $_POST["jumlah"];

    echo "Nama Pegawai = $nama<br>";
    echo "Agama = $agama<br>";
    echo "Jabatan = $jabatan<br>";
    echo "Status = $status<br>";

    if ($status == "menikah") {
        echo "Jumlah anak = $jumlah<br>";
    }
}
?>
</body>
</html>