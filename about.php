<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami | JobSearch.id</title>
    <link rel="icon" href="job-seeker.png"/>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    color: #333;
}

.navbar {
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    padding: 15px 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar .logo {
    font-size: 1.8em;
    font-weight: bold;
    color: #007bff;
    text-decoration: none;
}

.navbar ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

.navbar ul li {
    margin-left: 25px;
}

.navbar ul li a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    padding: 5px 0;
    transition: color 0.3s;
}

.navbar ul li a:hover {
    color: #28a745;
}

/* ==================================== */
/* ABOUT PAGE SPECIFIC STYLES */
/* ==================================== */
.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px 50px 20px; 
}

.about-header {
    background-color: #007bff;
    background-image: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
    color: white;
    padding: 80px 40px;
    border-radius: 12px;
    text-align: center;
    margin: 30px auto 50px auto;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}

.about-header h1 {
    font-size: 3.5em;
    margin: 0 0 10px 0;
    font-weight: 700;
}

.about-header p {
    font-size: 1.2em;
    opacity: 0.9;
}

.section-title {
    text-align: center;
    color: #333;
    margin-bottom: 50px;
    font-size: 2.2em;
    font-weight: 600;
    position: relative;
}

.section-title::after {
    content: '';
    display: block;
    width: 60px;
    height: 4px;
    background-color: #28a745;
    margin: 10px auto 0;
    border-radius: 2px;
}

.content-block {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    margin-bottom: 40px;
}

.two-column-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

.mission-list {
    list-style: none;
    padding-left: 0;
}

.mission-list li {
    position: relative;
    margin-bottom: 15px;
    padding-left: 30px;
    font-size: 1.05em;
}

.mission-list li::before {
    content: "\f058"; 
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    color: #28a745; 
    position: absolute;
    left: 0;
    top: 0;
}

.core-values-grid {
    display: flex;
    justify-content: space-around;
    gap: 20px;
    margin-top: 30px;
}

.value-item {
    flex: 1;
    text-align: center;
    padding: 20px;
    border-radius: 8px;
    transition: background-color 0.3s;
}

.value-item i {
    font-size: 2.5em;
    color: #007bff; 
    margin-bottom: 15px;
}

.value-item h4 {
    color: #333; 
    margin: 5px 0;
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); 
    gap: 30px;
    margin-top: 30px;
}

.team-member {
    background-color: #ffffff;
    border-radius: 10px;
    text-align: center;
    padding: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s;
}

.team-member:hover {
    transform: translateY(-5px);
}

.member-photo {
    width: 100px;
    height: 100px;
    background-color: #f8f9fa;
    border-radius: 50%;
    margin: 0 auto 15px auto;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 3em;
    color: #ccc;
    overflow: hidden;
}

.member-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.team-member h4 {
    color: #007bff;
    margin: 10px 0 5px 0;
    font-size: 1.2em;
}

.team-member p {
    font-style: normal;
    color: #6c757d;
    margin-bottom: 5px;
    font-weight: 500;
}

.team-member small {
    display: block;
    color: #aaa;
    font-size: 0.9em;
}


        </style>
    </head>
