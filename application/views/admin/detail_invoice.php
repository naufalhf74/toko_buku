<div class="container-fluid">
	<h4>Detail Pesanan</h4>
	<div class="btn btn-sm btn-success mb-3">No. Invoice : <?php echo $invoice->id ?></div>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>NO</th>
			<th>Nama Buku</th>
			<th>Jumlah Pesanan</th>
			<th>Harga Satuan</th>
			<th>SubTotal</th>
		</tr>

		<?php
		$total = 0;
		$no = 1;
		foreach ($pesanan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;

		?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $psn->nama_buku ?></td>
			<td><?php echo $psn->jumlah ?></td>
			<td><?php echo number_format($psn->harga , 0, ',','.') ?></td>
			<td><?php echo number_format($subtotal, 0, ',','.') ?></td>
		</tr>

	 <?php endforeach; ?>

	 <tr>
	 	<td colspan="4" align="right">Grand Total</td>
	 	<td align="right">Rp. <?php echo number_format($total, 0, ',','.') ?></td>
	 </tr>
		
	</table>

	<a href="<?php echo base_url('admin/.invoice/index') ?>"><div class="btn btn-sm btn-primary">Back</div></a>
</div>