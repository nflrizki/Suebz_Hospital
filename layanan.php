<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="fontawesome/css/all.css" />
	<link rel="stylesheet" href="clinic.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
	<title>Suebz Hospital</title>
	<nav>
		<div class="nav-content">
			<img src="img/logo.png" alt="logo" class="img_logo" />
			<ul>
				<li><a href="./">Home</a></li>
				<li><a href="layanan.php">Layanan</a></li>
				<li><a href="./#1">About</a></li>
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
		<section id="1" style="background-image: url('img/bgabout.png'); background-size: cover; margin-top: 20px">
			<div class="judul">
				<h2><span>LAYANAN</span> PENUNJANG</h2>
			</div>
			<div class="row">
				<div  class="katalog-card1">
				  <img src="img/9.jpg" alt="Crewneck" class="katalog-card-img">
				  <h3 class="katalog-card-title">RADIOLOGI</h3>
				  <p>Mendiagnosis  bagian dalam tubuh manusia dengan menggunakan teknologi pencitraan, baik gelombang elektromagnetik maupun gelombang mekanik. </p>
				</div>
				<div  class="katalog-card1">
				  <img src="img/10.jpg" alt="Hoodiecrop" class="katalog-card-img">
				  <h3 class="katalog-card-title">KARDIOLOGI</h3>
				  <p>Spesialis jantung dan pembuluh darah.</p>
				</div>
				<div  class="katalog-card1">
				  <img src="img/11_2.jpg" alt="Hoodie" class="katalog-card-img">
				  <h3 class="katalog-card-title">LABORATORIUM</h3>
				  <p>Melaksanakan pengukuran, penetapan dan pengujian untuk penentuan jenis penyakit, penyebab penyakit, dan kondisi kesehatan.</p>
				</div>
			  </div>
		</section>
		<section id="2">
			<div class="judul">
				<h2><span>RAWAT</span> INAP</h2>
			</div>
			<div class="row">
				<div  class="katalog-card1">
				  <img src="img/6.jpg" alt="Crewneck" class="katalog-card-img">
				  <h3 class="katalog-card-title">Rawat Inap Dewasa</h3>
				  <p>Menyediakan perawatan yang melibatkan pasien dewasa yang membutuhkan pengawasan dan perawatan intensifS.</p>
				</div>
				<div  class="katalog-card1">
				  <img src="img/8.jpg" alt="Hoodiecrop" class="katalog-card-img">
				  <h3 class="katalog-card-title">Rawat Inap Bersalin</h3>
				  <p>Menyediakan perawatan dan dukungan bagi ibu hamil saat melahirkan.</p>
				</div>
				<div  class="katalog-card1">
				  <img src="img/7.jpg" alt="Hoodie" class="katalog-card-img">
				  <h3 class="katalog-card-title">Rawat Inap Anak</h3>
				  <p>Menyediakan perawatan, pemantauan, dan pemulihan bagi anak-anak yang membutuhkan perhatian medis intensif.</p>
				</div>
			  </div>
		</section>
		<section id="3" style="background-image: url('img/bgabout.png'); background-size: cover;">
			<div class="judul">
				<h2><span>RAWAT</span> JALAN</h2>
			</div>
			<div class="row">
				<div  class="katalog-card1">
				  <img src="img/5.jpg" alt="Crewneck" class="katalog-card-img">
				  <h3 class="katalog-card-title">Suebz Medical Center</h3>
				  <p>Menyediakan berbagai layanan medis dan perawatan terpadu untuk pasien dengan beragam kondisi kesehatan.</p>
				</div>
				<div  class="katalog-card1">
				  <img src="img/12.jpg" alt="Hoodiecrop" class="katalog-card-img">
				  <h3 class="katalog-card-title">Suebz Children Center</h3>
				  <p>Menyediakan perawatan, pengasuhan, dan pendidikan bagi anak-anak untuk memenuhi kebutuhan mereka secara menyeluruh.</p>
				</div>
			  </div>
		</section>
		<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
		<!-- footer -->
		<footer class="footer">
			<div class="footer-left">
				<h3>KENALI<span>LEBIH DEKAT</span></h3>

				<p class="footer-about">
					Sueb Hospital juga terdapat pada beberapa sosial media untuk dapat terhubung lebih dekat dengan anda. kunjungi sosial media kami dan jika anda mempunyai kritik maupun saran, jangan segan untuk berhubungan dengan kami.
				</p>

				<p class="footer-company-name">Sueb Klinik © 2023</p>
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
					<p><a href="mailto:support@company.com">support@suebzclinic.xyz</a></p>
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

					<div style="margin-bottom: 12px;">
						<label style="display: flex; align-items: center; margin-bottom: 5px; font-weight: 600; color: #333; font-size: 0.9rem;">
							<i class="fas fa-envelope" style="margin-right: 8px; color: #667eea; width: 18px;"></i>
							<span>Email</span>
						</label>
						<input type="email" id="email" name="email"
							   style="width: 100%; padding: 12px 15px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 14px; transition: all 0.3s; background: #fafafa; color: #333;"
							   placeholder="Enter your email" />
					</div>

					<div style="margin-bottom: 12px;">
						<label style="display: flex; align-items: center; margin-bottom: 5px; font-weight: 600; color: #333; font-size: 0.9rem;">
							<i class="fas fa-heading" style="margin-right: 8px; color: #667eea; width: 18px;"></i>
							<span>Subject</span>
						</label>
						<input type="text" id="subject" name="subject"
							   style="width: 100%; padding: 12px 15px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 14px; transition: all 0.3s; background: #fafafa; color: #333;"
							   placeholder="Enter subject" />
					</div>

					<div style="margin-bottom: 15px;">
						<label style="display: flex; align-items: center; margin-bottom: 5px; font-weight: 600; color: #333; font-size: 0.9rem;">
							<i class="fas fa-comment" style="margin-right: 8px; color: #667eea; width: 18px;"></i>
							<span>Message</span>
						</label>
						<textarea id="message" name="message"
								  style="width: 100%; padding: 12px 15px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 14px; transition: all 0.3s; background: #fafafa; color: #333; min-height: 90px; resize: vertical; line-height: 1.4;"
								  placeholder="Enter your message"></textarea>
					</div>

					<input type="submit" value="Kirim Pesan"
						   style="width: 100%; padding: 14px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; border-radius: 8px; font-size: 15px; font-weight: 600; cursor: pointer; transition: transform 0.3s, box-shadow 0.3s;" />
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

		// popup kritik&saran
		function showPopup() {
			var popup = document.getElementById("popup");

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
			popup.style.display = "flex";

		}

		// scroll to top
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