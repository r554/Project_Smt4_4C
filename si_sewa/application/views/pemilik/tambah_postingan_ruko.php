<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('penyewa/template/head') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('penyewa/template/navbar') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('penyewa/template/sidebar') ?>
        <!-- /.Sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0 text-dark">Tambah Postingan Ruko</h4>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v2</li>
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
                        <div class="col-md-9">
                            <div class="card card-primary">
                                <div class="card-header text-danger">
                                    <h3 class="card-title ">Data Ruko</h3>
                                </div>
                                <!-- /.card-header -->
                                <?php
                                $kd_jenis = 1;
                                $kd_pengguna1 = $this->uri->segment(3);
                                ?>
                                <!-- form start -->
                                <form role="form"
                                    action="<?= base_url('pemilik/save_postingan_ruko/' . $kd_pengguna1) ?>"
                                    method="POST">
                                    <input type="text" name="kd_lapak" id="" value="<?= $invoice; ?>">
                                    <input type="text" name="kd_pengguna" id="" value="<?= $kd_pengguna1; ?>">
                                    <input type="text" name="kd_jenis" id="" value="<?= $kd_jenis; ?>">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Judul Postingan</label>
                                                <input type="text" class="form-control" name="Judul_postingan">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Harga Sewa
                                                </label>
                                                <input type="text" class="form-control" placeholder="Rp"
                                                    name="harga_sewa_pertahun">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Alamat</label>
                                                <textarea type="password" class="form-control"
                                                    name="alamat_lokasi"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Luas Tanah</label>
                                                <input type="text" class="form-control" name="luas_tanah">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Luas Bangunan</label>
                                                <input type="text" class="form-control" name="luas_bangunan">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Jumlah Kamar Mandi</label>
                                                <input type="text" class="form-control" name="jumlah_kamar_mandi">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Jumlah kamar Tidur </label>
                                                <input type="text" class="form-control" name="jumlah_kamar_tidur">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Sumber Air</label>
                                                <input type="text" class="form-control" name="sumber_air">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Daya Listrik </label>
                                                <input type="text" class="form-control" name="daya_listrik">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                name="Deskripsi"></textarea>
                                        </div>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label text-danger" for="exampleCheck1">Saya
                                                bertanggungjawab
                                                dengan data yang saya Masukkan.</label>
                                        </div>
                                        <div class="form-group float-right">
                                            <button type="submit" class="btn btn-info">
                                                Upload
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-3">

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Gambar</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Gambar Ruko</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>

                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Gambar Surat Bukti Bayar Pajak</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Gambar Surat Bukti Kepemilikan</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                </form>
                            </div>
                        </div>

                    </div>

                </div>
                <!--/. container-fluid -->
            </section>

            <div class="modal fade" id="modal-info">
                <div class="modal-dialog">
                    <div class="modal-content bg-light">
                        <div class="modal-header">
                            <h4 class="modal-title text-dark">Postingan Dikirim</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>

                        <div class="modal-body">
                            <!-- form Pembayaran -->
                            <div class="card card-primary bg-secondary">
                                <div class="card-header">
                                    <h3 class="card-title text-warning text-center">
                                        Postingan anda sedang menunggu ferifikasi pihak admin. <br>
                                        Terimakasih
                                    </h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php $this->load->view('penyewa/template/footer'); ?>
        <!-- / Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('penyewa/template/js'); ?>
</body>

</html>