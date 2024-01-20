<?php include "header.php"; ?>

    <div class="row mt-5 no-gutters">
        <div class="col-md-2 bg-light "> 
          <ul class="list-group list-group-flush p-2 pt-4">        <!-- Awal List Group -->
            <li class="list-group-item  list-group-item-danger"> 
              <span class="glyphicon glyphicon-tasks"></span> Kategori Resep Masakan 
			</li>
            <li class="list-group-item"> <span class="glyphicon glyphicon-chevron-right"></span> <a href="Daging.php"> Bahan Daging </a> </li>
            <li class="list-group-item"> <span class="glyphicon glyphicon-chevron-right"></span> <a href="sayuran.php">  Bahan Sayuran </a> </li>
            <li class="list-group-item"> <span class="glyphicon glyphicon-chevron-right"></span> <a href="kue.php"> Bahan Kue </a> </li> 
            <li class="list-group-item"> <span class="glyphicon glyphicon-chevron-right"></span><a href="ikan.php"> Bahan Ikan </a></li>
            <li class="list-group-item"> <span class="glyphicon glyphicon-chevron-right"></span> <a href="mie.php"> Bahan Mie </a></li>
          </ul>      <!-- Akhir List Group -->
        </div>
        <div class="col-md-2">  </div>
		
    <!-- Awal script Slider/ Carousel -->
	<div class="container">	
		<div class="row">
			<div class="col-md-10">
				  <div class="carousel slide" id="contoh-carousel" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#contoh-carousel" data-slide-to="1"></li>
							<li data-target="#contoh-carousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<!-- Awal script Slider pertama -->
							<div class="item active">
								<img src="images/gambarresep.png" alt="" width="100%" height="1000%" > 
								<div class="carousel-caption" style="color: black;" >
								</div>
							</div> <!-- Akhir script Slider pertama -->
							<!-- Awal script Slider kedua -->
							<div class="item">
								<img src="images/gambar5.jpg" alt="" width="1000%" height="100%" >				
							</div><!-- Akhir script Slider kedua -->
							<!-- Awal script Slider ketiga -->
							<div class="item">
								<img height="100px" bordir="1" >
								<img src="images/slide2masak.jpg" alt="" width="1000%" height="100%" >						
							</div> <!-- Akhir script Slider ketiga -->
						</div>
						<!-- Awal script Button Geser Kiri dan Kanan -->
						<a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Prev</span> 
						</a>
						<a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a> <!-- Akhir script Button Geser Kiri dan Kanan -->
					</div>
				</div> <!-- Akhir script Slider/Carousel -->
			</div>
        </div>
    </div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<br><style> .jumbotron{color: rgb(0, 0, 0); } </style>
			<div class="jumbotron" style="background-color: rgb(203, 167, 167);"></style>
				<div class="container">
					<div class="class-judul-produk" style="background-color: #f8f4f4; pudding: 5px 10px;">
					<h3 class="text-center" style="margin-top: 5px;"><strong> <span class="glyphicon glyphicon-bullhorn"></span> RESEP MASAKAN TERFAVORIT OLAHAN MIE </strong></h3>
	  				</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- Awal Resep Olahan Mie-->	
