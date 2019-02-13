<div id="page-info">
  <div class="s-section section-1">
      <div class="s-inner">
          <div class="banner-title">
              <p class="heading">follow us, <br />with GREAT THINGS.</p>
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
  </div><!--end section-1-->
  <div class="s-section section-2 clearfix">
    <div class="listNews">
      <div class="s-container">
        <ul class="contentNews">
          <?php
            $query = [
              'category_name' => 'news',
              'post_status' => 'publish',
              'order'=> 'ASC',
              'post_type' => 'post',
              'posts_per_page' => 4,
            ];
            $news = query_posts($query); 
            if ( have_posts() ) : 
              while ( have_posts() ) : the_post();
              $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
          ?>
          <li>
            <div class="s-item">
              <div class="img">
                <div class="s-thumbnail">
                  <a href="#">
                    <img src="<?php echo $image[0] ?>" alt="">
                  </a>
                  <div class="mask"></div>
                </div>
              </div>
              <div class="content-news">
                <h3>
                  <a href="#">
                  <?php echo the_title(); ?>
                  </a>
                </h3>
                <p>
                <?php echo the_content(); ?>
                </p>
              </div><!--end content-news-->
            </div>
          </li>
          <?php
              endwhile;
            endif;
          ?>
        </ul>
        <div class="s-pagination">
          <?php
            echo successcareer_pagination($wp_query);
            wp_reset_query();
          ?>
        </div>
      </div>
    </div><!--end listJobs-->
  </div><!--end section-2-->
</div>
  
