<?php 
    include "connect.php";
    $id = $_POST['id'];
    $sql = "DELETE FROM mhs WHERE nim = $nim";
    $hasil = mysqli_query($db, $sql);
?>