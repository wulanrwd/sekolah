<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" inte
grity="sha384-
Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-4">
        <h2 class="text-center">Tambah Data Siswa</h2>
        <hr/>
        <form method="post">
            <div class="form-group">
            <label>No Induk Siswa</label>
            <input type="text" class="form-control" name="nis">
            </div><div class="form-group">
            <label>Nama Siswa</label>
            <input type="text" class="form-control" name="ns">
            </div>
            <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jk">
                <option> Perempuan</option>
                <option> Laki-laki</option>
            </select>
            </div>
            <div class="form-group">
            <label>Jurusan</label>
            <select class="form-control" name="jr">
                <option> RPL</option>
                <option> TKJ</option>
                <option> ANM</option>
                <option> TEI</option>
                <option> TSM</option>
            </select>
            </div>
            <button class="btn btn-success" name="insert">Simpan </button>
            <a href="siswa.php" class="btn btn-warning">Batal</a>
        </form>
        <?php
        include 'koneksi.php';
        if(isset($_POST['insert'])){
            $nis=$_POST['nis'];
            $ns=$_POST['ns'];
            $jk=$_POST['jk'];
            $jr=$_POST['jr'];

            $query=mysqli_query($config,"INSERT INTO tabel_siswa(nis, nama, jenis_kelamin, jurusan) VALUES ('$nis','$ns','$jk','$jr')");
            echo "<div class='alert alert-info mt-4'>Data Berhasil Disimpan</div>";
            echo "<meta http-equiv='refresh' content='1;url=siswa.php'>";
        }
        ?>


        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-
wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
        

