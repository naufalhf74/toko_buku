<div class="container-fluid">
			<h3>Data Invoice</h3>
			<?php if(!empty($keyword)){ ?>
			<p style="color:orange"><b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>"</b></p>
			<?php } ?>
	<table class=" text-center table table-bordered">
		<tr align="center">
			<th>ID Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php foreach ($data as $inv) : ?>
		<tr>
			<td><?php echo $inv['id'] ?></td>
			<td><?php echo $inv['nama'] ?></td>
			<td><?php echo $inv['alamat'] ?></td>
			<td><?php echo $inv['tgl_pesan'] ?></td>
			<td><?php echo $inv['batas_bayar'] ?></td>
			<td><?php echo anchor('admin/invoice/detail/' .$inv['id'], '<div class="btn btn-sm btn-primary">Detail</div>')?></td>
			
		</tr>

		<?php endforeach; ?>
	</table>
</div>