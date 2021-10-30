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
						Input Transaksi Toko Sepatu
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
						<input type="text" name="nama" id="nama">
						<?= form_erorr('nama', '<br> <span style="color : red;">','</span>'); ?>
					</td>
				</tr>
				<tr>
					<th>No HP</th>
					<td>:</td>
					<td>
						<input type="text" name="nohp" id="nohp">
						<?= form_erorr('nohp', '<br> <span style="color : red;">','</span>'); ?>
					</td>
				</tr>
				<tr>
					<th>Merk</th>
					<td>:</td>
					<td>
						<select name="merk" id="merk"></select>
						<option>--pilih merk--</option>
						<option value="Nike">Nike</option>
						<option value="Adidas">Adidas</option>
						<option value="Kickers">Kickers</option>
						<option value="Eiger">Eiger</option>
						<option value="Bucheri">Bucheri</option>
					</td>
				</tr>
				
				<tr>
					<th>Ukuran</th>
					<td>:</td>
					<td>
						<select name="ukuran" id="ukuran"></select>
							<option>--pilih ukuran--</option>
							<?php for($i = 32; $i <- 44; $i ++) :?>
								<option value="<?= $i; ?>"><?= $i; ?></option>
							<?php endfor; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<hr>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</td>
				</tr>
			</table>
	</center>
	
</body>
</html>
				