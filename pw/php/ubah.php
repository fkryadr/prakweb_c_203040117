<?php

require 'functions.php';

$id_buku = $_GET['id'];
$buk = query("SELECT * FROM buku WHERE id_buku = $id_buku")[0];


?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
<h3 class="center">Change data</h3>

<div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" id="id_buku" name="id_buku" value="<?= $buk['id_buku'];?>">
        <div class="input-field">
            <input type="text" name="nama_buku" id="nama_buku" class="validate" required value="<?= $buk['nama_buku'];?>">
            <label for="nama_buku">Nama Buku</label>
        </div>
        <div class="input-field">
            <input type="text" name="pengarang" id="pengarang" class="validate" required value="<?= $buk['pengarang'];?>">
            <label for="pengarang">Pengarang</label>
        </div>
        <div class="file-field input-field">
            <input type="hidden" name="gambar_lama" value="<?= $buk['gambar']?>">
            <div class="btn">
                <span>Choose Picture</span>
                <input type="file" name="Gambar" id="Gambar" class="gambar" onchange="previewImage()">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" name="Gambar" id="Gambar" value="<?= $buk['gambar'];?>">
            </div>
            <img src="img/<?= $buk['gambar']?>" style="display: block;" width="120px" class="img-preview">
        </div>
        <button type="submit" name="ubah" class="waves-effect waves-light btn blue lighten-3">Change Data</button>
        <a href="index.php" class="waves-effect waves-light btn blue lighten-3"><i class="material-icons left">arrow_back</i>Back</a>


    </form>



</div>

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