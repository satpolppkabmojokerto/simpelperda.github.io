<?php
     include "../inc/koneksi.php";   
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
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/datatable-bootstrap.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../lib/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="../lib/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" href="../lib/bootstrap-datetimepicker/datertimepicker.css" />
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4QIC1djXcEa0vsnQLODtOiJ4ZtJcKKIk" type="text/javascript"></script>
	<style>
		.swal2-popup {
			font-size: 1.6rem !important;
		}
		.user-image {
   			 margin: 25px auto;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			max-height:170px;
			max-width:170px;
		}
	</style>
	
	
						<center>
							<h1>
								<img src="../assets/img/mojokerto.png" class="user-image" />
							</h1>	
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

	        <form class="form-horizontal" method="post" >
	          <input type="hidden" name="id_user" id="id" value="<?= $kode; ?>">
	          <div class="form-group">
	            <label for="nama" class="col-md-2 control-label">Nama</label>
	            <div class="col-md-10">
	              <input type="text" name="nama_pengguna" required class="form-control" placeholder="Nama Lengkap">
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="NIK" class="col-md-2 control-label">NIK</label>
	            <div class="col-md-10">
	              <input type="number" name="NIK" required class="form-control" placeholder="NIK">
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="tempat" class="col-md-2 control-label">Tempat, Tgl Lahir</label>
	            <div class="col-md-3">
	              <input type="text" name="tempat" required class="form-control" placeholder="tempat">
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
	                <input type="radio" name="jk" required value="lk">Laki-laki
	              </label>
	              <label class="radio-inline">
	                <input type="radio" name="jk" required value="pr">Perempuan
	              </label>
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="telepon" class="col-md-2 control-label">Telepon/HP</label>
	            <div class="col-md-10">
	              <input type="number" name="telepon" required class="form-control" placeholder="Telepon">
	            </div>
	          </div>
	          
	          <div class="form-group">
	            <label for="alamat" class="col-md-2 control-label">Alamat</label>
	            <div class="col-md-10">
	              <textarea name="alamat" required class="form-control" placeholder="Alamat" cols="30" rows="2"></textarea>
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="username" class="col-md-2 control-label">Username</label>
	            <div class="col-md-10">
	              <input type="text" name="username" required class="form-control" placeholder="Username">
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="password" class="col-md-2 control-label">Password</label>
	            <div class="col-md-10">
	              <input type="password" name="password" required class="form-control" placeholder="Password">
	            </div>
	          </div>
	          <input type="hidden" name="level" value="Pengadu">
	          <div class="form-group">
	            <label for="foto" class="col-md-2 control-label">Foto</label>
	            <div class="col-md-10">
	              <input type="file" required class="form-control" name="foto" id="foto">
	            </div>
	          </div>
	          <div class="form-group">
	            <div class="col-md-offset-2 col-md-10">
	          <div>
	            <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
	            <a href="../login.php" title="Kembali" class="btn btn-default">Batal</a>
	          </div>
	      </div>
	      </form>
	    </div>
	  </div>
	</div>

	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	<!-- JQUERY SCRIPTS -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- BOOTSTRAP SCRIPTS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- METISMENU SCRIPTS -->
	<script src="assets/js/jquery.metisMenu.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js"></script>
	<!-- SWAL -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-hover-dropdown.js"></script>
        <script src="js/script.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/datatable-bootstrap.js"></script>
        <script src="../lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
        <script src="../lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="../lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
        <script src="../lib/advanced-form-components.js"></script>

	


</html>


<?php

    if (isset ($_POST['Simpan'])){
        
        $sql_simpan = "INSERT INTO tb_pengguna (id_pengguna,nama_pengguna,username,password,level,tempat,tgl,jk,foto,alamat,telepon,NIK,grup) VALUES (
        UUID(),
        '".$_POST['nama_pengguna']."',
        '".$_POST['username']."',
        '".$_POST['password']."',
        '".$_POST['level']."',
        '".$_POST['tempat']."',
        '".$_POST['tgl']."',
        '".$_POST['jk']."',
        '".$_POST['foto']."',
        '".$_POST['alamat']."',
        '".$_POST['telepon']."',
        '".$_POST['NIK']."',
        'B')";    
        $query_simpan = mysqli_query($koneksi, $sql_simpan);

        $sql_pengadu = "INSERT INTO tb_pengadu (id_pengadu, nama_pengadu, jekel, no_hp, alamat, username) VALUES (
        UUID(),
			'".$_POST['nama_pengguna']."',
			'".$_POST['jk']."',
			'".$_POST['telepon']."',
			'".$_POST['alamat']."',
			'".$_POST['username']."')";
		$query_pengadu = mysqli_query($koneksi, $sql_pengadu);

        if ($query_simpan && $query_pengadu) {
            echo "<script>
                    Swal.fire({title: 'SUKSES',text: '',icon: 'success',confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            window.location = '../login.php';
                        }
                    })</script>";
			}else{
            echo "<script>
                    Swal.fire({title: 'GAGAL',text: '',icon: 'error',confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            window.location = 'pengguna_tambah.php';
                        }
                    })</script>";
        }
    }
?>
<!-- end -->