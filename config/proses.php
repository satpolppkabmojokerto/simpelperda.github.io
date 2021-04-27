<?php

    include "inc/koneksi.php";

$page = @$_GET['page'];
if  ($page == 'login') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = $Cuser->loginUser($_POST['user'], $_POST['pass']);
        if ($login) {
            if ($_SESSION['user_level'] == "staf") {
                echo "<script>window.location='../staff/index.php'</script>";
            } else if ($_SESSION['user_level'] == "pet") {
                echo "<script>window.location='../petugas/index.php'</script>";
            } else if ($_SESSION['user_level'] == "kep") {
                echo "<script>window.location='../kasat/index.php'</script>";
            } else if ($_SESSION['user_level'] == "masy") {
                echo "<script>window.location='../masyarakat/index.php'</script>";
            }
        } else {
            echo "<script>window.location='../login_error.php'</script>";
        }
    }
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $id_user = $_POST['id_user'];
    $lokasi = $koneksi->conn->real_escape_string($_POST['lokasi']);
    $keterangan = $koneksi->conn->real_escape_string($_POST['keterangan']);
    $pos = $_POST['pos'];
    $tgl = $_POST['tgl'];
    $foto = $_FILES['foto'];
    $status = 0;
    $cek = null;
    $sql = $aduan->tambahAduan($id, $id_user, $pos, $lokasi, $keterangan, $tgl, $foto, $status, $cek);
} 

if (isset ($_POST['submit'])){
        
        $sql_simpan = "INSERT INTO tb_pengguna (id_pengguna,nama_pengguna,username,password,level,grup,tempat,tgl,jk,foto) VALUES (
        UUID(),
        '".$_POST['nama_pengguna']."',
        '".$_POST['username']."',
        '".$_POST['password']."',
        '".$_POST['level']."',
        'B'),
        '".$_POST['tempat']."',
        '".$_POST['tgl']."',
        '".$_POST['jk']."',
        '".$_POST['foto']."',
        
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        if ($query_simpan) {
            echo "<script>
            Swal.fire({title: 'Tambah Sukses',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'index.php?page=user_data';
                }
            })</script>";
            }else{
            echo "<script>
            Swal.fire({title: 'Tambah Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'index.php?page=user_data';
                }
            })</script>";
        }
    $cek = $koneksi->conn->query($query);
    $cek2 = $cek->num_rows;

    if ($cek2 == 1 ) {
        echo "<script>alert('Pendaftaran gagal, Username sudah dipake');
        window.location='../masyarakat/index.php?page=daftar'</script>";
        return false;
    } else {
        $sql = $Cuser->tambahUser($id, $nama, $tempat, $tgl, $jk, $telp, $alamat, $user, $pass, $level, $foto);

        if ($sql > 0) {
            echo "<script>alert('Pendaftaran Berhasil, Silahkan Login');
            window.location='../index.php'</script>";
        } else {
            echo "<script>alert('Pendaftaran gagal');
            window.location='../masyarakat/index.php?page=daftar'</script>";
        }
    }
}