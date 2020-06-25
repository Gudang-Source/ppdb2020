<?php
// include database connection file
include_once("koneksi.php");

// Get id from URL to delete that user
$nisn = $_GET['nisn'];

$result = mysqli_query($conn,"SELECT * FROM datasiswa WHERE nisn=$nisn");
$datasiswa=mysqli_fetch_assoc($result);

//hapus datanya
$fotoDulu = $datasiswa['foto'];
$ijazahDulu = $datasiswa['ijazah'];
$skhunDulu = $datasiswa['skhun'];
unlink("foto/".$fotoDulu);
unlink("ijazah/".$ijazahDulu);
unlink("skhun/".$skhunDulu);



// Delete user row from table based on given id

$resultDelete = mysqli_query($conn, "DELETE FROM datasiswa WHERE nisn=$nisn");


// After delete redirect to Home, so that latest user list will be displayed.
if($resultDelete){
            header("location:datasiswa.php");
        } else {
            echo "Error : <br>".mysqli_error($conn);
    }
// header("Location:beranda.php");
?>