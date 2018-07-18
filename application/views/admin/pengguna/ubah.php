<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	<h1>Ubah Pengguna</h1>
	<!-- load header -->
	<!-- action akan dilakukan ke controller product dengan fungsi ubah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e -->
	<form action="<?php echo base_url('Pengguna/ubah/'.$getData['kode']); ?>" method="post">
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
			<label for="username" class="col-sm-2 col-form-label">username</label>
			<div class="col-sm-10">
				<input type="text" name="username" class="form-control" id="username"  value="<?php echo $getData['username'] ?>" placeholder="username">
				<?php echo form_error('username') ?> <!-- menampilkan error saat rule username gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="password" class="col-sm-2 col-form-label">password</label>
			<div class="col-sm-10">
				<input type="text" name="password" class="form-control" id="password"  value="<?php echo $getData['password'] ?>" placeholder="password">
				<?php echo form_error('password') ?> <!-- menampilkan error saat rule password gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="peran" class="col-sm-2 col-form-label">peran</label>
			<div class="col-sm-10">
				<select name="peran" class="form-control">
					<?php if ($this->session->userdata('logged_in')['peran'] == '1'): ?>
						<option value="1">Admin</option>
					<?php endif ?>
					<option value="2">Petugas</option>
					<option value="3">Anggota</option>
				</select>
				<script type="text/javascript">$("select[name='peran']").val("<?php echo $getData['peran'] ?>")</script>
			</div>
		</div>
		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-success" value="Ubah">
		</div>
	</form>
	<!-- load footer -->
</main>
<?php $this->load->view('admin/footer') ?>