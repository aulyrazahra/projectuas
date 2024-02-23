<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <br><style> .jumbotron{color: rgb(0, 0, 0); } </style>
			<div class="jumbotron" style="background-color: rgb(203, 167, 167);"></style>	
<div class="container">
        <h2>Input Menu Resep Makasan Cooking Rara</h2>
        </div>
        <br>

                <form action="proses-input-menu.php" method="POST">

                    <div class="form-group">
                        <label for="Nama_menu">Nama Menu</label>
                        <input type="text" name="Nama_menu" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_menu">Deskripsi Menu</label>
                        <input type="text" name="deskripsi_menu" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="waktu_memasak">Waktu Memasak</label>
                        <input type="text" name="waktu_memasak" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tingkat_kesulitan">Tingkat Kesulitan</label>
                        <select name="tingkat_kesulitan" class="form-control">
                            <option value=""></option>
                            <option value="mudah">Mudah</option>
                            <option value="sedang">Sedang</option>
                            <option value="sulit">Sulit</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="porsi"> Porsi</label>
                        <input type="text" name="porsi" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <textarea name="kategori" class="form-control"></textarea>
                    </div>
                   
        
                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
    </div>
<?php include "footer.php";?>