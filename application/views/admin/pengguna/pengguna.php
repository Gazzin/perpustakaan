<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	
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
				<th>Peran</th>
				<?php if ($this->session->userdata('logged_in')['peran'] == '1'): ?>
				<th>Aksi</th>
			<?php endif ?>
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
					<td><?php switch ($value['peran']) {
						case '1':
							echo "Admin";
							break;
							case '2':
							echo "Petugas";
							break;
							case '3':
							echo "Anggota";
							break;
						
						default:
							echo "Tidak Diketahui";
							break;
					} ?></td>
					<td>
						<!-- --AKSI-- -->
						<?php if ($this->session->userdata('logged_in')['peran'] == '1'): ?>
						<a href="<?php echo base_url('Pengguna/ubah/'.$value['kode']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('Pengguna/hapus/'.$value['kode']) ?>" class="btn btn-sm btn-danger">Hapus</a>
						<?php endif ?>
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