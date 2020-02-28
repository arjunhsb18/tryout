<div class="col-12">
					<div class="callout callout-info">
					<h2>Selamat Datang</h2>
					<!--Kondisi Status == Inactive-->
					<?php if($_SESSION['status']!='active'):?>
					Silahkan verifikasi akun Anda terlebih dahulu dengan klik link tombol di bawah ini:
					<hr>
					<a class="btn btn-block white btn-outline-primary">Kirimkan Tautan Verifikasi</a>
					
					<!--Kondisi Status == Active-->
					<?php else:?>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatem consequuntur eaque magnam? Ipsam, alias? Rerum corporis reprehenderit quibusdam minima.
					<?php endif;?>

					</div>
</div>