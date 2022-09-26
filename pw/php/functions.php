<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "prakweb_c_203040117");

    return $conn;
}

function query ($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;


    // Fungsi untuk menambahkan data kedalam database

    function tambah($data)
    {

        $conn = koneksi();

        $gambar_buku = htmlspecialchars($data['gambar_buku']);
        $nama_buku = htmlspecialchars($data['nama_buku']);
        $penulis = htmlspecialchars($data['penulis']);
        $tahun_terbit = htmlspecialchars($data['tahun_terbit']);

        $query = "INSERT INTO produk 
                     VALUES
                     ('','$gambar_buku', '$nama_buku',  '$penulis', '$tahun_terbit')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id)
    {

        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data)
    {

        $conn = koneksi();
        $id = htmlspecialchars($data['id_buku']);
        $gambar_buku = htmlspecialchars($data['gambar_buku']);
        $nama_buku = htmlspecialchars($data['nama_buku']);
        $penulis = htmlspecialchars($data['penulis']);
        $tahun_terbit = htmlspecialchars($data['tahun_terbit']);

        $query = "UPDATE buku SET
                gambar_buku = '$gambar_buku',
                nama_buku = '$nama_buku',
                penulis = '$penulis',
                tahun_terbit = '$tahun_terbit',
                WHERE id_buku = '$id'";


        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }
}