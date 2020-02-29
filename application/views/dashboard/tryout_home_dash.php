<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark"><?= $subject['nama_subject'];?> <span id="kode-subject" style="font-size:1px; visibility:hidden; "><?=$subject['kode_subject'];?></span></h1>
				</div><!-- /.col -->
				
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row" id="tryout">
				<!--Try Out Pages with AJAX -->
				<div class="col-md-12 col-xs-10">
					<div class="card">
							<div class="p-0 text-center mt-2">
								<button style="font-size:25px; padding:5px 5px; width:200px;" class="btn btn-app text-center" id="timer"><?=$subject['menit'];?>:<?=$subject['detik'];?></button>
							</div><!-- /.card-header -->
						<div class="row">
							<div class="col-md-2">
								<!-- Profile Image -->
								<div class="card mx-2 ">
									<div class="card-body box-profile">
											<div class="nav nav-pills di-inline text-center" id="pages">
											<?php for($i=1;$i<=$total_question['total_soal'];$i++):?>
													<?php if($i==1):?>
															<a class="page page-<?=$i;?> nav-link active" href="#soal-<?=$i;?>" data-toggle="tab"><?=$i;?></a>
													<?php elseif($i==$total_question['total_soal']):?>
													<a class="page page-last page-<?=$i;?> nav-link active" href="#soal-<?=$i;?>" data-toggle="tab"><?=$i;?></a>
													<?php else:?>
															<a class="page page-<?=$i;?> nav-link" href="#soal-<?=$i;?>" data-toggle="tab"><?=$i;?></a>
													<?php endif;?>
												<?php endfor;?>
											</div>
									</div>
									<!-- /.card-body -->
								</div>
								<!-- /.card -->
							</div>

							<div class="col-md-10">
								<div class="card mx-2">
									<div class="card-body">
										<div class="tab-content">
											<?php foreach($questions as $rows):
											if($rows['nomor_soal']==1):?>
											<div class="active tab-pane" role="tabpanel" id="soal-<?=$rows['nomor_soal'];?>">
											<?php else:?>
											<div class="tab-pane" role="tabpanel" id="soal-<?=$rows['nomor_soal'];?>">
											<?php endif;?>
												<!-- Post -->
												<div class="post">
													<div>
														<div class="user-block">
															<h3 class="card-title judul" id="judul-<?=$rows['nomor_soal'];?>"><b>Soal <?=$rows['nomor_soal'];?></b></h3>
														</div>
														<!-- /.user-block -->
														<?php if($rows['image']!=''):?>
															<div class="text-center">
															<img style="border-radius:0px; max-height:200px; max-width:200px;" class="img-circle img-bordered-sm"
																src="<?= base_url();?>assets/image/soal/<?= $rows['image'];?>" alt="image">
															</div>
														<?php endif;?>
														<p>
															<?=$rows['soal'];?>
														</p>
														<br>
														<form class="answer" name="form<?=$rows['nomor_soal'];?>">
															
															<p>
																<input type="radio"
																	name="answer-<?=$rows['nomor_soal'];?>"  value="A"> A. <?=$rows['opsi_a'];?> 
															</p>
															<p>
																<input type="radio"
																	name="answer-<?=$rows['nomor_soal'];?>"  value="B"> B. <?=$rows['opsi_b'];?> 
															</p>
															
															<p>
																<input type="radio"
																	name="answer-<?=$rows['nomor_soal'];?>"  value="C"> C. <?=$rows['opsi_c'];?> 
															</p>
															<p>
																<input type="radio"
																	name="answer-<?=$rows['nomor_soal'];?>"  value="D"> D. <?=$rows['opsi_d'];?> 
															</p>
															<p>
																<input type="radio"
																	name="answer-<?=$rows['nomor_soal'];?>"  value="E"> E. <?=$rows['opsi_e'];?> 
																	
															</p>
															
														</form>
														<a style="float:left;" class="uncheck" href="answer-<?=$rows['nomor_soal'];?>">
																		<button type="button" class="btn btn-outline-dark default btn-sm"
																			data-toggle="tooltip">
																			Uncheck
																		</button>
															</a>
														
													</div>
													<br>
													<br>
													<div class="mailbox-controls text-center">
														
														
														<a class="ragu" href="">
																	<button type="button" class="btn btn-outline-dark default btn-md "
																		data-toggle="tooltip">
																		Ragu-ragu
																	</button>
														</a>
														<div class="btn-group">
															<?php if($rows['nomor_soal']!=1):?>
															<a style="margin:0 5px;" class="arrow" href="#soal-<?=($rows['nomor_soal']-1);?>" data-toggle="tab">
																<button type="button" class="btn btn-outline-primary btn-md" data-toggle="tooltip"
																	data-container="body" title="Back">
																	<i class="fa fa-arrow-circle-left"></i>
																</button>
															</a>
															<?php endif;?>

															<?php if($rows['nomor_soal']!=$total_question['total_soal']):?>
															<a style="margin:0 5px;" class="arrow" href="#soal-<?=($rows['nomor_soal']+1);?>" data-toggle="tab" disabled>
																<button type="button" class="btn btn-outline-primary btn-md" data-toggle="tooltip"
																	data-container="body" title="Next">
																	<i class="fa fa-arrow-circle-right"></i>
																</button>
															</a>
															<?php endif;?>
														</div>
														<!-- /.btn-group -->
														<a href="">
															<button type="button" class="submit-answer btn btn-outline-success default btn-md "
																data-toggle="tooltip">
																Submit
															</button>
														</a>
													</div>
												</div>
												<!-- /.post -->
											</div>
											<?php endforeach;?>
										</div>
										<!-- /.tab-content -->
									</div><!-- /.card-body -->
								</div>
							</div>

						</div>
					</div>
					<!-- /.nav-tabs-custom -->
				</div>
				<!-- /.col -->
			</div><!--/.row -->

		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
