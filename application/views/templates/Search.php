<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-book"></i>
				</div>
				<div class="sidebar-brand-text mx-3">TOKO BUKU</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url('index.php/Welcome') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('kategori/flashsale') ?>">
					<i class="fas fa-fw fa-book"></i>
					<span>FLASH SALE</span></a>
			</li>
			<hr class="sidebar-divider">
			<!-- Heading -->
			<div class="sidebar-heading">
				KATEGORI
			</div>



			<!-- Nav Item - Tables -->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('kategori/novel') ?>">
					<i class="fas fa-fw fa-book"></i>
					<span>Novel</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('kategori/komik') ?>">
					<i class="fas fa-fw fa-journal-whills"></i>
					<span>Komik</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('kategori/ensiklopedia') ?>">
					<i class="fas fa-fw fa-atlas"></i>
					<span>Ensiklopedia</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('kategori/buku_pelajaran') ?>">
					<i class="fas fa-fw fa-book-medical"></i>
					<span>Buku Pelajaran</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('kategori/buku_agama') ?>">
					<i class="fas fa-fw fa-quran"></i>
					<span>Buku Agama</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('kategori/buku_anak') ?>">
					<i class="fas fa-fw fa-book"></i>
					<span>Buku Anak-Anak</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Search -->
					<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"action="<?= base_url('index.php/SearchController/index/') ?>" method="get">
						<div class="input-group">
							<input type="text" class="form-control bg-light border-0 small" name="keyword" placeholder="Search for..."
								aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-primary" type="submit">
									<i class="fas fa-search fa-sm"></i>
								</button>
							</div>
						</div>
					</form>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
								aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small"
											placeholder="Search for..." aria-label="Search"
											aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>


						<div class="navbar">
							<ul class="nav navbar-nav navbar-right">
								<li class="ml-3">
									<?php
									$keranjang = '<i class="fas fa-shopping-cart fa-lg" data-toggle="tooltip" title="Keranjang Belanja"></i> '.$this->cart->total_items()  
									?>

									<?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
								</li>
							</ul>
							

						<div class="topbar-divider d-none d-sm-block"></div>

						<ul class="nav navbar-nav navbar-right">
							<?php if($this->session->userdata('username')) { ?>
								<li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
								<li class="ml-3"><?php echo anchor('auth/logout', 'Logout')  ?></li>
							<?php }else{ ?>
								<li><?php echo anchor('auth/login', 'Login'); ?></li>

							<?php  } ?>
							
						</ul>

					    </div>
						
				    </ul>
					<!-- <div class="elfsight-app-95b30b9b-215f-4e2f-83fc-c068e5dbfa4d"></div> -->

				</nav>
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
				<!-- <script src="https://apps.elfsight.com/p/platform.js" defer></script> -->

				<div class="row text-center mt-3 mr-5 ml-5">

				<?php if(empty($keyword)): ?>
							<p style="font-size: 20px; color:orange;"><b>Kata Kunci Masih Kosong</b></p>	
				<?php elseif(!empty($keyword)): ?>
							<p style="font-size: 20px; color:orange;"><b>Menampilkan Data dengan Kata Kunci : "<?= $keyword; ?>"</b></p>
				</div>

				<div class="row text-center mr-5 ml-5 mb-5">
						
								<?php foreach ($data as $bk) : ?>
								<div class="card ml-5 mr-2 mt-5" style="width: 16rem; ">
					              <img src="<?php echo base_url().'/uploads/'.$bk['Gambar'] ?>" class="card-img-top" alt="...">
					              <div class="card-body pl-2">
					                <h5 class="card-title mb-1"><?php echo $bk['Judul_Buku']?></h5>
					                <small><?php echo $bk['Pengarang']?></small><br>
					                <span class="badge badge-success mb-3">Rp. <?php echo number_format($bk['Harga'],0, ',','.') ?></span>
					                <?php echo anchor('dashboard/tambah_ke_keranjang/'.$bk['Kode_Buku'], '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
					                <?php echo anchor('dashboard/detail/'.$bk['Kode_Buku'], '<div class="btn btn-sm btn-success">Detail</div>') ?>
					              </div>
					            </div>
					            <?php endforeach; ?>
					    <?php endif; ?>
			    </div>