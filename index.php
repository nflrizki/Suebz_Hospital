<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="fontawesome/css/all.css" />
	<link rel="stylesheet" href="clinic.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" type="text/css"
		href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
	<title>Suebz Hospital</title>
	<nav>
		<div class="nav-content">
			<img src="img/logo.png" alt="logo" class="img_logo" />
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="layanan.php">Layanan</a></li>
				<li><a href="#1">About</a></li>
			</ul>
		</div>
	</nav>
</head>

<body>
	<div class="wp">
		<section id="0">
			<div class="slider">
					<?php
						include './config/koneksi.php';
						$data = mysqli_query($conn, "select img from gambar");
						while ($row = mysqli_fetch_assoc($data)) {
							$gambar=$row['img'];
							echo '<div><img src="./img/slideshow/' . $gambar . '"></div>';
						}
					?>
			</div>
		</section>
		<section id="1" style="background-image: url('img/bgabout.png'); background-size: cover;">
			<div class="container">
				<div class="about">
					<div class="box-about-1">
						<h3>
							Suebz Hospital<br>
							INFORMASI LAYANAN UNTUK ANDA
						</h3>
						<p>
							Suebz hospital merupakan sebuah rumah sakit sederhana yang berkomitmen untuk memberikan informasi pelayanan
							kesehatan berkualitas tinggi kepada
							masyarakat. Kami melayani beberapa informasi kesehatan mengenai layanan penunjang, rawat inap maupun jalan, dan terdapat kalkulator penyedia berat badan ideal.
						</p>
					</div>
					<div class="box-about-2">
						<img src="img/logo.png" alt="logo" class="img_logos" />
					</div>
				</div>
			</div>
		</section>
		<!-- layanan kami start-->
		<section id="2" style="background-color: rgb(255, 255, 255)">
			<div class="judul">
				<h2><span>LAYANAN</span> KAMI</h2>
			</div>
			<div class="container2">
				<div class="row">
					<div id="layanan1" class="katalog-card" style="cursor: pointer;">
						<img src="img/1.jpg" alt="Crewneck" class="katalog-card-img">
						<h3 class="katalog-card-title">LAYANAN PENUNJANG</h3>
					</div>
					<div id="layanan2" class="katalog-card" style="cursor: pointer;">
						<img src="img/2.jpg" alt="Hoodiecrop" class="katalog-card-img">
						<h3 class="katalog-card-title">RAWAT INAP</h3>
					</div>
					<div id="layanan3" class="katalog-card" style="cursor: pointer;">
						<img src="img/3.jpg" alt="Hoodie" class="katalog-card-img">
						<h3 class="katalog-card-title">RAWAT JALAN</h3>
					</div>
					<div id="layanan4" class="katalog-card" style="cursor: pointer;">
						<img src="img/4.jpg" alt="Hoodie" class="katalog-card-img">
						<h3 class="katalog-card-title">BMI</h3>
					</div>
				</div>
			</div>
	</div>
	</section>
	<!-- layanan kami end -->
	<section id="3" style="background-image: url('img/bgabout.png'); background-size: cover;">
		<div class="video-gallery">
			<div class="container3">
				<div class="judul">
					<h2><span>GALERI</span> VIDEO</h2>
				</div>
				<div class="video-container">
						<?php
							include './config/koneksi.php';
							$data = mysqli_query($conn, "select * from video");
							while ($row = mysqli_fetch_assoc($data)) {
								$video=$row['vid'];
								echo '<div class="video"><video src="./img/video/' . $row['vid'] . '" muted playsinline></div>';
							}
						?>
				</div>
			</div>
	</section>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
	<!-- footer -->
	<footer class="footer">
		<div class="footer-left">
			<h3>KENALI<span>LEBIH DEKAT</span></h3>

			<p class="footer-about">
				Suebz Hospital juga terdapat pada beberapa sosial media untuk dapat terhubung lebih dekat dengan anda. kunjungi sosial media kami dan jika anda mempunyai kritik maupun saran, jangan segan untuk berhubungan dengan kami. 
			</p>

			<p class="footer-company-name">Suebz Hospital © 2023</p>
		</div>
		<div class="footer-center">
			<div>
				<i class="fas fa-map-marker-alt"></i>
								<p><span>Jl. Karangrejo II/59</span> Surabaya, Jawa Timur</p>
			</div>

			<div>
				<i class="fa fa-phone"></i>
				<p>+62 31 5444</p>
			</div>

			<div>
				<i class="fa fa-envelope"></i>
				<p><a href="mailto:support@suebzclinic.xyz">support@suebzclinic.xyz</a></p>
			</div>
		</div>

		<div class="footer-right">
			<button style="cursor: pointer;" onclick="showPopup(); return false;">
				Kritik & Saran
			</button>

			<div class="footer-icons">
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-facebook-f"></i></a>
			</div>
		</div>
	</footer>
	</div>
	<div id="popup" class="popup-container">
		<div class="popup-content">
			<div class="popup-header">
				<h2>Kritik & Saran</h2>
				<button class="popup-close" onclick="closePopup()">
					<i class="fas fa-times"></i>
				</button>
			</div>
			<div class="popup-body">
				<form method="POST" action="m_add_saran.php" enctype="multipart/form-data" id="feedbackForm">
					<div class="form-group">
						<label for="name">Nama</label>
						<input type="text" id="name" name="name" required placeholder="Masukkan nama lengkap" />
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" id="email" name="email" required placeholder="Masukkan email" />
					</div>
					<div class="form-group">
						<label for="subject">Subjek</label>
						<input type="text" id="subject" name="subject" required placeholder="Masukkan subjek" />
					</div>
					<div class="form-group">
						<label for="message">Pesan</label>
						<textarea id="message" name="message" required placeholder="Masukkan pesan Anda"></textarea>
					</div>
					<button type="submit" class="submit-btn">Kirim Pesan</button>
				</form>
			</div>
		</div>
	</div>
	<script>
		// nav sticky
		var nav = document.querySelector("nav");
		window.addEventListener("scroll", () => {
			if (document.documentElement.scrollTop > 20) {
				nav.classList.add("sticky");
			} else {
				nav.classList.remove("sticky");
			}
		});

		// layanan
		document.getElementById("layanan1").onclick = function () {
			location.href = "layanan.php#1";
		};
		document.getElementById("layanan2").onclick = function () {
			location.href = "layanan.php#2";
		};
		document.getElementById("layanan3").onclick = function () {
			location.href = "layanan.php#3";
		};
		document.getElementById("layanan4").onclick = function () {
			location.href = "bmi.php";
		};

		// popup kritik&saran 
		function showPopup() {
			var popup = document.getElementById("popup");
			popup.style.display = "flex";

		}

			function closePopup() {
				var popup = document.getElementById("popup");

			// Close popup when clicking outside
			document.addEventListener("DOMContentLoaded", function() {
				var popup = document.getElementById("popup");
				popup.addEventListener("click", function(e) {
					if (e.target === popup) {
						closePopup();
					}
				});
			});
				popup.style.display = "none";
			}

		// Video Gallery - Autoplay on hover + Click for large preview
		var video = document.querySelectorAll('video')

		video.forEach(play => {
			// Autoplay on hover
			play.addEventListener('mouseover', () => {
				play.play();
			});

			play.addEventListener('mouseout', () => {
				// Jangan pause jika video sedang dalam mode active (large preview)
				if (!play.classList.contains('active')) {
					play.pause();
					play.currentTime = 0;
				}
			});

			// Click untuk large preview
			play.addEventListener('click', (e) => {
					e.stopPropagation(); // Mencegah klik tembus ke overlay

					// Tutup semua video aktif lainnya
					video.forEach(v => {
						if (v !== play && v.classList.contains('active')) {
							v.classList.remove('active');
							v.pause();
						}
					});
				play.classList.toggle('active');

				if (play.classList.contains('active')) {
					play.play();
				} else {
					play.pause();
				}
			});
		});

		// scroll to top
		// Klik di luar video untuk menutup large preview
			document.addEventListener('click', () => {
				video.forEach(play => {
					if (play.classList.contains('active')) {
						play.classList.remove('active');
						play.pause();
					}
				});
			});

			let mybutton = document.getElementById("myBtn");
		window.onscroll = function () { scrollFunction() };

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.display = "block";
			} else {
				mybutton.style.display = "none";
			}
		}

		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
	<!-- Header Slideshow -->
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Slick JS -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
		$(document).ready(function () {
			$('.slider').slick({
				autoplay: true,
				autoplaySpeed: 2500
			});
		});
	</script>
</body>

</html>