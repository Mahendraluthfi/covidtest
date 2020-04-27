<div class="container-fluid">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-box bg-blue"></i>
                    <div class="d-inline">
                        <h5>Records</h5>
                        <span>Data Record</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url('admin') ?>"><i class="ik ik-home"></i></a>
                        </li>                        
                        <li class="breadcrumb-item active" aria-current="page">Records</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-block" style="padding: 10px;">
                    <div class="float-left">
                        <h3><?php echo $labeldate ?><a href="<?php echo base_url('admin/report/report/'.$date) ?>" class="btn btn-success" style="margin-left: 10px;"><i class="ik ik-download"></i> Download Excel</a></h3>                    
                    </div>
                    <div class="float-right">
                        <?php echo form_open('',array('class' => 'form-inline')); ?>
                <!-- <div class="" id="datepicker">                                     -->
                        <input type="date" class="form-control mb-2 mr-sm-2" name="date" required="" />
                    <!-- <input type="date" class="form-control mb-2 mr-sm-2" name="date"> -->
                        <button type="submit" class="btn btn-primary mb-2"><i class="ik ik-search"></i>Cari</button>
                <!-- </div>                 -->
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="card-body">
                    
        <div class="container-fluid">
            <?php echo $this->session->flashdata('msg'); ?>
            <div class="dt-responsive">
            <table id="simpletable" class="table table-bordered nowrap">
                <thead>
                <tr>
                    <th width="1%">No</th>
                    <th>Date</th>
                    <th>EPF</th>
                    <th>Name</th>
                    <th>Result</th>                                                        
                    <th>#</th>                                                        
                </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($get as $data) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->date ?></td>
                            <td><?php echo $data->epf ?></td>
                            <td><?php echo $data->name ?></td>
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
        </div>
        </div>
    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-id">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Record</h4>  
                        
                </div>
                <div class="modal-body">
                    <h6 class="epf"></h6>                    
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
<script>
    function modalview(id) {    

         $.ajax({
            url : "<?php echo base_url('admin/report/get_answer/')?>" + id,
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