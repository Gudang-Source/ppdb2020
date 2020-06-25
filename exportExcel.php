<?php
    session_start();
    include_once ("koneksi.php");
    include_once ("update.php");

    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
    }

    if(!isset($_SESSION['nama'])){
        header('location:masuk.php');
    }
   
    else{

    
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>SMART UN </title>
    
    <!-- CSS Style Code -->
</head>



<!-- Code Body Anti Klik kanan -->
<body>
<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pegawai.xls");
	?>

<!-- Code JavaScripts -->
<script src="style/assets/js/jquery-1.11.1.js"></script>
<script src="style/assets/js/bootstrap.js"></script>

<!-- header Akun -->

    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
    </button>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                <!-- Code Logo Akun -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </a>
                           
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Tempat Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Email</th>
                            <th>Asal Sekolah</th>
                            <th>Jurusan</th>
                        </tr>
                        <?php 
                            $no = 1;
                            if(isset($_GET['cari'])){
                                $cari = $_GET['nama'];
                                $result = mysqli_query($conn,"SELECT * FROM datasiswa WHERE nama LIKE '%".$cari."%'");
                            }else{
                                $result = mysqli_query($conn,"SELECT * FROM datasiswa");
                                // echo "Data tidak ditemukan";
                            }
                            
                            while($datasiswa=mysqli_fetch_assoc($result)){
                         ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>'<?php echo $datasiswa ['nisn'] ?> </td>
                            <td><?php echo $datasiswa ['nama'] ?></td>
                            <td><?php echo $datasiswa ['tempatLahir']; echo ',';echo $datasiswa ['tanggalLahir']; ?></td>
                            <td>'<?php echo $datasiswa ['jenisKelamin'] ?></td>
                            <td><?php echo $datasiswa ['alamat'] ?></td>
                            <td>'<?php echo $datasiswa ['noTelp'] ?></td>
                            <td><?php echo $datasiswa ['email'] ?></td>
                            <td><?php echo $datasiswa ['asalSekolah'] ?></td>
                            <td><?php echo $datasiswa ['jurusan'] ?></td>

                    <?php } ?>


                    </table>
                    
                </div>
            </div>
    </div>
</tr>
</table>
</div>
</div>

<!-- Code FOOTER -->

    <!-- Code Script Anti Klik kanan -->
</body>
</html>
<?php header("location:beranda.php") ?>
<!--<?php 
}
 ?>