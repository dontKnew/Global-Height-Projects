<?php $this->load->view('common/head');
 ?>

<body>

    <div class="page-container list-menu-view">

        <!--Leftbar Start Here -->

        <?php $this->load->view('common/sidebar') ?>



        <div class="page-content">

            <!--Topbar Start Here -->

            <?php $this->load->view('common/header') ?>

            <div class="main-container">

                <div class="container-fluid">

                    <div class="page-breadcrumb">

                        <div class="row">

                            <div class="col-md-7">

                                <div class="page-breadcrumb-wrap">

                                    <div class="page-breadcrumb-info">



                                        <ul class="list-page-breadcrumb">

                                            <li><a href="#">Home</a>

                                            </li>

                                            <li class="active-page"> Testinomial Customization</li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-5">

                            </div>

                        </div>

                    </div>

                    <?php

                     if($this->session->flashdata('msg')!=''){

                         echo '<div class="alert alert-success alert-dismissible">

                               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                               <strong>'.$this->session->flashdata('msg').'</strong>

                             </div>';

                     }
                    unset($_SESSION['msg']);

                     if($this->session->flashdata('err')!=''){

                         echo '<div class="alert alert-danger alert-dismissible">

                               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                               <strong>'.$this->session->flashdata('err').'</strong>

                             </div>';

                     }
                    unset($_SESSION['err']);


                    ?>

                    <div class="row">

                        <div class="col-md-12 ">

                            <div class="box-widget widget-module">

                                <div class="widget-head clearfix">
                                    <span class="h-icon"><i class="fa fa-bars"></i></span>
                                    <h4>Testinomial Customize</h4>
                                </div>

                                <div class="widget-container">

                                    <div class=" widget-block">


                                        <div>

                                            <form action="<?php echo base_url("admin/testinomial/customize"); ?>" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="domain" value="<?= strtolower($this->session->sessionDomain);?>" >
                                                <label for="">
                                                    <h3> Header - </h3>
                                                </label>
                                                Testimonials
                                                <div class="form-group">
                                                    <label for="">Webpage title</label>
                                                    <input type="text" class="form-control" name="webpage_title" value="<?= $data[0]->webpage_title; ?>"  placeholder="webpage title" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Testimonials Photo</label>
                                                    <input type="file" class="form-control" name="testinomial_photo" >
                                                    <img src="<?= base_url().'uploads/testinomial/'.$data[0]->testinomial_photo; ?>" alt="testinomial-photo" class="img-rounded " width="150" height="auto">
                                                </div>
                                                <div class="form-group">
                                                    <label for=""> Photo Text </label>
                                                    <input type="text" name="photo_text" value="<?= $data[0]->photo_text; ?>" class="form-control"  placeholder="tile of testimonials">
                                                </div>
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <label for=""> Directory Link </label>
                                                        <input type="text" name="directory_link_home" value="<?= $data[0]->directory_link_home; ?>" class="form-control"  placeholder="menu title" required>
                                                        <input type="text" name="directory_link_testimonials" value="<?= $data[0]->directory_link_testimonials; ?>" class="form-control"  placeholder="menu title">
                                                    </div>
                                                </div>
                                                <label for="">
                                                    <h3> Center - </h3>
                                                </label>
                                                <div class="form-group">
                                                    <label for="">description title </label>
                                                    <input type="text" class="form-control" name="web_description_title" value="<?= $data[0]->web_description_title; ?>"  placeholder="web description title" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">description title comment </label>
                                                    <input type="text" class="form-control" name="web_description_title_comment" value="<?= $data[0]->web_description_title_comment; ?>"  placeholder="web description title" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for=""> Website description </label>
                                                    <textarea class="form-control full-editor" name="web_description_testimonials" value="<?= $data[0]->web_description_testimonials; ?>" placeholder="testimonials description" rows="5" required><?= $data[0]->web_description_testimonials; ?></textarea>

                                                </div>
                                                <button type="submit" class="btn btn-success">Save Settings</button>
                                            </form>
                                        </div>


                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php $this->load->view('common/foot'); ?>

                </div>

            </div>

            <!--  MODEL -->
            <?php //$this->load->view('admin/inlcude/add-customer-review'); ?>
            <!-- END  MODEL -->

            <?php $this->load->view('common/footer') ?>
