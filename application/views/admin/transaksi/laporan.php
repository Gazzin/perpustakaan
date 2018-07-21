<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Laporan</h1>
<<<<<<< HEAD
			<a href="<?php echo base_url('Transaksi/print') ?>" class="btn btn-success">Print</a>
			<table class="table table-striped table-bordered">
=======
			<table id="table-laporan" class="table table-striped table-bordered">
>>>>>>> d722b80f5fc384829475a1316d274d5e07f400f0
				<thead>
					<tr>
						<th>No_Pinjam</th>
						<th>Tanggal</th>
						<th>Nama Petugas</th>
						<th>Nama Pengguna</th>
						<th>Status</th>
						<th>Buku</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<?php $total=0; ?>
					<?php foreach ($peminjaman as $key => $value): ?>
						<?php 
						$total += $value->total;
						$buku = explode("<br>",$value->list);
						$rowspan = count($buku);
						?>
						<tr>
							<td><?php echo $value->no_pinjam ?></td>
							<td><?php echo $value->tanggal ?></td>
							<td><?php echo $value->nama_petugas ?></td>
							<td><?php echo $value->nama_pengguna ?></td>
							<td>
								<?php if($value->status == 1){ ?>
									Belum Dikembalikan
								<?php }else{ ?>
									Sudah Dikembalikan
								<?php } ?>
							</td>
							<td>
								<?php $buku_list = explode("<br>", $value->list); ?>
								<?php foreach ($buku_list as $k => $v): ?>
									<?php $buku = explode("-", $v); ?> 
									<p><b><?php echo $buku[0] ?></b> @<?php echo $buku[1] ?>, Rp. <?php echo $buku[2] ?></p>
								<?php endforeach ?>
							</td>
							<td><?php echo $value->total ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="5"></td>
						<td>Total</td>
						<td><?php echo $total ?></td>
					</tr>
				</tfoot>
			</table>
		</div>
	</main>
	<?php $this->load->view('admin/footer') ?>