<?php
session_start();
include 'koneksi.php';
if ( $_SESSION['username']) {
  echo "LOGIN BERHASIL";
  
}else {
  echo "MAAF USERNAME DAN PASSWORD ANDA TIDAK TERDETEKSI";
       header("location:login.php");}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Praktikum SBD Modul 2</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type='javascript' src="assets/js/bootstrap.min.js"></script>
</head>

<body style="background-color : #fafafa;"> <br><br>
    <header class="main-header">
        <center>
            <h1 class="blog-title">CRUD Sederhana dengan PHP dan MYSQL</h1>
        </center>
        <center>
            <h4 class="blog-title">Praktikum Sistem Basis Data 2019</h4>
        </center>
    </header><br><br>
    <!-- Membuat navbar di sebelah kirihalaman -->
    <div class="col-md-2" align="left">
        <ul class="nav" id="main-menu">
            <br>
            <li>
                <a href="mahasiswa.php"><i class="fa fa-user fa-2x"></i>Mahasiswa</a>
            </li>
            <li>
                <a href="dosen.php"><i class="fa fa-user fa-2x"></i>Dosen</a>
            </li>
            <li>
                <a href="join.php"><i class="fa fa-user fa-2x"></i>Join Mahasiswa & Dosen</a>
            </li>
            <li>
                <p><a href='logout.php'><button type='button' class='btn btn-danger'><span class='glyphiconglyphicon-plus-sign'></span> Logout</button></a></p>
            </li>
        </ul>
    </div>
    <div class="container col-md-10">
        <div class="row">
            <div class="col-md-10">
                <br>
                <center>
                    <h2><a href="mahasiswa.php">Start</a></h2>
                </center>
            </div>
        </div>
    </div>
</body>

</html>