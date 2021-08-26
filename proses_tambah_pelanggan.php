<?php

if($_POST){

    $nama=$_POST['nama'];

    $alamat=$_POST['Alamat'];

    $telp=$_POST['Telpon'];

    if(empty($nama)){

        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";


    } elseif(empty($alamat)){

        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    } elseif(empty($telp)){

        echo "<script>alert('Telpon tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    }else {

        include "koneksi.php";

        $insert=mysqli_query($conn,"INSERT INTO `pelanggan` (`nama`, `alamat`, `telp`) value ('".$nama."','".$alamat."','".$telp."')");

        if($insert){

            echo "<script>alert('Sukses menambahkan Pelanggan');location.href='tambah_pelanggan.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";

        }

    }

}

?>