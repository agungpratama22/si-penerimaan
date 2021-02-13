<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_pelamar WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background-color:#1e313e>
                    <h3 class="panel-title">Form Update Data Calon Karyawan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tgl Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_lahir" value="<?=$data['tmpt_tgl_lahir']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tgl Lahir" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_telp" class="col-sm-3 control-label">Agama</label>
                            <sdiv class="col-sm-9">
                                <input type="text" name="agama" value="<?=$data['agama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Agama" required>
                            </div>
                            <div class+"form-group">
                                <label for="ststus" class="col-sm-3 control-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <input type="text" name="jenis_kelamin" value="<?=$data['jenis_kelamin']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin" required>  
                                </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success" style="background-color:#1e313e">
                                    <span class="fa fa-edit"></span> Update Data Calon Karyawan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=calon&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Calon Karyawan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
   $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tgllahir=$_POST['tgl_lahir'];
    $agama=$_POST['agama'];
    $jeniskelamin=$_POST['jenis_kelamin'];
  
    //buat sql
    $sql="UPDATE tb_pelamar SET nama='$nama',alamat='$alamat',tgl_lahir='$tmpttgllahir',agama='$agama',jenis_kelamin='$jeniskelamin' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=calon&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



s