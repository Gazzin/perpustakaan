<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	<h1>Anggota</h1>
	<a href="<?php echo base_url('Anggota/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>
	<table class="table table-striped table-bordered" width="100%" id="example">
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>kode</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>notelp</th>
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
					<td>
						<!-- --AKSI-- -->
						<a href="<?php echo base_url('Anggota/ubah/'.$value['kode']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('Anggota/hapus/'.$value['kode']) ?>" class="btn btn-sm btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('admin/footer') ?>