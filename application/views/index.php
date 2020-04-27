<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MAS Sumbiri - Fight Covid-19</title>
  <meta name="title" content="MAS Sumbiri - Fight Covid-19">
  <meta name="description" content="MAS Sumbiri Rapid Self Detection COVID-19 System">
  <meta property="og:image" content="<?php echo base_url() ?>assets/landing/img/mas_icon.png">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>assets/landing/img/mas_icon.png" rel="icon">
  <link href="<?php echo base_url() ?>assets/landing/img/mas_icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ?>assets/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/landing/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/landing/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/landing/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/landing/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>assets/landing/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland - v2.0.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <!-- <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/landing/img/logo.png" alt=""></a> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/landing/img/logo.png" alt="" height="30"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header"><i class="fa fa-home"></i></a></li>
          <li><a href="#prevention">Pencegahan</a></li>                    
          <li><a href="#faq">F.A.Q</a></li>
          <li><a href="#contact">Kontak</a></li>

          <li class="get-started"><a href="#features">Apa itu COVID-19 ?</a></li>
          <li>
            <a href="<?php echo base_url('welcome/en') ?>"><img src="<?php echo base_url('assets/landing/img/en.svg') ?>" height="18"> EN</a>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
           <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/landing/img/logo.png" alt="" class="img-fluid"></a>
            <hr>
            <h2 class="text-center">MAS Sumbiri Rapid Self Detection COVID-19 System</h2>
            <h2 class="text-justify">Deteksi Mandiri Cepat COVID-19 adalah salah satu cara untuk mengetahi apakah Anda memiliki gejala yang memerlukan pemeriksaan dan pengujian lebih lanjut mengenai COVID-19 atau tidak.</h2>
            <button class="btn btn-primary" onclick="masuk()"><i class="fa fa-sign-in"></i> Masuk</button>
            <button class="btn btn-success" onclick="registrasi()"><i class="fa fa-user-plus"></i> Daftar</button>
            <?php echo $this->session->flashdata('msg'); ?>
            <!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a> -->

          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="<?php echo base_url() ?>assets/landing/img/banner1.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

