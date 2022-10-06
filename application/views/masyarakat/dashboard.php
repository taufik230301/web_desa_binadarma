<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("masyarakat/components/header.php") ?>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php if ($this->session->flashdata('login_success')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Login Berhasil, Selamat Datang Admin !",
        icon: "success",
        timer: 950
    });
    </script>
    <?php } ?>

    <div class="wrapper">



        <?php $this->load->view("masyarakat/components/navbar.php") ?>

        <?php $this->load->view("masyarakat/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Diri <?= $data_penduduk["nama"]?></h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col"><?= $data_penduduk["nama"]?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">NIK</th>
                                    <td><?= $data_penduduk["nik"]?></td>
                                </tr>
                                <tr>
                                    <th scope="row">NO HP</th>
                                    <td><?= $data_penduduk["no_hp"]?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td><?= $data_penduduk["email"]?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Lahir</th>
                                    <td><?= $data_penduduk["tgl_lahir"]?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Tempat Lahir</th>
                                    <td><?= $data_penduduk["tempat_lahir"]?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td><?= $data_penduduk["alamat"]?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Kelamin</th>
                                    <td><?= $data_penduduk["jenis_kelamin"]?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Pekerjaan</th>
                                    <td><?= $data_penduduk["pekerjaan"]?></td>
                                </tr>
                                <tr>
                                    <th scope="row">RT</th>
                                    <td><?= $data_penduduk["nomor_rt"]?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Kategori Kelas Ekonomi </th>
                                    <td><?= $data_penduduk["kategori_kelas_ekonomi"]?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Kategori Bantuan</th>
                                    <td><?= $data_penduduk["kategori_bantuan"]?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Keterangan</th>
                                    <td><?= $data_penduduk["keterangan"]?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Foto KTP</th>
                                    
                                    <td><img src="<?= base_url();?>assets/ktp/<?php echo $data_penduduk["foto_ktp"]?>" style="width: 25%"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("masyarakat/components/js.php") ?>
</body>

</html>