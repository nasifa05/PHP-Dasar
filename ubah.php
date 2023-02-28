<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data siswa berdasarkan id
$sw = query("SELECT * FROM siswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
           </script>
        ";
    }else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah data siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: rgba(0, 0, 0, 0.3);
}
.form-action {
	min-height: 41px;
	background: #fff;
	box-shadow: none !important;
	border-color: #e3e3e3;
}
.form-control:focus {
	border-color: #70c5c0;
}
.form-control, .btn {
	border-radius: 2px;
}
.ubah-form {
	width: 350px;
	margin: 0 auto;
	padding: 100px 0 30px;
}
.ubah-form form {
	color: #7a7a7a;
	border-radius: 2px;
	margin-bottom: 15px;
	font-size: 13px;
	background: #ececec;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
	position: relative;
}
.ubah-form h1 {
	font-size: 40px;
	margin: 35px 0 25px;
}
.ubah-form input[type="checkbox"] {
	position: relative;
	top: 1px;
}
.ubah-form .btn, .ubah-form .btn:active {
	font-size: 16px;
	font-weight: bold;
	background: #70c5c0 !important;
	border: none;
	margin-bottom: 20px;
}
.ubah-form .btn:hover, .ubah-form .btn:focus {
	background: #50b8b3 !important;
}
.ubah-form a {
	color: #fff;
	text-decoration: underline;
}
.ubah-form a:hover {
	text-decoration: none;
}
.ubah-form form a {
	color: #7a7a7a;
	text-decoration: none;
}
.ubah-form form a:hover {
	text-decoration: underline;
}
.ubah-form .bottom-action {
	font-size: 14px;
}
</style>
</head>
<body>
    <div class="ubah-form">
    <center><h1>Ubah data siswa</h1></center>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $sw["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $sw["gambar"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" class="form-control" name="nrp" id="nrp" 
                required value="<?= $sw["nrp"];?>">
            </li>

            <li>
                <label for="nama">Nama : </label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $sw["nama"];?>">
            </li>

            <li>
                <label for="email">Email : </label>
                <input type="text" class="form-control" name="email" id="email" value="<?= $sw["email"];?>">
            </li>

            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?= $sw["jurusan"];?>">
            </li>

            <li>
                <label for="gambar">Gambar : </label> <br>
                <img src="img/<?= $sw['gambar']; ?>" width="90"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>

            <br>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Ubah Data!</button>
            </div>
        </ul>

    </form>

    </div>
</body>
</html>