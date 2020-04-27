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
          <li><a href="#profil">Profile</a></li>                          
          <li><a href="#record">Record</a></li>          
          <li class="get-started"><a href="#selftest"><i class="fa fa-hand-pointer-o"></i> Click for Self Test Detection</a></li>
          <li>
            <a href="<?php echo base_url('home/index') ?>"><img src="<?php echo base_url('assets/landing/img/ina.png') ?>" height="18"> IND</a>
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
            <h2 class="text-justify">COVID-19 Rapid Self Detection is one way to find out whether you have symptoms that require further examination and testing of COVID-19 or not.</h2>
            <a href="<?php echo base_url('home/logout') ?>" class="btn btn-info btn-sm text-white"><i class="fa fa-sign-out"></i> Logout</a>
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
                <h2>Profile</h2>            
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
                            <td class="text-primary">Name</td>
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
                            <td class="text-primary">Address</td>
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
                          <th>Date</th>
                          <th>Result</th>
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
                                "><?php if($data->result == 'Zona Hijau'){ echo 'Green Zone'; }elseif($data->result == 'Yellow Zone'){echo 'bg-warning';}else{echo 'Red Zone';} ?></td>
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
            <span>Please fill in the following questionnaire in according with your current condition.</span>
        </div>
        <div class="row no-gutters">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">                    
                <div class="card">
                    <div class="card-body">
                        <?php echo form_open('home/submit_en'); ?>
                        <b>
                            Have you experienced any symptoms related to COVID-19 in the last 3-4 days? (such as fever, coughing, body aches, and difficulty breathing)<span class="text-danger">*</span>
                        </b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question1" id="question1" value="1" required="">
                          <label class="form-check-label" for="question1">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question1" id="question2" value="0" required="">
                          <label class="form-check-label" for="question2">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Are you Fever > 38°C ? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question12" id="question23" value="1" required="">
                          <label class="form-check-label" for="question23">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question12" id="question24" value="0" required="">
                          <label class="form-check-label" for="question24">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Are you dry cough ? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question13" id="question25" value="1" required="">
                          <label class="form-check-label" for="question25">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question13" id="question26" value="0" required="">
                          <label class="form-check-label" for="question26">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Are you body aches ? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question14" id="question27" value="1" required="">
                          <label class="form-check-label" for="question27">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question14" id="question28" value="0" required="">
                          <label class="form-check-label" for="question28">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Are you Shortness of breath (difficulty breathing)? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question15" id="question29" value="1" required="">
                          <label class="form-check-label" for="question29">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question15" id="question30" value="0" required="">
                          <label class="form-check-label" for="question30">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Are you sore throat? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question16" id="question31" value="1" required="">
                          <label class="form-check-label" for="question31">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question16" id="question32" value="0" required="">
                          <label class="form-check-label" for="question32">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Where do you live now? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="tempat" id="question33" value="Satu rumah dengan keluarga" required="">
                          <label class="form-check-label" for="question33">
                            One house with family
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="tempat" id="question34" value="Kos/kontrak" required="">
                          <label class="form-check-label" for="question34">
                            Flat / Contract
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Has your family or neighbor experienced symptoms related to COVID-19 during the last 3-4 days? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question2" id="question3" value="1" required="">
                          <label class="form-check-label" for="question3">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question2" id="question4" value="0" required="">
                          <label class="form-check-label" for="question4">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Has your family or neighbor been diagnosed / suspect COVID-19? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question3" id="question5" value="1" required="">
                          <label class="form-check-label" for="question5">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question3" id="question6" value="0" required="">
                          <label class="form-check-label" for="question6">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Is there a single family home that is recommended by health workers to carry out quarantine / self isolation? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question4" id="question7" value="1" required="">
                          <label class="form-check-label" for="question7">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question4" id="question8" value="0" required="">
                          <label class="form-check-label" for="question8">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Are any neighbors (within a radius of <1 km from where you currently live) having symptoms of Covid-19? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question5" id="question9" value="1" required="">
                          <label class="form-check-label" for="question9">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question5" id="question10" value="0" required="">
                          <label class="form-check-label" for="question10">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Has any neighbor (Within a radius of <1 km from your current residence) diagnosed (ODP / PDP) Covid-19? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question6" id="question11" value="1" required="">
                          <label class="form-check-label" for="question11">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question6" id="question12" value="0" required="">
                          <label class="form-check-label" for="question12">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Have you visited people in quarantine or received medical treatment in the last 2 weeks? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question7" id="question13" value="1" required="">
                          <label class="form-check-label" for="question13">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question7" id="question14" value="0" required="">
                          <label class="form-check-label" for="question14">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                 <div class="card">
                    <div class="card-body">
                        <b>Are there families and / or neighbors who have been hospitalized or recovered from Covid-19?<span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question17" id="question35" value="1" required="">
                          <label class="form-check-label" for="question35">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question17" id="question36" value="0" required="">
                          <label class="form-check-label" for="question36">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Does any of your family or neighbors work in the COVID-19 referral hospital or any other place used as a quarantine center?<span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question18" id="question37" value="1" required="">
                          <label class="form-check-label" for="question37">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question18" id="question38" value="0" required="">
                          <label class="form-check-label" for="question38">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Have any of your family or neighbors just returned from abroad in the last 30 days? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question8" id="question15" value="1" required="">
                          <label class="form-check-label" for="question15">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question8" id="question16" value="0" required="">
                          <label class="form-check-label" for="question16">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>If yes, state from which country.</b><p></p>
                        <input type="text" class="form-control" placeholder="Nama Negara" name="negara1">                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Are you traveling abroad after January 1, 2020? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question9" id="question17" value="1" required="">
                          <label class="form-check-label" for="question17">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question9" id="question18" value="0" required="">
                          <label class="form-check-label" for="question18">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>If yes, state from which country.</b><p></p>
                        <input type="text" class="form-control" placeholder="Nama Negara" name="negara2"> 
                        <input type="hidden" name="lang" value="en">                       
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Did you attend a public event (containing more than 50 people) in the last 2 weeks? <span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question10" id="question19" value="1" required="">
                          <label class="form-check-label" for="question19">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question10" id="question20" value="0" required="">
                          <label class="form-check-label" for="question20">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <b>Are there people in your family who work in industries that are at risk for Corona? (for example: tour guides, hotel staff, airport employees)<span class="text-danger">*</span></b><br>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question11" id="question21" value="1" required="">
                          <label class="form-check-label" for="question21">
                            YES
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="question11" id="question22" value="0" required="">
                          <label class="form-check-label" for="question22">
                            NO
                          </label>
                        </div>
                    </div>
                </div>
             
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
                                <td width="75%">Have you experienced any symptoms related to COVID-19 in the last 3-4 days? (such as fever, coughing, body aches, and difficulty breathing)</td>
                                <td style="font-weight: bold;" class="q1"></td>
                            </tr>
                            <tr>
                                <td>Are you Fever > 38°C ?</td>
                                <td style="font-weight: bold;" class="q12"></td>
                            </tr>
                            <tr>
                                <td>Are you dry cough ?</td>
                                <td style="font-weight: bold;" class="q13"></td>
                            </tr>
                            <tr>
                                <td>Are you body aches ?</td>
                                <td style="font-weight: bold;" class="q14"></td>
                            </tr>
                            <tr>
                                <td>Are you Shortness of breath (difficulty breathing)?</td>
                                <td style="font-weight: bold;" class="q15"></td>
                            </tr>
                            <tr>
                                <td>Are you sore throat?</td>
                                <td style="font-weight: bold;" class="q16"></td>
                            </tr>
                            <tr>
                                <td>Where do you live now?</td>
                                <td style="font-weight: bold;" class="tempat"></td>
                            </tr>
                            <tr>
                                <td>Has your family or neighbor experienced symptoms related to COVID-19 during the last 3-4 days?</td>
                                <td style="font-weight: bold;" class="q2"></td>
                            </tr>
                            <tr>
                                <td>Has your family or neighbor been diagnosed / suspect COVID-19?</td>
                                <td style="font-weight: bold;" class="q3"></td>
                            </tr>
                            <tr>
                                <td>Is there a single family home that is recommended by health workers to carry out quarantine / self isolation?</td>
                                <td style="font-weight: bold;" class="q4"></td>
                            </tr>
                            <tr>
                                <td>Are any neighbors (within a radius of <1 km from where you currently live) having symptoms of Covid-19?</td>
                                <td style="font-weight: bold;" class="q5"></td>
                            </tr>
                            <tr>
                                <td>Has any neighbor (Within a radius of <1 km from your current residence) diagnosed (ODP / PDP) Covid-19?</td>
                                <td style="font-weight: bold;" class="q6"></td>
                            </tr>
                            <tr>
                                <td>Have you visited people in quarantine or received medical treatment in the last 2 weeks?</td>
                                <td style="font-weight: bold;" class="q7"></td>
                            </tr>
                            <tr>
                                <td>Are there families and / or neighbors who have been hospitalized or recovered from Covid-19?*</td>
                                <td style="font-weight: bold;" class="q17"></td>
                            </tr> 
                            <tr>
                                <td>Does any of your family or neighbors work in the COVID-19 referral hospital or any other place used as a quarantine center?</td>
                                <td style="font-weight: bold;" class="q18"></td>
                            </tr>
                            <tr>
                                <td>Have any of your family or neighbors just returned from abroad in the last 30 days?</td>
                                <td style="font-weight: bold;" class="q8"></td>
                            </tr>
                            <tr>
                                <td>If yes, state from which country</td>
                                <td style="font-weight: bold;" class="negara1"></td>
                            </tr> 
                             <tr>
                                <td>Are you traveling abroad after January 1, 2020?</td>
                                <td style="font-weight: bold;" class="q9"></td>
                            </tr> 
                             <tr>
                                <td>If yes, state from which country</td>
                                <td style="font-weight: bold;" class="negara2"></td>
                            </tr> 
                             <tr>
                                <td>Did you attend a public event (containing more than 50 people) in the last 2 weeks?</td>
                                <td style="font-weight: bold;" class="q10"></td>
                            </tr> 
                             <tr>
                                <td>Are there people in your family who work in industries that are at risk for Corona? (for example: tour guides, hotel staff, airport employees)</td>
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
                $('.q1').text((data.question1 === '1') ? 'YES' : 'NO');
                $('.q2').text((data.question2 === '1') ? 'YES' : 'NO');
                $('.q3').text((data.question3 === '1') ? 'YES' : 'NO');
                $('.q4').text((data.question4 === '1') ? 'YES' : 'NO');
                $('.q5').text((data.question5 === '1') ? 'YES' : 'NO');
                $('.q6').text((data.question6 === '1') ? 'YES' : 'NO');
                $('.q7').text((data.question7 === '1') ? 'YES' : 'NO');
                $('.q8').text((data.question8 === '1') ? 'YES' : 'NO');
                $('.q9').text((data.question9 === '1') ? 'YES' : 'NO');
                $('.q10').text((data.question10 === '1') ? 'YES' : 'NO');
                $('.q11').text((data.question11 === '1') ? 'YES' : 'NO');
                $('.q12').text((data.question12 === '1') ? 'YES' : 'NO');
                $('.q13').text((data.question13 === '1') ? 'YES' : 'NO');
                $('.q14').text((data.question14 === '1') ? 'YES' : 'NO');
                $('.q15').text((data.question15 === '1') ? 'YES' : 'NO');
                $('.q16').text((data.question16 === '1') ? 'YES' : 'NO');
                $('.q17').text((data.question17 === '1') ? 'YES' : 'NO');
                $('.q18').text((data.question18 === '1') ? 'YES' : 'NO');
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