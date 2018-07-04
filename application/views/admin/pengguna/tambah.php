<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Selamat Datang</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
	</div>
	<h1>Table</h1>

	<!-- load header -->
	<!-- action akan dilakukan ke controller Pengguna dengan fungsi tambah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e
	 -->
	<form action="<?php echo base_url('Pengguna/tambah'); ?>" method="post">
		<div class="form-group row">
			<label for="nama" class="col-sm-2 col-form-label">nama</label>
			<div class="col-sm-10">
				<input type="text" name="nama" class="form-control" id="nama" value="" placeholder="nama">
				<?php echo form_error('nama') ?> <!-- menampilkan error saat rule nama gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="alamat" class="col-sm-2 col-form-label">alamat</label>
			<div class="col-sm-10">
				<input type="text" name="alamat" class="form-control" id="alamat" value="" placeholder="alamat">
				<?php echo form_error('alamat') ?> <!-- menampilkan error saat rule alamat gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="notelp" class="col-sm-2 col-form-label">notelp</label>
			<div class="col-sm-10">
				<input type="text" name="notelp" class="form-control" id="notelp" value="" placeholder="notelp">
				<?php echo form_error('notelp') ?> <!-- menampilkan error saat rule notelp gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="username" class="col-sm-2 col-form-label">username</label>
			<div class="col-sm-10">
				<input type="text" name="username" class="form-control" id="username" value="" placeholder="username">
				<?php echo form_error('username') ?> <!-- menampilkan error saat rule username gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="password" class="col-sm-2 col-form-label">password</label>
			<div class="col-sm-10">
				<input type="text" name="password" class="form-control" id="password" value="" placeholder="password">
				<?php echo form_error('password') ?> <!-- menampilkan error saat rule password gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="peran" class="col-sm-2 col-form-label">peran</label>
			<div class="col-sm-10">
				<select name="peran" class="form-control">
					<option>petugas</option>
					<option>anggota</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-primary" value="Tambah">
		</div>
	</form>
	<!-- load footer -->


</main>
<?php $this->load->view('admin/footer') ?>