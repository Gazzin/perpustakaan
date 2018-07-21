<html><head>
<title>Report Table</title></head>
<style type="">
	table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}
</style>
<body>
<h2><center>Laporan Keuangan</center></h2>
<table>
				<thead>
					<tr>
						<th>No_Pinjam</th>
						<th>Tanggal</th>
						<th>Nama Petugas</th>
						<th>Nama Pengguna</th>
						<th>Status</th>
						<th>Judul Buku</th>
						<th>Jumlah</th>
						<th>Harga Buku</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<?php $total=0; ?>
					<?php foreach ($peminjaman as $key => $value): ?>
						<?php $total += $value->total ?>
						<?php 
						$buku = explode("<br>",$value->list);
						$rowspan = count($buku);
						?>
						<tr>
							<td rowspan="<?php echo $rowspan ?>"><?php echo $value->no_pinjam ?></td>
							<td rowspan="<?php echo $rowspan ?>"><?php echo $value->tanggal ?></td>
							<td rowspan="<?php echo $rowspan ?>"><?php echo $value->nama_petugas ?></td>
							<td rowspan="<?php echo $rowspan ?>"><?php echo $value->nama_pengguna ?></td>
							<td rowspan="<?php echo $rowspan ?>">
								<?php if($value->status == 1): ?>
									Belum Dikembalikan
								<?php endif ?>
							</td>
							<?php $buk = explode("-",$buku[0]) ?>
							<td><?php echo $buk[0] ?></td>
							<td><?php echo $buk[1] ?></td>
							<td><?php echo $buk[2] ?></td>
							<td rowspan="<?php echo $rowspan ?>"><?php echo $value->total ?></td>
						</tr>
						<?php unset($buku[0]); ?>
						<?php foreach ($buku as $k => $v): ?>
							<?php $bu = explode("-",$v) ?>
							<tr>
								<td><?php echo $bu[0] ?></td>
								<td><?php echo $bu[1] ?></td>
								<td><?php echo $bu[2] ?></td>
							</tr>
						<?php endforeach ?>
					<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="7"></td>
						<td>Total</td>
						<td><?php echo $total ?></td>
					</tr>
				</tfoot>
			</table>
</body></html>