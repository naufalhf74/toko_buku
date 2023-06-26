<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data Buku </h3>

	<?php foreach($buku as $bk) : ?>

		<form action="<?php echo base_url().'admin/data_buku/update' ?>" method="post">

			<div class="for-group">
				<label>Kode Kategori</label>
				<input type="hidden" name="kode_buku" class="form-control" value="<?php echo $bk->Kode_Buku ?>">
				<input type="text" name="kode_kategori" class="form-control" value="<?php echo $bk->Kode_Kategori ?>"> 
			</div>

			<div class="for-group">
				<label>Judul Buku</label>
				<input type="text" name="judul_buku" class="form-control" value="<?php echo $bk->Judul_Buku ?>"> 
			</div>

			<div class="for-group">
				<label>Pengarang</label>
				<input type="text" name="pengarang" class="form-control" value="<?php echo $bk->Pengarang ?>"> 
			</div>

			<div class="for-group">
				<label>Penerbit</label>
				<input type="text" name="penerbit" class="form-control" value="<?php echo $bk->Penerbit ?>"> 
			</div>

			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $bk->Harga ?>"> 
			</div>

			<div class="for-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control" value="<?php echo $bk->Stok ?>"> 
			</div>

			<div class="for-group">
				<label>Sinopsis</label>
				<input type="text" name="sinopsis" class="form-control" value="<?php echo $bk->Sinopsis ?>"> 
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

		</form>

	<?php endforeach; ?>

</div>