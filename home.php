<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <title>JobSearch.id | Temukan Pekerjaan Impian Anda</title>
    <link rel="icon" href="job-seeker.png"/>
    <style>
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
            min-height: calc(100vh - 150px);
        }

        .hero {
            background-color: #007bff;
            color: white;
            padding: 80px 40px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 50px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.1) 75%, transparent 75%, transparent);
            background-size: 50px 50px;
        }

        .hero h1 {
            color: white;
            font-size: 3em;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .hero p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.2em;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-primary {
            background-color: #28a745; 
            color: white;
            padding: 14px 40px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s;
            display: inline-block;
            font-size: 1.1em;
            border: none;
        }

        .btn-primary:hover {
            background-color: #218838;
            transform: translateY(-2px);
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
            height: 3px;
            background-color: #007bff; 
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .feature-item {
            background-color: #ffffff; 
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            text-align: center;
            border-top: 5px solid #28a745; 
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .feature-item i {
            font-size: 2.5em;
            color: #007bff;
            margin-bottom: 15px;
            display: inline-block;
        }

        .feature-item h3 {
            color: #333; 
            margin-top: 10px;
            font-size: 1.5em;
        }

        .feature-item p {
            color: #666;
            font-size: 1em;
        }

        .job-card-list {
            display: grid;
            gap: 20px;
        }
        
        .job-card {
            background-color: #ffffff; 
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.07);
            transition: box-shadow 0.3s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-left: 8px solid #007bff; 
        }
        
        .job-card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .job-card-info {
            flex-grow: 1;
        }

        .job-card h4 {
            margin: 0 0 5px 0;
            color: #007bff; 
            font-size: 1.3em;
            font-weight: 600;
        }

        .job-card-meta {
            color: #777;
            font-size: 0.95em;
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .job-tag {
            background-color: #e9ecef;
            color: #333;
            padding: 3px 10px;
            border-radius: 4px;
            font-size: 0.8em;
            font-weight: 500;
        }

        .job-tag.remote {
            background-color: #fff3cd;
            color: #856404;
        }

        .job-card .btn-apply {
            padding: 10px 25px;
            background-color: #007bff; 
            border-radius: 8px;
            font-size: 0.9em;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s;
            color: white; 
        }

        .job-card .btn-apply:hover {
            background-color: #0056b3;
        }

        #lowongan{
            background-color: #faf8cdff;
        }

        .full-width-bg {
            width: 100%;
            height: 500px;
            background-image: url('back.jpg');
            background-repeat: no-repeat;
            background-size: cover; 
            background-position: center; 
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }

        .full-width-bg p {
            color: #6c757d;
            font-size: 1.5em;
            font-weight: 500;
        }

        .cta-banner-linkedin-style {
            background: #e6f2ff; 
            background-image: url('content.jpg');
            background-repeat: no-repeat;
            background-size: cover; 
            background-position: center; 
            color: #333; 
            padding: 100px 20px 80px 20px; 
            border-radius: 12px;
            text-align: center;
            margin: 60px auto;
            max-width: 1200px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); 
            position: relative;
            overflow: hidden;
        }

        .cta-banner-linkedin-style h2 {
            font-size: 2.8em;
            margin-bottom: 10px;
            font-weight: 700;
            color: white;
        }

        .cta-banner-linkedin-style p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: white;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        
        .cta-banner-linkedin-style .cta-btn {
            background-color: #007bff; 
            color: white;
            padding: 15px 45px;
            font-size: 1.2em;
            border-radius: 50px; 
            transition: background-color 0.3s ease, transform 0.2s;
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.3);
        }

        .cta-banner-linkedin-style .cta-btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="home.php" class="logo">JobSearch.id</a>
        <ul>
            <li><a href="home.php" style="color: #007bff;">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="login.php">Masuk</a></li>
        </ul>
    </nav>
    <div class="container">
        
        <section class="hero">
            <h1>Jembatan Menuju Karir Impian Anda</h1>
            <p>JobSearch.id menawarkan akses ke ribuan peluang kerja yang diverifikasi di seluruh Indonesia. Mulailah petualangan karir Anda hari ini!</p>
            <form class="search-form" style="display: flex; justify-content: center; margin-top: 30px;">
                <input type="text" placeholder="Cari posisi, perusahaan, atau lokasi..." style="padding: 15px 20px; border: none; border-radius: 50px 0 0 50px; width: 60%; max-width: 500px; font-size: 1em;">
                <button type="submit" class="btn-primary" style="padding: 15px 30px; border-radius: 0 50px 50px 0; background-color: #28a745; margin-left: -1px;">
                    <i class="fas fa-search"></i> Cari
                </button>
            </form>
            <a href="#lowongan" class="btn-primary" style="margin-top: 20px; background-color: transparent; border: 2px solid white;">Lihat Lowongan Terbaru</a>
        </section>
        
        <section class="content">
            <h2 class="section-title">Mengapa Kami adalah Pilihan Terbaik?</h2>
            <div class="feature-grid">
                <div class="feature-item">
                    <i class="fas fa-bolt"></i>
                    <h3>Akses Cepat & Mudah</h3>
                    <p>Temukan ribuan lowongan kerja dalam hitungan detik dengan filter yang akurat dan antarmuka intuitif.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Lowongan Terpercaya</h3>
                    <p>Kami hanya menampilkan lowongan dari perusahaan yang sudah terverifikasi, menjamin kualitas dan keamanan.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Panduan Karir Eksklusif</h3>
                    <p>Dapatkan tips, trik, dan artikel eksklusif untuk meningkatkan profil, CV, dan persiapan wawancara Anda.</p>
                </div>
            </div>
        </section>

        <hr style="border: 0; border-top: 1px solid #ddd; margin: 40px 0;">

        <section id="lowongan" class="content">
            <h2 class="section-title">✨ Peluang Karir Pilihan</h2>
            
            <div class="job-card-list">
                <div class="job-card">
                    <div class="job-card-info">
                        <h4>Full-Stack Developer</h4>
                        <div class="job-card-meta">
                            <span>PT Tech Solusi Indonesia</span>
                            <span>| Jakarta Pusat</span>
                            <span class="job-tag">Full-time</span>
                        </div>
                    </div>
                    <a href="#" class="btn-primary btn-apply">Lamar Sekarang</a>
                </div>

                <div class="job-card">
                    <div class="job-card-info">
                        <h4>Marketing Specialist</h4>
                        <div class="job-card-meta">
                            <span>Creative Agency Digital</span>
                            <span>| Bandung</span>
                            <span class="job-tag remote">Remote</span>
                        </div>
                    </div>
                    <a href="login.php" class="btn-primary btn-apply">Lamar Sekarang</a>
                </div>
                
                <div class="job-card">
                    <div class="job-card-info">
                        <h4>Data Analyst Junior</h4>
                        <div class="job-card-meta">
                            <span>Bank Makmur Sentosa</span>
                            <span>| Surabaya</span>
                            <span class="job-tag">Hybrid</span>
                        </div>
                    </div>
                    <a href="login.php" class="btn-primary btn-apply">Lamar Sekarang</a>
                </div>
                
                <div class="job-card">
                    <div class="job-card-info">
                        <h4>UX/UI Designer</h4>
                        <div class="job-card-meta">
                            <span>Startup Inovasi Cepat</span>
                            <span>| Jakarta Selatan</span>
                            <span class="job-tag">Full-time</span>
                        </div>
                    </div>
                    <a href="login.php" class="btn-primary btn-apply">Lamar Sekarang</a>
                </div>
                
                <div class="job-card">
                    <div class="job-card-info">
                        <h4>Manajer Proyek Konstruksi</h4>
                        <div class="job-card-meta">
                            <span>PT Bangun Kokoh</span>
                            <span>| Seluruh Indonesia</span>
                            <span class="job-tag">Kontrak</span>
                        </div>
                    </div>
                    <a href="login.php" class="btn-primary btn-apply">Lamar Sekarang</a>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="login.php" class="btn-primary" style="background-color: #6c757d;">Lihat Semua Lowongan <i class="fas fa-arrow-right"></i></a>
            </div>
        </section>
    </div>

    <section class="cta-banner-linkedin-style">
        <div class="cta-content">
            <h2>Bergabunglah Bersama Komunitas Profesional JobSearch.id</h2>
            <p>Jutaan profesional, perusahaan terkemuka, dan peluang karir terbaik menanti Anda. Mulai karir Anda di sini.</p>
            <a href="login.php" class="btn-primary cta-btn">Mulai Sekarang</a>
        </div>
    </section>

<div class="full-width-bg">
    <p>🚀 Tingkatkan karir Anda hari ini - JobSearch.id</p>
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