<div class="jumbotron" style="background-color: rgb(245, 229, 241);"></style>
	<br><style> .jumbotron{color: rgb(15, 14, 14); } </style>

	<div class="container">
		<div class="row">
			<div class="col-md-3">   <!-- Awal Tampilan Olahan Mie Goreng ndeso-->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/miendeso.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
						 <h4 class="card-title"> <strong> Mie Goreng Ndeso  </strong> </h4> 
						<p class="card-text"> RESEP MIE TERFAVORIT  </p>
						<!-- Awal Modal Olahan Mie Goreng ndeso-->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalmiendeso">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
  <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

						<div class="modal fade" id="myModalmiendeso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> Mie Goreng Ndeso  </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/miendeso-remove.png" width="100%" height="10%"> 
                    
											<p><strong>Bahan:</strong><br>- 1 bungkus panjang mie telur, rebus, saring, sisihkan, beri sdikit minyak, aduk rata<br>- 3 siung bawang putih besar, gepek, cincang kecil-kecil<br>- 1/4 kobis, iris-iris<br>- 1 wortel kecil, potong panjang<br>- 1 bawang bombay (optional)<br>- 1 butir telur<br>- Daun bawang dan seledri secukupnya</p>
											<p><strong>Cara Membuat:</strong></p>
											<ol>
											<li>Tumis bawang putih dengan minyak yang agak banyak sampai wangi mulai cokelat.</li>
											<li>Masukkan telur, aduk-aduk pelan.</li>
											<li>Masukkan wortel, beri sedikit air</li>
											<li>Masukkan garam dan kaldu bubuk.</li>
											<li>Setelah wortel mulai matang dan air menyusut</li>
											<li>Masukkan mie, aduk-aduk rata.</li>
											<li>Masukkan kobis, daun bawang, seledri</li>
											<li>Koreksi rasa</li>
											<li>Sajikan</li>
											</ol>
										</div>
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div> <!-- Akhir Modal Olahan Mie Goreng ndeso-->
					</div>
			</div>  <!-- Akhir Tampilan Olahan Mie Goreng ndeso-->

			<div class="col-md-3"> <!-- Awal Tampilan Olahan Mie Laksa Singapore-->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/milaksasingapore.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
					<h4 class="card-title"> <strong>  Mie Laksa Singapore </strong> </h4> 
						<p class="card-text"> RESEP MIE TERFAVORIT  </p>
						<!-- Awal Modal Olahan Mie Laksa Singapore-->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalmielaksa">
							Detail Resep
						</button>
							<button type="submit" name="kirim" class="btn btn-danger">
  							<span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>
						<div class="modal fade" id="myModalmielaksa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> Mie Laksa Singapore  </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/milaksasingapore-remove.png" width="100%" height="10%"> 

											<p><strong>Bahan:</strong><br>- Mie rebus/kwetiau/bihun sesuai selera<br>- Telur rebus secukupnya<br>- Tauge (optional)<br>- Tahu kulit (optional)<br>- Daun kemangi sesuai selera<br>- Sambal belacan<br>- Jeruk nipis</p>
											<p><strong>Bahan kuah:</strong><br>- 1 pack bakso ikan<br>- Fish cake iris tipis<br>- 2 batang serai geprek<br>- 3 lbr daun salam<br>- 3 lbr daun jeruk<br>- 2 buah bunga lawang<br>- Kaldu bubuk, garam, dan merica secukupnya<br>- 2 pack santan instan</p>
											<p><strong>Bumbu halus:</strong><br>- 6 siung bawang putih<br>- 8 butir bawang merah<br>- 3 buah cabai merah<br>- 3 cm kunyit<br>- 2 cm lengkuas<br>- 4 buah kemiri sangrai<br>- 1 sdt ketumbar<br>- 2 blok terasi<br>- 2 sdm ebi rendam air panas</p></p>
											<p><strong>Cara Membuat:</strong></p>
											<ol>
											<li>Tumis bumbu halus, daun salam, daun jeruk, bunga lawang dan serai sampai harum.</li>
											<li>Tuang air, biarkan mendidih lalu saring.</li>
											<li>Didihkan kembali, masukkan santan, bakso ikan, fish cake, beri bumbu.</li>
											<li>Masak sampai matang</li>
											<li>Tata mi di mangkuk, tuang kuahnya, sajikan dengan pelengkap.</li>
											</ol>
										</div>
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>  <!-- Akhir Modal Olahan Mie Laksa Singapore-->
					</div>
			</div> <!-- Akhir Tampilan Olahan Mie Laksa Singapore-->
			
			<div class="col-md-3">  <!-- Awal Tampilan Olahan  Mie Gomak Khas Medan-->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/miegomak.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
					<h4 class="card-title"> <strong> Mie Gomak Khas Medan  </strong> </h4> 
						<p class="card-text"> RESEP MIE TERFAVORIT  </p>
						<!-- Awal Modal Olahan Mie Gomak Khas Medan -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalmiegomak">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>
						<div class="modal fade" id="myModalmiegomak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">							
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong>Mie Gomak Khas Medan  </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/miegomak-remove.png" width="100%" height="10%"> 
											<p><strong>Bahan:</strong><br>- Mie lidi (rebus bersama 1 sdm minyak goreng)<br>- 4 bonggol sawi, potong-potong<br>- 2-3 sdm kecap manis<br>- 1 sdt kaldu jamur<br>- 1/2 sdt garam<br>- 1 sdt merica bubuk<br><br><strong>Bumbu halus:</strong><br>- 6 siung bawang merah<br>- 3 siung bawang putih<br>- 3 buah kemiri<br><br><strong>Pelengkap:</strong><br>- Acar<br>- Bawang merah goreng<br>- Tomat <br><br><strong>Cara Membuat:</strong></p>
											<ol>
											<li>Tumis bumbu halus sampai wangi.</li>
											<li>Masukkan mie, kecap manis, garam , kaldu jamur, lada</li>
											<li>Tambah sedikit air kalau terlalu kering</li>
											<li>Koreksi rasa</li>
											<li>Masak hingga meresap, terakhir masukkan sawi masak sebentar saja</li>
											<li>Sajikan dengan pelengkap</li>
											</ol>
										</div>	
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>  <!-- Akhir Modal Olahan Mie Gomak Khas Medan -->
					</div>
			</div> <!-- Akhir Tampilan Olahan  Mie Gomak Khas Medan-->

			<div class="col-md-3">   <!-- Awal Tampilan Olahan Mie Kuah Santan-->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/mikuahsantan.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
					<h4 class="card-title"> <strong> Mie Kuah Santan  </strong> </h4> 
						<p class="card-text"> RESEP MIE TERFAVORIT  </p>
							<!-- Awal Modal Olahan Mie Kuah Santan-->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalmiekuahsantan">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>
						<div class="modal fade" id="myModalmiekuahsantan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">		
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> Mie Kuah Santan  </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/mikuahsantan-remove.png" width="100%" height="10%"> 
											<p><strong>Bahan:</strong><br>- 2 keping mie keriting<br><br><strong>Bahan kuah:</strong><br>- 1 buah wortel, potong-potong<br>- Segenggam potongan kol<br>- 1/4 kembang kol, potong-potong<br>- 2 lembar daun salam<br>- 2 lembar daun jeruk<br>- 1 batang serai<br>- 1 batang Lengkuas<br>- 65 ml santan<br>- Garam, lada bubuk, dan kaldu jamur secukupnya<br>- 500 ml air <br><br><strong>Bumbu halus:</strong><br>- 3 siung bawang putih<br>- 2 butir kemiri<br>- 2 cm kencur<br><br><strong>Taburan:</strong><br>- Bawang goreng<br>- Irisan daun bawang<br><br><strong>Pelengkap:</strong><br>- Telur kukus<br><br><strong>Cara Membuat:</strong></p>
											<ol>
											<li>Rebus mie sampai aldente. Sisihkan.</li>
											<li>Tumis bumbu halus sampai harum.</li>
											<li>Masukkan daun salam, daun jeruk, lengkuas, dan serai.</li>
											<li>Masukkan wortel, kol, dan kembang kol.</li>
											<li>Beri santan dan air</li>
											<li>Beri garam, lada bubuk, dan kaldu jamur secukupnya. Aduk.</li>
											<li>Penyajian: Tata mie di atas mangkuk. Siram dengan kuah santan.</li>
											<li>Taburi bawang goreng dan irisan daun bawang. Sajikan dengan telur kukus.</li>
											</ol>
										</div>	
									<div class="modal-footer">
									</div>
								</div>
							</div>
						</div>  	<!-- Akhir Modal Olahan Mie Kuah Santan-->
					</div>
			</div> <!-- Akhir Tampilan Olahan Mie Kuah Santan-->
		
			<div class="col-md-3"> <!-- Awal Tampilan Olahan Mie Ramen Goreng -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/mieramen.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
						 <h4 class="card-title"> <strong> Mie Ramen Goreng </strong> </h4> 
						<p class="card-text"> RESEP MIE TERFAVORIT  </p>
						<!-- Awal Modal Olahan Mie Ramen Goreng -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalmieramen">
							Detail Resep
							</button>
							<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>
					
						<div class="modal fade" id="myModalmieramen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> Mie Ramen Goreng Ala Rumahan   </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/mieramen.jpg" width="100%" height="10%"> 
											<p><strong>Bahan:</strong><br>- 1 bungkus ramen goreng instan<br>- 1 butir Telur<br>- Sawi putih secukupnya<br>- 1 sachet Bon cabe ukuran kecil<br>- Wijen secukupnya<br>- Parsley kering (optional)<br>- 100 ml susu UHT<br><br><strong>Cara Membuat:</strong></p></p>
											<ol>
											<li>Rebus mie sampai matang atau sesuai petunjuk di kemasan.</li>
											<li>Setelah matang angkat dan tiriskan.</li>
											<li>Masukkan bumbu instan ke dalam panci, tambahkan susu, aduk hingga mengental. Setelah itu masukkan mie, tambahkan Bon cabe, aduk rata.</li>
											<li>Sajikan di piring</li>
											<li>Tambahkan telur, sawi yang sudah direbus irisan cabe wijen, dan parsley.</li>
											<li>Siap disajikan</li>
											</ol>
										</div>
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div> <!-- Akhir Modal Olahan Mie Ramen Goreng -->
					</div>
			</div> <!-- Akhir Tampilan Olahan Mie Ramen Goreng -->

			<div class="col-md-3"> <!-- Awal Tampilan Olahan  Mie Goreng Kari  -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/miekari.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
						 <h4 class="card-title"> <strong> Mie Goreng Kari </strong> </h4> 
						<p class="card-text"> RESEP MIE TERFAVORIT  </p>
						<!-- Awal Modal Olahan  Mie Goreng Kari  -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalmiekari">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

						<div class="modal fade" id="myModalmiekari" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong>Mie Goreng Kari  </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/miekari.jpg" width="100%" height="10%"> 
											<p><strong>Bahan:</strong><br>- Mie kuning secukupnya<br>- 2 sdm cabai, giling halus<br>- 3 siung bawang merah<br>- 2 siung bawang putih<br>- 2 lembar kol<br>- 2 batang daun bawang<br>- 1 batang seledri<br>- 1 sdm rempah kari<br>- 1/2 sdt chili powder<br>- Kecap sesuai selera<br>- Garam dan lada sesuai selera<br><br><strong>Cara Membuat:</strong></p></p>
											<ol>
											<li>Tumis bawang putih dan bawang merah hingga wangi. Masukan cabai giling.</li>
											<li>Masak hingga matang.</li>
											<li>Tambahkan kol, daun bawang, dan seledri. Masukkan kari dan bubuk cabai. Aduk rata.</li>
											<li>Tambahkan kecap, garam, dan lada sesuai selera.</li>
											<li>Masukkan mie kuning yang sudah direbus. Aduk hingga rata.</li>
											<li>Sajikan dengan kerupuk, telur, dan bawang goreng.</li>
											</ol>
										</div>
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div> <!-- Akhir Modal Olahan  Mie Goreng Kari  -->
					</div>
			</div><!-- Akhir Tampilan Olahan  Mie Goreng Kari  -->

			<div class="col-md-3"> <!-- Awal Tampilan Olahan Mie Rebus Resto Padang -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/mierebusresto.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
						 <h4 class="card-title"> <strong> Mie Rebus Resto Padang  </strong> </h4> 
						<p class="card-text"> RESEP MIE TERFAVORIT  </p>
						<!-- Awal Modal Olahan Mie Rebus Resto Padang -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalmierebus">
							Detail Resep
							</button>
							<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>
					
						<div class="modal fade" id="myModalmierebus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> Mie Rebus Resto Padang  </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/mierebusresto.jpg" width="100%" height="10%"> 
											<p><strong>Bahan:</strong><br>- Mie kuning pipih<br>- 1 butir telur<br>- Daun bawang iris<br>- Tomat iris<br>- 1-2 sdm kecap manis<br>- 1 sdm Saori saus tiram<br>- Garam atau penyedap<br>- Air<br><br><strong>Bahan halus:</strong><br>- 1 sdm bawang merah<br>- 1 sdm bawang putih<br>- 1 sdm cabai giling <br><br><strong>Bahan pelengkap:</strong><br>- Telur ceplok<br>- Selada<br>- Timun<br>- Emping atau kerupuk merah<br>- Bawang goreng<br>- Seledri<br><br><strong>Cara Membuat:</strong></p>
											<ol>
											<li>Rebus mie kuning setengah matang lalu sisihkan.</li>
											<li>Tumis bawang merah dan bawang putih hingga wangi.</li>
											<li>Masukkan cabai giling, masak hingga matang.</li>
											<li>Tambahkan air secukupnya. Masukkan satu butir telur sambil diaduk cepat.</li>
											<li>Tambahkan daun bawang dan irisan tomat. Tambahkan saus tiram, kecap, dan garam atau penyedap.</li>
											<li>Masukkan mie kuning, aduk-aduk sebentar.</li>
											<li>Koreksi rasa</li>
											<li>Hidangkan bersama pelengkap.</li>
											</ol>
										</div>
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>  <!--Akhir Modal Olahan Mie Rebus Resto Padang -->
					</div>
			</div> <!-- Akhir Tampilan Olahan Mie Rebus Resto Padang -->

			<div class="col-md-3">  <!-- Awal Tampilan Olahan Mie Tek-Tek Spesial  -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/mie tekspesial.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
						 <h4 class="card-title"> <strong>  Mie Tek-Tek Spesial </strong> </h4> 
						<p class="card-text"> RESEP MIE TERFAVORIT  </p>
						<!-- Awal Modal Olahan Mie Tek-Tek Spesial  -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalmietektek">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

						<div class="modal fade" id="myModalmietektek" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> </h4>  Mie Tek-Tek Spesial </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/mie tekspesial.jpg" width="100%" height="10%"> 
											<p><strong>Bahan:</strong><br>- Mie telur secukupnya<br>- Sosis, bakso ayam, dan bakso sapi<br>- Sawi hijau dan kol secukupnya<br>- Saledri secukupnya<br>- Daun bawang secukupnya<br>- 2 butir telur<br><br><strong>Bumbu halus:</strong><br>- 5 siung bawang putih, halus<br>- 1 sdm penuh cabai, giling halus<br><br><strong>Bumbu:</strong><br>- 1/2 sdt lada<br>- Garam<br>- Kaldu bubuk<br>- 3 sdm kecap manis<br>- 2 sdm kecap asin <br><br><strong>Cara Membuat:</strong></p>
											<ol>
											<li>Tumis bawang putih dan cabai merah halus. Masukkan kecap asin dan kecap manis.</li>
											<li>Aduk-aduk lalu masukkan sayuran.</li>
											<li>Tambahkan sedikit air, masukkan semua bumbu. Aduk rata.</li>
											<li>Masukkan topping. Ceplok dua butir telur, biarkan sebentar hingga telur agak mengeras.</li>
											<li>Aduk rata bersama bahan lain.</li>
											<li>Masukkan mie yang sudah direbus, aduk hingga tercampur sempurna.</li>
											<li>Sajikan dengan kerupuk, acar, atau topping lainnya.</li>
											</ol>				
										</div>
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>  <!-- Akhir Modal Olahan Mie Tek-Tek Spesial  -->
					</div>
			</div>  <!-- Akhir Tampilan Olahan Mie Tek-Tek Spesial  -->
		</div>
	</div>	
