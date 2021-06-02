<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Home Dasawisma</title>
	<link rel="stylesheet" href="css/Home.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>

	<!--wrapper start-->
	<div class="wrapper">
		<!--header menu start-->
		<div class="header">
			<div class="header-menu">
				<div class="title">
					<h6>Dasawisma Indonesia</h6></span>
				</div>
				<div class="sidebar-btn">
					<i class="fas fa-bars"></i>
				</div>
			</div>
		</div>
		<!--header menu end-->

		<!--sidebar start-->
		<div class="sidebar">
			<div class="sidebar-menu">
				<li class="item">
					<a href="HomeketuaU.php" class="menu-btn active">
						<i class="fas fa-home"></i><span>Beranda</span>
					</a>
				</li>
				<li class="item">
					<a href="Datawargaketua.php" class="menu-btn">
						<i class="fas fa-file"></i><span>Data Warga</span>
					</a>
				</li>
				<li class="item">
					<a href="Datapelatihanketua.php" class="menu-btn">
						<i class="fas fa-file"></i><span>Pelatihan</span>
					</a>
				</li>

				<li class="item" id="settings">
					<a href="#settings" class="menu-btn">
						<i class="fas fa-file"></i><span>Catatan Keluarga <i class="fas fa-chevron-down drop-down"></i></span>
					</a>
					<div class="sub-menu">
						<a href="Datakeluargaketua.php"><i class="fas fa-file"></i><span>Data Keluarga</span></a>
						<a href="Dataperkaranganketua.php"><i class="fas fa-file"></i><span>Pemanfaatan Perkarangan</span></a>
						<a href="pengumumanketua.html"><i class="fas fa-file"></i><span>Industri Rumah Tangga</span></a>
					</div>
				</li>
				<li class="item">
					<a href="bantuanketua.html" class="menu-btn">
						<i class="fas fa-info-circle"></i><span>Bantuan</span>
					</a>
				</li>

				<li class="item">
					<a href="index.php" class="menu-btn">
						<i class="fas fa-arrow-left"></i><span>Keluar</span>
					</a>
				</li>
			</div>
		</div>

		<!--sidebar end-->

		<!--main container start-->
		<div class="main-container">
			<div class="konten">
				<form method="post" action="#">
					<hr color="black">
					<center>
						<div>
							<br>
							<img src="img_personal.jpg" alt="Personal Ketua Dasawisma" width="200" height="200">
							<h6 style="font-family: Georgia, serif; text-decoration: underline">Ketua Dasawisma</h6>
							<h6><br><b>Selamat Datang di Aplikasi Dasawisma Indonesia</b></h6>
							</br>
						</div>
					</center>
					<br>
					<hr color="black">
				</form>
			</div>
		</div>
		<!--main container end-->
	</div>
	<!--wrapper end-->

	<script type="text/javascript">
		$(document).ready(function() {
			$(".sidebar-btn").click(function() {
				$(".wrapper").toggleClass("collapse");
			});
		});
	</script>

</body>

</html>