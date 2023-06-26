<div class="container-fluid">
	<div class="card">
	  <h5 class="card-header">Detail Produk</h5>
	  <div class="card-body">

	  	<?php foreach($buku as $bk): ?>
	  	<div class="row">
	  		<div class="col-md-4">
	  			<img src="<?php echo base_url(). 'uploads/' .$bk->Gambar ?>" class="card-img-top mb-3">
	  		</div>
	  		<div class="col-md-8">
	  			<table class="table mt-1">
	  				<tr>
	  					<td>Kode Buku</td>
	  					<td><strong><?php echo $bk->Kode_Buku ?></strong></td>
	  				</tr>
	  				<tr>
	  					<td>Kode Kategori</td>
	  					<td><strong><?php echo $bk->Kode_Kategori ?></strong></td>
	  				</tr>
	  				<tr>
	  					<td>Judul Buku</td>
	  					<td><strong><?php echo $bk->Judul_Buku ?></strong></td>
	  				</tr>
	  				<tr>
	  					<td>Pengarang</td>
	  					<td><strong><?php echo $bk->Pengarang ?></strong></td>
	  				</tr>
	  				<tr>
	  					<td>Penerbit</td>
	  					<td><strong><?php echo $bk->Penerbit ?></strong></td>
	  				</tr>
	  				<tr>
	  					<td>Harga</td>
	  					<td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($bk->Harga, 0,',','.')  ?></div></strong></td>
	  				</tr>
	  				<tr>
	  					<td>Stok</td>
	  					<td><strong><?php echo $bk->Stok ?></strong></td>
	  				</tr>
	  				<tr>
	  					<td>Sinopsis</td>
	  					<td><strong><?php echo $bk->Sinopsis ?></strong></td>
	  				</tr>
	  			</table>
	  			<?php echo anchor('dashboard/tambah_ke_keranjang/'.$bk->Kode_Buku, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') 
	  			?>
	  			<?php echo anchor('dashboard/index/','<div class="btn btn-sm btn-danger">Back</div>') 
	  			?>
	  		</div>
	  	</div>
	    <?php endforeach; ?>
	  </div>
	</div>
</div>