</div> <!-- Akhir Resep Olahan Mie-->
	

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<br><style> .jumbotron{color: rgb(0, 0, 0); } </style>
			<div class="jumbotron" style="background-color: rgb(203, 167, 167);"></style>
				<div class="container mt-6">
					<div class="class-judul-produk" style="background-color: #f8f4f4; pudding: 5px 10px;">
					<h3 class="text-center" style="margin-top: 5px;"><strong> <span class="glyphicon glyphicon-bullhorn"></span> RESEP MASAKAN OLAHAN SAYURAN TERFAVORIT </strong></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


		<!-- Awal Resep Olahan Sayuran-->
		<div class="jumbotron" style="background-color: rgb(245, 229, 241);"></style>
			<br><style> .jumbotron{color: rgb(0, 0, 0); } </style>
	<div class="container">
		<div class="row">

			<div class="col-md-4"> <!-- Awal Tampilan Olahan Tumis Kangkung Terasi-->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/kangkung.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
						 <h4 class="card-title"> <strong>  Tumis Kangkung Terasi </strong> </h4> 
						<p class="card-text"> RESEP SAYUR TERFAVORIT  </p>
						<!-- Awal Modal Olahan Tumis Kangkung Terasi-->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalkangkung">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>
						<div class="modal fade" id="myModalkangkung" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong>  Tumis Kangkung Terasi </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/kangkung.jpg" width="100%" height="10%"> 
											<p>Bahan</p>
											<ul><li>1 ikat kangkung siangi</li><li>Saus tiram</li><li>Garam</li></ul>
											<p>Bumbu uleg</p>
											<ul><li>10 cabe merah</li><li>5 rawit</li><li>5 bawput</li><li>2 blok terasi</li></ul>
											<p>Cara membuat:</p>
											<ul><li>Tumis bumbu ulek sampai harum</li><li>Masukan terasi dan bumbu.</li><li>Masak sayur sebentar saja, sajikan.</li></ul>
										</div>
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div> <!-- Akhir Modal Olahan Tumis Kangkung Terasi-->
					</div>
			</div> 	<!-- Akhir Tampilan Olahan Tumis Kangkung Terasi--> 

			<div class="col-md-4"> <!-- Awal Tampilan Olahan  Brokoli Cah Sosis -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/brokoli.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
					<h4 class="card-title"> <strong> Brokoli Cah Sosis </strong> </h4> 
						<p class="card-text"> RESEP SAYUR TERFAVORIT  </p>
						<!-- Awal Modal Olahan  Brokoli Cah Sosis -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalbrokoli">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>
						<div class="modal fade" id="myModalbrokoli" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> Brokoli Cah Sosis </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/brokoli.jpg" width="100%" height="10%"> 
											<p>Bahan :</p>
											<ul><li>1 bonggol brokoli (siangi, cuci air garam)</li><li>4 buah sosis sapi (iris serong)</li><li>3 siung bawang putih, cincang</li><li>1/2 buah bawang bombay, iris memanjang</li><li>2 sdm saus tiram</li><li>1 sdt kecap asin</li><li>Garam merica secukupnya</li><li>Secukupnya air matang</li><li>Larutan maizena</li></ul>
											<p>Cara membuat :</p>
											<ol><li>Tumis bawang putih dan bawang bombay hingga harum. Masukan sosis tumis sebentar tambahkan air matang tunggu hingga mendidih.</li><li>Masukan brokoli dan bumbu lain nya. Koreksi rasa. Masak sekitar 2 menit saja.</li><li>Kentalkan dengan larutan maizena. Angkat dan sajikan.</li></ol>
										</div>
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>  <!-- Akhir Modal Olahan  Brokoli Cah Sosis -->
					</div>
			</div> <!-- Akhir Tampilan Olahan  Brokoli Cah Sosis -->
			
			<div class="col-md-4"> <!-- Awal Tampilan Olahan Tumis Kacang Panjang Telur Puyuh  -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/tumiskacangpanjang.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
					<h4 class="card-title"> <strong> Tumis Kacang Panjang Telur Puyuh </strong> </h4> 
						<p class="card-text"> RESEP SAYUR TERFAVORIT  </p>
						<!-- Awal Modal Olahan Tumis Kacang Panjang Telur Puyuh  -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModaltumis">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

						<div class="modal fade" id="myModaltumis" tabindex="-1" role="dialog" aria-labelledby="myModalModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> Tumis Kacang Panjang Telur Puyuh</h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/tumiskacangpanjang.jpg" width="100%" height="10%"> 
											<p>Bahan :</p>
											<ul><li>1 ikat kacang panjang</li><li>30 butir telur puyuh</li><li>2 sdm saus tiram</li><li>1 sdm kecap</li><li>1 sdt merica</li><li>5 buah cabai keriting (potong)</li><li>Gula secukupnya</li><li>Air</li></ul>
											<p>Bumbu halus :</p>
											<ul><li>5 butir kemiri</li><li>5 butir bawang putih</li></ul>
											<p>Cara memasak :</p>
											<ol><li>Tumis bumbu halus dan cabai</li><li>Masukkan kacang panjang, setelah layu tambahkan sedikit air</li><li>Tambahkan saus tiram, kecap, gula dan merica. Aduk rata.</li><li>Masukkan telur puyuh, aduk</li><li>Tunggu hingga matang</li></ol>
										</div>	
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>  <!--Akhir  Modal Olahan Tumis Kacang Panjang Telur Puyuh  -->
					</div>
			</div> <!-- Akhir Tampilan Olahan Tumis Kacang Panjang Telur Puyuh  -->

			<div class="col-md-4"> <!-- Awal Tampilan Olahan Sayur Bening Bayam   -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/sayurbayam.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
					<h4 class="card-title"> <strong> Sayur Bening Bayam </strong> </h4> 
						<p class="card-text"> RESEP SAYUR TERFAVORIT  </p>
						<!-- Awal Modal Olahan Sayur Bening Bayam   -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalbayam">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

						<div class="modal fade" id="myModalbayam" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> Sayur Bening Bayam </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/sayurbayam.jpg" width="100%" height="10%"> 
											<p>Bahan :</p>
											<ul><li>1 ikat bayam</li><li>Setengah bonggol jagung, pipil</li><li>3 siung bawmer iris</li><li>3 sdm minyak goreng</li><li>600 ml air</li><li>1 sdt kaldu ayam bubuk non msg, yg ada msg ckup setengah sdt aja</li><li>2 sdt kaldu jamur bubuk</li><li>Seujung sdt garam</li></ul>
											<p>Cara memasak :</p>
											<ol><li>Tuang minyak ke dlm wajan, tumis bawmer hingga harum, masukkan bayam, tumis hingga agak layu. Tuang air. Biarkan mendidih dl. Masukkan jagung.</li><li>Tambahkan kaldu jamur bubuk, kaldu ayam bubuk, dan garam. Aduk rata. Lakukan tes cicip.</li><li>Masak sampai tingkat kematangan bayam yg disukai, selera masing2 ya.</li><li>Angkat dan sajikan hangat</li></ol>
										</div>	
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div> <!-- Akhir Modal Olahan Sayur Bening Bayam   -->
					</div>
			</div> <!-- Akhir Tampilan Olahan Sayur Bening Bayam   -->
		
			<div class="col-md-4"> <!-- Awal Tampilan Olahan Gulai Nangka  -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/gulai-nangka.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
						 <h4 class="card-title"> <strong>  Gulai Nangka </strong> </h4> 
						<p class="card-text"> RESEP SAYUR TERFAVORIT  </p>
						<!-- Awal Modal Olahan Gulai Nangka  -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalnangka">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

						<div class="modal fade" id="myModalnangka" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong>  Gulai Nangka </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/gulai-nangka.jpg" width="100%" height="10%"> 
											<p>Bahan:</p>
											<ul><li>700 gram nangka muda, potong2</li><li>200 gram tetelan sapi</li><li>4 lonjor kacang panjang, potong2</li><li>1,2 liter santan (dari 1/2 butir kelapa)</li><li>15 buah cabe rawit utuh</li><li>1 ruas jari lengkuas,memarkan</li><li>3 lembar daun salam</li><li>Garam &amp; gula secukupnya</li></ul>
											<p>Bumbu halus:</p>
											<ul><li>10 butir bawang merah</li><li>6 siung bawang putih</li><li>2 buah cabe merah besar</li><li>5 cabe merah keriting</li><li>4 cm kunyit, bakar</li><li>4 butir kemiri, sangrai</li><li>1 sdm ketumbar, sangrai</li><li>1 sdt merica butiran</li><li>1/4 sdt jinten, sangrai</li></ul>
											<p>Cara membuat:</p>
											<ol><li>Didihkan air, rebus nangka muda sampai empuk, matikan api, buang airnya, sisihkan.</li><li>Didihkan air, rebus tetelan sampai agak lunak, matikan api, buang airnya, sisihkan.</li><li>Campur rebusan nangka &amp; tetelan didalam panci, tuangi santan.</li><li>Tumis bumbu halus sampai wangi, masukkan, cabe rawit utuh, daun salam &amp; lengkuas, aduk sampai layu, masukkan kacang panjang, bumbui garam &amp; gula, aduk rata, masak sampai kacang panjang agak layu, matikan api.</li><li>Tuang bumbu tumisan kedalam panci berisi nangka &amp; tetelan, hidupkan kembali kompor, masak sambil terus diaduk supaya santan tidak pecah, tes rasa, bila sudah pas matikan api, sajikan.</li></ol>
										</div>
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div> <!-- Akhir Modal Olahan Gulai Nangka  -->
					</div>
			</div> <!-- Akhir Tampilan Olahan Gulai Nangka  -->

			<div class="col-md-4">  <!-- Awal Tampilan Olahan Kembang Kol Cah Ayam   -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/sayurkembangkol.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
						 <h4 class="card-title"> <strong> Kembang Kol Cah Ayam </strong> </h4> 
						<p class="card-text"> RESEP SAYUR TERFAVORIT  </p>
						 <!-- Awal Modal Olahan Kembang Kol Cah Ayam   -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalkol">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>
						<div class="modal fade" id="myModalkol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> Kembang Kol Cah Ayam </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/sayurkembangkol.jpg" width="100%" height="10%"> 
											<p>Bahan:</p>
											<ul><li>1 bongkol kembang kol petik kuntum</li><li>100gr paha ayam fillet potong2</li><li>2 siung bawang putih iris tipis</li><li>2 siung bawang merah iris tipis</li><li>1 batang daun bawang iris tipis</li><li>1 sdm saus tomat</li><li>1 sdm saus tiram</li><li>1/2 sdt gula</li><li>1 sdt kecap ikan</li><li>Garam dan merica</li><li>Air maizena</li><li>100ml air</li></ul>
											<p>Cara membuat:</p>
											<ol><li>Lumuri ayam dgn garam dan merica. Sisihkan.</li><li>Tumis duo bawang sampai harum. Masukan ayam. Masak sampai berubah warna.</li><li>Tuang air sampai mendidih.Masukan kembang kol. Beri saus tomat, saus tiram, gula, kecap ikan, garam dan merica. Aduk rata. Koreksi rasa. Masak sampai matang.</li><li>Beri air maizena. Masak sampai meletup.</li><li>Menjelang diangkat beri daun bawang.</li></ol>
											
										</div>
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>  <!-- Akhir Modal Olahan Kembang Kol Cah Ayam   -->
					</div>
			</div>  <!-- Akhir Tampilan Olahan Kembang Kol Cah Ayam   -->
		</div>
	</div>
