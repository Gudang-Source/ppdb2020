
<!--<?php
    session_start();
    if(!isset($_SESSION['nama'])){
        header('location:masuk.php');

    }else{

    
?>-->

<?php
// include database connection file
include_once("koneksi.php");
include_once("update.php");
$nisn = $_GET['nisn'];
$result = mysqli_query($conn,"SELECT * FROM datasiswa WHERE nisn=$nisn");
$datasiswa=mysqli_fetch_assoc($result);
$ijazahDulu = $datasiswa['ijazah']; 

//jika tombol ditekan
if(isset($_POST['update']))
{
    unlink("ijazah/".$ijazahDulu); //hapus file sebelumnya
    $ijazah=$_FILES['ijazah'] ['name'];   
    $lokasiIjazah=$_FILES['ijazah'] ['tmp_name'];
    $lokasiTujuanIjazah="./ijazah";  
    $upload=move_uploaded_file($lokasiIjazah,$lokasiTujuanIjazah."/".$ijazah);  
    // update user data
    $result = mysqli_query($conn, "UPDATE datasiswa SET ijazah='$ijazah' WHERE nisn='$nisn'");

    // Redirect to homepage to display updated user in list
    if($result){
            header("location:editProfil.php?nisn=$nisn");
        } else {
            echo "Error : <br>".mysqli_error($conn);
    }
}

?>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>SMART UN </title>
    <link rel="shortcut icon" href="style/assets/img/ICOSMARTUN.png">

    <!-- CSS Style Code -->
    <link href="style/assets/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="style/assets/css/style.css" rel="stylesheet" />
</head>
<body>

<!-- Code Anti JavaScript -->
<script src="style/assets/js/jquery-1.11.1.js"></script>
<script src="style/assets/js/bootstrap.js"></script>

<!-- Code Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <font color="#000000">
                    Selamat Datang, <b><?php echo $data ['nama'] ?></b></font><a href="keluar.php" class="btn btn-xs btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </header>

    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">
                    <img src="style/assets/img/SMARTUN.png" width="229" height="93" />
                </a>

            </div>

<!-- Code Akun Profil -->
            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                   
                                        <?php echo "<img src='fp/$data[fp]' width='200' hight='200'> ";?>
                                    
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $data ['nama']; ?></h4>
                                        <h5><?php echo $data ['asal_sekolah']; ?></h5>
                                    </div>
                                </div>
                                <hr />
                                <center>
                                    <a href="dp.php" class="btn btn-info btn-sm">Detail Profile</a> 
                                    <a href="ep.php" class="btn btn-primary btn-sm">Edit Profile</a>
                                </center>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

<!-- Code MENU -->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="beranda.php">Beranda</a></li>
                            <li><a  href="tugas.php">Latihan Soal UN</a></li>
                            <li><a  href="nilai.php">Nilai</a></li>
                            <li><a  href="materi.php">Materi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content-wrapper">
        <div class="container" id="wadah">
            <div class="row">
        <div class="col-md-12">
            <h4><font color="#3498db">Edit Ijazah
            </font></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" enctype="multipart/form-data" action="">
                <div class="form-group">
                    <label for="ijazah">Ijazah</label>
                    <input type="file" class="form-control-file" id="ijazah" accept=".pdf" name="ijazah">
                </div>
                <input type="submit" name="update" value="Update" class="btn btn-info" />
               
            </form>
                    </div>
    </div>
        </div>
    </div>

    <!-- Code PHP SYSTEM -->



    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>&copy;SMARTUN | 2019 <a href=""></a></p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php } ?>