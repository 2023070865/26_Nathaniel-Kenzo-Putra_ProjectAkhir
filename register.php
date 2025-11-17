<?php
include 'koneksi.php';
// Cek apakah form telah disubmit
if(isset($_POST['register'])){
    // Ambil data dari form
    $username = $_POST['username'];


    $nama = $_POST['nama_lengkap']; // Menangkap nama lengkap dari form
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password


    // Simpan data ke database
    $query = "INSERT INTO user (nama_lengkap, username, age, email, password) VALUES ('$nama','$username','$age','$email','$password')";
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);


    // Cek apakah query berhasil
    if($result){
        // Redirect ke halaman login setelah registrasi sukses
        echo "<script>alert('Registrasi berhasil! Silakan login.');
        window.location='login.php';</script>";
    } else {
        // Tampilkan pesan error jika registrasi gagal
        echo "Gagal mendaftar!";
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar - Job Portal</title>
    <link rel="icon" href="job-seeker.png"/>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 40px; 
    padding-bottom: 40px; 
}

       
.register-box {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15); 
    width: 100%;
    text-align: left;
    padding: 50px; 
    max-width: 700px; 
}


.register-box h2 {
    color: #333;
    margin-bottom: 40px; 
    font-size: 2.2em; 
    text-align: center;
}

.register-box .form-group {
    margin-bottom: 20px; 
}

.register-box label {
    display: block;
    margin-bottom: 8px; 
    font-weight: 700; 
    color: #333; 
    font-size: 1em; 
}

.register-box input[type="text"],
.register-box input[type="password"],
.register-box input[type="number"],
.register-box input[type="email"] {
    width: 100%;
    padding: 14px; 
    border: 1px solid #ccc;
    border-radius: 6px; 
    box-sizing: border-box;
    font-size: 1.05em; 
}

.register-box input:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 7px rgba(0, 123, 255, 0.6); 
}

.register-box button[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 16px 25px; 
    border: none;
    border-radius: 6px; 
    cursor: pointer;
    font-size: 1.2em; 
    font-weight: bold;
    width: 100%;
    margin-top: 30px; 
    transition: background-color 0.3s ease;
}

.register-box button[type="submit"]:hover {
    background-color: #0056b3;
}

.register-box p {
    margin-top: 30px; 
    text-align: center;
    font-size: 1.0em;
}
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="home.php" class="logo">
            JobSearch.id
        </a>
        <ul>
            <li><a href="home.php">Perusahaan</a></li>
            <li><a href="login.php">Masuk</a></li>
            <li><a href="register.php" style="color: #007bff;">Registrasi</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="register-box">
            <h2>Buat Akun Baru</h2>
            <form method="POST">
                
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap:</label>
                    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
                </div>
                
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                
                <div class="form-group">
                    <label for="age">Usia:</label>
                    <input type="number" name="age" placeholder="Usia Anda" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="contoh@mail.com" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                
                <button type="submit" name="register">Daftar Sekarang</button>
                
            </form>
            <p>Sudah punya akun? <a href="login.php">Masuk di sini</a></p>
        </div>
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