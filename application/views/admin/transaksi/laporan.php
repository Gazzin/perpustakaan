<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Laporan</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No_Pinjam</th>
					<th>Tanggal</th>
					<th>List Buku</th>
				</tr>
			</thead>
			<tfoot>
				<?php foreach ($peminjaman as $key => $value): ?>
					<tr>
						<td><?php echo $value->no_pinjam ?></td>
						<td><?php echo $value->tanggal ?></td>
						<td><?php echo $value->list ?></td>
					</tr>
				<?php endforeach ?>
			</tfoot>
		</table>
	</div>

</main>
<?php $this->load->view('admin/footer') ?>