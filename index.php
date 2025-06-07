<?php
    include 'koneksi.php';

    $query = "SELECT * FROM mahasiswa;";
    $sql = mysqli_query($conn, $query);
    $no = 0;
?>
<!-- awal -->
 <!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet" />
    <!-- update existing v5 CSS to use v6 icons and assets -->
    <link href="fontawesome/css/fontawesome.min.css" rel="stylesheet"/>
    <link href="fontawesome/css/all.min.css" rel="stylesheet"/>
    <link href="fontawesome/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <title>Portofolio Saya</title>
</head>
<body>
  <header>
    <div>
      <nav>
        <ul>
          <li><a href="#beranda">Beranda</a></li>
          <li><a href="#tentang">Tentang Saya</a></li>
          <li><a href="#portofolio">Portofolio</a></li>
          <li><a href="#opini">Opini</a></li>
          <li><a href="#hubungi">Hubungi Saya</a></li>
          <li>
            <a href="#">Lainnya</a>
            <ul>
              <li><a href="https://www.instagram.com/hud_2203?igsh=cm9zODc4amdvNXdp" target="_blank">Instagram</a></li>
              <li><a href="https://www.facebook.com/profile.php?id=100093610008713&mibextid=rS40aB7S9Ucbxw6v" target="_blank">facebook</a></li>
              <li><a href="https://www.tiktok.com/@kawulo_am22?is_from_webapp=1&sender_device=pc" target="_blank">tiktok</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="beranda">
    <div class="container-1">
      <div class="photo">
        <img src="hud.png" alt="Foto Huda">
      </div>
      <div class="text">
        <h1>Halo, saya <strong>Huda</strong></h1>
        <p>Seorang <u><strong>Progremer</strong></u></p>
      </div>
    </div>
  </section>

  <section id="tentang">
    <div class="container-2">
      <div class="text">
        <h1>Tentang Saya</h1>
        <p>Nama : Akhmad Miftakhul Huda</p>
        <p>TTL : Bojonegoro, 22 Maret 2006</p>
        <p>Alamat : Dk. Sumurpandan RT 006 / RW 005 Ds. Sumberjokidul Kec. Sukosewu Kab. Bojonegoro Prov. Jawa Timur 62183</p>
        <p>NIM : 241101023</p>
        <p>Prodi : Teknik Informatika</p>
        <p>Fakultas : Fakultas Sains dan Teknologi</p>
        <p>Universitas : Universitas  Nahdlatul Ulama Sunan Giri Bojonegoro</p>
        <p>Alamat Kampus : Jalan Jendral Ahmad Yani No.10, Jambean, Sukorejo, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62115</p>
      </div>
      <div class="photo">
        <img src="hud22.png" alt="Foto Saya">
      </div>
    </div>  
  </section>

  <section id="portofolio">
    <div class="portfolio-container">
      <h2>Portofolio</h2>
      <div class="container">
        <a href="kelola.php" type="button" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah data</a>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Sertifikat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
                    while($result = mysqli_fetch_assoc( $sql)){
                ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo ++$no ;$result['id'] ?>
                        </td>
                        <td>
                            <?php echo $result['nama_kegiatan']; ?>
                        </td>
                        <td>
                            <a href="#"><img src="img/<?php echo $result['sertifikat']; ?>" alt="" style="width: 150px;"></a>
                        </td>
                        <td>
                            <a href="kelola.php?ubah=<?php echo $result['id']; ?>"type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                            <a href="proses.php?hapus=<?php echo $result['id']; ?>" type="button" class="btn btn-danger" onClick="return confirm('Apakah kamu sangat sangat yakin untuk menghapus data ini. bila data ini sudah hilang tidak mungin kamu bisa mencarinya kembali??')"><i class="bi bi-x-square"></i></a></a>
                        </td>
                    </tr>
                </tbody> 
                <?php 
                    } 
                ?>
            </table>
        </div>
    </div>
     
    </div>

  <section id="opini">
    <h2>Opini</h2>
    <div class="opini-container">
      <div class="opini-item">
        <img src="menwa.jpg" alt="Opini 1">
        <div class="opini-text">
          <h3>Seminar Serasehan Resimen Mahasiswa Mahasurya Jawa Timur</h3>
          <p>Sarasehan Menwa Mahasurya Jawa Timur 2025 merupakan forum silaturahmi dan diskusi strategis antar perwakilan Resimen Mahasiswa se-Jawa Timur. Acara ini bertujuan untuk mempererat solidaritas, menyelaraskan program kerja, serta memperkuat peran Menwa sebagai bagian dari bela negara dan pengembangan kepemimpinan mahasiswa di lingkungan kampus. Kegiatan ini dihadiri oleh perwakilan dari berbagai universitas di Jawa Timur, termasuk UNESA, ITS, UB, Unej, dan tuan rumah UNIPA. Dalam sarasehan ini dibahas isu-isu aktual seputar peran mahasiswa dalam pertahanan negara, sinergi antar-Menwa, serta pembinaan karakter melalui kegiatan Menwa.</p>
        </div>
      </div>
    
      <div class="opini-item">
        <img src="ITcamp.jpg" alt="Opini 2">
        <div class="opini-text">
          <h3>IT Camp Mahasiswa TI Unugiri Bojonegoro</h3>
          <p>IT Camp Mahasiswa Teknik Informatika merupakan kegiatan pengembangan soft skill dan hard skill yang diikuti oleh seluruh mahasiswa Teknik Informatika dalam rangka mempererat hubungan antarangkatan serta meningkatkan pengetahuan dan kemampuan di bidang teknologi informasi. Kegiatan ini biasanya berlangsung dalam format outdoor camp yang dikombinasikan dengan sesi pelatihan, diskusi, dan team building.</p>
          <p>Selama IT Camp, peserta mengikuti berbagai aktivitas seperti pelatihan pemrograman dasar, workshop pengembangan aplikasi, diskusi teknologi terkini, serta pelatihan kepemimpinan dan kerja sama tim. Suasana kebersamaan dan belajar sambil berkegiatan alam menciptakan pengalaman yang menyenangkan dan bermakna.</p>
        </div>
      </div>
    
      <div class="opini-item">
        <img src="tiA.jpg" alt="Opini 3">
        <div class="opini-text">
          <h3>Kelas Mahasiswa Teknik Informatika A angkatan 2024</h3>
          <p>Mahasiswa Teknik Informatika Universitas Nahdlatul Ulama Sunan Giri (UNUGIRI) Angkatan 2024 adalah generasi baru yang siap berkontribusi dalam dunia teknologi dan informasi. Dengan semangat inovatif dan kreatif, mahasiswa angkatan ini dibekali dengan berbagai ilmu dasar dan lanjutan di bidang informatika, seperti pemrograman, jaringan komputer, pengembangan aplikasi, basis data, kecerdasan buatan, hingga keamanan siber.</p>
          <p>Sebagai bagian dari kampus UNUGIRI yang berbasis nilai keislaman dan kebangsaan, mahasiswa Teknik Informatika 2024 juga didorong untuk mengembangkan karakter profesional, integritas tinggi, serta kemampuan berpikir kritis dan kolaboratif. Selain kegiatan akademik, mahasiswa angkatan ini aktif dalam berbagai kegiatan non-akademik seperti organisasi, seminar, pelatihan IT, dan kompetisi teknologi.</p>
        </div>
      </div>
  </section>

    <section class="hubungi-saya" id="hubungi">
      <h2>Hubungi Saya</h2>
      <div class="kontainer">
        <!-- Form Kontak -->
        <form class="form-kontak">
          <label>Nama</label>
          <input type="text" placeholder="Nama Anda" required>
  
          <label>Email</label>
          <input type="email" placeholder="Email Anda" required>
  
          <label>Pesan</label>
          <textarea rows="4" placeholder="Tulis pesan Anda..." required></textarea>
  
          <button type="submit">Kirim</button>
        </form>
        <div class="maps">
            <h3 style="text-align:center; color:#005caa;">Lokasi</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7220731358225!2d111.87924347363504!3d-7.2724336927345785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e782b94cdbd9a7b%3A0x54ca01bff15ff82f!2sPondok%20Pesantren%20Al%20-%20Munawwar!5e0!3m2!1sid!2sid!4v1745290070656!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
    <section>
      <footer>
        <p>@Copyright by Akhmad Miftakhul Huda</p>
      </footer>
    </section>
</body>
</html>
<!-- akhir -->
<!DOCTYPE html>
<html lang="en">

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            CRUD MAHASISWA
            </a>
        </div>
    </nav>
    
</body>
</html>