<!DOCTYPE html>
<html>
<head>
    <title>Update Data Mahasiswa</title>
    <link rel="icon" href="job-seeker.png"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
.container-wrapper {
    flex-grow: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
}

.container {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px; 
}

fieldset {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    margin-bottom: 20px;
}

legend {
    font-weight: bold;
    color: #007bff; 
    padding: 0 10px;
    font-size: 1.3em;
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table tr td {
    padding: 10px 0;
    vertical-align: top;
}

table tr td:first-child {
    width: 30%;
    font-weight: 500;
}


input[type="text"],
input[type="number"],
input[type="datetime-local"] { 
    width: 100%; 
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}

input:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
}

input[type="submit"] {
    background-color: #28a745; 
    color: white;
    padding: 12px 30px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #218838;
}

.link-btn {
    display: inline-block;
    padding: 8px 15px;
    margin-top: 15px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    transition: background-color 0.3s ease;
}

.kembali-btn {
    background-color: #6c757d; 
    color: white;
}

.kembali-btn:hover {
    background-color: #5a6268;
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
            <li><a href="index.php">Cari Pekerjaan</a></li>
            <li><a href="login.php">Masuk</a></li>
            <li><a href="register.php">Registrasi</a></li>
        </ul>
    </nav>

    <div class="container-wrapper">
        <div class="container">
            
            <fieldset>
                <legend>EDIT DATA DIRI</legend>
                
                <?php
                include 'koneksi.php';
                $Kode = $_GET['id'];

                $data = mysqli_query($koneksi,"select * from aplication where id='$Kode'");
                while($d = mysqli_fetch_array($data)){
                    $dateTimeValue = date('Y-m-d\TH:i:s', strtotime($d['Time']));
                ?>
                
                <form method="post" action="ubah.php">
                    <table>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>
                                <input type="text" name="nama_lengkap" value="<?php echo $d['nama_lengkap']; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td><input type="number" name="umur" value="<?php echo $d['umur']; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>" required></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td><input type="number" name="nik" value="<?php echo $d['nik']; ?>" required></td>
                        </tr>
                        
                        <tr>
                            <td>Waktu (Time)</td>
                            <td>
                                <input type="datetime-local" name="waktu_time" value="<?php echo $dateTimeValue; ?>" required>
                            </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="SIMPAN">
                                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                            </td>
                        </tr>
                    </table>
                </form>
                
                <?php 
                }   
                ?>
            </fieldset>

            <a href="index.php" class="link-btn kembali-btn">KEMBALI</a>
            
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