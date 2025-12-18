<h1>Data Prodi</h1>
<a href="index.php?page=prodi-create" class="btn btn-primary my-1">Input Prodi Baru</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">ID</th>
            <th scope="col">Nama Prodi</th>
            <th scope="col">Jenjang</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
           require __DIR__ . '/../koneksi.php';
           // Mengambil data dari tabel prodi
           $tampil = $koneksi->query("SELECT * FROM prodi");
           $i = 1;

           while ($data = mysqli_fetch_assoc($tampil)) {
           ?>
            <tr>
                <th scope="row"><?= $i++ ?></th>
                <td><?= $data['id']; ?></td>
                <td><?= $data['nama_prodi']; ?></td>
                <td><?= $data['jenjang']; ?></td>
                <td><?= $data['keterangan']; ?></td>
                <td>
                    <a href="index.php?id=<?= $data['id'] ?>&page=prodi-edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="prodi/proses.php?id_prodi=<?= $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data prodi ini?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>