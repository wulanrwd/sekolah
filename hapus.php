<?php
 include 'koneksi.php';
 $id = $_GET['id'];
 $query = mysqli_query($config,"DELETE FROM tabel_siswa WHERE nis ='$id'");
 echo "<meta http-equiv = 'refresh' content ='1; url =siswa.php'>";
?>
