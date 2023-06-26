<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_buku"><i class="fas fa-plus fa-sm"></i> Tambah Buku</button>

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
		foreach ($buku as $bk) : ?>
		<tr align="center">
			<td><?php echo $no++ ?></td>
			<td><?php echo $bk->Kode_Buku ?></td>
			<td><?php echo $bk->Kode_Kategori ?></td>
			<td><?php echo $bk->Judul_Buku ?></td>
			<td><?php echo $bk->Pengarang ?></td>
			<td><?php echo $bk->Penerbit ?></td>
			<td><?php echo $bk->Harga ?></td>
			<td><?php echo $bk->Stok ?></td>
			<td align="justify"><?php echo $bk->Sinopsis ?></td>
			<td><?php echo anchor('admin/data_buku/edit/' .$bk->Kode_Buku, '<div class="btn btn-success btn-sm"><i class="fa fa-edit" style="color : white" data-toggle="tooltip" title="Edit"></i>') ?></td>
			<td><?php echo anchor('admin/data_buku/hapus/' .$bk->Kode_Buku, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash" style="color : white" data-toggle="tooltip" title="Hapus"></i>') ?></td>
		</tr>

		<?php endforeach; ?>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_buku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url(). 'admin/data_buku/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

      		<div class="form-group">
      			<label>Kode Buku</label>
      			<input type="text" name="kode_buku" readonly class="form-control" value="KB0<?php echo $no++?>">
      		</div>

      		<div class="form-group">
      			<label>Kode Kategori</label>
             <select class="form-control" name="kode_kategori">
              <option>KG001</option>
              <option>KG002</option>
              <option>KG003</option>
              <option>KG004</option>
              <option>KG005</option>
              <option>KG006</option>
            </select>
      		</div>

      		<div class="form-group">
      			<label>Judul Buku</label>
      			<input type="text" name="judul_buku" class="form-control" required>
      		</div>
      		
      		<div class="form-group">
      			<label>Pengarang</label>
      			<input type="text" name="pengarang" class="form-control" required>
      		</div>

      		<div class="form-group">
      			<label>Penerbit</label>
      			<input type="text" name="penerbit" class="form-control" required>
      		</div>

      		<div class="form-group">
      			<label>Harga</label>
      			<input type="number" name="harga" class="form-control" required>
      		</div>

          <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" style="height: 45px;" accept="image/*" required>
          </div>

      		<div class="form-group">
      			<label>Stok</label>
      			<input type="number" name="stok" class="form-control" required>
      		</div>

      		<div class="form-group">
      			<label>Sinopsis</label>
      			<input type="text" name="sinopsis" class="form-control" required>
      		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>