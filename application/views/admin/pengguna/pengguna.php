<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Selamat Datang</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
	</div>
	<h1>Pengguna</h1>
	<a href="<?php echo base_url('Pengguna/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>

	<!-- File Header -->
	<table class="table table-striped table-bordered" width="100%" id="example">
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>Kode</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No Telp</th>
				<th>Username</th>
				<th>Password</th>
				<th>Peran</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['kode'] ?></td>
					<td><?php echo $value['nama'] ?></td>
					<td><?php echo $value['alamat'] ?></td>
					<td><?php echo $value['notelp'] ?></td>
					<td><?php echo $value['username'] ?></td>
					<td><?php echo $value['password'] ?></td>
					<td><?php echo $value['peran'] ?></td>
					<td>
						<!-- --AKSI-- -->
						<a href="<?php echo base_url('Pengguna/ubah/'.$value['kode']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('Pengguna/hapus/'.$value['kode']) ?>" class="btn btn-sm btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<!-- File Footer -->

</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('admin/footer') ?>