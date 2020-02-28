<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Menu Try Out</h1>
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
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title"></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
							<div class="card-body">
								<h4><b><?= $subject['rumpun_test'];?></b></h4>
								<hr>
								<h5><b><?= $subject['nama_subject'];?></b></h5>
								
								<!--Descriptive-->
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum ad illum, recusandae fugiat magnam cumque quibusdam ratione a voluptas reprehenderit, ullam hic ea, dolorum possimus eum in. Dolore, dolor asperiores.</p>
								<!--/.Descriptive-->

								<h6><b>Waktu: </b><?=$data['menit'];?> menit 
									<?php if($data['detik']!=0):?>
									<?=$data['detik'];?>detik
									<?php endif;?>
								</h6>
								<h6><b>Jumlah Soal: </b><?=$data['total_soal'];?> </h6>
								<br>
								<a href="<?= base_url('');?>index.php/dashboard/dashboard/tryout_start/<?= $data['kode_subject'];?>">
									<button class="btn btn-outline-success">Start</button>
								</a>
								<a>
									<button class="btn btn-outline-danger">Back</button>
								</a>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<i class="fa fa-info-circle"><span>&nbsp;<b>Notes:</b></span></i>
								<br>
								<ul>
									<li>Tekan "Start" untuk memulai Try Out</li>
									<li>Tekan "Back" untuk kembali ke sebelumnya</li>
								</ul>
							</div>
					</div>
					<!-- /.card -->
				</div>
			</div>
			<!-- /.row -->

		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
    
</div>
<!-- /.content-wrapper -->
