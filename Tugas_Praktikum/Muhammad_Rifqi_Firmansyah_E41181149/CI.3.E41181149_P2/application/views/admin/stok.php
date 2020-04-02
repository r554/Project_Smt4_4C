<!DOCTYPE html>
<html>

<head>
    <!-- bagian Head -->
    <?php $this->load->view('template/head') ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- bagian Header -->
            <?php $this->load->view('template/header') ?>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- bagian Sidebar -->
            <?php $this->load->view('template/sidebar') ?>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Stok
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Stok</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <h1>Halaman Stock</h1>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <?php $this->load->view('template/footer') ?>
        </footer>

    </div>
    <!-- ./wrapper -->

    <!-- Bagian JS -->
    <?php $this->load->view('template/js') ?>
</body>

</html>