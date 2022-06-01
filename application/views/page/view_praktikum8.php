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
                            <h1 class="m-0">Praktikum 8</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Praktikum 8</li>
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
                        <div class="col-6">
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Form Daftar</h3>
                                </div>
                                <form autocomplete="off" action="<?= base_url('praktikum8')?>" method="POST">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">NIM</label>
                                            <input type="number" class="form-control" name="nim" id="exampleInputEmail1"
                                                placeholder="Masukan NIM">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Mahasiswa</label>
                                            <input type="text" class="form-control" name="nama" id="exampleInputEmail1"
                                                placeholder="Masukan Nama Mahasiswa">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jk">
                                                        <label class="form-check-label">L</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jk">
                                                        <label class="form-check-label">P</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tgl" id="exampleInputEmail1"
                                                placeholder="Masukan Tempat Lahir">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tmp" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectBorder">Program Studi</label>
                                            <select class="custom-select form-control" id="exampleSelectBorder"
                                                name="studi">
                                                <option value="SI">SI</option>
                                                <option value="TI">TI</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">IPK</label>
                                            <input type="number" class="form-control" name="ipk" id="exampleInputEmail1"
                                                placeholder="Masukan IPK">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Data Mahasiswa</h3>
                                </div>
                                <div class="card-body">
                                    <?php foreach ($list_mahasiswa as $mhs) : ?>
                                    <?= "NIM : ".$mhs['nim']."</br>"?>
                                    <?= "Nama : ".$mhs['nama']."</br>"?>
                                    <?= "Jenis Kelamin : ".$mhs['jk']."</br>"?>
                                    <?= "Tempat Lahir : ".$mhs['tmp']."</br>"?>
                                    <?= "Tanggal Lahir : ".$mhs['tgl']."</br>"?>
                                    <?= "Study : ".$mhs['studi']."</br>"?>
                                    <?= "IPK : ".$mhs['ipk']."</br>"?>
                                    <?php endforeach; ?>
                                </div>
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