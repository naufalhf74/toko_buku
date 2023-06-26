<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide ml-5" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url('assets/img/cr1.png')?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/img/cr2.png')?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/img/cr3.png')?>" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
    <div class="row ml-5 mt-5 mr-5">
      <div class="col ml-3">
        <div id="clockdiv">
          <label>Berakhir Dalam :</label>
          <p id="demo"></p>
          <p id="demo1"></p>
          <p id="demo2"></p>
        </div>
      </div>
    </div>

    <div class="row text-center mr-5 ml-5 mb-5">
                         
        <?php foreach ($buku_anak as $bk) : ?>

            <div class="card ml-5 mr-2 mt-5" style="width: 16rem;">
              <img src="<?php echo base_url().'/uploads/'.$bk->Gambar ?>" class="card-img-top" alt="...">
              <div class="card-body pl-2">
                <h5 class="card-title mb-1"><?php echo $bk->Judul_Buku?></h5>
                <small><?php echo $bk->Pengarang?></small><br>
                <span class="badge badge-success mb-3">Rp. <?php echo number_format($bk->Harga,0, ',','.') ?></span>
                <?php echo anchor('dashboard/tambah_ke_keranjang/'.$bk->Kode_Buku, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                <?php echo anchor('dashboard/detail/'.$bk->Kode_Buku, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                
              </div>
            </div> 

        <?php endforeach; ?>
    </div>

</div>