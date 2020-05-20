<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situs Sewa Properti</title>
    <?php $this->load->view('pemilik/template/head'); ?>
</head>

<body style="background-color: #f5eef8;">
    <?php $this->load->view('pemilik/template/navbar'); ?>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <ul class="list-group list-group-flush">

                    <li class="list-group-item list-group-item-action text-center"><button class="btn btn-outline-success" type="submit" style="width: 250px;">Tambah Properti</button></li>
                    <li class="list-group-item list-group-item-action"><a href="<?php echo site_url() ?>welcome/properti_anda">Pengaturan Akun</a></li>
                    <li class="list-group-item list-group-item-action"><a href="<?php echo site_url() ?>welcome/daftar_postingan">Daftar Postingan</a></li>
                    <li class="list-group-item list-group-item-action">Data Penyewa</li>
                </ul>
            </div>

            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header">
                        Daftar Postingan
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <?php
                            $k = $this->uri->segment(3);
                            echo anchor('welcome/tambah_postingan/' . $k, 'Tambah Postingan');
                            ?>
                            <!--<input type="button" class="btn btn-primary" value="Tambah Postingan">-->


                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr class="table-success text-center">
                                        <th scope="col" style="width: 20px;">No</th>
                                        <th scope="col">Judul Postingan</th>
                                        <th scope="col">Alamat Lokasi Properti</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                $no = 1;
                                foreach ($user as $u) {

                                ?>
                                    <tbody>

                                        <tr>
                                            <th scope="row" class="text-center"><?php echo $no++ ?></th>
                                            <td><?php echo $u->Judul_postingan; ?></td>
                                            <td><?php echo $u->kd_properti; ?></td>
                                            <td>
                                                <?php echo anchor('crud/edit_postingan/' . $u->kd_properti, 'Edit'); ?>
                                                <?php echo anchor('crud/delete_postingan/' . $u->kd_properti, 'Hapus'); ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                            </table>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php $this->load->view('pemilik/template/js'); ?>
</body>

</html>