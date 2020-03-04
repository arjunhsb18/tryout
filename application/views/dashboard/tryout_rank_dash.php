<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Ranking Try Out</h1>
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
						<form role="form" id="form">
							<div class="card-body">
								<div class="form-group">
									<p id="message" style="color:red;"></p>
									<label for="username">Username :</label>
									<input type="text" class="form-control" name="username" placeholder="Masukkan Username...">
									<label for="kode-voucher">Kode Try Out :</label>
									<input type="text" class="form-control" name="kode" placeholder="Masukkan Kode Try Out...">
									<label for="nilai-utbk">Nilai UTBK :</label>
									<input type="text" class="form-control" name="nilai" placeholder="Nilai UTBK..." disabled>
									<label for="pilihan-1">Pilihan 1 :</label>
									<select name="pilihan-1" class="custom-select">
										<option selected="selected">Pilihan 1</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
										<option>option 5</option>
									</select>
									<label for="pilihan-2">Pilihan 2 :</label>
									<select name="pilihan-2" class="custom-select">
										<option selected="selected">Pilihan 2</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
										<option>option 5</option>
									</select>
								</div>
								<button type="submit" id="submit-rank" class="btn btn-outline-primary">Submit</button>
							</div>
							<!-- /.card-body -->
						</form>
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
