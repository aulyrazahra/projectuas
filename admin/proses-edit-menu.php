<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['menu_id'];
$Nama_menu=$_POST['Nama_menu'];
$deskripsi_menu=$_POST['deskripsi_menu'];
$waktu_memasak=$_POST['waktu_memasak'];
$tingkat_kesulitan=$_POST['tingkat_kesulitan'];
$porsi=$_POST['porsi'];
$kategori=$_POST['kategori'];

$ubah=$koneksi->query("update menu set Nama_menu='$Nama_menu',deskripsi_menu='$deskripsi_menu', waktu_memasak='$waktu_memasak', tingkat_kesulitan='$tingkat_kesulitan',porsi='$porsi',kategori='$kategori' where menu_id='$id'");

if($ubah==true){

    header("location:tampil-menu.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>
