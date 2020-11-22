<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuril Humaya _ 118140169</title>
</head>
<body>
    <h2>DATA MAHASISWA</h2>
    <h4>TAMBAH DATA</h4>
    <form action="tambah.php" method="post">
        NRP     : <input type="text" name="nrp"><br><br>
        Nama    : <input type="text" name="nama"><br><br>
        Alamat  : <input type="text" name="alamat"><br><br>
        Id_Jurusan : <input type="text" name="id_jurusan"><br></br>
        Jurusan : <select name="jurusan">
                    <option value="Informatika">Informatika</option>
                    <option value="Arsitektur">Arsitektur</option>
                    <option value="PWK">PWK</option>
                    <option value="DKV">DKV</option>
                 </select>
        <br><br>
        <input type="submit" name="submit" value="simpan">
    </form>
    <br>
    -------------------------------------------------
    <h4>CARI DATA</h4>
    <form action="search.php"  method="POST"><br>
        Nama : <input type="text" name="kunci"><br><br>
        <input type="submit" name="submit" value="cari">
    </form>
    <br>
    -------------------------------------------------
    <h4>HAPUS DATA</h4>
    <form action="delete.php">
        NRP : <input type="text" name="hapus"><br><br>
        <input type="submit" name="submit" value="hapus">
    </form>
</body>
</html>