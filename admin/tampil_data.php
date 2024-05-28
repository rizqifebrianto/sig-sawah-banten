<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:../tampil_data.php?pesan=belum_login");
}
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "menu_sidebar.php"; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include "menu_topbar.php"; ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Persebaran Sawah Prov. Banten</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama Daerah</th>
                                            <th>Alamat</th>
                                            <th>Deskripsi</th>
                                            <th>Longitude</th>
                                            <th>Latitude</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        $data = mysqli_query($koneksi, "SELECT * FROM wisata");
                                        while ($d = mysqli_fetch_array($data)) {
                                            $no++;
                                        ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><b><a href="detail_data.php?id_sawah=<?php echo $d['id_sawah']; ?> "> <?php echo $d['nama_daerah']; ?> </a> </b></td>
                                                <td><?php echo $d['alamat']; ?></td>
                                                <td><?php echo $d['deskripsi']; ?></td>
                                                <td><?php echo $d['longitude']; ?></td>
                                                <td><?php echo $d['latitude']; ?></td>
                                                <td>
                                                    <a href="edit_data.php?id_sawah=<?php echo $d['id_sawah']; ?> " class="btn-sm btn-primary"><span class="fas fa-edit"></a>
                                                    <a href="hapus_aksi.php?id_sawah=<?php echo $d['id_sawah']; ?>" class="btn-sm btn-danger"><span class="fas fa-trash"></a>
                                                </td>
                                            </tr>
                            </div>
                        <?php
                                        }
                        ?>
                        </tbody>
                        </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

    </div>
</body>
</html>