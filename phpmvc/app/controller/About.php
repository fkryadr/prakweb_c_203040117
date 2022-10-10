<?php

class About
{

    public function index($nama = 'Om Jems', $pekerjaan = 'DJ') {
        echo "Halo, nama saya $nama, saya seorang $pekerjaan";
    }


    public function page() {
        echo 'About/Page';
    }

}