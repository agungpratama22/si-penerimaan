<div class="container">
	<div class="row">
		<div class ="col-xs-12">

			<div class="alert alert-info" style="background-color:#1e313e">
				<strong>Selamat Datang di Sistem Informasi Penerimaan Karyawan Koperasi</strong>
			</div>
		</div>
	</div>
	<div class="row">
		
		<div class="col-sm-8 col-xs-12">
			<center><img src="img/logo.png" width="600px"></center>
			<center><h1>KOPERASI</h1></center>
			<br><br>
		</div>
		
		<div class="col-sm-3 col-xs-12">
			<!--Jika terjadi login error tampilkan pesan ini-->
			<?php if(isset($_GET['error']) ) {?>
			<div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
			<?php }?>

			<?php if (isset($_SESSION['username'])) { ?>
			<div class="alert alert-info">
				<strong>Welcome <?=$_SESSION['nama']?></strong>
			</div>
			<?php
		   } else { ?>

			<div class="panel panel-success">
				<div class="panel-heading" style="background-color:#808080"> 
					<h3 class="panel-title">Silahkan Login</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" action="proses_login.php" method="post">
						<div class="form-group">
							<div class="col-sm-12">
								<input type="text" name="user" class="form-control input-sm"
								   placeholder="Username" required="" autocomplete="off"/>
							</div>

						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="password" name="pwd" class="form-control input-sm"
								   placeholder="Password" required="" autocomplete="off"/>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<button type="submit" name="login" value="login"
										class="btn btn-success btn-block"><span class="fa fa-unlock-alt"></span>
									Login Sistem
								</button>
							</div>
					</form>
				</div>
			</div>

		</div>
			<?php } ?>
	</div>
</div>
