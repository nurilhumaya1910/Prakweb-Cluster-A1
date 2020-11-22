<?php 
		$nrp = $_POST['nrp'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $id_jurusan = $_POST['id_jurusan'];
        $conn = mysqli_connect("localhost","root","","itera");
        $query = mysqli_query($conn, "INSERT INTO mahasiswa (nrp,nama,alamat,id_jurusan) values ('$nrp','$nama','$alamat','$id_jurusan')");
        mysqli_query($conn,$query);
        echo '<script type="text/javascript">alert("Berhasil Menambahkan Data.");
        </script>'; 
?>