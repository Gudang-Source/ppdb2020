<?php 
    include_once("koneksi.php");
    $sql_profil = mysqli_query($conn,"SELECT * FROM users WHERE user_id='$_SESSION[user_id]'");
    $data = mysqli_fetch_array($sql_profil);

 ?>