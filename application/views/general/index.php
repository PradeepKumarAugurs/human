<div class="banner-outer">
    <div class="banner-slider">
        <?php if(!empty($get_slider_image[0]['image_1'])) { ?>
        <div class="banner-slides slide1" style="background: url(<?= base_url()?>upload/slider_image/<?= (!empty($get_slider_image[0]['image_1'])) ? $get_slider_image[0]['image_1'] : '' ?>) no-repeat center top / cover;">
            <div class="container">
                <div class="content animated fadeInRight">
                    <div class="fl-right">
                        <h1 class="animated fadeInRight"><?= (!empty($get_slider_image[0]['slider_quote1']) ? $get_slider_image[0]['slider_quote1'] : '') ?></h1>
                        <p class="animated fadeInRight"><?= (!empty($get_slider_image[0]['slider_quote1_by']) ? $get_slider_image[0]['slider_quote1_by'] : '') ?></p>
                        <!-- <a href="about.html" class="btn animated fadeInRight">Know More <span class="icon-more-icon"></span></a>  -->
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($get_slider_image[0]['image_2'])) { ?>
        <div class="banner-slides slide2" style="background: url(<?= base_url()?>upload/slider_image/<?= (!empty($get_slider_image[0]['image_2'])) ? $get_slider_image[0]['image_2'] : '' ?>) no-repeat center top / cover;">
            <div class="container">
                <div class="content">
                    <h1 class="animated fadeInUp"><?= (!empty($get_slider_image[0]['slider_quote2']) ? $get_slider_image[0]['slider_quote2'] : '') ?></h1>
                    <p class="animated fadeInUp"><?= (!empty($get_slider_image[0]['slider_quote2_by']) ? $get_slider_image[0]['slider_quote2_by'] : '') ?></p>
                    <!-- <a href="about.html" class="btn animated fadeInUp">Know More <span class="icon-more-icon"></span></a> <a href="gallery.html" class="btn white animated fadeInUp hidden-xs">Take a Tour <span class="icon-more-icon"></span></a>  -->
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($get_slider_image[0]['image_3'])) { ?>
        <div class="banner-slides slide3" style="background: url(<?= base_url()?>upload/slider_image/<?= (!empty($get_slider_image[0]['image_3'])) ? $get_slider_image[0]['image_3'] : '' ?>) no-repeat center top / cover;">
            <div class="container">
                <div class="content animated fadeInLeft">
                    <h1 class="animated fadeInLeft"><?= (!empty($get_slider_image[0]['slider_quote3']) ? $get_slider_image[0]['slider_quote3'] : '') ?></h1>
                    <p class="animated fadeInLeft"><?= (!empty($get_slider_image[0]['slider_quote3_by']) ? $get_slider_image[0]['slider_quote3_by'] : '') ?></p>
                    <!-- <a href="about.html" class="btn animated fadeInLeft">Know More <span class="icon-more-icon"></span></a>  -->
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($get_slider_image[0]['image_4'])) { ?>
        <div class="banner-slides slide3" style="background: url(<?= base_url()?>upload/slider_image/<?= (!empty($get_slider_image[0]['image_4'])) ? $get_slider_image[0]['image_4'] : '' ?>) no-repeat center top / cover;">
            <div class="container">
                <div class="content">
                    <h1 class="animated fadeInUp"><?= (!empty($get_slider_image[0]['slider_quote4']) ? $get_slider_image[0]['slider_quote4'] : '') ?></h1>
                    <p class="animated fadeInUp"><?= (!empty($get_slider_image[0]['slider_quote4_by']) ? $get_slider_image[0]['slider_quote4_by'] : '') ?></p>
                    <!-- <a href="about.html" class="btn animated fadeInUp">Know More <span class="icon-more-icon"></span></a> <a href="gallery.html" class="btn white animated fadeInUp hidden-xs">Take a Tour <span class="icon-more-icon"></span></a>  -->
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<section class="padding-lg">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                 
                <!-- <img src="<?= base_url()?>frontend/images/pic_hrpws/maa.jpg"> -->
                   <img alt="" src="<?= base_url()?>frontend/images/pic_hrpws/maa.jpg" height="230px" width="100%" 
                   style="box-shadow: 0px 0px 1px 2px rgb(236, 90, 21);">
                
            </div>
        </div>
    </div>
</section>
<section class="how-study padding-lg">
    <div class="container">
        <ul class="row">
            <li class="col-sm-4">
                <h5 class="text-danger padding-lg">Indian Human Right Association</h5>
                <p>Human rights in India is an issue complicated by the country's large size, its tremendous diversity, its status as a developing country and a sovereign, secular, democratic republic. The Constitution of India provides for Fundamental rights, which include freedom of religion. Clauses also provide for Freedom of Speech, as well as separation of executive and judiciary and freedom of movement within the country and abroad.</p>
            </li>
            <li class="col-sm-4 text-center">
                <img src="<?= base_url()?>frontend/images/pic_hrpws/Logo_1.jpg" class="img-responsive" alt=""  style="height:360px; width:100%">
                <span><b>Central Govt.Regd.No.-S-1416-014</b></span>
                
            </li>
            <li class="col-sm-4 text-center">
                <img src="<?= base_url()?>frontend/images/DSC_0002.JPG" class="img-responsive" alt=""  style="height:360px; width:100%">
                <span><b>Mr.B.S.YADAV FOUNDER<b></span>
            </li>
        </ul>
    </div>
</section>

