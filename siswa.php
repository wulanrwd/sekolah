<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" inte
grity="sha384-
Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
     <h2 class="text-center">Data Siswa</h2>
     </hr>
     <form method="post">
         <div class="form-group form-inline">
             <input type="text" class="form-control mr-2 " name="input_cari" placeholder="ketik no induk siswa...."/>
             <button class="btn btn-success" type="submit" name="cari_nama">Cari</button>
        </div>
    </form>
    <table class="table table-bordered table-hover">
          <thead>
             <tr>
                 <th>Nis</th>
                 <th>Nama</th>
                 <th>Jenis kelamin</th>
                 <th>Jurusan</th>
             </tr>
         </thead>
         <tbody>
            <?php
            include 'koneksi.php';
            if(isset($_POST['cari_nama'])){
                $input=$_POST['input_cari'];
                if($input!=""){
                $query=mysqli_query($config,"SELECT * FROM tabel_siswa where nis like '%$input%'");
                }else{
                $query=mysqli_query($config,"SELECT * FROM tabel_siswa");
                }
                }else{
                $query=mysqli_query($config,"SELECT * FROM tabel_siswa");
                }
                $cekdata=mysqli_num_rows($query);
                if($cekdata<1){
                echo "<tr>";
                echo "<td colspan='12'><center class='bg-danger text-white'>Data tidak ditemukan</center></td>";
                echo "</tr>";
                echo "<meta http-equiv='refresh' content='2;url=siswa.php'>";
            }else{
             $nomor=1;
             while($data=mysqli_fetch_array($query)){
            ?>
            <tr>
               <td><?php echo $nomor ;?></td>
               <td><?php echo $data['nis'] ;?></td>
               <td><?php echo $data['nama'] ;?></td>
               <td><?php echo $data['jenis_kelamin'] ;?></td>
               <td><?php echo $data['jurusan'] ;?></td>
               <td><a href="hapus.php?id=<?php echo $data['nis'];?>" class="btn btn-danger"
               onclick="return confirm('Yakin data <?php echo $data['nama'];?>  dihapus?')">Hapus</a>
               <a href="edit.php?id=<?php echo $data['nis'];?>" class="btn btn-success">Edit</a>
             </td>
            </tr>
            <?php
              $nomor++;
              }
            }
            ?>
        </tbody>
     </table>
     <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
    </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-
wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

    