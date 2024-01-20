
<?php

$Nama=$_POST['Nama'];
$Email=$_POST['Email'];
$Nomor_Handphone=$_POST['Nomor_Handphone'];
$Pesan=$_POST['Pesan'];


include "koneksi.php";


$simpan=$koneksi->query("insert into saran(Nama,Email,Nomor_Handphone,Pesan) 
                        values('$Nama','$Email','$Nomor_Handphone','$Pesan')");

if($simpan==true){

    header("location:contactcooking.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>