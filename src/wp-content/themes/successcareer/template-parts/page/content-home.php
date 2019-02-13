<div id="page-info">
  <div class="s-inner">
    <div class="banner-title">
      <p class="heading">we can't wait <br />to meet you.</p>
      <p>the rewarding career you're looking for is at <br /><span>success software services.</span></p>
    </div>
    <!--end title-->
    <form class="form-inline">
      <div class="searchJobs">
        <div class="row">
          <div class="col-md-11 col-sm-11 col-12">
            <select class="custom-select d-block w-100 s-crounded-ellip disbleOutline jobs" id="jobs" required>
              <option value="" selected>Choose your job</option>
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
              ?>
                  <option value="<?php echo get_permalink(get_the_ID()); ?>"><?php echo the_title(); ?></option>
              <?php
                  endwhile;
                endif;
              ?>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <button class="btn btn-outline-success col-md-1 col-sm-1 col-12 s-crounded-circle btnGo" type="button">Go</button>
        </div>
      </div>
    </form>
  </div>
</div><!-- end page-info -->
<div class="benefits">
  <div class="s-list py-5">
    <div class="container">
      <div class="row">
        <div class="benefits-header">
          <h3>Our Benefits</h3>
        </div>
      </div>
      <div class="row">
        <?php
          $limit = 6;
          $query = [
            'category_name' => 'benerfits',
            'post_status' => 'publish',
            'posts_per_page' => $limit,
            'order'=> 'ASC',
            'post_type' => 'post',
          ];
          $benefits = query_posts($query); 
    
          if ( have_posts() ) : 
            $benefits_others = $limit - count($benefits);
            while ( have_posts() ) : the_post();
              $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
        ?>
              <div class="col-lg-4 col-sm-6 item">
                <img class="img-fluid" src="<?php echo $image[0]; ?>" alt="Generic placeholder image" width="100" height="100">
                <h3><?php echo the_title(); ?></h3>
              </div><!-- /.col-lg-4 -->
        <?php 
            endwhile;
            while($benefits_others > 0) :
        ?>
              <div class="col-lg-4 col-sm-6 item">
                <img class="img-fluid" src="<?php bloginfo( 'template_directory' );?>/images/benefit-6.png" alt="Generic placeholder image" width="100" height="100">
                <h3>Others</h3>
              </div><!-- /.col-lg-4 -->
        <?php
              $benefits_others--;
            endwhile;
          endif; 
          wp_reset_query(); 
        ?>
      </div>
    </div>
  </div>
</div>
<!--end benefits-->
<div class="ourCores">
  <div class="s-list py-5">
    <div class="container">
      <div class="row">
        <div class="benefits-header sectionHeader">
          <h2>Our core value</h2>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <?php
          $limit = 5;
          $query = [
            'category_name' => 'core-value',
            'post_status' => 'publish',
            'posts_per_page' => $limit,
            'order'=> 'ASC',
            'post_type' => 'post',
          ];
          query_posts($query); 
    
          if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
              $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
        ?>
              <div class="col-lg-2 col-sm-4 item">
                <h3><?php echo the_title(); ?></h3>
                <p><?php echo the_excerpt(); ?></p>
              </div><!-- /.col-lg-4 -->
       
        <?php
            endwhile;
          endif; 
          wp_reset_query(); 
        ?>
      </div>
    </div>
  </div>
</div>
<!--end our core value-->
<div class="ourMemories clearfix">
  <div class="s-list py-5">
    <div class="s-inner">
      <div class="row">
        <div class="title sectionHeader">
          <h2>our memory</h2>
        </div>
      </div>
      <div class="ourListMemories">
        <div class="grid-memories">
          <div class="box-item-row">
            <?php
              $query = [
                'category_name' => 'memory',
                'posts_per_page' => 1,
                'post_status' => 'publish',
                'order'=> 'ASC',
                'post_type' => 'post',
              ];
              $dataId = 0;
              $memory_first = query_posts($query); 
              $imageFirst = wp_get_attachment_image_src(get_post_thumbnail_id($memory_first[0]->ID), 'single-post-thumbnail');
            ?>
            <div class="g-item">
              <div class="c-item x2">
                <div class="img s-vertical-img" data-toggle="modal" data-target="#sModal-memory" data-id="<?php echo $dataId ?>">
                  <a href="javascript:void(0);">
                    <img class="img-fluid w-100" src="<?php echo $imageFirst[0] ?>">
                  </a>
                  <div class="s-info">
                    <p><?php echo $memory_first[0]->post_excerpt; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php
              $dataId++;
              wp_reset_query(); 
            ?>
            <div class="g-item box">
              <?php
                $query = [
                  'category_name' => 'memory',
                  'posts_per_page' => 4,
                  'post_status' => 'publish',
                  'order'=> 'ASC',
                  'post_type' => 'post',
                  'post__not_in'=> [$memory_first[0]->ID]
                ];
                $memorys = query_posts($query);
                if ( have_posts() ) : 
                  while ( have_posts() ) : the_post();
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
              ?>
                  <div class="c-item">
                    <div class="img s-vertical-img" data-toggle="modal" data-target="#sModal-memory" data-id="<?php echo $dataId ?>">
                      <a href="javascript:void(0);">
                        <img class="img-fluid w-100" src="<?php echo $image[0] ?>">
                      </a>
                      <div class="s-info">
                        <p><?php echo the_excerpt(); ?></p>
                      </div>
                    </div>
                  </div>
              <?php
                    $dataId++;
                  endwhile;
                endif; 
                wp_reset_query(); 
              ?>
            </div>
          </div>
        </div>
      </div><!--end list Memories-->
    </div>
  </div>
  <div class="s-shape down">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2470 99" style="vertical-align: bottom;">
      <path d="M0 100 L0 0 L2480 100 Z" style="fill:white;"></path>
    </svg>
  </div>
</div>
<!--end our core value-->
<!-- Button trigger modal -->
<?php
successcareer_show_carousel('memory', 5);
?>