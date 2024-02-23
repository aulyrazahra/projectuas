<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <br><style> .jumbotron{color: rgb(0, 0, 0); } </style>
			<div class="jumbotron" style="background-color: rgb(203, 167, 167);"></style>

            <h2>Edit Menu Resep Makasan Cooking Rara</h2>
        <br>
                <form action="proses-edit-menu.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from menu where menu_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
            
                    <div class="form-group">
                        <label for="Nama_menu">Nama Menu</label>
                        <input type="text" name="Nama_menu" value="<?php echo $row['Nama_menu']?>"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_menu">Deskripsi Menu</label>
                        <input type="text" name="deskripsi_menu" value="<?php echo $row['deskripsi_menu']?>"  class="form-control">
                    </div>

                   
                    <div class="form-group">
                        <label for="waktu_memasak">Waktu Memasak</label>
                        <input type="text" name="waktu_memasak" value="<?php echo $row['waktu_memasak']?>"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tingkat_kesulitan">Tingkat Kesulitan</label>
                        <select name="tingkat_kesulitan" class="form-control">
                        <option value="<?php echo $row['tingkat_kesulitan']?>" selected><?php echo $row['tingkat_kesulitan']?></option>
                            <option value="mudah">Mudah</option>
                            <option value="sedang">Sedang</option>
                            <option value="sulit">Sulit</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="porsi"> Porsi</label>
                        <input type="text" name="porsi" value="<?php echo $row['porsi']?>"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <textarea name="kategori" class="form-control"> <?php echo $row['kategori']?></textarea>
                    </div>



                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
    </div>
<?php include "footer.php";?>