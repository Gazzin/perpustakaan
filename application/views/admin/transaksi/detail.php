<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	<h1>Peminjaman</h1>
	<?php echo form_open_multipart(''); ?>
		
		<div class="form-group row">
			<label for="kode_buku" class="col-sm-2 col-form-label">kode_buku</label>
			<div class="col-sm-10">
				<select name="kode_buku" class="form-control">
					<?php foreach ($buku as $key => $value): ?>
						<option value="<?php echo $value->kode ?>"><?php echo $value->judul ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="jumlah" class="col-sm-2 col-form-label">jumlah</label>
			<div class="col-sm-10">
				<input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="jumlah">
				<?php echo form_error('jumlah') ?> <!-- menampilkan error saat rule jumlah gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-primary" value="Tambah Buku">
		</div>
	</form>

	<div class="row">
		<div class="col-md-6">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Judul</th>
					<th>Jumlah</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tfoot>
				<?php foreach ($detail as $key => $value): ?>
					<tr>
						<td><?php echo $value->judul ?></td>
						<td><?php echo $value->jumlah ?></td>
						<td><a href="<?php echo base_url('Transaksi/detail_delete/'.$id_peminjaman.'/'.$value->kode) ?>" class="btn btn-sm btn-danger">X</a></td>
					</tr>
				<?php endforeach ?>
			</tfoot>
		</table>
	</div>
	<div class="col-md-6">
		<a href="<?php echo base_url('Transaksi') ?>" class="btn btn-success">Selesai</a>
	</div>
	</div>

</main>
<?php $this->load->view('admin/footer') ?>