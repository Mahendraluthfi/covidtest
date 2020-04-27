<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MAS Sumbiri - Fight Covid-19</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 
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
          <li><a href="#profil">Profil</a></li>          
          <li><a href="#record">Record</a></li>          
          <li class="get-started"><a href="#selftest"><i class="fa fa-hand-pointer-o"></i> Klik untuk Self Test Detection</a></li>
          <li>
            <a href="<?php echo base_url('home/en') ?>"><img src="<?php echo base_url('assets/landing/img/en.svg') ?>" height="18"> EN</a>
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
            <a href="<?php echo base_url('home/logout') ?>" class="btn btn-info btn-sm text-white"><i class="fa fa-sign-out"></i> Keluar</a>
            <!-- <a href="#selftest" class="btn btn-success"><i class="fa fa-hand-pointer-o"></i> Klik untuk Self Test Detection</a> -->
            <!-- <button class="btn btn-success" onclick="registrasi()"><i class="fa fa-user-plus"></i> Daftar</button> -->
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
    <section id="profil" class="profil" style="padding-bottom: 0px;">
        <div class="container">
            <div class="section-title">
                <h2>Profil</h2>            
            </div>
            <div class="row no-gutters">
                <div class="col-sm-3 col-md-3 col-lg-3"></div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <table class="table table-bordered table-hover">                        
                        <tr>
                            <td width="30%" class="text-primary">EPF</td>
                            <td><?php echo $epf->epf ?></td>
                        </tr>                        
                        <tr>
                            <td class="text-primary">Nama</td>
                            <td><?php echo $epf->name ?></td>
                        </tr>       
                        <tr>
                            <td class="text-primary">Grade</td>
                            <td><?php echo $epf->grade ?></td>
                        </tr>        
                        <tr>
                            <td class="text-primary">Department</td>
                            <td><?php echo $epf->department ?></td>
                        </tr>              
                        <tr>
                            <td class="text-primary">Alamat</td>
                            <td><?php echo $epf->alamat ?></td>
                        </tr>                       
                    </table>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3"></div>
            </div>
        </div>
    </section>
    <!-- ======= App Features Section ======= -->
    <section id="record" class="record" style="padding-bottom: 0px;">
      <div class="container">

        <div class="section-title">
            <div class="row no-gutters">            
                <div class="col-sm-12 order-1">          
                  <h2>Data Test Record</h2>  
                  <div class="table-responsive">
                     
                    <table class="table table-bordered" id="example">
                      <thead>
                        <tr bgcolor="#ccc">
                          <th width="1%">No</th>
                          <th>Tanggal</th>
                          <th>Hasil</th>
                          <th>#</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php $no=1; foreach ($get as $data) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo date('d M, H:i:s',strtotime($data->date)) ?></td>
                                <td class="text-white
                                <?php if($data->result == 'Zona Hijau'){ echo 'bg-success'; }elseif($data->result == 'Zona Kuning'){echo 'bg-warning';}else{echo 'bg-danger';} ?>
                                "><?php echo $data->result ?></td>
                                <td>
                                    <button type="button" onclick="modalview('<?php echo $data->id_answer ?>')" class="btn btn-primary btn-sm">Detail</button>
                                </td>
                            </tr>
                          <?php } ?>
                      </tbody>
                    </table>
                   </div><br>
                   <?php echo $this->session->flashdata('hasil'); ?>
                </div>                
            </div>
        </div>        

      </div>
    </section><!-- End App Features Section -->   

    <section id="selftest" class="selftest" style="padding-top: 5px;">
       
      <div class="container">

        <div class="section-title">
            <h2>Rapid Self Test</h2>
            <span>Silakan isi kuesioner berikut sesuai dengan kondisi Anda saat ini.</span>
        </div>
        <div class="row no-gutters">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">                    
                <div class="card">
                    <div class="card-body">
                        <?php echo form_open('home/submit'); ?>
                        <b>
                            Apakah Anda mengalami gejala yang berhubungan dengan COVID-19 dalam 3-4 hari terakhir? (seperti demam, batuk, nyeri badan, dan sulit bernapas)<span class="text-danger">*</span>
                        </b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question1" id="question1" value="1" required="">
                          <label class="form-check-label" for="question1">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question1" id="question2" value="0" required="">
                          <label class="form-check-label" for="question2">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Demam > 38°C ? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question12" id="question23" value="1" required="">
                          <label class="form-check-label" for="question23">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question12" id="question24" value="0" required="">
                          <label class="form-check-label" for="question24">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Batuk Kering ? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question13" id="question25" value="1" required="">
                          <label class="form-check-label" for="question25">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question13" id="question26" value="0" required="">
                          <label class="form-check-label" for="question26">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Sakit Badan ? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question14" id="question27" value="1" required="">
                          <label class="form-check-label" for="question27">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question14" id="question28" value="0" required="">
                          <label class="form-check-label" for="question28">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Sesak Napas (Sulit Bernapas) ? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question15" id="question29" value="1" required="">
                          <label class="form-check-label" for="question29">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question15" id="question30" value="0" required="">
                          <label class="form-check-label" for="question30">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Nyeri Tenggorokan ? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question16" id="question31" value="1" required="">
                          <label class="form-check-label" for="question31">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question16" id="question32" value="0" required="">
                          <label class="form-check-label" for="question32">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Dimana Anda tinggal saat ini? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="tempat" id="question33" value="Satu rumah dengan keluarga" required="">
                          <label class="form-check-label" for="question33">
                            Satu rumah dengan keluarga
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="tempat" id="question34" value="Kos/kontrak" required="">
                          <label class="form-check-label" for="question34">
                            Kos/kontrak
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Adakah keluarga atau tetangga Anda yang mengalami gejala yang berkaitan dengan COVID-19 selama 3-4 hari terakhir? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question2" id="question3" value="1" required="">
                          <label class="form-check-label" for="question3">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question2" id="question4" value="0" required="">
                          <label class="form-check-label" for="question4">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Adakah keluarga atau tetangga Anda yang terdiagnosa/suspect COVID-19? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question3" id="question5" value="1" required="">
                          <label class="form-check-label" for="question5">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question3" id="question6" value="0" required="">
                          <label class="form-check-label" for="question6">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Apakah ada keluarga satu rumah yang disarankan oleh petugas kesehatan untuk melakukan karantina/isolasi mandiri? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question4" id="question7" value="1" required="">
                          <label class="form-check-label" for="question7">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question4" id="question8" value="0" required="">
                          <label class="form-check-label" for="question8">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Apakah ada tetangga (dalam radius < 1 km dari tempat tinggal Anda saat ini) yang mengalami gejala Covid-19? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question5" id="question9" value="1" required="">
                          <label class="form-check-label" for="question9">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question5" id="question10" value="0" required="">
                          <label class="form-check-label" for="question10">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Apakah ada tetangga (Dalam radius < 1 km dari tempat tinggal Anda saat ini) yang terdiagnosa (ODP/PDP) Covid-19? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question6" id="question11" value="1" required="">
                          <label class="form-check-label" for="question11">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question6" id="question12" value="0" required="">
                          <label class="form-check-label" for="question12">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Apakah dalam 2 minggu terakhir Anda mengunjungi orang yang sedang dalam karantina atau mendapat perawatan medis? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question7" id="question13" value="1" required="">
                          <label class="form-check-label" for="question13">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question7" id="question14" value="0" required="">
                          <label class="form-check-label" for="question14">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                 <div class="card">
                    <div class="card-body">
                        <b>Apakah ada keluarga dan atau tetangga yang diawat di Rumah Sakit atau sembuh dari Covid-19?<span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question17" id="question35" value="1" required="">
                          <label class="form-check-label" for="question35">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question17" id="question36" value="0" required="">
                          <label class="form-check-label" for="question36">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Apakah ada keluarga atau tetangga Anda yang bekerja di rumah sakit rujukan COVID-19 atau tempat lainnya yang dijadikan sebagai pusat karantina?<span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question18" id="question37" value="1" required="">
                          <label class="form-check-label" for="question37">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question18" id="question38" value="0" required="">
                          <label class="form-check-label" for="question38">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Apakah ada keluarga atau tetangga Anda yang baru saja pulang dari luar negeri dalam 30 hari terakhir? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question8" id="question15" value="1" required="">
                          <label class="form-check-label" for="question15">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question8" id="question16" value="0" required="">
                          <label class="form-check-label" for="question16">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Jika ya, sebutkan dari negara mana.</b><p></p>
                        <input type="text" class="form-control" placeholder="Nama Negara" name="negara1">                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Apakah Anda bepergian ke luar negeri setelah tanggal 1 Januari 2020? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question9" id="question17" value="1" required="">
                          <label class="form-check-label" for="question17">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question9" id="question18" value="0" required="">
                          <label class="form-check-label" for="question18">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Jika ya, sebutkan dari negara mana.</b><p></p>
                        <input type="text" class="form-control" placeholder="Nama Negara" name="negara2">   
                        <input type="hidden" name="lang" value="ind">                                                                   
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Apakah Anda menghadiri acara publk (yang berisi lebih dari 50 orang) dalam 2 minggu terakhir? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question10" id="question19" value="1" required="">
                          <label class="form-check-label" for="question19">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question10" id="question20" value="0" required="">
                          <label class="form-check-label" for="question20">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Apakah ada orang dalam keluarga Anda yang bekerja di bidang industri yang beresiko terhadap Corona? (misalnya: pemandu wisata, staff hotel, pegawai bandara)<span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question11" id="question21" value="1" required="">
                          <label class="form-check-label" for="question21">
                            YA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question11" id="question22" value="0" required="">
                          <label class="form-check-label" for="question22">
                            TIDAK
                          </label>
                        </div>
                    </div>
                </div>
                <!-- div class="card">
                    <div class="card-body">
                        <b>Silakan pilih di bawah ini tempat tinggal Anda sekarang<span class="text-danger">*</span></b><p></p>
                        <select name="tempat" class="form-control" required="">
                            <option value="">Pilih</option>
                            <option value="Rumah">Rumah</option>
                            <option value="Kos">Kos</option>
                            <option value="Asrama">Asrama</option>
                            <option value="Kontrak">Kontrak</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                 <div class="card">
                    <div class="card-body">
                        <b>Sebutkan nama daerah tempat Anda tinggal sekarang<span class="text-danger">*</span></b><p></p>
                        <input type="text" class="form-control" placeholder="Nama Daerah" name="daerah">
                    </div>
                </div> -->
                <p></p>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
                <?php echo form_close(); ?>

            </div>          
        </div>
      </div>  
    </section>   


    <div class="modal fade" id="modal-id">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Record</h4>  
                        
                </div>
                <div class="modal-body">
                    <h6 class="datetime"></h6>                    
                    <table class="table table-bordered table-striped">                        
                        <tbody>
                            <tr>
                                <td width="75%">Apakah Anda mengalami gejala yang berhubungan dengan COVID-19 dalam 3-4 hari terakhir? (seperti demam, batuk, nyeri badan, dan sulit bernapas) ?</td>
                                <td style="font-weight: bold;" class="q1"></td>
                            </tr>
                            <tr>
                                <td>Demam > 38°C ?</td>
                                <td style="font-weight: bold;" class="q12"></td>
                            </tr>
                            <tr>
                                <td>Batuk Kering ?</td>
                                <td style="font-weight: bold;" class="q13"></td>
                            </tr>
                            <tr>
                                <td>Sakit Badan ?</td>
                                <td style="font-weight: bold;" class="q14"></td>
                            </tr>
                            <tr>
                                <td>Sesak Napas (Sulit Bernapas) ?</td>
                                <td style="font-weight: bold;" class="q15"></td>
                            </tr>
                            <tr>
                                <td>Nyeri Tenggorokan ?</td>
                                <td style="font-weight: bold;" class="q16"></td>
                            </tr>
                            <tr>
                                <td>Dimana Anda tinggal saat ini?</td>
                                <td style="font-weight: bold;" class="tempat"></td>
                            </tr>
                            <tr>
                                <td>Adakah keluarga atau tetangga Anda yang mengalami gejala yang berkaitan dengan COVID-19 selama 3-4 hari terakhir?</td>
                                <td style="font-weight: bold;" class="q2"></td>
                            </tr>
                            <tr>
                                <td>Adakah keluarga atau tetangga Anda yang terdiagnosa/suspect COVID-19?</td>
                                <td style="font-weight: bold;" class="q3"></td>
                            </tr>
                            <tr>
                                <td>Apakah ada keluarga satu rumah yang disarankan oleh petugas kesehatan untuk melakukan karantina/isolasi mandiri?</td>
                                <td style="font-weight: bold;" class="q4"></td>
                            </tr>
                            <tr>
                                <td>Apakah ada tetangga (dalam radius < 1 km dari tempat tinggal Anda saat ini) yang mengalami gejala Covid-19?</td>
                                <td style="font-weight: bold;" class="q5"></td>
                            </tr>
                            <tr>
                                <td>Apakah ada tetangga (Dalam radius < 1 km dari tempat tinggal Anda saat ini) yang terdiagnosa (ODP/PDP) Covid-19?</td>
                                <td style="font-weight: bold;" class="q6"></td>
                            </tr>
                            <tr>
                                <td>Apakah dalam 2 minggu terakhir Anda mengunjungi orang yang sedang dalam karantina atau mendapat perawatan medis?</td>
                                <td style="font-weight: bold;" class="q7"></td>
                            </tr>
                            <tr>
                                <td>Apakah ada keluarga dan atau tetangga yang diawat di Rumah Sakit atau sembuh dari Covid-19?</td>
                                <td style="font-weight: bold;" class="q17"></td>
                            </tr> 
                            <tr>
                                <td>Apakah ada keluarga atau tetangga Anda yang bekerja di rumah sakit rujukan COVID-19 atau tempat lainnya yang dijadikan sebagai pusat karantina?</td>
                                <td style="font-weight: bold;" class="q18"></td>
                            </tr>
                            <tr>
                                <td>Apakah ada keluarga atau tetangga Anda yang baru saja pulang dari luar negeri dalam 30 hari terakhir?</td>
                                <td style="font-weight: bold;" class="q8"></td>
                            </tr>
                            <tr>
                                <td>Jika ya, sebutkan dari negara mana.</td>
                                <td style="font-weight: bold;" class="negara1"></td>
                            </tr> 
                             <tr>
                                <td>Apakah Anda bepergian ke luar negeri setelah tanggal 1 Januari 2020?</td>
                                <td style="font-weight: bold;" class="q9"></td>
                            </tr> 
                             <tr>
                                <td>Jika ya, sebutkan dari negara mana.</td>
                                <td style="font-weight: bold;" class="negara2"></td>
                            </tr> 
                             <tr>
                                <td>Apakah Anda menghadiri acara publk (yang berisi lebih dari 50 orang) dalam 2 minggu terakhir?</td>
                                <td style="font-weight: bold;" class="q10"></td>
                            </tr> 
                             <tr>
                                <td>Apakah ada orang dalam keluarga Anda yang bekerja di bidang industri yang beresiko terhadap Corona? (misalnya: pemandu wisata, staff hotel, pegawai bandara)</td>
                                <td style="font-weight: bold;" class="q11"></td>
                            </tr>                            

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>                    
                </div>
            </div>
        </div>
    </div>
