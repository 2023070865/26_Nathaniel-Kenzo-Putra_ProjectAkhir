<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa Aplikasi</title>
    <link rel="icon" href="job-seeker.png"/>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

.content-container {
    padding: 50px 5%;
}


.tambah-siswa-btn {
    display: inline-block;
    background-color: #007bff; 
    color: white;
    padding: 10px 15px;
    margin-bottom: 20px; 
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.tambah-siswa-btn:hover {
    background-color: #0056b3; 
}


table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
}

table th {
    background-color: #343a40; 
    color: white;
    padding: 12px 15px;
    text-align: left;
    border: 1px solid #dee2e6;
}

table td {
    padding: 10px 15px;
    text-align: left;
    border: 1px solid #dee2e6;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table tr:hover {
    background-color: #e9ecef;
}

table td:last-child {
    text-align: center;
    white-space: nowrap; 
}

table td a {
    padding: 5px 10px;
    margin: 0 2px;
    font-size: 0.9em;
    border-radius: 3px;
    text-decoration: none;
    color: white;
}

table td a[href*="update.php"] {
    background-color: #ffc107; 
    color: #212529;
}

table td a[href*="update.php"]:hover {
    background-color: #e0a800;
}

table td a[href*="hapus.php"] {
    background-color: #dc3545; 
}

table td a[href*="hapus.php"]:hover {
    background-color: #c82333;
}
    </style>
</head>
<body>
    
    <nav class="navbar">
        <a href="home.php" class="logo">
            JobSearch.id
        </a>
        <ul>
            <li><a href="index.php"style="color: #007bff;">Cari Pekerjaan</a></li>
            <li><a href="tambah.php">Tambah Data</a></li>
            <li><a href="login.php">Keluar</a></li>
        </ul>
    </nav>
    
    <div class="content-container">

        <a href="tambah.php" class="tambah-siswa-btn">➕ TAMBAH DATA</a>
        
        <br/>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Umur</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>NIK</th>
                <th>Waktu</th>
                <th>OPSI</th>
            </tr>

            <?php
            // Pastikan Anda mengubah ekstensi file ini menjadi .php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from aplication");
            while ($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_lengkap']; ?></td>
                    <td><?php echo $d['umur']; ?></td>
                    <td><?php echo $d['jurusan']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['nik']; ?></td>
                    <td><?php echo $d['Time']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $d['id']; ?>">UPDATE</a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>">DELETE</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
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
