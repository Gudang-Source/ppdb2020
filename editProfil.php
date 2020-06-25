

<?php
// include database connection file
include_once("koneksi.php");
include "layouts/header.php";
include_once("update.php");
$nisn = $_GET['nisn'];
$result = mysqli_query($conn,"SELECT * FROM datasiswa WHERE nisn=$nisn");
$datasiswa=mysqli_fetch_assoc($result);

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $nama = $_POST['nama'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $noTelp = $_POST['noTelp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $asalSekolah = $_POST['asalSekolah'];
    $jurusan = $_POST['jurusan'];
    // update user data
    $result = mysqli_query($conn, "UPDATE datasiswa SET nama='$nama',tempatLahir='$tempatLahir',tanggalLahir='$tanggalLahir',jenisKelamin='$jenisKelamin',noTelp='$noTelp',alamat='$alamat',email='$email',asalSekolah='$asalSekolah',jurusan='$jurusan' WHERE nisn='$nisn'");

    // Redirect to homepage to display updated user in list
    if($result){
            header("location:datasiswa.php");
        } else {
            echo "Error : <br>".mysqli_error($conn);
    }
}

?>

    <div class="content-wrapper">
        <div class="container" id="wadah">
            <div class="row">
        <div class="col-md-12">
            <h4><font color="#3498db">Edit Profil
            </font></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" enctype="multipart/form-data" action="">
                NISN : <br>
                 <input type="text" name="nisn" value="<?php echo $datasiswa ['nisn'] ?>" class="form-control" readonly />

                Nama : <input type="text" name="nama" value="<?php echo $datasiswa ['nama'] ?>" class="form-control" required />

                Tempat Lahir : <input type="text" name="tempatLahir" value="<?php echo $datasiswa ['tempatLahir'] ?>" class="form-control" required />

                Tanggal Lahir : <input type="date" name="tanggalLahir" value="<?php echo $datasiswa['tanggalLahir'] ?>" class="form-control" />

                Jenis Kelamin   <select class="form-control" name="jenisKelamin">
                                    <option value="Laki-laki" <?php if(($datasiswa['jenisKelamin'])=='Laki-laki'){
                                        echo "selected";
                                    }?> >Laki-laki</option>
                                    <option value="Perempuan"<?php if(($datasiswa['jenisKelamin'])=='Perempuan'){
                                        echo "selected";
                                    }?>>Perempuan</option>
                                </select>

                No Telp : <input type="text" name="noTelp" value="<?php echo $datasiswa ['noTelp'] ?>" class="form-control" required />

                Alamat : <textarea class="form-control" rows="3" placeholder="Masukkan Pesan" name="alamat" rows="5"><?php echo $datasiswa['alamat'] ?></textarea>

                Email : <input type="email" name="email" value="<?php echo $datasiswa ['email'] ?>" class="form-control" required />

                Asal Sekolah : <input type="text" name="asalSekolah" value="<?php echo $datasiswa ['asalSekolah'] ?>" class="form-control" required />

                Foto : <br /><?php echo "<img src='foto/$datasiswa[foto]' width='200' height='200'> ";?> 
                <br>
                <a href="editFoto.php?nisn=<?= $datasiswa['nisn'] ?>">Edit Profil</a>
                <br>
                <br>
                Jurusan : <select class="form-control" id="jurusan" name="jurusan">
                                        <option value="TKJ" <?php if(($datasiswa['jurusan'])=='TKJ'){
                                        echo "selected";
                                    }?>>TKJ</option>
                                        <option value="RPL" <?php if(($datasiswa['jurusan'])=='RPL'){
                                        echo "selected";
                                    }?>>RPL</option>
                                        <option value="AKUNTANSI" <?php if(($datasiswa['jurusan'])=='AKUNTANSI'){
                                        echo "selected";
                                    }?>>AKUNTANSI</option>
                                        <option value="OTKP" <?php if(($datasiswa['jurusan'])=='OTKP'){
                                        echo "selected";
                                    }?>>OTKP</option>
                                        <option value="MULTIMEDIA" <?php if(($datasiswa['jurusan'])=='MULTIMEDIA'){
                                        echo "selected";
                                    }?>>MULTIMEDIA</option>
                                     <option value="TKR" <?php if(($datasiswa['jurusan'])=='TKR'){
                                        echo "selected";
                                    }?>>TKR</option>
                            </select>
                <hr />

                Ijazah : <a href="ijazah/<?php echo $datasiswa ['ijazah'] ?>"><?php echo $datasiswa['ijazah'];?></a> <button class="btn btn-default btn-warning btn-xs"><a href="editIjazah.php?nisn=<?= $datasiswa['nisn']?>" style="text-decoration: none; color: #fff;"><i class="fa fa-edit"></i>Edit</a> </center></button> <br>
                SKHUN : <a href="skhun/<?php echo $datasiswa ['skhun'] ?>"><?php echo $datasiswa['skhun'];?></a> <button class="btn btn-default btn-warning btn-xs"><a href="editSkhun.php?nisn=<?= $datasiswa['nisn']?>" style="text-decoration: none; color: #fff;"><i class="fa fa-edit"></i>Edit</a> </center></button><br> 
                Kartu Keluarga : <a href="kk/<?php echo $datasiswa ['kk'] ?>"><?php echo $datasiswa['kk'];?></a> <button class="btn btn-default btn-warning btn-xs"><a href="editKk.php?nisn=<?= $datasiswa['nisn']?>" style="text-decoration: none; color: #fff;"><i class="fa fa-edit"></i>Edit</a> </center></button><br> 
                FotoNisn : <a href="fotoNisn/<?php echo $datasiswa ['fotoNisn'] ?>"><?php echo $datasiswa['fotoNisn'];?></a> <button class="btn btn-default btn-warning btn-xs"><a href="editFotoNisn.php?nisn=<?= $datasiswa['nisn']?>" style="text-decoration: none; color: #fff;"><i class="fa fa-edit"></i>Edit</a> </center></button><br>
                KTP Ortu: <a href="ktpOrtu/<?php echo $datasiswa ['ktpOrtu'] ?>"><?php echo $datasiswa['ktpOrtu'];?></a> <button class="btn btn-default btn-warning btn-xs"><a href="editKtpOrtu.php?nisn=<?= $datasiswa['nisn']?>" style="text-decoration: none; color: #fff;"><i class="fa fa-edit"></i>Edit</a> </center></button><br> 
                <input type="submit" name="update" value="Update" class="btn btn-info" />
            </form>
                    </div>
    </div>
        </div>
    </div>

    

    <!-- Code PHP SYSTEM -->


<?php include "layouts/footer.php"; ?>