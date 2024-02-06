<?php  
  include'koneksi.php';
  $id = $_GET['id_pegawai']; 
  $query = "SELECT * FROM tb_pegawai WHERE id_pegawai= $id LIMIT 1";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);
  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Pegawai</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PEGAWAI
            </div>
            <div class="card-body">
              <form action="" method="POST">
                
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" name="id_pegawai" value="<?php echo $row['id_pegawai'] ?>"  class="form-control">
                  <input type="hidden" name="id_pegawai" value="<?php echo $row['id_pegawai'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" class="form-control">
                </div>
                 <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" value="<?php echo $row['email'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" rows="4"><?php echo $row['alamat'] ?></textarea>
                </div>
                 <div class="form-group">
                  <label>No Telepone</label>
                  <input type="text" name="no_telepone" value="<?php echo $row['no_telepone'] ?>" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success" name="update">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
    include "koneksi.php";
   if (isset($_POST['update'])) 
    {
$kode = $_POST['id_pegawai'];
$varName = $_POST['nama'];
$varEmail = $_POST['email'];
$varAlamat  = $_POST['alamat'];
$varNoTelp  = $_POST['no_telepone'];
        $query="UPDATE tb_pegawai SET id_pegawai='$kode',
        nama='$varName',
        email='$varEmail',
        alamat='$varAlamat',
        no_telepone='$varNoTelp' 
        WHERE id_pegawai='$kode'";    
        $edit= mysqli_query($con, $query);
        if (!$edit) {
            echo "<script>alert('Data gagal diupdate'); window.location=('index.php')</script>";
           exit;
        } else {
        echo "<script>alert('Data berhasil di Update'); window.location=('index.php')</script>";
           exit;
        
        }                   
    }
?>
