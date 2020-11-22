<!DOCTYPE html>
<html>
    <title>cari data</title>
</html>
<body>
    <?php
    $cari=$_POST['cari'];
    $koneksi  = mysqli_connect("localhost","root","");
    mysqli_select_db($koneksi,"universitas");
    $hasil=mysqli_query($koneksi, "select * from mahasiswa where nama='$cari'");
    ?>
    <b>Hasil Data Yang Dicari Adalah: </b><br>
        <table border="1">
            <thead>
                <th>NRP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jurusan</th>
            </thead>
            <tbody>
                <?php if(mysqli_num_rows($hasil)) {?>
                    <?php while($baris=mysqli_fetch_array($hasil)){?>
                    <tr>
                        <td><?php echo $baris[0] ?></td>
                        <td><?php echo $baris[1] ?></td>
                        <td><?php echo $baris[2] ?></td>
                        <td><?php echo $baris[3] ?></td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
            </tbody>
</body>