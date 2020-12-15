<div class="testbox">
    <table class="table" cellpadding="25" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Prodi</th>
        </tr>
        <?php
        $a = 1;
        include "koneksi.php";
        $conn = koneksi();
        $query = "SELECT mahasiswa.nim as nim, mahasiswa.nama as mhsnama, mahasiswa.angkatan as angkatan, jurusan.nama as jrsnama FROM mahasiswa LEFT JOIN jurusan ON mahasiswa.id_jur = jurusan.id ORDER BY mahasiswa.nim ASC";
        $hasil = mysqli_query($conn, $query);
        while ($dt = mysqli_fetch_array($hasil)) : ?>
            <tr>
                <td class="td-number"><?= $a;
                                        $a++; ?></td>
                <td class="td-data"><?= $dt['nim']; ?></td>
                <td class="td-data"><?= $dt['mhsnama']; ?></td>
                <td class="td-data"><?= $dt['angkatan']; ?></td>
                <td class="td-data"><?= $dt['jrsnama']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>