<?php 
    include "connect.php";

    $id = $_POST['nim'];
    $query = "SELECT * FROM mhs WHERE nim = $nim";
    $hasil = mysqli_query($db, $query);
    foreach($hasil as $h){
        $array = $h;
    }

    echo json_encode($array);
?>