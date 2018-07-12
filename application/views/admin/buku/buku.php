<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Selamat Datang</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
	</div>
	<h1>Buku</h1>
	<a href="<?php echo base_url('Buku/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>

	<!-- File Header -->
	<table class="table table-striped table-bordered" width="100%" id="example">
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>Kode</th>
				<th>Judul</th>
				<th>Penebit</th>
				<th>Pengarang</th>
				<th>Tahun Terbit</th>
				<th>Abstrak</th>
				<th>Gambar</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['kode'] ?></td>
					<td><?php echo $value['judul'] ?></td>
					<td><?php echo $value['penerbit'] ?></td>
					<td><?php echo $value['pengarang'] ?></td>
					<td><?php echo $value['tahunterbit'] ?></td>
					<td><?php echo $value['abstrak'] ?></td>
					<td><img src="<?php echo base_url('uploads/'.$value['gambar']) ?>" style="width: 150px;"></td>
					<td>
						<!-- --AKSI-- -->
						<a href="<?php echo base_url('Buku/ubah/'.$value['kode']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('Buku/hapus/'.$value['kode']) ?>" class="btn btn-sm btn-danger">Hapus</a>
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