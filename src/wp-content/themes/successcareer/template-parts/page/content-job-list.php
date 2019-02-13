<div id="page-info">
  <div class="s-section section-1">
      <div class="s-inner">
          <div class="banner-title">
              <p class="heading">what's <br />Your PASSION?</p>
              <p>join with us to find your <span>PASSION</span></p>
            </div>
            <!--end title-->
      </div>
  </div><!--end section-1-->
  <div class="s-section section-2 clearfix">
    <div class="listJobs">
      <div class="listJobsInner">
        <div class="s-container">
          <div class="s-row">
            <?php
              $query = [
                'category_name' => 'passion',
                'post_status' => 'publish',
                'order'=> 'ASC',
                'post_type' => 'jobs',
              ];
              $jobs = query_posts($query); 
              if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
                $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
            ?>
              <div class="s-col">
                <div class="s-box">
                  <div class="s-img-icon">
                    <div class="img">
                      <a href="<?php echo get_permalink(get_the_ID()); ?>">
                        <img class="img-fluid" src="<?php echo $image[0] ?>" alt="">
                      </a>
                  </div>
                  </div>
                  <div class="s-c-icon"></div>
                  <div class="s-title">
                    <h2><a href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></h2>
                  </div>
                </div><!--end s-box-->
              </div><!--end s-col-->
            <?php
                endwhile;
              endif;
              wp_reset_query();
            ?>
          </div><!--end s-row-->
        </div><!--end s-container-->
        <div class="title">
        <div class="img text-center">
          <img class="img-fluid" src="<?php bloginfo( 'template_directory' );?>/images/text-joinus.png">
        </div>
      </div><!--end title-->
      </div>
    </div><!--end listJobs-->
  </div><!--end section-2-->
  </div>
  
