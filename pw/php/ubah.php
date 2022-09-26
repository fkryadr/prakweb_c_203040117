<?php

require 'functions.php';

$id_buku = $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id_buku = $id_buku")[0];


?>

    <h3>Form Ubah Data Buku</h3>
    <form action="" method="POST">
        <ul>

            <li>
                <label for="img">Gambar :</label><br>
                <input type="file" name="img" id="img" ><br><br>
            </li>
            <li>
                <label for="nrp">ID Buku :</label><br>
                <input type="text" name="" id="nrp" required value="<?= $buku['id_buku']; ?>"><br><br>
            </li>
            <li>
                <label for="nama">Nama Buku :</label><br>
                <input type="text" name="nama" id="nama" required value="<?= $buku['nama_buku']; ?>"><br><br>
            </li>
            <li>
                <label for="name">Penulis:</label><br>
                <input type="name" name="desc" id="desc" required value="<?= $buku['penulis']; ?>"><br>
            </li>
            <li>
                <label for="name">Tahun Terbit :</label><br>
                <input type="name" name="desc" id="desc" required value="<?= $buku['tahun_terbit']; ?>"><br>
            </li>
            <br>
            <button type="submit" name="ubah">Ubah Data</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>

<?php

if (isset($_POST['ubah'])) {
    if (ubah ($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = '../index.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = '../index.php';
                </script>";
    }
}
?>