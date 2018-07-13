<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Home</li>
            </ol>
        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="row">
        <div class="col-sm-3 col-md-4">
        </div>
        <div class="col-sm-3 col-md-4">
            <center><p class="page-title-description mr-0 d-none d-md-inline-block" style="font-size: 40px">PILIH JENIS PAKET</p></center>
            <?php if ($this->session->flashdata('kosong')):?>
            <div class="col-md-12">
                <div class="alert-group">
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Data yang anda pilih kosong harap isi terlebih dahulu
                    </div>
                </div>
            </div>
        <?php endif ?>
        </div>
    </div>
<!-- Blog Posts -->
    <div class="col-md-12 widget-holder">
                        <div class="widget-bg-transparent">
                            <div class="widget-body">
                                <div class="row">
                                   <div class="col-md-2">
                                   </div>
                                    <div class="col-md-4 mr-b-30 d-flex">
                                        <div class="blog-post blog-post-card text-center">
                                            <figure>
                                                <a href="">
                                                    <!-- <img src="<?php echo base_url("assets/demo/cards/jembatan1.jpg") ?>" alt="Blog Post 1"> -->
                                                </a>
                                            </figure>
                                            <header>
                                                <h4 class="h3 fw-300 m-1 blog-post-title"><a href="">Pilih Kontraktual</a></h4>
                                            </header>
                                            <footer class="mr-t-30"><a href="<?php echo site_url('ppk1/pilihpaket/'.$id_tahun.'/kontraktual') ?>" class="btn btn-outline-primary btn-rounded">Klik!</a>
                                            </footer>
                                        </div>
                                        <!-- /.blog-post -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <!-- /.col-md-4 -->
                                    <div class="col-md-4 mr-b-30 d-flex">
                                        <div class="blog-post blog-post-card text-center">
                                            <figure>
                                                <a href="">
                                                    <img src="<?php echo base_url("assets/demo/cards/toba.jpg") ?>" alt="">
                                                </a>
                                            </figure>
                                            <header>
                                                <h4 class="h3 fw-300 m-1 blog-post-title"><a href="ui-cards.html#">Pilih Suakelola</a></h4>
                                            </header>
                                            <footer class="mr-t-30"><a href="<?php echo site_url('ppk1/pilihpaket/'.$id_tahun.'/suakelola') ?>" class="btn btn-outline-primary btn-rounded">Klik!</a>
                                            </footer>
                                        </div>
                                        <!-- /.blog-post -->
                                    </div>
                                    <div class="col-md-2">
                                   </div>
                                    <!-- /.col-md-4 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg-transparent -->
                    </div>
                    <!-- /.widget-holder -->
    </main>