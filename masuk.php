<?php
    session_start();
    if(isset($_SESSION['nama'])){
        header("location:if_logout.php");
    }
    else{

    
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
     <link  rel="shortcut icon" href="style/assets/img/ICOSMARTUN.png">
    <link href="style/assets/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="style/assets/css/style.css" rel="stylesheet" />
    <script type="text/javascript">
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</head>

<body>
<header>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid " style="background-color : #1c1c1c">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color : 1c1c1c;">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="masuk.php" class="page-scroll">Login</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-left">
						<li><a href="daftarPpdb.php" class="page-scroll">Daftar PPDB 2020</a>
						</li>
						<li><a href="contact.php" class="page-scroll">Kontak Kami</a>
						</li>
						<li><a href="index.php" class="page-scroll">Tentang Kami</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <br><br><br>
                <div class="col-sm-12 text-center">
                    <h3>LOGIN ADMIN PPDB 2020</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <!-- <img src="gambar/logo2.jpeg" class="img-circle" width="200px"> -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-offset-4 text-left">
                    <form action="" method="post" onSubmit="return validasi()">
                        <div class="form-group">
                            <table for="Username">Username</table>
                            <input type="text" id="nama" class="form-control" placeholder="Masukkan Username" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" name="username">
                        </div>
                        <div class="form-group">
                            <table for="Password">Password</table>
                            <input type="Password" id="myInput" class="form-control" placeholder="Masukkan Password" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" name="password">
                            <div class="checkbox" align="left">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" onclick="myFunction()">Show Password
                            </div>
                        </div>
                    
                    <div class="btn-group" role="group" aria-label="">
                        <button class="btn btn-primary" name="masuk"> Masuk </button>
                        
                    </div>
                    <br>
                </form>

                <?php
                        include "koneksi.php";
                        if (isset($_POST['masuk'])) {
                            $username = $_POST ["username"];
                            $password = $_POST ["password"];
                            $cek = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
                            //$id_peserta = $_GET['id_peserta'];
                            if (mysqli_num_rows($cek) > 0) {
                                header("location:beranda.php");
                                echo "berhasil login";
                                $row_akun = mysqli_fetch_array($cek);
                                $_SESSION["user_id"] = $row_akun["user_id"];
                                $_SESSION["nama"] = $row_akun["nama"];
                                $_SESSION["username"] = $row_akun["username"];
                            } else {
                                echo "<br>";
                                echo "<center><h5>Masukan Username dan Password Dengan Benar</h5></center>	";
                            }
                        }
                        ?>
                    
                    	<br>
                        <p align="center"><a href="index.php">Kembali Ke Home</a></p>
                    
                    
                </div>
            </div>
        </div>
    </section>
    <!--Footer -->
    <br>
    <br>
    <br>
    <br>
   
    <?php include "layouts/footer.php"; ?>
    <!-- Akhir Footer-->
    <script src="js/bootstrap.min.js"></script>
</body>

</html> 
<!-- <?php 
} 

?>