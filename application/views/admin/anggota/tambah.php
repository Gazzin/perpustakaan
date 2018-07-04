<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	<h1>Anggota</h1>
	<form action="<?php echo base_url('Anggota/tambah'); ?>" method="post">
		<!-- copy script ini untuk mengulang, tergantung pada jumlah field ganti nama_field tergantung nama field nya -->
	
			<div class="form-group row">
			<label for="nama" class="col-sm-2 col-form-label">nama</label>
			<div class="col-sm-10">
				<input type="text" name="nama" class="form-control" id="nama" value="" placeholder="nama">
				<?php echo form_error('nama') ?>	
			</div>
		</div>
			<div class="form-group row">
			<label for="alamat" class="col-sm-2 col-form-label">alamat</label>
			<div class="col-sm-10">
				<input type="text" name="alamat" class="form-control" id="alamat" value="" placeholder="alamat">
				<?php echo form_error('alamat') ?>
			</div>
		</div>
				<div class="form-group row">
			<label for="notelp" class="col-sm-2 col-form-label">notelp</label>
			<div class="col-sm-10">
				<input type="text" name="notelp" class="form-control" id="notelp" value="" placeholder="notelp">
				<?php echo form_error('notelp') ?>
		</div>
	</div>
		<!-- copy sampai sini -->
		
		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-primary" value="Tambah">
		</div>
	</form>
</main>
<?php $this->load->view('admin/footer') ?>