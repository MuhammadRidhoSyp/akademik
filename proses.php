<?php 
    require 'koneksi.php';

    // --- PROSES INSERT (TAMBAH DATA) ---
    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama_mahasiswa'];
        $tgl = $_POST['tgl_lahir'];
        $alamat = $_POST['alamat'];

        // Query insert ke tabel mahasiswa
        $query = "INSERT INTO mahasiswa (nim, nama_mahasiswa, tgl_lahir, alamat) VALUES ('$nim', '$nama', '$tgl', '$alamat')";
        $sql = $koneksi->query($query);

        if ($sql){
            header('Location: index.php?page=mahasiswa');
        } else {
            echo "Gagal simpan data: " . $koneksi->error;
        }
    }

    // --- PROSES DELETE (HAPUS DATA) ---
    if (isset($_GET['nim'])) {
        $nim = $_GET['nim']; // Menggunakan nim sebagai acuan hapus
        $query = "DELETE FROM mahasiswa WHERE nim = '$nim'";
        $sql = $koneksi->query($query);

        if ($sql) {
            header('Location: index.php?page=mahasiswa');
            exit();
        } else {
            echo "Gagal menghapus data: " . $koneksi->error;
        }
    }
    
    // --- PROSES UPDATE (EDIT DATA) ---
    if (isset($_POST['update'])) {
        $nim = $_POST['nim']; // Nim diambil dari field readonly/hidden
        $nama = $_POST['nama_mahasiswa'];
        $tgl = $_POST['tgl_lahir'];
        $alamat = $_POST['alamat'];

        // Query update tabel mahasiswa
        $query = "UPDATE mahasiswa SET nama_mahasiswa='$nama', tgl_lahir='$tgl', alamat='$alamat' WHERE nim='$nim'";
        $sql = $koneksi->query($query);

        if($sql){
            header('Location: index.php?page=mahasiswa');
        } else {
            echo "Gagal update data: " . $koneksi->error;
        }
    }
?>