<main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
            <div class="row no-gutters">
                 <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="<?php echo base_url() ?>assets/landing/img/corona.png" height="300" alt="">
                </div>
                <div class="col-sm-7 order-2">          
                  <h2>Apa Yang Harus Diketahui?</h2>
                  <p align="justify"><b>Corona Virus Disease 2019</b> atau <b>COVID-19</b> adalah penyakit menular yang disebabkan oleh SARS-CoV-2, salah satu jenis koronavirus. Penderita COVID-19 dapat mengalami demam, batuk kering, dan kesulitan bernafas.
                  </p><br><p align="justify">
                  Infeksi menyebar dari satu orang ke orang lain melalui percikan (droplet) dari saluran pernapasan yang sering dihasilkan saat batuk atau bersin. Jarak jangkauan droplet biasanya hingga 1 meter. Droplet bisa menempel di benda, namun tidak akan bertahan lama di udara. Waktu dari paparan virus hingga timbulnya gejala klinis antara 1-14 hari dengan rata-rata 5 hari. Maka, bagi orang yang sedang sakit diwajibkan memakai masker guna meminimalisir penyebaran droplet.</p>
                </div>
            </div>
        </div>        

      </div>
    </section><!-- End App Features Section -->   

    <section id="prevention" class="prevention">
       
      <div class="container">

        <div class="section-title">
            <h2>Langkah Pencegahan COVID-19</h2>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-12 d-flex align-items-stretch">
                <div class="image col-xl-12 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="<?php echo base_url() ?>assets/landing/img/prevention.jpg" class="img-fluid" alt="">
                </div>
          </div>          
        </div>

      </div>
     
    </section>

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">

          <h2>Pertanyaan Yang Sering Ditanyakan (F.A.Q)</h2>          
        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#accordion-list-1">Apakah orang tua rentan terkena COVID-19?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p align="justify">Tidak hanya manula, bahkan generasi muda pun dapat tertular COVID-19 jika tidak menjaga diri. Biasanya, manula memang rentan terkena COVID-19    dikarenakan sistem imun tubuh yang sudah tidak seprima dulu. Selain itu, manula yang memiliki riwayat penyakit seperti hipertensi, diabetes, penyakit pernapasan, atau penyakit parah lainnya memiliki kemungkinan besar untuk tertular COVID-19 akut.
                    </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-2" class="collapsed">Apakah COVID-19 perlu dikhawatirkan?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                <p align="justify">Sebanyak 80 persen kasus COVID-19 bersifat "ringan", sehingga perawatan yang cukup dapat memulihkan mereka segera dalam waktu cepat. Namun, dikarenakan penyebarannya yang cepat, diimbau untuk tetap waspada pada penyebaran COVID-19. Jika Anda merasakan gejala-gejalanya, maka jangan ragu untuk menghubungi Hotline 024-3580713 atau ke fasilitas kesehatan terdekat.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-3" class="collapsed">Apakah COVID-19 sama dengan SARS dan MERS?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                <p align="justify">Severe Acute Respiratory Syndrome (SARS-CoV) yang berawal dari 2003 dan Middle East Respiratory Syndrome (MERS-CoV) pada 2012 memang sama-sama menyerang pernapasan, sama seperti COVID-19. Meskipun disebabkan oleh jenis virus yang sama, COVID-19, dan MERS serta SARS memiliki jenis virus corona yang berbeda. Dari segi penularan, COVID-19 jauh lebih pesat dibandingkan SARS dan MERS.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-4" class="collapsed">Perlukah saya menggunakan masker?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-4" class="collapse" data-parent=".accordion-list">
                <p align="justify">Perlu. Karena ketika seseorang berada di luar rumah, akan ada banyak sekali ancaman penularan virus. Sesuai rekomendasi dari WHO, semua orang (baik yang sakit maupun yang sehat) perlu menggunakan masker. Masyarakat umum, dapat menggunakan masker berbahan dasar kain. Penggunaan masker kain tidak lebih dari 4 (empat) jam. Setelahnya, masker harus dicuci menggunakan sabun dan air, serta dipastikan bersih sebelum dipakai kembali. Masker bedah atau masker N95 hanya untuk tenaga kesehatan (karena terbatas). Lindungi diri kita dengan cara : semua orang menggunakan masker saat keluar rumah
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-5" class="collapsed">Apakah COVID-19 dapat melekat pada benda mati?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-5" class="collapse" data-parent=".accordion-list">
                <p align="justify">Ya. COVID-19 dapat menempel pada benda mati atau barang selama beberapa jam atau beberapa hari jika tidak secepatnya dibersihkan dengan disinfektan. Akan tetapi, ketahanan COVID-19 menempel pada satu benda tergantung dari beberapa faktor seperti suhu, kelembapan, dan jenis permukaan. Sesudah membersihkan barang yang terpapar COVID-19 dengan disinfektan, segera bersihkan tangan dengan alkohol atau sabun. Hindari menyentuh mata, hidung dan mulut.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontak</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info" data-aos="fade-up">
                <i class="bx bx-map"></i>
                <h4>PT. MAS Sumbiri 1</h4>
                <p>Dukuh Ngelorok, Nglorok, Campurejo, Kec. Boja, Kabupaten Kendal, Jawa Tengah 51381</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-map"></i>
                <h4>PT. MAS Sumbiri 2</h4>
                <p>Randu Garut, Tugu, Semarang City, Central Java 50181</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-phone"></i>
                <h4>Telepon</h4>
                <p>(0294) 572877</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-time-five"></i>
                <h4>Working Hours</h4>
                <p>Mon - Fri: 05.30AM to 10.30PM</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15837.1376645831!2d110.28638171977539!3d-7.092994100000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbe0520fba463e603!2sPT%20MAS%20Sumbiri!5e0!3m2!1sen!2sid!4v1586418295168!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>

        </div>

      </div>
    </section> 
    <!-- End Contact Section -->

