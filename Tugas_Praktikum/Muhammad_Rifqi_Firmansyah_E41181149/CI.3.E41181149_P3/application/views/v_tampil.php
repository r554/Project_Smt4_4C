<!DOCTYPE html>
<html>
<head>
	<title>Halaman View</title>
</head>
<body>
	<center><h1>Halaman Tampil</h1></center>
	<center><h2>Selamat Datang <?php echo $this->session->userdata("nama"); ?></h2></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center><br>
	<center><a href="<?php echo base_url('login/logout'); ?>">Logout</a></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $u->nama ?></td>
				<td><?php echo $u->alamat ?></td>
				<td><?php echo $u->pekerjaan ?></td>
				<td>
					<?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
					<?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>