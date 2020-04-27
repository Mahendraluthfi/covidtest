<div class="container-fluid">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-box bg-blue"></i>
                    <div class="d-inline">
                        <h5>Employees</h5>
                        <span>Data Employees</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url('admin') ?>"><i class="ik ik-home"></i></a>
                        </li>                        
                        <li class="breadcrumb-item active" aria-current="page">Employees</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <!-- <div class="card-header">
                    <h3>Header Color</h3>
                </div> -->
                <div class="card-body">
                    
        <div class="container-fluid">
            <?php echo $this->session->flashdata('msg'); ?>
            <div class="dt-responsive">
            <table id="simpletable" class="table table-striped table-bordered nowrap">
                <thead>
                <tr>
                    <th width="1%">No</th>
                    <th>EPF</th>
                    <th>Name</th>
                    <th>Grade</th>
                    <th>Department</th>                                                        
                    <th>Address</th>                                                        
                </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($get as $data) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->epf ?></td>
                            <td><?php echo $data->name ?></td>
                            <td><?php echo $data->grade ?></td>
                            <td><?php echo $data->department ?></td>                            
                            <td><?php echo $data->alamat ?></td>                            
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
