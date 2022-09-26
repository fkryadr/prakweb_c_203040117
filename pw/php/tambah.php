<h3>Form Tambah Data Buku</h3>
<form action="" method="POST">
    <ul>
        <li>
            <label for="img">Gambar :</label><br>
            <input type="file" name="img" id="img" ><br><br>
        </li>
        <li>
            <label for="id">ID Buku :</label><br>
            <input type="text" name="id" id="id" required><br><br>
        </li>
        <li>
            <label for="nama">Nama Buku :</label><br>
            <input type="text" name="nama" id="nama" required><br><br>
        </li>
        <li>
            <label for="name">Penulis :</label><br>
            <input  name="desc" id="desc" required><br><br>
        </li>
        <li>
            <label for="name">Tahun Terbit :</label><br>
            <input  name="tahun" id="tahun" required><br><br>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>

<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = '../index.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
                    document.location.href = '../index.php';
                </script>";
    }
}
?>