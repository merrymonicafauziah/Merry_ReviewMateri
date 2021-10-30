<!DOCTYPE html>
<html>
<head>
	<title>Transaksi Toko Sepatu</title>
</head>

<body>
	<center>
		<form action="<?= base_url('tokosepatu/cetak'); ?> method="post">
			<table>
				<tr>
					<th colspan="3">
						Output Transaksi Toko Sepatu
					</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr>
					</td>
				</tr>
				<tr>
					<th>Nama Pembeli</th>
					<th>:</th>
					<td>
						<?= $nama; ?>
					</td>
				</tr>
				<tr>
					<th>No HP</th>
					<td>:</td>
					<td>
						<?= $nohp; ?>
					</td>
				</tr>
				<tr>
					<th>Merk</th>
					<td>:</td>
					<td>
						<?= $merk; ?>
					</td>
				</tr>
				
				<tr>
					<th>Ukuran</th>
					<td>:</td>
					<td>
						<?= $ukuran; ?>
					</td>
				</tr>
				
				<tr>
					<th>Harga</th>
					<td>:</td>
					<td>
						<?= $harga; ?>
					</td>
				</tr>
				
				<tr>
					<td colspan="3" align="center">
						<a href="<?= base_url('tokosepatu'); ?>">Kembali</a>
					</td>
				</tr>
			</table>
	</center>
	
</body>
</html>