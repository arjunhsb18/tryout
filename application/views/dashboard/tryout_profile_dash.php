<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">

					<!-- Profile Image -->
					<div class="card card-primary card-outline">
						<div class="card-body box-profile">
							<div class="text-center profile-value">
								<img style="border-radius:40%;cursor:pointer;" class="profile-user-img img-fluid img-circle" src="<?= base_url();?>assets/image/avatar/foto.jpg"
									alt="User profile picture">
								<div class="text-center" style="display:none;">
										<a href="" ><i class="fa fa-edit" >Edit</i></a>
								</div>
							</div>
							
							<h3 class="profile-username text-center profile-value" style="cursor:pointer;">Arjun Hasibuan <a href="" class="profile-edit" style="display:none;" ><i class="fa fa-edit">Edit</i></a></h3>

							<p class="text-muted text-center profile-value" style="cursor:pointer;">Mahasiswa <a href="" class="profile-edit" style="display:none;" ><i class="fa fa-edit" >Edit</i></a></p>

							<table class="table" id="profile">
								<tbody>
									<tr>
										<td class="text-left"><b>Birth</b></td>
										<td style="cursor:pointer;" class="text-right profile-value">30 Agustus 1999  <a href="" class="profile-edit" style="display:none;" ><i class="fa fa-edit" >Edit</i></a></td>
									</tr>
									<tr>
										<td class="text-left"><b>Age</b></td>
										<td style="cursor:pointer;" class="text-right profile-value">20 tahun  <a href="" class="profile-edit" style="display:none;" ><i class="fa fa-edit" >Edit</i></a></td>
									</tr>
									<tr>
										<td class="text-left"><b>Address</b></td>
										<td style="cursor:pointer;" class="text-right profile-value">Padang Lawas, Sumut  <a href="" class="profile-edit" style="display:none;" ><i class="fa fa-edit" >Edit</i></a></td>
									</tr>
									<tr>
										<td class="text-left"><b>Phone</b></td>
										<td style="cursor:pointer;" class="text-right profile-value">085321756657  <a href="" class="profile-edit" style="display:none;" ><i class="fa fa-edit" >Edit</i></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
				<div class="col-md-9">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Personal Info</h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
									title="Collapse">
									<i class="fas fa-minus"></i></button>
							</div>
						</div>
						<div class="card-body" style="display: block;">
							<div class="row">
								<div class="col-md-12">
									<table class="table">
										<tbody>
											<tr>
												<td>Username</td>
												<td style="cursor:pointer;" class="profile-value">:&nbsp;<?=$_SESSION['username'];?>
													<a href="" class="profile-edit" style="display:none;" ><i class="fa fa-edit" >Edit</i></a>
												</td>

											</tr>
											<tr>
												<td>Nama Lengkap</td>
												<td style="cursor:pointer;" class="profile-value">:&nbsp;Arjun Hasibuan 
													<a href="" class="profile-edit" style="display:none;" ><i class="fa fa-edit" >Edit</i></a>
												</td>
											</tr>
											<tr>
												<td>Email</td>
												<td style="cursor:pointer;" class="profile-value">:&nbsp;Arjunhasibuan18@gmail.com
													<a href="" class="profile-edit" style="display:none;" ><i class="fa fa-edit" >Edit</i></a>
												</td>
											</tr>
											<tr>
												<td>Deskripsi</td>
												<td style="cursor:pointer;" class="profile-value">:&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus maxime placeat suscipit nostrum soluta consequuntur enim similique veniam aut nulla.  
													<a href="" class="profile-edit" style="display:none;" ><i class="fa fa-edit" >Edit</i></a>
												</td>
											</tr>
										</tbody>
									</table>
									<div class="text-right">
										<button type="submit" class="btn btn-outline-info text-right btn-edit">Edit <i class="fa fa-edit" style="font-size:18px;display:none;" ></i></button>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.nav-tabs-custom -->
				</div>
				<!-- /.col -->

			</div>
			<!-- /.row -->

		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
