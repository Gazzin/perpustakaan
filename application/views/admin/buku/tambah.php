<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Selamat Datang</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
	</div>
	<h1>Table</h1>

	<!-- load header -->
	<!-- action akan dilakukan ke controller Buku dengan fungsi tambah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e
	 -->
	<form action="<?php echo base_url('Buku/tambah'); ?>" method="post">
		<div class="form-group row">
			<label for="judul" class="col-sm-2 col-form-label">judul</label>
			<div class="col-sm-10">
				<input type="text" name="judul" class="form-control" id="judul" value="" placeholder="judul">
				<?php echo form_error('judul') ?> <!-- menampilkan error saat rule judul gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="penerbit" class="col-sm-2 col-form-label">penerbit</label>
			<div class="col-sm-10">
				<input type="text" name="penerbit" class="form-control" id="penerbit" value="" placeholder="penerbit">
				<?php echo form_error('penerbit') ?> <!-- menampilkan error saat rule penerbit gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="pengarang" class="col-sm-2 col-form-label">pengarang</label>
			<div class="col-sm-10">
				<input type="text" name="pengarang" class="form-control" id="pengarang" value="" placeholder="pengarang">
				<?php echo form_error('pengarang') ?> <!-- menampilkan error saat rule pengarang gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="tahunterbit" class="col-sm-2 col-form-label">tahunterbit</label>
			<div class="col-sm-10">
				<input type="text" name="tahunterbit" class="form-control" id="tahunterbit" value="" placeholder="tahunterbit">
				<?php echo form_error('tahunterbit') ?> <!-- menampilkan error saat rule tahunterbit gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="abstrak" class="col-sm-2 col-form-label">abstrak</label>
			<div class="col-sm-10">
				<input type="text" name="abstrak" class="form-control" id="abstrak" value="" placeholder="abstrak">
				<?php echo form_error('abstrak') ?> <!-- menampilkan error saat rule abstrak gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-primary" value="Tambah">
		</div>
	</form>
	<!-- load footer -->


</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('admin/footer') ?>