<body>

    <nav class="navbar">
        <a href="index.php" class="logo">JobSearch.id</a>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php" style="color: #007bff;">About Us</a></li>
            <li><a href="login.php">Masuk</a></li>
        </ul>
    </nav>

    <div class="container">
        
        <header class="about-header">
            <i class="fas fa-handshake" style="font-size: 3em; margin-bottom: 20px;"></i>
            <h1>Menghubungkan Masa Depan Karir</h1>
            <p>JobSearch.id didirikan atas dasar keyakinan bahwa teknologi yang tepat dapat menciptakan koneksi kerja yang paling bermakna dan berkelanjutan.</p>
        </header>

        <section>
            <h2 class="section-title">Visi & Misi Kami</h2>
            <div class="content-block two-column-layout">
                <div>
                    <h3 style="color: #007bff; margin-top: 0;"><i class="fas fa-bullseye"></i> Visi</h3>
                    <p>Menjadi platform karir terdepan di Asia Tenggara yang memberdayakan jutaan profesional untuk mencapai potensi maksimal mereka melalui peluang yang tepat dan akses yang adil.</p>
                    <p style="font-style: italic; color: #666; border-left: 3px solid #ddd; padding-left: 10px;">"Pekerjaan yang memuaskan dimulai dari pencarian yang cerdas."</p>
                </div>
                <div>
                    <h3 style="color: #28a745; margin-top: 0;"><i class="fas fa-rocket"></i> Misi</h3>
                    <ul class="mission-list">
                        <li>Menyediakan basis data lowongan pekerjaan yang luas dan terverifikasi 100%.</li>
                        <li>Mengembangkan alat bantu karir berbasis AI untuk pencocokan yang lebih baik dan personalisasi.</li>
                        <li>Menciptakan komunitas dan sumber daya edukasi karir yang mudah diakses.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title">Prinsip & Nilai Inti</h2>
            <div class="core-values-grid">
                
                <div class="content-block value-item">
                    <i class="fas fa-balance-scale"></i>
                    <h4>Integritas</h4>
                    <p>Menjunjung tinggi kejujuran dan transparansi dalam semua transaksi dan kemitraan kami.</p>
                </div>

                <div class="content-block value-item">
                    <i class="fas fa-lightbulb"></i>
                    <h4>Inovasi</h4>
                    <p>Terus berinvestasi dalam teknologi terbaru untuk menyederhanakan proses rekrutmen.</p>
                </div>
                
                <div class="content-block value-item">
                    <i class="fas fa-users"></i>
                    <h4>Empati</h4>
                    <p>Memahami dan memenuhi kebutuhan unik baik pencari kerja maupun pihak perekrut.</p>
                </div>
            </div>
        </section>
        
        <section>
            <h2 class="section-title">Kenalilah Tim Kepemimpinan Kami</h2>
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-photo"><img src="1.jpg" alt="Vallery Dewi"></div>
                    <h4>Vallery Dewi</h4>
                    <p>CEO & Founder</p>
                    <small>Memimpin visi dan strategi perusahaan.</small>
                </div>
                <div class="team-member">
                    <div class="member-photo"><img src="2.jpg" alt="Rendi Suntoso"></div>
                    <h4>Rendi Suntoso</h4>
                    <p>Chief Technology Officer</p>
                    <small>Mengawasi semua pengembangan produk teknologi.</small>
                </div>
                <div class="team-member">
                    <div class="member-photo"><img src="3.jpg" alt="Fajar Hadi"></div>
                    <h4>Fajar Hadi</h4>
                    <p>Head of Marketing</p>
                    <small>Bertanggung jawab atas komunikasi dan pertumbuhan.</small>
                </div>
                <div class="team-member">
                    <div class="member-photo"><img src="4.jpg" alt="Heri Budi"></div>
                    <h4>Heri Budi</h4>
                    <p>Human Resources Partner</p>
                    <small>Menjamin kesejahteraan dan pengembangan tim internal.</small>
                </div>
                <div class="team-member">
                    <div class="member-photo"><img src="5.jpg" alt="Ari Wibowo"></div>
                    <h4>Ari Wibowo</h4>
                    <p>Senior Software Engineer</p>
                    <small>Memastikan kualitas dan performa platform.</small>
                </div>
            </div>
        </section>

    </div>
    
   <footer class="footer">
        <div class="footer-content">
            <div class="footer-column">
                <h5>JobSearch.id</h5>
                <p>Platform karir terpercaya yang menghubungkan talenta terbaik Indonesia dengan perusahaan impian mereka. Mencari pekerjaan? Kami di sini untuk Anda.</p>
                <div class="social-icons" style="margin-top: 20px;">
                    <a ><i class="fab fa-facebook-f"></i></a> 
                    <a ><i class="fab fa-twitter"></i></a>
                    <a ><i class="fab fa-linkedin-in"></i></a>
                    <a ><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h5>Pencari Kerja</h5>
                <ul>
                    <li><a >Cari Pekerjaan</a></li>
                    <li><a >Unggah CV</a></li>
                    <li><a >Tes Minat Bakat</a></li>
                    <li><a >FAQ Pelamar</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h5>Perusahaan</h5>
                <ul>
                    <li><a >Pasang Lowongan</a></li>
                    <li><a >Layanan Premium</a></li>
                    <li><a >Portal Perekrut</a></li>
                    <li><a >Verifikasi Perusahaan</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h5>Hubungi Kami</h5>
                <p><i class="fas fa-map-marker-alt" style="margin-right: 10px; color: white;"></i> Jakarta, Indonesia</p>
                <p><i class="fas fa-phone" style="margin-right: 10px; color: white;"></i> (021) 123-4567</p>
                <p><i class="fas fa-envelope" style="margin-right: 10px; color: white;"></i> support@jobsearch.id</p>
            </div>
        </div>
        
        <div class="footer-copyright">
            &copy; 2025 JobSearch.id. Hak Cipta Dilindungi Undang-Undang.
        </div>
    </footer>
    </body>
</html>