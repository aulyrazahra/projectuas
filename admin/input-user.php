<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
    <br><style> .jumbotron{color: hsl(0, 11%, 4%); } </style> 
			<div class="jumbotron" style="background-color: rgb(184, 178, 152);"></style> <!-- Awal Jumbotron-->
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-user.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>

    <?php include "footer.php";?>