<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<br><style> .jumbotron{color: rgb(239, 229, 222); } </style>
		<div class="jumbotron" style="background-color: rgb(31, 36, 38);"></style>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			<div class="jumbotron" style="background-color: rgb(245, 229, 241);"></style>
	<br><style> .jumbotron{color: rgb(15, 14, 14); } </style>
						<h2>SELAMAT DATANG ( <?php echo $_SESSION['username'];?> )</h2>
						<p>Ini adalah website Resep Masakan Cooking Rara. Website ini bermanfaat untuk memudahkan para sahabat cooking rara dalam memperoleh ide masakan yang Lezat dan Enak</p>
						<p><a class="btn btn-warning btn-lg" href="tampil-mahasiswa.php" role="button">RESEP MASAKAN</a>
						<a class="btn btn-danger btn-lg" href="tampil-user.php"role="button">User</a></p>
				</div>
      </div>
		</div>
		</div>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>