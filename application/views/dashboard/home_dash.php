<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item active"><a href="#">Home</a></li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">

			<!-- Small boxes (Stat box) -->
			<div class="row" id="row">
				<div class="col-12">
					<div class="callout callout-info">
						<h2>Selamat Datang</h2>
						<!--Kondisi Status == Inactive-->
						<?php if($_SESSION['status']!='active'):?>
						Silahkan verifikasi akun Anda terlebih dahulu dengan klik link tombol di bawah ini:
						<hr>
						<a href="<?=base_url();?>index.php/dashboard/dashboard/verify" class="btn btn-block white btn-outline-primary">Kirimkan Tautan Verifikasi</a>

						<!--Kondisi Status == Active-->
						<?php else:?>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatem consequuntur eaque
						magnam? Ipsam, alias? Rerum corporis reprehenderit quibusdam minima.
						<?php endif;?>
					</div>
				</div>
			</div>
			<!-- /.row -->

		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
