<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <div class="container-sm py-4 px-5">
        <?php
        require 'koneksi.php';
        // Mengambil data berdasarkan parameter nim dari URL
        $nim_target = $_GET['nim'];
        $edit = mysqli_query($koneksi, "SELECT * FROM mahasiswa where nim='$nim_target'");
        $data = mysqli_fetch_array($edit);
        ?>
 
        <h3>Edit Data Mahasiswa</h3>
        <form action="proses.php" method="post">
            
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input name="nim" type="number" class="form-control" value="<?php echo $data['nim']; ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Mahasiswa</label>
                <input name="nama_mahasiswa" type="text" class="form-control" value="<?php echo $data['nama_mahasiswa']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input name="tgl_lahir" type="date" class="form-control" value="<?php echo $data['tgl_lahir']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" rows="3" required><?php echo $data['alamat']; ?></textarea>
            </div>

            <input type="submit" value="Update Data" name="update" class="btn btn-primary">
            <a href="index.php?page=mahasiswa" class="btn btn-danger">Batal</a>
        </form>
    </div>
</body>
</html>