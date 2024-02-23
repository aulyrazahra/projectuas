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
        <div class="col-md-20">
        <h2>Data Menu Resep Makasan Cooking Rara</h2>
        <br>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


<div class="jumbotron" style="background-color: rgb(245, 229, 241);"></style>
	<br><style> .jumbotron{color: rgb(15, 14, 14); } </style>
        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>

							<th>Nama Menu</th>
							<th>Deskripsi Menu</th>
							<th>Waktu Memasak</th>
							<th>Tingkat Kesulitan</th>
							<th>Porsi</th>
							<th>Kategori</th>
                            <th>Detail Resep</th>
							
                <th>
                    <a href="input-menu.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from menu order by menu_id ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>

							<td><?php echo $row['Nama_menu']?></td>
							<td><?php echo $row['deskripsi_menu']?></td>
							<td><?php echo $row['waktu_memasak']?></td>
							<td><?php echo $row['tingkat_kesulitan']?></td>
							<td><?php echo $row['porsi']?></td>
							<td><?php echo $row['kategori']?></td>
                           
							<td><a href="detail.php?id=<?php echo $row['menu_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-zoom-in"></button>
                </a></td>
                <td>

                <a href="edit-menu.php?id=<?php echo $row['menu_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-menu.php?id=<?php echo $row['menu_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
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
    </div>
</div>


<?php include "footer.php";?>