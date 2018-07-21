<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Pengembalian</h1>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>No_Pinjam</th>
						<th>Tanggal</th>
						<th>Tanggal Kembali</th>
						<th>Nama Petugas</th>
						<th>Nama Pengguna</th>
						<th>Judul Buku</th>
						<th>Jumlah</th>
						<th>Denda</th>
						<th>Kembali</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($peminjaman as $key => $value): ?>
						<?php 
						$buku = explode("<br>",$value->list);
						$rowspan = count($buku);
						?>
						<tr>
							<td rowspan="<?php echo $rowspan ?>"><?php echo $value->no_pinjam ?></td>
							<td rowspan="<?php echo $rowspan ?>"><?php echo $value->tanggal ?></td>
							<td rowspan="<?php echo $rowspan ?>"><?php echo $value->tanggal_kembali ?></td>
							<td rowspan="<?php echo $rowspan ?>"><?php echo $value->nama_petugas ?></td>
							<td rowspan="<?php echo $rowspan ?>"><?php echo $value->nama_pengguna ?></td>
							
							<?php $buk = explode("-",$buku[0]) ?>
							<td><?php echo $buk[0] ?></td>
							<td><?php echo $buk[1] ?></td>
							<td rowspan="<?php echo $rowspan ?>">
								<?php 
								$date1 = new DateTime($value->tanggal_kembali);
								$date2 = new DateTime(date("Y-m-d"));
								$diff = $date1->diff($date2);
								echo ($date1 < $date2 ?$diff->days*3000:"Belum Denda") ?>
							</td>
							<td rowspan="<?php echo $rowspan ?>">
								<a href="<?php echo base_url('Transaksi/kembali/'.$value->no_pinjam) ?>" class="btn btn-sm btn-success">Kembali</a>
							</td>
						</tr>
						<?php unset($buku[0]); ?>
						<?php foreach ($buku as $k => $v): ?>
							<?php $bu = explode("-",$v) ?>
							<tr>
								<td><?php echo $bu[0] ?></td>
								<td><?php echo $bu[1] ?></td>
							</tr>
						<?php endforeach ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>

	</main>
	<?php $this->load->view('admin/footer') ?>