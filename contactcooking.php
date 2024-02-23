<?php include "header.php"; ?>

<br><style> .jumbotron{color: rgb(239, 229, 229); } </style>
<div class="jumbotron" style="background-color: rgb(167, 150, 108);"></style>

    <div class="container mtb">
		<div class="row">
			<div class="col-lg-8">
				<h2>Mari Sahabat Cooking Rara Lebih Dekat Dengan Kami </h2>
					<p>Kami menerima Semua keluhan Juga Kendala Sahabat Cooking Rara sesuai harapan yang Sahabat Cooking Rara inginkan</p>
					<?php 

					if(@$_GET['pesan']=="inputBerhasil"){
						
							echo "<script>alert('Saran Telah Diterima');</script>";
							echo "<script>location= 'contactcooking.php'</script>";
						  }

			

					?>

					<form action="proses-saran.php" method="POST">
					 <div class="form-group">
					   <label for="Nama">Nama Anda</label>
					   <input type="text" class="form-control" id="exampleInputEmail1"
					 name="Nama" placeholder="Isikan Nama Lengkap">    
					 </div>
					 <div class="form-group">
					   <label for="Email">Email Anda</label>
					   <input type="text" class="form-control" id="exampleInputEmail1" name="Email" placeholder="Isikan Email Anda"> 
					 </div>
					 <div class="form-group">
						<label for="Nomor_Handphone">Nomor Wa/Handphone </label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="Nomor_Handphone" placeholder="Isikan Nomor Wa/Handphone"> 
					 </div>
					 <div class="form-group">
						<label for="Pesan">Pesan Kritik dan Saran</label>
						<textarea name="Pesan" class="form-control" id="exampleInputEmail1" name="Pesan Kritik dan Saran" placeholder="Isikan Pesan Kritik dan Saran Anda"></textarea> 
						 </div>
						 <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
			</div>
		</div>

	    <!-- Awal FOOTER -->
			<br><footer>
				<footer class="p-5">
					  <div class="col-md-4">
						<h5>LAYANAN PELANGGAN</h5>
						<ul>
						  <li>Pusat Bantuan</li>
						  <li>Cara Pencarian</li>
						  <li>Kendala pencarian</li>
						  <li>Cara login</li>
						</ul>
					  </div> 

					  <div class="col-md-4">
						<h5> Tentang Kami </h5>
						 Cookingrara adalah situs kumpulan resep masakan rumahan mudah dan praktis. Selain itu, disini juga terdapat banyak tips dapur, tutorial & tips memasak, info kesehatan, dan banyak lagi.
						Terdapat Kategori reseep makanan mulai dari Bahan.
					  </div> 

					  <div class="col-md-4">
						<h5>HUBUNGI KAMI</h5>
						<ul>
						  <li>0831 9956 0302</li>
						  <li> AULIA AZAHRA </li>
						  <li>auliaazahra898@gmail.com</li>
						</ul>
					</div>
				</footer>
			</footer>   <!-- Akhir FOOTER -->
		</div>
	</div>

		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
<?php include "footer.php"; ?>

<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>