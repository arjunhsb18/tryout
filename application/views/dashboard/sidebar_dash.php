<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="<?= base_url();?>assets/icon/logo_knowlej.png" class="brand-image img-circle elevation-3"
			style="opacity: .8">
		<span class="brand-text font-weight-bold">Knowlej.ID</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url();?>assets/image/avatar/foto.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Arjun Hasibuan</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item menu-open" id="dashboard">
					<a href="<?= base_url();?>index.php/dashboard/dashboard" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-header uppercase"><?= $_SESSION['role_id'];?></li>
				<li class="nav-item has-treeview">
					<a class="nav-link">
						<i class="nav-icon fas fa-copy"></i>
						<p>
							Try Out
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url();?>index.php/dashboard/dashboard/tryout" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Try Out</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/layout/top-nav-sidebar.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Hasil Try Out</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/layout/boxed.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Ranking Try Out</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/layout/fixed-sidebar.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Pembahasan Try Out</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-chart-pie"></i>
						<p>
							Kisi-Kisi
						</p>
					</a disabled>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-thumbs-up"></i>
						<p>
							Tips & Trik
						</p>
					</a>
				</li>
				<li class="nav-header uppercase">Setting</li>
				<li class="nav-item">
					<a href="pages/calendar.html" class="nav-link">
						<i class="nav-icon far fa-user"></i>
						<p>
							General
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="pages/calendar.html" class="nav-link">
						<i class="nav-icon far fa-user"></i>
						<p>
							Profile
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
