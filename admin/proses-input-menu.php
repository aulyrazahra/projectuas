<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$Nama_menu=$_POST['Nama_menu'];
$deskripsi_menu=$_POST['deskripsi_menu'];
$waktu_memasak=$_POST['waktu_memasak'];
$tingkat_kesulitan=$_POST['tingkat_kesulitan'];
$porsi=$_POST['porsi'];
$kategori=$_POST['kategori'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into menu(Nama_menu,deskripsi_menu,waktu_memasak,tingkat_kesulitan,porsi,kategori)
                        values ('$Nama_menu', '$deskripsi_menu', '$waktu_memasak', '$tingkat_kesulitan','$porsi','$kategori')");

if($simpan==true){

    header("location:tampil-menu.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>