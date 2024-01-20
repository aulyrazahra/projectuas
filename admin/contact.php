<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<br><style> .jumbotron{color: rgb(0, 0, 0); } </style>
			<div class="jumbotron" style="background-color: rgb(203, 167, 167);"></style>				
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h4 class="display-4"><span class="font-weight-bold">Pesan Kritik dan Saran</span></h4>
        </div>
    </div>
  <!-- Akhir Jumbotron -->

            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>Nama</th><th>Alamat Email</th><th>Nomor Wa/Handphone</th><th>Pesan Kritik dan Saran</th><th> Date </th><th>Di terima</th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from saran");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
            
                <td><?php echo $row['Nama']?></td>
                <td><?php echo $row['Email']?></td>
                <td><?php echo $row['Nomor_Handphone']?></td>
                <td><?php echo $row['Pesan']?></td>
                <td><?php echo $row['Date']?></td>

                <td>
                <a href="hapus-contact.php?id=<?php echo $row['saran_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-ok"></button>
                </a>
                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>

<?php include "footer.php";?>