<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12" >
            <div class="panel panel-success" >
                <div class="panel-heading" style="background-color:#1e313e">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Calon Karyawan</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tgl Lahir</th>
                                <th>Agama</th>
                                <th>Jenis Kelamin</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_pelamar";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
                                    <td><?= $data['agama'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                    <td>
                                        <a href="?page=calon&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs" >
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                                            <a href="?page=calon&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a href="?page=calon&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">
                                                <span class="fa fa-remove"></span>
                                            </a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                                        <a href="?page=calon&actions=tambah" class="btn btn-info btn-sm" style="background-color:#1e313e">
                                            Tambah Data

                                        </a>
                                    <?php } ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