</div> <!-- AKhir Resep Olahan Sayuran -->


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<br><style> .jumbotron{color: rgb(0, 0, 0); } </style>
			<div class="jumbotron" style="background-color: rgb(203, 167, 167);"></style>
				<div class="container mt-6">
					<div class="class-judul-produk" style="background-color: #f8f4f4; pudding: 5px 10px;"> 
					<h3 class="text-center" style="margin-top: 5px;"><strong> <span class="glyphicon glyphicon-bullhorn"></span> RESEP MASAKAN OLAHAN DAGING TERFAVORIT </strong></h3>
			  		</div>
				</div>
			</div>
		</div>
	</div>
</div>

		<!-- Awal Resep Olahan Daging-->
<div class="jumbotron" style="background-color: rgb(245, 229, 241);"></style>
	<br><style> .jumbotron{color: rgb(1, 1, 1); } </style>
<div class="container">
	<div class="row">
		<div class="col-md-3"> <!-- Awal Tampilan Olahan Sate Maranggi -->
			<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
			</div>
			<img src="images/satemaranggi.png" style="width: 200px; height: 200px;" class="card-img-top">
				<div class="card-bod">
					 <h4 class="card-title"> <strong>  Sate Maranggi </strong> </h4> 
					<p class="card-text"> RESEP DAGING TERFAVORIT  </p>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalsate">
						Detail Resep
					</button>
					<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>
					<div class="modal fade" id="myModalsate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
									<h4 class="modal-title" id="myModalLabel"> <strong>  Sate Maranggi  </h4> </strong>
								</div>
									<div class="modal-body">
										<br><img src="images/satemaranggi.png" width="100%" height="10%"> 
										<br><h3>Bahan untuk 12 tusuk: 
											<ul type="stylesheet">
												<li> 300 gr daging has dalam </li>
												<br> Bumbu halus:
													<li> 6 siung bawang putih </li>	
													<li> 10 siung bawang merah  </li>	
													<li> 3 cm lengkuas, iris </li> 
													<li> 2 sdt ketumbar, sangrai </li>
													<li> 3 sdm air asam jawa</li>
													<li>4 sdm Kecap Sedaap Kedelai Hitam Special</li>
													 <li> 1 sdm gula merah</li>
													 <li> 1 sdt garam </li>
													<li>1 sdt merica</li>
													<li>½ sdt kaldu jamur</li> 
												 <br>Bahan sambal tomat:
												 <li> 2 buah tomat
												<li> 5 cabai rawit merah</li>
												<li> 15 cabai rawit hijau</li>
												<li>1 siung bawang putih</li>
												<li>3 siung bawang merah</li>
												<li>2 buah jeruk limau</li>
												<li>½ sdt garam</li>
												<li>1 sdt gula</li>
											</ul>
												 <br> Langkah Pembuatan: 
											<ol type="1">
												<li>	Iris daging memanjang kurang lebih selebar jari, dengan arah memotong serat.</li>
												<li>	Blender semua bumbu halus hingga benar-benar halus, tuang ke dalam daging aduk rata, marinasi daging minimal 1-2 jam.</li>
												<li>	Setelah dua jam, tusuk daging menggunakan tusuk sate yang sudah direndam terlebih dahulu, tusuk daging dengan arah zig-zag.</li>
												<li>	Panaskan griller, oles dengan sedikit minyak/emak sapi, panggang kedua sisi sate sambil sesekali dioles dengan sisa bumbu halus. Panggang sate dengan tingkat kematangan sesuai selera.</li>
												<li>	Untuk sambal tomat, ulek bawang putih dan garam hingga halus. Tambahkan cabai rawit merah dan hijau ulek hingga halus, masukkan irisan tomat bumbui dengan gula, beri perasan jeruk limau, lalu diaduk rata.</li>
												<li>	Sajikan sate maranggi dengan sambal tomat, irisan bawang merah, jeruk limau, dan kecap manis.</li>
											</ol>
										</h3> </p>
									</li>
								</ol>
										
									</div>
								<div class="modal-footer">
								<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>  <!-- Akhir Tampilan Olahan Sate Maranggi -->
	
		<div class="col-md-3"> <!-- Awal Tampilan Olahan Empal Serundeng -->
			<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
			</div>
			<img src="images/empalserundeng.png" style="width: 200px; height: 200px;" class="card-img-top">
				<div class="card-bod">
				<h4 class="card-title"> <strong> Empal Serundeng  </strong> </h4> 
					<p class="card-text"> RESEP DAGING TERFAVORIT  </p>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalempal">
						Detail Resep
					</button>
					<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

					<div class="modal fade" id="myModalempal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
									<h4 class="modal-title" id="myModalLabel"> <strong> Empal Serundeng </h4> </strong>
								</div>
									<div class="modal-body">
										<br><img src="images/empalserundeng.png" width="100%" height="10%"> 
										<br><b><h3> Bahan (untuk 8-9 porsi): 
											<ul type="stylesheet">
												<li> 300 gr daging has dalam </li>
												<br> Bumbu halus:
													<li> 1,2 kg daging sapi topside</li>	
													<li> 	1,2 liter air </li>
													<li>    2 sdt garam </li>
													<li>   2 sdt kaldu bubuk </li>
													<li>   ¼ sdt merica </li>
											<br>Bahan lainnya :
												<li>	100 gr kemiri  </li>
												<li>100 gr lengkuas, iris  </li>
												<li>80 gr gula merah  </li>
												<li> 2 sdm air asam jawa  </li>
												<li> 150 ml santan instan  </li>
												<li>4 batang serai, geprek, potong  </li>
												<li>6 lembar daun salam  </li>
												<li> 4 lembar daun jeruk  </li>
												<li> 1 sdt garam  </li>
												<li> 1 sdm gula pasir  </li>
												<li>	1 sdt kaldu bubuk  </li>
												<li>	500 ml air  </li>
												<li>	500 ml air kaldu sapi   </li>
											<br> Bahan bumbu halus:
												<li>	15 siung bawang putih  </li>
												<li>	18 buah bawang merah  </li>
												<li>3 cm jahe, iris </li>
												<li>2 sdt ketumbar </li>
												<li>½ butir pala </li>
												<li>100 ml Minyak Goreng Fortune </li>
											<br> Pelengkap:
												<li>Nasi putih Beras Premium Fortune </li>
												<li>Bawang Goreng</li>
												<li>Minyak Goreng Fortune untuk menggoreng</li>
											</ul>  
											<br> Langkah Pembuatan: 
											 <ol type="1">
												<li> Masukkan daging, air, garam, kaldu bubuk, dan merica ke dalam presto. Presto selama 30 menit.</li>
												<li> Dinginkan daging, potong-potong lalu pukul-pukul perlahan dengan ulekan batu atau rolling pin.</li>
												<li>Haluskan kemiri dengan food processor lalu sangrai hingga wangi dan sedikit kecokelatan dan sisihkan.</li>
												<li>Haluskan lengkuas dengan sedikit air hingga halus lalu sisihkan.</li>
												<li>Blender bawang merah, bawang putih, jahe, ketumbar, pala, dan Minyak Goreng Fortune hingga halus.</li>
												<li>Tumis bumbu halus hingga wangi lalu masukkan serai, daun salam, dan daun jeruk, dan tumis kembali.</li>
												<li>Masukkan kemiri dan lengkuas, aduk rata, lalu masak di api kecil hingga wangi.</li>
												<li>Tambahkan air, santan, air asam jawa, gula merah, garam, gula pasir, kaldu bubuk, dan air kaldu sapi, lalu diaduk rata.</li>
												<li>Masukkan daging, masak di api sedang hingga air menyusut, lalu sisihkan daging.</li>
												<li>Masak kembali sisa bumbu di api sedang kecil hingga menyusut dan mengeluarkan minyak, dan sisihkan.</li>
												<li> Panaskan Minyak Goreng Fortune lalu goreng daging hingga kecokelatan, lalu tiriskan.</li>
												<li> Goreng serundeng di api sedang kecil hingga kecokelatan, dan sisihkan.</li>
												<li> Empal serundeng siap disajikan dengan nasi dan taburan bawang goreng sebagai pelengkap.</li>
										</h3> </p>
									</div>
								<div class="modal-footer">
								<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>   <!-- Akhir Tampilan Olahan Empal Serundeng -->

		<div class="col-md-3"> <!-- Awal Tampilan Olahan Kalio Daging & Ubi -->
			<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
			</div>
			<img src="images/kaliodaging.png" style="width: 200px; height: 200px;" class="card-img-top">
				<div class="card-bod">
					 <h4 class="card-title"> <strong> Kalio Daging & Ubi  </strong> </h4> 
					<p class="card-text"> RESEP DAGING TERFAVORIT  </p>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalkalio">
						Detail Resep
					</button>
					<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

					<div class="modal fade" id="myModalkalio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
									<h4 class="modal-title" id="myModalLabel"> <strong>  Kalio Daging & Ubi  </h4> </strong>
								</div>
									<div class="modal-body">
										<br><img src="images/kaliodaging.png" width="100%" height="10%"> 
										<br><b><h3> Bumbu halus (untuk 10-11 porsi):
											<li> 10 buah bawang merah </li>
											<li> 5 buah bawang putih </li>
											<li> 15 buah cabai merah besar atau 20 cabai keriting </li>
											<li> 10 buah cabai rawit merah</li>
											<li> 2 cm jahe</li>
											<li> 8 buah kemiri</li>
											<li> 1 sdt ketumbar, sangrai</li>
											<li> 3 cm kunyit</li>
											<li> ½ sdt jintan</li>
											<li> Minyak goreng </li>
										<br>Bahan pelengkap:
											<li> 800 gr daging sengkel, potong </li>
											<li> 500 gr ubi jepang, kupas, potong </li>
										<br> Bahan aromatik:
											<li> 2 batang serai </li>
											<li> 2 jempol lengkuas </li>
											<li> 3 lembar daun salam </li>
											<li> 3 lembar daun jeruk </li>
											<li> 100 gr kelapa sangrai, opsional </li> 
										<br> Bahan lainnya:
											<li> 210 ml santan kental  </li>
											<li> 1,2 liter air/secukupnya </li>
											<li>Royco Bumbu Kaldu Sapi </li>
											<li>¼ sdt gula, opsional  </li>
										<br> Rempah:
											<li> 2 butir cengkih </li>
											<li> 3 butir kapulaga</li>
											<li> ½ batang kayu manis</li>
											<li> 1 butir bunga lawang</li>
									</ul>  
									<br> Langkah Pembuatan: 
									<ol type="1">
											<li> Blender bumbu halus dengan minyak, lalu tumis hingga minyak keluar.</li>
											<li> Masukkan serai, lengkuas, daun salam, daun jeruk, cengkeh, kapulaga, kayu manis, bunga lawang, tumis hingga wangi, lalu masukkan kelapa sangrai yang sudah di blender, dan diaduk rata.</li>
											<li> Masukkan daging, air, garam, merica dan royco kaldu sapi, masak hingga 90 menit.</li>
											<li> Panaskan minyak, lalu goreng ubi hingga sedikit kecokelatan.</li>
											<li> Masukkan ubi, santan, tambahan air, masak kembali hingga air menyusut dan mengental.</li>
											<li> Kalio daging dan ubi siap disajikan </li>
									</ol>
								</h3> </p>
									</div>
								<div class="modal-footer">
								<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>  <!-- Akhir Tampilan Olahan Kalio Daging & Ubi -->

		<div class="col-md-3">  <!-- Awal Tampilan Olahan Rendang Daging  -->
			<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
			</div>
			<img src="images/rendang.png" style="width: 200px; height: 200px;" class="card-img-top">
				<div class="card-bod">
				<h4 class="card-title"> <strong> Rendang Daging </strong> </h4> 
					<p class="card-text"> RESEP DAGING TERFAVORIT  </p>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalrendang">
						Detail Resep
					</button>
					<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

					<div class="modal fade" id="myModalrendang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
									<h4 class="modal-title" id="myModalLabel"> <strong> Rendang Daging </h4> </strong>
								</div>
									<div class="modal-body">
										<br><img src="images/rendang.png" width="100%" height="10%"> 
										<br><b><h3>Bahan (untuk 12 pcs):
											<ul type="stylesheet">
												 <li>600 gr daging sapi sengkel, potong</li>
												 <li>5 siung bawang putih</li>
												 <li>7 siung bawang merah</li>
												 <li>5 butir kemiri</li>
												 <li>8 cabai keriting merah</li>
												 <li>2 cabai merah</li>
												 <li>3 cm jahe</li>
												 <li> 80 ml minyak kelapa</li>
												 <li> 2 batang serai, potong dan geprek</li>
												 <li> 1 lengkuas, iris dan geprek</li>
												 <li> 5 lembar daun jeruk purut</li>
												 <li> 2 lembar daun kunyit</li>
												 <li> 1 lembar daun pandan</li>
												 <li> 3 lembar daun salam</li>
												 <li> 500 ml air</li>
												 <li> >500 ml santan kental</li> 
											<br> Rempah kering:
												 <li> 2 sdt lada putih bubuk</li>
												 <li> 1 sdm ketumbar bubuk </li>
												 <li> 2 sdt jinten bubuk</li>
												 <li> ¼ sdt kayu manis bubuk</li>
												 <li> 1 sdt pala bubuk</li>
												 <li> 1 sdt bunga lawang bubuk</li>
												 <li> 1 sdt kapulaga bubuk</li>
												 <li> 1 sdt cengkeh bubuk</li>
												 <li> 1 sdt cabai bubuk </li>
											<br> Lainnya:
												 <li> ½ sdm garam</li> 
												 <li> 2 sdt gula</li>
												 <li>1 sdt kaldu jamur</li>
											</ul>  
											<br> Langkah Pembuatan: 
											<ol type="1">
												<li>Blender bawang merah, bawang putih, kemiri, cabai merah, cabai keriting merah, dan jahe menggunakan minyak kelapa.</li>
												<li>Campurkan daging dengan rempah kering lalu ratakan sambil dipijat-pijat, agar bumbu lebih meresap dan bisa dimarinasi semalaman lalu tambahkan garam.</li>
												<li>Panaskan pan dan tuang bumbu halus, tambahkan serai, lengkuas, daun salam, daun jeruk purut, daun kunyit, dan daun pandan lalu tumis jangan sampai terlalu kering. Kemudian masukkan daging yang sudah dimarinasi sampai tersangrai dengan baik lalu masukkan santan dan air, kemudian aduk rata.</li>
												<li>Masukkan garam, gula dan kaldu jamur lalu masak hingga mendidih menggunakan api sedang lalu gunakan api kecil dan tutup pan sambil sesekali diaduk dan masak hingga meresap.</li>
												<li>Saat air sudah akan habis, masak rendang dengan api kecil sambil terus diaduk-aduk hingga kering dan bumbu menempel pada daging.</li>
												<li>Rendang siap disajikan atau disimpan dalam wadah tertutup dan letakkan di lemari es.</li>
											</ol>
									 </h3> </p>
									</div>
								<div class="modal-footer">
								<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- Akhir Tampilan Olahan Rendang Daging  -->
		</div>
	</div>		
