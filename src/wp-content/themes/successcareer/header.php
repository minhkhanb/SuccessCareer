<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- <title>Success Career</title> -->
    <link rel='shortcut icon' type='image/x-icon' href='<?php bloginfo( 'template_directory' );?>/images/favicon.ico' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="<?php bloginfo( 'template_directory' );?>/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' );?>/css/responsive.css" rel="stylesheet">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    

    <?php wp_head();?>
  </head>
  <body>
    <div id="page-wrap" class="<?php echo get_queried_object()->post_name; ?>">
      <div class="page-inner">
        <div id="header">
          <div class="container s-inner">
            <div class="row">
              <div class="headerInner row">
                <div class="col-2 pr-0 pt-3 d-lg-none">
                  <p class="menu-toggler">
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                  </p>
                </div>
                <div class="col-8 col-md-4 text-center text-md-left pt-3">
                  <h1 id="logo"><?php successcareer_header(); ?></h1>
                </div>
                <div class="col-2 d-lg-none">&nbsp;</div>
                <div class="col-md-8 d-md-block"><?php successcareer_menu('primary'); ?></div>
                <a href="#contact_form_pop" class="apply-nav fancybox" style="display:none">Apply Now</a>
                <div style="display:none" class="fancybox-hidden">
                    <div id="contact_form_pop" class="contact_form_pop">
                        <?php echo do_shortcode('[contact-form-7 id="230" title="Apply Jobs"]'); ?>
                    </div>
                </div>
              </div>
            </div>
            <!--end top-bar -->
          </div>
        </div>
        <!--end header -->