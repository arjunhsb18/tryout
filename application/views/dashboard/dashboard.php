<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Try Out | Knowlej.ID</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view('dashboard/css_dash');?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		

		<!--Content-->
			<?php $this->load->view('dashboard/'.$main.'_dash');?>
		<!--Content./-->
		
		<!--Footer-->
			<?php $this->load->view('dashboard/footer_dash');?>
		<!--Footer./-->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->
	<?php $this->load->view('dashboard/script_dash');?>
</body>

</html>
