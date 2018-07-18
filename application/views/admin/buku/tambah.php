<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">

	<h1>Tambah Buku</h1>

	<!-- load header -->
	<!-- action akan dilakukan ke controller Buku dengan fungsi tambah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e
	 -->
	<?php echo form_open_multipart(''); ?>
		<?php echo (isset($error) ? $error : "") ?>
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
			<label for="stok" class="col-sm-2 col-form-label">stok</label>
			<div class="col-sm-10">
				<input type="text" name="stok" class="form-control" id="stok" value="" placeholder="stok">
				<?php echo form_error('stok') ?> <!-- menampilkan error saat rule stok gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="harga" class="col-sm-2 col-form-label">harga</label>
			<div class="col-sm-10">
				<input type="text" name="harga" class="form-control" id="harga" value="" placeholder="harga">
				<?php echo form_error('harga') ?> <!-- menampilkan error saat rule harga gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="gambar" class="col-sm-2 col-form-label">gambar</label>
			<div class="col-sm-10">
				<input type="file" name="gambar" class="form-control">
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