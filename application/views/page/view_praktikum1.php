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
                        <h1 class="m-0">Praktikum 1</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Praktikum 1</li>
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
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#activity"
                                            data-toggle="tab">Array Buah</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Array Pop</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Array Push</a>
                                    </li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                    <?php
                                        //deklarasi array
                                        $array_buah = ['Pisang', 'Jeruk', 'Apel', 'Mangga'];

                                        //menampilkan array
                                        echo 'Menampilkan data array 0 => '.$array_buah[0].'<br>';

                                        //menampilkan jumlah array
                                        echo 'Menampilkan jumlah data array => '.count($array_buah).'<br>';

                                        echo '<hr>';
                                        //Menampilkan array dengan foreach
                                        foreach ($array_buah as $key => $value) {
                                            echo 'Menambahkan data array ke-'.$key.' => '.$value.'<br>';
                                        }
                                        echo '<hr>';

                                        //Menampilkan array dengan list
                                        echo '<ol>';
                                        foreach ($array_buah as $value) {
                                            echo '<li>'.$value.'</li>';
                                        }
                                        echo '</ol>';    
                                        
                                    ?>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="timeline">
                                    <?php 
                                        $tims = ['erwin','heru','ali','zaki'];
                                        array_pop($tims);
                                        foreach ($tims as $value) {
                                            echo $value.'<br>';
                                        }

                                        ?>
                                    </div>
                                    <!-- /.tab-pane -->

                                    <div class="tab-pane" id="settings">
                                    <?php 
                                        $tims = ['erwin','heru','ali','zaki'];
                                        array_push($tims,'wati');
                                        foreach ($tims as $value) {
                                            echo $value.'<br>';
                                        }
                                        ?>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
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