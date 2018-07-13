 <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Daftar Paket <?php echo ucwords($jenis[0]['jenis']) ?></h6>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a>
                </li>
            </ol>
        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="widget-list">
        <div class="row">
            <div class="widget-holder col-md-12">
                <div class="widget-bg">
                    <div class="widget-body">
                        <div class="row">
                            <div class="col-md-10">
                                <h5 class="box-title">Pilih Paket</h5>
                            </div>
                        </div>
                        <div class="row">
                                  
                        </div>
                        <div class="accordion" id="accordion-3" role="tablist" aria-multiselectable="true">
                            <?php foreach ($jenis as $u) {?>
                            <div class="card card-outline-success">
                                <div class="card-header" role="tab" id="heading4">
                                    <h6 class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-3" href="#<?php echo $u['id_paket'] ?>" aria-expanded="false" aria-controls="<?php echo $u['id_paket'] ?>"><?php echo $u['nama_paket'] ?></a></h6>
                                </div>
                                <div id="<?php echo $u['id_paket'] ?>" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <a href=""><li class="list-group-item">Dokumen Utama</li></a>
                                            <a href=""><li class="list-group-item">Dokumen Pendukung</li></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                                <!-- /.panel-group -->
                </div>
            </div>
                    <!-- /.widget-body -->
        </div>
                <!-- /.widget-bg -->
    </div>
            <!-- /.widget-holder -->
</div>
    <!-- /.widget-list -->
</main>