<?php


session_start();
include 'koneksi.php';


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);


    if($user && password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - Job Portal</title>
    <link rel="icon" href="job-seeker.png"/>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>



.container {
    flex-grow: 1; 
    display: flex; 
    justify-content: center; 
    align-items: center;
    width: 100%; 
    padding-top: 75px;
}


.login-box {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
}

.login-box h2 {
    color: #333;
    margin-bottom: 30px;
    font-size: 2em;
}

.login-box form input[type="text"],
.login-box form input[type="password"] {
    width: calc(100% - 20px);
    padding: 12px 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 1em;
}

.login-box form input:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.login-box form button[type="submit"] {
    background-color: #28a745; 
    color: white;
    padding: 14px 25px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1.1em;
    font-weight: bold;
    width: 100%;
    transition: background-color 0.3s ease;
}

.login-box form button[type="submit"]:hover {
    background-color: #218838; 
}


.login-box p {
    margin-top: 20px;
    color: #666;
}

.login-box a {
    color: #007bff;
    text-decoration: none;
    font-weight: 600;
}

.login-box a:hover {
    text-decoration: underline;
}

.additional-links {
    margin-top: 15px;
    padding-top: 15px;
    border-top: 1px solid #eee;
}
    </style>

<body>
    <nav class="navbar">
        <a href="home.php" class="logo">
            JobSearch.id
        </a>
        <ul>
            <li><a href="home.php">Perusahaan</a></li>
            <li><a href="login.php" style="color: #007bff;">Masuk</a></li>
            <li><a href="register.php">Registrasi</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="login-box">
            <h2>Masuk ke Akun Anda</h2>
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
            </form>
            
            <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
            
            <div class="additional-links">
                <a href="index.php">Kembali ke Beranda</a>
            </div>
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