<!DOCTYPE html>
<html>
    <title>hapus data</title>
</html>
<body>
    <?php
    $hapus=$_POST['hapus'];
    $koneksi=mysqli_connect("localhost","root","");
    mysqli_select_db($koneksi, "universitas");
    $delete=mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE NRP='$hapus'");
    if(mysqli_affected_rows($koneksi)==1){
        echo "<b> Data Berhasil Dihapus Dari Database</b>";
    }else{
        echo "<b> Data Gagal Dihapus Dari Database </b>";
    }
    ?>
</body>