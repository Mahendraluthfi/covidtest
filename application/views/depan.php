<div class="container-fluid">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-box bg-blue"></i>
                    <div class="d-inline">
                        <h5>Dashboard</h5>
                        <span>Summary</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url('admin') ?>"><i class="ik ik-home"></i></a>
                        </li>                        
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-5 col-md-5">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6">
                    <div class="widget bg-secondary">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                    <h6>Employees</h6>
                                    <h2><?php echo $emp ?></h2>
                                </div>
                                <div class="icon">
                                    <i class="ik ik-users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="widget bg-primary">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                    <h6>Today's Submit</h6>
                                    <h2><?php echo $today ?></h2>
                                </div>
                                <div class="icon">
                                    <i class="ik ik-file"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <div class="col-lg-7 col-md-7">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4">
                    <div class="widget bg-success">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                    <h6>Green Zone</h6>
                                    <h2><?php echo $green ?></h2>
                                </div>
                                <div class="icon">
                                    <i class="ik ik-check-square"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="widget bg-warning">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                    <h6>Yellow Zone</h6>
                                    <h2><?php echo $yellow ?></h2>
                                </div>
                                <div class="icon">
                                    <i class="ik ik-shield"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="widget bg-danger">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                    <h6>Red Zone</h6>
                                    <h2><?php echo $red ?></h2>
                                </div>
                                <div class="icon">
                                    <i class="ik ik-minus-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>            
        </div>                
    </div>
</div>