</div>  <!-- Akhir Resep Olahan Daging-->

		
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<br><style> .jumbotron{color: rgb(0, 0, 0); } </style>
			<div class="jumbotron" style="background-color: rgb(203, 167, 167);"></style>
				<div class="container mt-6">
					<div class="class-judul-produk" style="background-color: #f8f4f4; pudding: 5px 10px;">
					<h3 class="text-center" style="margin-top: 5px;"><strong> <span class="glyphicon glyphicon-bullhorn"></span> RESEP MASAKAN OLAHAN IKAN TERFAVORIT </strong></h3>
			  		</div>
				</div>
			</div>
		</div>
	</div>
</div>
				<!-- Awal Resep Olahan Ikan-->
	<div class="jumbotron" style="background-color: rgb(245, 229, 241);"></style>
			<br><style> .jumbotron{color: rgb(9, 8, 8); } </style>
	<div class="container">
		<div class="row">
			<div class="col-md-3"> <!-- Awal Tampilan Olahan Ikan Bawal Kukus -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/ikanbawal.jpeg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
						 <h4 class="card-title"> <strong> Ikan Bawal Kukus </strong> </h4> 
						<p class="card-text"> RESEP IKAN TERFAVORIT </p>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalbawal">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

						<div class="modal fade" id="myModalbawal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> Ikan Bawal Kukus </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/ikanbawal-remove.png" width="100%" height="10%"> 
											<p><strong>Bahan yang diperlukan</strong> :</p>
											<ul>
											<li>500 gr atau 2 ekor ikan bawal putih</li>
											<li>1 jempol jahe, iris tipis</li>
											<li>2 bawang putih, iris</li>
											<li>1 bawang merah, iris</li>
											<li>1 cabe merah keriting (boleh ganti rawit)</li>
											<li>2 sdm kecap asin</li>
											<li>1 sdm minyak wijen</li>
											<li>50 ml air</li>
											<li>1 cubit garam</li>
											<li>1 sdm perasan jeruk nipis</li>
											<li>Daun ketumbar secukupnya</li>
											</ul>
											<p><strong>Cara membuat</strong> :</p>
											<ol>
											<li>Cuci dan bersihkan ikan bawal.</li>
											<li>Beri sedikit garam dan air jeruk nipis</li>
											<li>Taruh ikan dalam sebuah mangkuk dan masukan jahe, bawang merah, bawang putih, kecap asin, minyak wijen dan air.</li>
											<li>Kukus atau tim dalam wajan tertutup selama kurang lebih 15 menit.</li>
											<li>Sesaat sebelum matang masukan daun ketumbar.</li>
											</ol>
										</div>
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div> <!-- AkhirTampilan Olahan Ikan Bawal Kukus -->

			<div class="col-md-3"> <!-- Awal Tampilan Olahan Ikan kembung sambalado -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/ikanbalado.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
					<h4 class="card-title"> <strong>Ikan kembung sambalado </strong> </h4> 
						<p class="card-text"> RESEP IKAN TERFAVORIT  </p>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalbalado">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

						<div class="modal fade" id="myModalbalado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> Ikan kembung sambalado </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/ikanbalado.jpg" width="100%" height="10%"> 
											<p><strong>Bahan-bahan:</strong></p>
											<ul>
											<li>6 ekor ikan kembung</li>
											<li>25 buah cabe merah</li>
											<li>4 siung bawang merah</li>
											<li>2 siung bawang putih</li>
											<li>1/3 bagian tomat</li>
											<li>Cabe rawit sesuai selera</li>
											<li>Sedikit jeruk nipis</li>
											<li>Garam, gula, dan kaldu bubuk secukupnya</li>
											</ul>
											<p><strong>Cara memasak :</strong></p>
											<ol>
											<li>Bersihkan isi perut ikan, dan cuci bersih, lalu lumuri rata dengan jeruk nipis, garam, dan ketumbar bubuk secukupnya, lalu sisihkan</li>
											<li>Ikan yang sudah dimarinasi, digoreng kering, lalu sisihkan.</li>
											<li>Panaskan minyak secukupnya, goreng sebentar cabe merah, bawang merah, bawang putih, dan tomat sampai setengah layu.</li>
											<li>Ulek kasar bahan sambal, dan masukkan cabe rawitnya untuk sekalian diulek.</li>
											<li>Panaskan minyak yang agak banyak, tumis bumbu yang telah diulek.</li>
											<li>Tambahkan gula seujung sendok, garam dan kaldu bubuk secukupnya.</li>
											<li>Lalu tambahkan sedikit perasan jeruk nipis.</li>
											<li>Koreksi rasa, jika sudah sesuai selera, masak sambal sampai tidak terasa cabe mentah lagi</li>
											<li>Terakhir campur ikan gorengnya dengan sambal, aduk rata, selesai.</li>
											</ol>
										</div>
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div> <!-- Akhir Tampilan Olahan Ikan kembung sambalado -->
			
			<div class="col-md-3"> <!-- Awal Tampilan Olahan Ikan Tenggiri asam pedas -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/ikantenggiriasampedas.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
					<h4 class="card-title"> <strong> Ikan Tenggiri asam pedas  </strong> </h4> 
						<p class="card-text"> RESEP IKAN TERFAVORIT  </p>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModaltenggiri">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

						<div class="modal fade" id="myModaltenggiri" tabindex="-1" role="dialog" aria-labelledby="myModalModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> </h4>Ikan Tenggiri asam pedas </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/ikantenggiriasampedas.jpg" width="100%" height="10%"> 
											<p><strong>Bahan yang diperlukan:</strong></p>
											<ul>
											<li>500 gr ikan tenggiri</li>
											<li>1 buah tomat, potong-potong</li>
											<li>Rawit merah secukupnya</li>
											<li>Minyak untuk menumis</li>
											<li>1 sdm asam jawa, larutkan dgn sedikit air, buang ampasnya.</li>
											<li>Garam gula secukupnya</li>
											<li>Air matang secukupnya</li>
											</ul>
											<p><strong>Bumbu yang dihaluskan :</strong></p>
											<ul>
											<li>10 butir bawang merah</li>
											<li>2 siung bawang putih</li>
											<li>2 cm lengkuas</li>
											<li>3 cm kunyit</li>
											<li>1 batang sereh, ambil putihnya</li>
											<li>10 Cabe merah keriting</li>
											<li>3 butir kemiri</li>
											<li>1 sdm terasi</li>
											<li>5 lembar daun jeruk</li>
											<li>2 lembar daun salam</li>
											</ul>
											<p><strong>Cara memasak :</strong></p>
											<ol>
											<li> Potong-potong ikan, bersihkan lalu baluri dengan air jeruk kunci dan garam, diamkan 15 menit lalu bilas.</li>
											<li>Tumis bumbu halus sebentar, lalu masukkan daun salam, daun jeruk, tumis sampai wangi.</li>
											<li>Masukkan air matang secukupnya dan air asam jawa.</li>
											<li>Tambahkan garam gula, tunggu mendidih lalu masukkan ikan, masak sampai ikan matang</li>
											<li>Terakhir masukkan tomat dan cabe rawit, aduk rata.</li>
											<li>Koreksi rasa, angkat, sajikan.</li>
											</ol>
										</div>	
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div> <!-- Akhir Tampilan Olahan Ikan Tenggiri asam pedas -->
	
			<div class="col-md-3"> <!-- Awal Tampilan Olahan Ikan Salem Siram Cabe Pete  -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/ikansalempete.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
					<h4 class="card-title"> <strong> Ikan Salem Siram Cabe Pete </strong> </h4> 
						<p class="card-text"> RESEP IKAN TERFAVORIT  </p>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalpete">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

						<div class="modal fade" id="myModalpete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong>  </h4> Ikan Salem Siram Cabe Pete </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/ikansalempete-remove.png" width="100%" height="10%"> 
											<p><strong>Bahan-bahan:</strong></p>
											<ul>
											<li>4 buah ikan salem ukuran sedang</li>
											<li>300 cc air</li>
											<li>Minyak untuk menumis dan menggoreng</li>
											<li>2 sdm saus tiram</li>
											<li>2 sdm kecap manis</li>
											<li>3 lembar daun salam</li>
											<li>Lada dan garam secukupnya</li>
											</ul>
											<p><strong>Bumbu yang diiris:</strong></p>
											<ul>
											<li>5 buah cabe hijau besar</li>
											<li>8 siung bawang merah</li>
											<li>5 siung bawang putih</li>
											<li>1 genggam pete</li>
											<li>5 buah cabe merah besar</li>
											<li>10 buah cabe rawit merah</li>
											<li>1 ruas lengkuas</li>
											<li>1 ruas jahe</li>
											</ul>
											<p><strong>Cara membuat:</strong></p>
											<ol>
											<li>Goreng ikan salem hingga matang, tiriskan.</li>
											<li>Tumis semua bumbu bersama daun salam hingga harum.</li>
											<li>Masukkan air, tambahkan saus tiram, kecap, lada, dan garam.</li>
											<li>Setelah mendidih, masak sebentar saja agar bumbu tetap segar tidak terlalu layu.</li>
											<li>Susun salem goreng di atas piring, siram dengan bumbu. Siap disajikan</li>
											</ol>
										</div>	
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div> <!-- Akhir Tampilan Olahan Ikan Salem Siram Cabe Pete  -->
		</div>
	</div>
