<!DOCTYPE html>
<html>
    <head>
        <title>tampilan depan</title>
    </head>
    <body>
        <h2>Data Mahasiswa</h2>
        ===================================
        <H2>Tambah Data</H2>
        <form action="tambah.php" method="POST">
            <b>NRP      : </b><input type="text" name="NRP" size="" maxlength="35"> <br>
            <b>Nama     : </b><input type="text" name="nama" size="" maxlength="35"> <br>
            <b>Alamat   : </b><input type="text" name="alamat" size="" maxlength="50"><br>
            <b>Foto     : </b><input type="text" name="alamat" size="35" maxlength="50"> <input type="submit" value="Browse..."> <br>
            <b>Jurusan  : </b><select name='ID_jur'>
                <option value='Telekomunikasi'>Telekomunikasi</option>
                <option value='Elka'>Elka</option>
                <option value='IT'>IT</option>
                <option value='Elin'>Elin</option>
            </select> <br><br>
            <button type="submit">Submit</button><br><br>
        </form>
        ====================================
        <h2>Cari Data</h2>
        <form action="cari.php" method="POST">
            <b>Nama: </b>
            <input type="text" name="cari">
            <input type="submit" value="cari data"><br><br>
        </form>
        ====================================
        <br>
        <h2>Hapus Data</h2>
        <form action="hapus.php" method="POST">
            <b>NRP  : </b>
            <input type="text" name="hapus">
            <input type="submit" value="hapus data"><br><br>
        </form>
        ====================================
    </body>
</html>