</main><!-- End #main -->

  <div class="modal fade" id="modal-log">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">                  
                  <h4 class="modal-title">Masuk</h4>
              </div>
              <div class="modal-body">
                  <?php echo form_open('welcome/login', array('id' => 'frmlog')); ?>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">No ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Nomor ID" name="epf">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            
                    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-border-bottom" required>          
                    <div class="show-password">
                        <i class="fa fa-eye"> Show Password</i>
                    </div>
                
                        </div>
                      </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-success">Masuk</button>
              </div>
              <?php echo form_close(); ?>
          </div>
      </div>
  </div>

  <div class="modal fade" id="modal-reg">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Registrasi User</h4>  
        </div>
        <div class="modal-body">
          <?php echo form_open('welcome/registrasi', array('id' => 'frmreg')); ?>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">No. ID</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="epf" placeholder="Nomor ID" required="">
                <i class="text-danger" style="font-size: 10px;">*berisi 6 digit, wajib menambahkan angka nol di depan nomor id Anda</i>

              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nama</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Grade</label>
              <div class="col-sm-9">
                <select name="grade" class="form-control">
                  <option value="TM Direct">Team member direct (produksi)</option>
                  <option value="TM Indirect">Team member indirect (exp: cutting, quality, RM & FG, CNIP)</option>
                  <option value="TL/GL">TL/GL</option>
                  <option value="Staff/Above">Staff, executive and above</option>
                </select>
              </div>
            </div>
             <div class="form-group row">
              <label class="col-sm-3 col-form-label">Department</label>
              <div class="col-sm-9">
                <select name="department" class="form-control">
                  <option value="Administration">Administration</option>
                  <option value="Autonomation">Autonomation</option>
                  <option value="Cad /cam">Cad /cam</option>
                  <option value="Commercial">Commercial</option>
                  <option value="Cutting">Cutting</option>
                  <option value="Enginering">Enginering</option>
                  <option value="FG">FG</option>
                  <option value="HR">HR</option>
                  <option value="IE">IE</option>
                  <option value="Lab & Inspection">Lab & Inspection</option>
                  <option value="Maintenance">Maintenance</option>
                  <option value="MOS">MOS</option>
                  <option value="Planning">Planning</option>
                  <option value="PCU">PCU</option>
                  <option value="Production">Production</option>
                  <option value="Quality">Quality</option>
                  <option value="RM">RM</option>
                  <option value="Technical">Technical</option>
                  <option value="Training School">Training School</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Alamat</label>
              <div class="col-sm-9">
                  <textarea name="alamat" class="form-control" placeholder="Alamat lengkap anda tinggal sekarang"></textarea>
              </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input id="password1" name="password" type="password" placeholder="Password" class="form-control input-border-bottom" required>          
                    <div class="show-password">
                        <i class="fa fa-eye"> Show Password</i>
                    </div>
                </div>                                                          
            </div>                      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Daftar</button>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">        

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>MAS Sumbiri Autonomation</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ?>assets/landing/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/landing/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ?>assets/landing/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url() ?>assets/landing/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>assets/landing/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url() ?>assets/landing/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>assets/landing/js/main.js"></script>
  <script>
    function registrasi() {
      $('#frmreg')[0].reset();
      $('#modal-reg').modal('show');
    }

    function masuk() {
      $('#frmlog')[0].reset();      
      $('#modal-log').modal('show');
    }

    function showPassword(button) {
      var inputPassword = $(button).parent().find('input');
      if (inputPassword.attr('type') === "password") {
        inputPassword.attr('type', 'text');
      } else {
        inputPassword.attr('type','password');
      }
    }

    $('.show-password').on('click', function(){
      showPassword(this);
    })

  </script>
</body>

</html>