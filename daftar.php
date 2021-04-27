<?php
     include "inc/koneksi.php";   
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Masuk | SIMPELPERDA</title>
	<!-- BOOTSTRAP STYLES-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONTAWESOME STYLES-->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- CUSTOM STYLES-->
	<link href="assets/css/custom.css" rel="stylesheet" />
	<!-- GOOGLE FONTS-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

	<link rel="stylesheet" href="dist/swal/sweetalert2.min.css">
	<style>
		.swal2-popup {
			font-size: 1.6rem !important;
		}
	</style>
	<img src="assets/img/mojokerto.png" class="user-image img-responsive" />
						<center>
							<h2>
								<b>SIMPelPerda</b>
							</h2>
						</center>
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-info panel-dashboard">
      <div class="panel-heading centered">
        <h2 class="panel-title"><strong> Daftar Akun </strong></h2>
      </div>
      <div class="panel-body">

        <form class="form-horizontal" action=".../PENGADUAN/config/proses.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_user" id="id" value="<?= $kode; ?>">
          <div class="form-group">
            <label for="nama" class="col-md-2 control-label">Nama</label>
            <div class="col-md-10">
              <input type="text" name="nama" required class="form-control" id="nama_pengguna" placeholder="Nama Lengkap">
            </div>
          </div>
          <div class="form-group">
            <label for="tempat" class="col-md-2 control-label">Tempat, Tgl Lahir</label>
            <div class="col-md-3">
              <input type="text" name="tempat" required class="form-control" id="tempat" placeholder="tempat">
            </div>
            <div class="col-md-3 col-xs-11">
              <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="01-12-2018" class="input-append date dpYears">
                <div class="input-group">
                  <input type="text" name="tgl" required readonly size="16" class="form-control">
                  <span class="input-group-btn add-on">
                    <button class="btn btn-info" type="button"><i class="fa fa-calendar"></i></button>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="jk" class="col-md-2 control-label">Jenis Kelamin</label>
            <div class="col-md-10">
              <label class="radio-inline">
                <input type="radio" name="jk" required id="jk" value="lk">Laki-laki
              </label>
              <label class="radio-inline">
                <input type="radio" name="jk" required id="jk" value="pr">Perempuan
              </label>
            </div>
          </div>
          <div class="form-group">
            <label for="telepon" class="col-md-2 control-label">Telepon/HP</label>
            <div class="col-md-10">
              <input type="number" name="telp" required class="form-control" id="telepon" placeholder="telepon">
            </div>
          </div>
          <div class="form-group">
            <label for="alamat" class="col-md-2 control-label">Alamat</label>
            <div class="col-md-10">
              <textarea name="alamat" required class="form-control" id="alamat" cols="30" rows="2"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="username" class="col-md-2 control-label">Username</label>
            <div class="col-md-10">
              <input type="text" name="user" required class="form-control" id="username" placeholder="username">
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-md-2 control-label">Password</label>
            <div class="col-md-10">
              <input type="password" name="pass" required class="form-control" id="password" placeholder="password">
            </div>
          </div>
          <input type="hidden" name="level" value="masy">
          <div class="form-group">
            <label for="foto" class="col-md-2 control-label">Foto</label>
            <div class="col-md-10">
              <input type="file" required class="form-control" name="foto" id="foto">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
              <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
            </div>
          </div>
        </form>

      </div>
      </div>
    </div>

  
  </div>
</div>
</div>