<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$buku = query("SELECT * FROM buku");

?>

<style>

    .add button {

        background-color: black;
        color: white;

    }

</style>

<div class="add">
    <a href="php/tambah.php"><button>Tambah Data</button></a>
</div>
<br>

<table border="1" cellpadding="13" cellspacing="0">
    <tr>
    <th>No</th>
    <th>opsi</th>
    <th>Gambar Buku</th>
    <th>Nama Buku</th>
    <th>Penulis</th>
        <th>Tahun Terbit</th>
    </tr>

    <?php $i = 1; ?>
	<?php foreach ($buku as $buk) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="php/ubah.php"><button>Ubah</button></a>
            <a href=""><button>Hapus</button></a>
        </td>
        <td><img width="100px" src="assets/img/<?= $buk['gambar_buku']; ?>" alt=""></td>
        <td><?= $buk['nama_buku']; ?></td>
        <td><?= $buk['penulis']; ?></td>
        <td><?= $buk['tahun_terbit']; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>