</div> <!-- Akhir Resep Olahan Ikan -->

	
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<br><style> .jumbotron{color: rgb(0, 0, 0); } </style>
			<div class="jumbotron" style="background-color: rgb(203, 167, 167);"></style>
				<div class="container mt-6">
					<div class="class-judul-produk" style="background-color: #f8f4f4; pudding: 5px 10px;">
					<h3 class="text-center" style="margin-top: 5px;"><strong> <span class="glyphicon glyphicon-bullhorn"></span> RESEP MASAKAN OLAHAN KUE TERFAVORIT </strong></h3>
			  		</div>
				</div>
			</div>
		</div>
	</div>
</div>
					<!-- Awal Resep Olahan KUE-->
<div class="jumbotron" style="background-color: rgb(245, 229, 241);"></style>
		<br><style> .jumbotron{color: rgb(0, 0, 0); } </style>
	<div class="container">
		<div class="row">
			<div class="col-md-3"> <!-- Awal Tampilan Olahan Pie Susu   -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/kuepiesusu.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
						 <h4 class="card-title"> <strong> Pie Susu </strong> </h4> 
						<p class="card-text"> RESEP KUE TERFAVORIT </p>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalpie">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

						<div class="modal fade" id="myModalpie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> Pie Susu </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/kuepiesusu.jpg" width="100%" height="10%"> 
											<p><strong>Bahan:</strong></p>
											<p><strong></strong>- 100 gram margarin<br>- 10 sendok makan tepung terigu</p></p>
											<p><strong>Bahan krim susu:</strong></p>
											<p><strong></strong>- 5 sendok makan air<br>- 4 sachet kental manis putih<br>- 1 kuning telur<br>- 1 sendok         makan tepung maizena<br>- 1/4 sendok teh garam<br>- 1/4 sendok teh vanili bubuk</p>
											<p><strong>Cara membuat resep kue wajan:</strong></p>
											<ol>
											<li>Campur tepung terigu dan margarin, uleni. Ratakan di wajan teflon. Tusuk-tusuk dengan garpu.</li>
											<li>Campur semua bahan krim susu, aduk rata. Tuang ke atas pai.</li>
											<li>Tutup teflon, masak dengan api kecil selama 40 menit. Tunggu sampai dingin.</li>
											<li>Potong pai susu, sajikan dengan potongan buah di atasnya.</li>
											</ol>
										</div>
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div> <!-- Akhir Tampilan Olahan Pie Susu   -->

			<div class="col-md-3"> <!-- Awal Tampilan Olahan Brownies Oreo  -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/kuebrownisoreo.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
					<h4 class="card-title"> <strong> Brownies Oreo </strong> </h4> 
						<p class="card-text"> RESEP KUE TERFAVORIT  </p>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModaloreo">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

						<div class="modal fade" id="myModaloreo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> Brownies Oreo </h4> </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/kuebrownisoreo.jpg" width="100%" height="10%"> 
											<p><strong>Bahan:</strong></p></p>
											<p><strong></strong>- 2 bungkus oreo @137gram<br>- 100 gram butter/margarine (cairkan)<br>- 1 butir telur<br>-100 gram meses<br>- 50 gram keju cheddar parut/parmesan<br>- 5 sdm susu cair cokelat (saya pakai Ovaltine)<br>- 1 sdt bubuk vanili<br>- 1 sdt SP/cake emulsifier</p>
											<p><strong>Cara membuat resep kue wajan:</strong></p>
											<ol>
											<li>Campur semua bahan. Aduk rata.</li>
											<li>Oles loyang dengan butter. Tuang adonan.</li>
											<li>Tutup wajan rapat. Masak selama 20-30 menit.</li>
											<li>Taburi topping sesuai selera. Angkat.</li>
											</ol>
										</div>
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div> <!-- Akhir Tampilan Olahan Brownies Oreo  -->
			
			<div class="col-md-3"> <!-- Awal Tampilan Olahan Chiffon Pandan  -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/kuechiffonpandan.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
					<h4 class="card-title"> <strong> Chiffon Pandan </strong> </h4> 
						<p class="card-text"> RESEP KUE TERFAVORIT  </p>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalpandan">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

						<div class="modal fade" id="myModalpandan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> 
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong> </h4> Chiffon Pandan </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/kuechiffonpandan.jpg" width="100%" height="10%"> 
											<p><strong>Bahan A:</strong></p></p>
											<p><strong></strong>- 7 kuning telur<br>- 60 gram gula pasir<br>- 150 ml santan cair<br>- 100 ml minyak goreng<br>- pasta pandan</p>
											<p><strong>Bahan kering A:</strong></p>
											<p><strong></strong>- 150 gram terigu kunci biru<br>- 1 sdm tepung maizena<br>- 1 sdt baking soda<br>- 20 gram susu bubuk putih<br>- 1/2 sdt garam halus</p>
											<p><strong>Bahan B:</strong></p></p>
											<p><strong></strong>- 7 putih telur<br>- 1 sdt cream of tar tar<br>- 150-170 gram gula pasir</p>
											<p><strong>Cara membuat resep kue wajan:</strong></p>
											<ol>
											<li>Campur semua bahan kering A.</li>
											<li>Kocok telur bahan A, campur gula pasir sampai tercampur rata.</li>
											<li>Masukkan bahan kering, campur minyak. Aduk rata. Tambahkan adonan kuning telur tadi.</li>
											<li>Bahan B, kocok putih telur sampai berbusa. Masukkan cream of tar tar, kocok sambil masukkan gula pasir secara perlahan. Kocok hingga mengembang.</li>
											<li>Masukkan adonan B sebanyak 2 centong ke bahan A, aduk rata.</li>
											<li>Gabungkan semua bahan sambil diaduk perlahan. Tambahkan pasta pandan, aduk rata.</li>
											<li>Tuang ke loyang setinggi 1/2 bagian, panggang hingga matang merata.</li>
											</ol>
										</div>	
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div> <!-- Akhir Tampilan Olahan Chiffon Pandan  -->
	
			<div class="col-md-3"> <!-- Awal Tampilan Olahan Cereal Pancake -->
				<div class = "card border-dark" style="width: 18rem; float: left;margin: 40px;">
				</div>
				<img src="images/kuecerealpencake.jpg" style="width: 200px; height: 200px;" class="card-img-top">
					<div class="card-bod">
					<h4 class="card-title"> <strong> Cereal Pancake </strong> </h4> 
						<p class="card-text"> RESEP KUE TERFAVORIT  </p>
						<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModalpencake">
							Detail Resep
						</button>
						<button type="submit" name="kirim" class="btn btn-danger">
 						 <span class="glyphicon glyphicon-heart"></span> Tambah Favorit </button>

						<div class="modal fade" id="myModalpencake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>		
										<h4 class="modal-title" id="myModalLabel"> <strong>  </h4> Cereal Pancake </strong>
									</div>
										<div class="modal-body">
											<br><img src="images/kuecerealpencake.jpg" width="100%" height="10%"> 
											<p><strong>Bahan kering:</strong></p></p>
											<p><strong></strong>- 1 1/2 cup (210 gr) terigu<br>- 3 sdm (48 gr) gula pasir<br>- 1 sdt baking powder<br>- 1/2 sdt baking soda<br>- 1 sdt garam</p>
											<p><strong>Bahan basah:</strong></p>
											<p><strong></strong>- 2 telur kocok rata<br>- 1 cup (240 ml) buttermilk (jika tidak ada beri susu uht hangat dengan 2 sdm jeruk nipis, biarkan 15 menit)<br>- 2 sdm butter lelehkan<br>- 1 sdm vanila ekstrak</p>
											<p><strong>Cara membuat resep kue wajan:</strong></p></p>
											<ol>
											<li>Campurkan, aduk rata bahan kering, sisihkan.</li>
											<li>Di mangkuk terpisah, campurkan bahan basah sampai rata.</li>
											<li>Masukkan bahan basah ke bahan kering, lalu aduk tetapi jangan overmix karena tidak akan mengembang, diamkan di kulkas selama 15 menit.</li>
											<li>Panaskan wajan, oleskan sedikit butter ke wajan anti lengket lalu tuangkan 1 sdm ke wajan, tunggu sampai ada gelembung di permukaan lalu balik, angkat jika sudah kecokelatan, beri topping sesuai selera.</li>
											</ol>
										</div>	
									<div class="modal-footer">
									<a href="resepfavorit.php" class="btn btn-primary">Tutup</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div> <!-- Akhir Tampilan Olahan Cereal Pancake -->
		</div>
	</div>
</div> <!-- Akhir Resep Olahan KUE-->

<div class="row">
	<div class="col-md-12">
		<br><style> .jumbotron{color: hsl(0, 11%, 4%); } </style> 
	<div class="jumbotron" style="background-color: rgb(232, 192, 222);"></style> <!-- Awal Jumbotron-->
		<div class="container">
		<center>Copyright @COOKINGRARA, design with <span class="glyphicon glyphicon-heart"></span> by AULIA AZAHRA<br/>
		<a href="index.html"> Beranda </a> | <a href="aboutcooking.html"> Tentang Kami </a> | <a href="contactcooking.html"> Hubungi Kami </a> | <a href="resepfavorit.html">Aneka Resep Favorit </a><br/><br/>	
		
		</center>
	</div>
	</div>  <!-- Akhir Jumbotron-->
</div>
</div>


    <script src="bootstrap/js/jQuery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html> 