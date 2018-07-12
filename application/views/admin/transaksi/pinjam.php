<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	<h1>Peminjaman</h1>
	<?php echo form_open_multipart(''); ?>
		<?php echo (isset($error) ? $error : "") ?>
		<div class="form-group row">
			<label for="no_pinjam" class="col-sm-2 col-form-label">no_pinjam</label>
			<div class="col-sm-10">
				<input type="text" name="no_pinjam" readonly class="form-control" id="no_pinjam" value="<?php echo $no_pinjam ?>" placeholder="no_pinjam">
				<?php echo form_error('no_pinjam') ?> <!-- menampilkan error saat rule no_pinjam gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="kode_petugas" class="col-sm-2 col-form-label">kode_petugas</label>
			<div class="col-sm-10">
				<input type="text" name="kode_petugas" readonly class="form-control" id="kode_petugas" value="<?php echo $this->session->userdata('logged_in')['kode'] ?>" placeholder="kode_petugas">
				<?php echo form_error('kode_petugas') ?> <!-- menampilkan error saat rule kode_petugas gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="kode_pengguna" class="col-sm-2 col-form-label">kode_pengguna</label>
			<div class="col-sm-10">
				<select name="kode_pengguna" class="form-control">
					<?php foreach ($anggota as $key => $value): ?>
						<option value="<?php echo $value->kode ?>"><?php echo $value->nama ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="tanggal" class="col-sm-2 col-form-label">tanggal</label>
			<div class="col-sm-10">
				<input type="date" name="tanggal" class="form-control" id="tanggal" value="<?php echo date('Y-m-d') ?>" placeholder="tanggal">
				<?php echo form_error('tanggal') ?> <!-- menampilkan error saat rule tanggal gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="tanggal_kembali" class="col-sm-2 col-form-label">tanggal_kembali</label>
			<div class="col-sm-10">
				<input type="date" name="tanggal_kembali" class="form-control" id="tanggal_kembali" value="<?php echo date('Y-m-d') ?>" min="<?php echo date('Y-m-d') ?>" placeholder="tanggal_kembali">
				<?php echo form_error('tanggal_kembali') ?> <!-- menampilkan error saat rule tanggal_kembali gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-primary" value="Transaksi">
		</div>
	</form>


</main>
<?php $this->load->view('admin/footer') ?>