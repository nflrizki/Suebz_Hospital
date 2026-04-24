<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="fontawesome/css/all.css" />
  <link rel="stylesheet" href="clinic.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
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
    <section id="1" style="background-image: url('img/bgabout.png'); background-size: cover;">
      <div class="container">
        <div class="about">
          <div class="box-about-1">
            <h2>
              BODY MASS INDEX (BMI)
            </h2>
            <p>
              Merupakan salah satu cara mengetahui berat badan ideal yang diukur berdasarkan berat dan tinggi badan
              Anda. Dengan menghitungnya menggunakan rumus BMI, Anda bisa melihat apakah status berat badan Anda
              termasuk kategori normal, kurang, berlebih, atau bahkan obesitas.
            </p>
          </div>
          <div class="box-about-2">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Zg0Aokvgc0A"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
    <section id="2" style="background: white; padding: 60px 20px;">
      <div class="judul-bmi">
        <h2><span>BMI</span> CALCULATOR</h2>
      </div>
      <div class="container2">
        <div class="katalog-card" style="height: fit-content; padding: 60px;  transform: none; background: white; border-radius: 20px; box-shadow: 0 20px 60px rgba(0,0,0,0.1); width: 95%; max-width: 1200px; margin: 0 auto;">
          <div class="column" style="display: flex; flex-direction: column; gap: 40px;">
            <div class="bmi-card">
              <h1 style="text-align: center; color: #667eea; margin-bottom: 40px; font-size: 2.2rem;">
                <i class="fas fa-heartbeat"></i> Hitung BMI Anda
              </h1>

              <form style="max-width: 1000px; margin: 0 auto; width: 100%;">
                <div style="margin-bottom: 15px;">
                  <label for="weight" style="display: block; margin-bottom: 10px; font-weight: 600; color: #333; font-size: 1.1rem;">
                    <i class="fas fa-weight-hanging"></i> Berat Badan (kg)
                  </label>
                  <input type="number" id="weight" required
                         style="width: 100%; padding: 18px; border: 2px solid #e0e0e0; border-radius: 12px; font-size: 15px; transition: all 0.3s;"
                         placeholder="Masukkan berat badan Anda">
                </div>

                <div style="margin-bottom: 30px;">
                  <label for="height" style="display: block; margin-bottom: 10px; font-weight: 600; color: #333; font-size: 1.1rem;">
                    <i class="fas fa-ruler-vertical"></i> Tinggi Badan (cm)
                  </label>
                  <input type="number" id="height" required
                         style="width: 100%; padding: 18px; border: 2px solid #e0e0e0; border-radius: 12px; font-size: 15px; transition: all 0.3s;"
                         placeholder="Masukkan tinggi badan Anda">
                </div>

                <button type="button" onclick="calculateBMI()"
                        style="width: 100%; padding: 18px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; border-radius: 12px; font-size: 18px; font-weight: 600; cursor: pointer; transition: transform 0.3s, box-shadow 0.3s;">
                  Hitung BMI
                </button>
              </form>

              <div id="result" style="text-align: center; margin-top: 30px; padding: 25px; border-radius: 12px; background: #f8f9fa; min-height: 80px;"></div>
            </div>

            <div>
              <h3 style="text-align: center; color: #667eea; margin-bottom: 15px; font-size: 1.4rem;">
                <i class="fas fa-chart-bar"></i> Kategori BMI
              </h3>
              <table id="myTable"
                     style="width: 100%; border-collapse: separate; margin-top: 0; border: none; box-shadow: none; border-spacing: 0;">
                <thead>
                  <tr style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none !important;">
                    <th style="padding: 18px; text-align: left; font-weight: 600; border: none !important;">Skor BMI</th>
                    <th style="padding: 18px; text-align: left; font-weight: 600; border: none !important;">Kategori</th>
                    <th style="padding: 18px; text-align: center; font-weight: 600; border: none !important;">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="background: #e3f2fd; border: none !important;">
                    <td style="padding: 18px; border: none !important;">&lt; 18.6</td>
                    <td style="padding: 18px; border: none !important; font-weight: 600;">Berat Kurang</td>
                    <td style="padding: 18px; border: none !important; text-align: center;"><i class="fas fa-exclamation-triangle" style="color: #ff9800;"></i></td>
                  </tr>
                  <tr style="background: #e8f5e9; border: none !important;">
                    <td style="padding: 18px; border: none !important;">18.6 - 24.9</td>
                    <td style="padding: 18px; border: none !important; font-weight: 600; color: #2e7d32;">Berat Ideal</td>
                    <td style="padding: 18px; border: none !important; text-align: center;"><i class="fas fa-check-circle" style="color: #4caf50;"></i></td>
                  </tr>
                  <tr style="background: #fff3e0; border: none !important;">
                    <td style="padding: 18px; border: none !important;">≥ 24.9</td>
                    <td style="padding: 18px; border: none !important; font-weight: 600; color: #e65100;">Berat Berlebih</td>
                    <td style="padding: 18px; border: none !important; text-align: center;"><i class="fas fa-exclamation-circle" style="color: #f44336;"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
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

        <p class="footer-company-name">Sueb Hospital © 2023</p>
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

    // BMI Calculator with enhanced UI
    function calculateBMI() {
      let height = parseInt(document.querySelector("#height").value);
      let weight = parseInt(document.querySelector("#weight").value);
      let result = document.querySelector("#result");

      // Checking if input is valid
      if (height === "" || isNaN(height) || height <= 0) {
        result.innerHTML = '<div style="color: #e53935; font-weight: 600;"><i class="fas fa-exclamation-circle" style="color: #e53935;"></i> Harap masukkan tinggi badan yang valid!</div>';
        result.style.background = '#ffebee';
        return;
      }

      if (weight === "" || isNaN(weight) || weight <= 0) {
        result.innerHTML = '<div style="color: #e53935; font-weight: 600;"><i class="fas fa-exclamation-circle" style="color: #e53935;"></i> Harap masukkan berat badan yang valid!</div>';
        result.style.background = '#ffebee';
        return;
      }

      // Calculate BMI
      let bmi = (weight / ((height * height) / 10000)).toFixed(1);

      // Determine category and styling
      let category, color, icon, backgroundColor;

      if (bmi < 18.6) {
        category = "Berat Kurang";
        color = "#1976d2";
        icon = '<i class="fas fa-exclamation-triangle" style="color: #ff9800;"></i>';
        backgroundColor = "#e3f2fd";
      } else if (bmi >= 18.6 && bmi < 24.9) {
        category = "Berat Ideal";
        color = "#2e7d32";
        icon = '<i class="fas fa-check-circle" style="color: #4caf50;"></i>';
        backgroundColor = "#e8f5e9";
      } else {
        category = "Berat Berlebih";
        color = "#e65100";
        icon = '<i class="fas fa-exclamation-circle" style="color: #f44336;"></i>';
        backgroundColor = "#fff3e0";
      }

      // Display result with enhanced styling
      result.innerHTML = `
        <div style="font-size: 1.2rem; font-weight: 600; color: ${color}; margin-bottom: 10px;">
          ${icon} BMI Anda: ${bmi}
        </div>
        <div style="font-size: 1rem; color: ${color}; font-weight: 600;">
          Kategori: ${category}
        </div>
        <div style="font-size: 0.85rem; color: #666; margin-top: 8px;">
          ${getHealthAdvice(bmi)}
        </div>
      `;
      result.style.background = backgroundColor;
      result.style.border = `2px solid ${color}`;
    }

    function getHealthAdvice(bmi) {
      if (bmi < 18.6) {
        return '<i class="fas fa-lightbulb" style="color: #ff9800;"></i> Pertahankan asupan nutrisi seimbang dan konsultasikan dengan ahli gizi.';
      } else if (bmi >= 18.6 && bmi < 24.9) {
        return '<i class="fas fa-trophy" style="color: #4caf50;"></i> Pertahankan pola makan sehat dan rutin berolahraga!';
      } else {
        return '<i class="fas fa-running" style="color: #e65100;"></i> Pertimbangkan untuk meningkatkan aktivitas fisik dan konsultasi dengan dokter.';
      }
    }

    // Add input focus effects for all forms
    document.addEventListener('DOMContentLoaded', function() {
      const allInputs = document.querySelectorAll('input[type="number"], input[type="text"], input[type="email"], textarea');
      allInputs.forEach(input => {
        input.addEventListener('focus', function() {
          this.style.borderColor = '#667eea';
          this.style.boxShadow = '0 0 10px rgba(102, 126, 234, 0.3)';
        });
        input.addEventListener('blur', function() {
          this.style.borderColor = '#e0e0e0';
          this.style.boxShadow = 'none';
        });
      });
    });
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