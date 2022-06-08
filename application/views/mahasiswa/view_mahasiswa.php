<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Admin Apps</title>
    <?php $this->load->view('layout/kumpulan_css.php'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view('layout/navbar.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('layout/sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">List Mahasiswa</h1>
                            <?= $this->session->userdata('username')?>
                            <?= $this->session->userdata('username')?>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">List Mahasiswa</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <a class="btn btn-sm btn-success" href="<?= base_url('mahasiswa/create')?>">Create</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Gender</th>
                                                <th>IPK</th>
                                                <th>Kode Prodi</th>
                                                <th>Nama Prodi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($dataJoin as $row):?>
                                            <tr>
                                                <td><?= $no++?></td>
                                                <td><?= $row->nim?></td>
                                                <td><?= $row->nama_mahasiswa?></td>
                                                <td><?= $row->gender?></td>
                                                <td><?= $row->ipk?></td>
                                                <td><?= $row->prodi_kode?></td>
                                                <td><?= $row->nama_prodi?></td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary" href="<?= base_url('mahasiswa/detail'.$row->nim)?>">Detail</a>
                                                    <a class="btn btn-sm btn-warning" href="<?= base_url('mahasiswa/update'.$row->nim)?>">Update</a>
                                                    <a class="btn btn-sm btn-danger" href="<?= base_url('mahasiswa/delete/'.$row->nim)?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Delete</a>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Gender</th>
                                                <th>IPK</th>
                                                <th>Kode Prodi</th>
                                                <th>Nama Prodi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?php $this->load->view('layout/footer.php'); ?>

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <?php $this->load->view('layout/kumpulan_js.php'); ?>

</body>

</html>