</main><!-- End #main -->

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
   <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>

    $(document).ready(function() {
        $('#example').DataTable();
        
    }); 

    function modalview(id) {    

         $.ajax({
            url : "<?php echo base_url('home/get_answer/')?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {              
                console.log(data);                
                $('.q1').text((data.question1 === '1') ? 'YA' : 'TIDAK');
                $('.q2').text((data.question2 === '1') ? 'YA' : 'TIDAK');
                $('.q3').text((data.question3 === '1') ? 'YA' : 'TIDAK');
                $('.q4').text((data.question4 === '1') ? 'YA' : 'TIDAK');
                $('.q5').text((data.question5 === '1') ? 'YA' : 'TIDAK');
                $('.q6').text((data.question6 === '1') ? 'YA' : 'TIDAK');
                $('.q7').text((data.question7 === '1') ? 'YA' : 'TIDAK');
                $('.q8').text((data.question8 === '1') ? 'YA' : 'TIDAK');
                $('.q9').text((data.question9 === '1') ? 'YA' : 'TIDAK');
                $('.q10').text((data.question10 === '1') ? 'YA' : 'TIDAK');
                $('.q11').text((data.question11 === '1') ? 'YA' : 'TIDAK');
                $('.q12').text((data.question12 === '1') ? 'YA' : 'TIDAK');
                $('.q13').text((data.question13 === '1') ? 'YA' : 'TIDAK');
                $('.q14').text((data.question14 === '1') ? 'YA' : 'TIDAK');
                $('.q15').text((data.question15 === '1') ? 'YA' : 'TIDAK');
                $('.q16').text((data.question16 === '1') ? 'YA' : 'TIDAK');
                $('.q17').text((data.question17 === '1') ? 'YA' : 'TIDAK');
                $('.q18').text((data.question18 === '1') ? 'YA' : 'TIDAK');
                $('.negara1').text(data.negara1);                
                $('.negara2').text(data.negara2);                
                $('.tempat').text(data.tempat);                                             
                $('.datetime').text('Datetime : '+data.dt);
                $('#modal-id').modal('show');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    
    }    

  </script>
</body>

</html>