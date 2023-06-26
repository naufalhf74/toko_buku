<div class="container-fluid">
			<h3>Data Buku</h3>
			<?php if(!empty($keyword)){ ?>
			<p style="color:orange"><b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>"</b></p>
			<?php } ?>
	<table class=" text-center table table-bordered">
		<tr align="center">
			<th>No</th>
			<th>Kode Buku</th>
			<th>Kode Kategori</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Sinopsis</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php
		$no=1;
		foreach ($data as $bk) : ?>
		<tr align="center">
			<td><?= $no++ ?></td>
	      	<td><?= $bk['Kode_Buku'] ?></td>
	      	<td><?= $bk['Kode_Kategori'] ?></td>
	      	<td><?= $bk['Judul_Buku'] ?></td>
	      	<td><?= $bk['Pengarang'] ?></td>
	      	<td><?= $bk['Penerbit'] ?></td>
	      	<td><?= $bk['Harga'] ?></td>
	      	<td><?= $bk['Stok'] ?></td>
	      	<td style="text-align: justify;"><?= $bk['Sinopsis'] ?></td>
			<td><?php echo anchor('admin/data_buku/edit/' .$bk['Kode_Buku'], '<div class="btn btn-success btn-sm"><i class="fa fa-edit" style="color : white" data-toggle="tooltip" title="Edit"></i>') ?></td>
			<td><?php echo anchor('admin/data_buku/hapus/' .$bk['Kode_Buku'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash" style="color : white" data-toggle="tooltip" title="Hapus"></i>') ?></td>
		</tr>

		<?php endforeach; ?>
	</table>
</div>