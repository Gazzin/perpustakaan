<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	<h1>Anggota Edit</h1>
	<form action="<?php echo base_url('Anggota/ubah/'.$getData['kode']); ?>" method="post">
		<!-- sama kaya tambah -->
		<div class="form-group row">
			<label for="nama" class="col-sm-2 col-form-label">nama</label>
			<div class="col-sm-10">
				<input type="text" name="nama" class="form-control" id="nama"  value="<?php echo $getData['nama'] ?>" placeholder="nama">
				<?php echo form_error('nama') ?> <!-- menampilkan error saat rule nama gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="alamat" class="col-sm-2 col-form-label">alamat</label>
			<div class="col-sm-10">
				<input type="text" name="alamat" class="form-control" id="alamat"  value="<?php echo $getData['alamat'] ?>" placeholder="alamat">
				<?php echo form_error('alamat') ?> <!-- menampilkan error saat rule alamat gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="notelp" class="col-sm-2 col-form-label">notelp</label>
			<div class="col-sm-10">
				<input type="text" name="notelp" class="form-control" id="notelp"  value="<?php echo $getData['notelp'] ?>" placeholder="notelp">
				<?php echo form_error('notelp') ?> <!-- menampilkan error saat rule notelp gagal -->
			</div>
		</div>

		
		
		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-success" value="Ubah">
		</div>
	</form>
</main>
<?php $this->load->view('admin/footer') ?>