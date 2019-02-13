<div id="page-info">
  <div class="s-section section-1">
      <div class="s-inner">
          <div class="banner-title">
              <p class="heading">So much FUN <br />here with you.</p>
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
      <div class="">
        <div class="s-section s-p-section">
          <div class="s-container">
            <div class="row">
              <div class="col text-info">
                <?php 
                   $training_cat = get_category_by_slug( 'training' );
                ?>
                <h3>
                  <img src="<?php bloginfo( 'template_directory' );?>/images/traning-img.png" alt="">
                </h3>
                <p>
                <?php echo $training_cat->category_description; ?>
                </p>
              </div>
              <?php
                successcareer_show_carousel($training_cat->slug, 4);
              ?>
              <div class="col img-info">
                <ul class="s-list">
                  <?php 
                    $dataId = 0;
                    $query = [
                      'category_name' => $training_cat->slug,
                      'post_status' => 'publish',
                      'order'=> 'ASC',
                      'post_type' => 'post',
                      'posts_per_page' => 4,
                    ];
                    $trainings = query_posts($query); 
                    if ( have_posts() ) : 
                      while ( have_posts() ) : the_post();
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
                  ?>
                  <li>
                    <div class="img s-vertical-img" data-toggle="modal" data-target="#sModal-<?php echo $training_cat->slug; ?>" data-id="<?php echo $dataId ?>">
                      <div class="s-thumbnail">
                        <img src="<?php echo $image[0]; ?>" alt="">
                      </div>
                      <div class="s-info">
                        <p><?php echo get_the_excerpt(); ?></p>
                      </div>
                    </div>
                  </li>
                  <?php
                        $dataId++;
                      endwhile;
                    endif;
                    wp_reset_query();
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div><!--end s-section-->
        <div class="s-section s-p-section even s-reward">
          <div class="s-container">
            <div class="row">
            <?php 
                $reward_cat = get_category_by_slug( 'rewards' );
                successcareer_show_carousel($reward_cat->slug, 3);
            ?>
              <div class="col order-sm-last text-info">
                <h3>
                  <img src="<?php bloginfo( 'template_directory' );?>/images/reward-img.png" alt="">
                </h3>
                <p>
                <?php echo $reward_cat->category_description; ?> 
                </p>
              </div>
              <div class="col order-sm-first img-info">
                <ul class="s-list s-list-type-3">
                  <li>
                    <div class="img">
                      <ul class="s-list">
                        <?php 
                          $dataId = 0;
                          $query = [
                            'category_name' => $reward_cat->slug,
                            'posts_per_page' => 1,
                            'post_status' => 'publish',
                            'order'=> 'ASC',
                            'post_type' => 'post',
                          ];
                          $reward_first = query_posts($query); 
                          $imageFirst = wp_get_attachment_image_src(get_post_thumbnail_id($reward_first[0]->ID), 'single-post-thumbnail');
                        ?>
                        <li>
                          <div class="img s-vertical-img" data-toggle="modal" data-target="#sModal-<?php echo $reward_cat->slug; ?>" data-id="<?php echo $dataId ?>">
                            <div class="s-thumbnail">
                              <img src="<?php echo $imageFirst[0]; ?>" alt="">
                            </div>
                            <div class="s-info">
                              <p><?php echo $reward_first[0]->post_excerpt;?></p>
                            </div>
                          </div>
                        </li>
                        <?php 
                          wp_reset_query(); 
                          $query = [
                            'category_name' => $reward_cat->slug,
                            'posts_per_page' => 1,
                            'post_status' => 'publish',
                            'order'=> 'ASC',
                            'post_type' => 'post',
                            'post__not_in'=> [$reward_first[0]->ID]
                          ];
                          $reward_second = query_posts($query); 
                          $imageSecond = wp_get_attachment_image_src(get_post_thumbnail_id($reward_second[0]->ID), 'single-post-thumbnail');
                          $dataId++;
                        ?>
                        <li>
                          <div class="img x2 s-vertical-img" data-toggle="modal" data-target="#sModal-<?php echo $reward_cat->slug; ?>" data-id="<?php echo $dataId ?>">
                            <div class="s-thumbnail">
                              <img src="<?php echo $imageSecond[0]; ?>" alt="">
                            </div>
                            <div class="s-info">
                              <p><?php echo $reward_second[0]->post_excerpt;?></p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <?php 
                    wp_reset_query(); 
                    $query = [
                      'category_name' => $reward_cat->slug,
                      'posts_per_page' => 1,
                      'post_status' => 'publish',
                      'order'=> 'ASC',
                      'post_type' => 'post',
                      'post__not_in'=> [$reward_first[0]->ID, $reward_second[0]->ID]
                    ];
                    $reward_third = query_posts($query); 
                    $imageThird = wp_get_attachment_image_src(get_post_thumbnail_id($reward_third[0]->ID), 'single-post-thumbnail');
                    $dataId++;
                  ?>
                  <li>
                    <div class="img x3 s-vertical-img" data-toggle="modal" data-target="#sModal-<?php echo $reward_cat->slug; ?>" data-id="<?php echo $dataId ?>">
                    <div class="s-thumbnail">
                        <img src="<?php echo $imageThird[0]; ?>" alt="">
                      </div>
                      <div class="s-info">
                        <p><?php echo $reward_third[0]->post_excerpt;?></p>
                      </div>
                    </div>
                  </li>
                  <?php 
                    wp_reset_query(); 
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div><!--end s-section-->
        <div class="s-section s-p-section">
          <div class="s-container">
          <div class="row">
            <?php 
              $event_cat = get_category_by_slug( 'events' );
              successcareer_show_carousel($event_cat->slug, 4);
            ?>
            <div class="col text-info">
              <h3>
                <img src="<?php bloginfo( 'template_directory' );?>/images/event-img.png" alt="">
              </h3>
              <p>
              <?php echo $event_cat->category_description; ?>
              </p>
            </div>
            <div class="col img-info">
              <ul class="s-list">
                <?php 
                  $dataId = 0;
                  $query = [
                    'category_name' => $event_cat->slug,
                    'post_status' => 'publish',
                    'order'=> 'ASC',
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                  ];
                  $events = query_posts($query); 
                  if ( have_posts() ) : 
                    while ( have_posts() ) : the_post();
                      $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
                ?>
                <li>
                  <div class="img s-vertical-img" data-toggle="modal" data-target="#sModal-<?php echo $event_cat->slug; ?>" data-id="<?php echo $dataId ?>">
                    <div class="s-thumbnail">
                      <img src="<?php echo $image[0] ?>" alt="">
                    </div>
                    <div class="s-info">
                        <p><?php echo get_the_excerpt();?></p>
                      </div>
                  </div>
                </li>
                <?php
                      $dataId++;
                    endwhile;
                  endif;
                  wp_reset_query();
                ?>
              </ul>
            </div>
          </div>
          </div>
        </div><!--end s-section-->
        <div class="s-section s-p-section even s-reward">
          <div class="s-container">
            <div class="row">
              <?php 
                $sports_cat = get_category_by_slug( 'sports' );
                successcareer_show_carousel($sports_cat->slug, 3);
              ?>
              <div class="col order-sm-last text-info">
                <h3>
                  <img src="<?php bloginfo( 'template_directory' );?>/images/sport-img.png" alt="">
                </h3>
                <p>
                <?php echo $sports_cat->category_description; ?>
                </p>
                <p class="mt-5">
                  <img class="img-fluid" src="<?php bloginfo( 'template_directory' );?>/images/many-more.png" alt="">
                </p>
              </div>
              <div class="col order-sm-first img-info">
                <ul class="s-list s-list-type-2">
                  <?php 
                    $dataId = 0;
                    $query = [
                      'category_name' => $sports_cat->slug,
                      'posts_per_page' => 1,
                      'post_status' => 'publish',
                      'order'=> 'ASC',
                      'post_type' => 'post',
                    ];
                    $sport_first = query_posts($query); 
                    $imageFirst = wp_get_attachment_image_src(get_post_thumbnail_id($sport_first[0]->ID), 'single-post-thumbnail');
                  ?>
                  <li>
                    <div class="img x3 s-vertical-img" data-toggle="modal" data-target="#sModal-<?php echo $sports_cat->slug; ?>" data-id="<?php echo $dataId ?>">
                      <div class="s-thumbnail">
                        <img src="<?php echo $imageFirst[0]; ?>" alt="">
                      </div>
                      <div class="s-info">
                        <p><?php echo $sport_first[0]->post_excerpt;?></p>
                      </div>
                    </div>
                  </li>
                  <?php 
                    wp_reset_query();
                    $query = [
                      'category_name' => $sports_cat->slug,
                      'posts_per_page' => 2,
                      'post_status' => 'publish',
                      'order'=> 'ASC',
                      'post_type' => 'post',
                      'post__not_in'=> [$sport_first[0]->ID]
                    ];
                    $sports = query_posts($query); 
                    $dataId++;
                    if ( have_posts() ) : 
                      while ( have_posts() ) : the_post();
                        $images = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
                  ?>
                  <li>
                    <div class="img s-horizontal-img" data-toggle="modal" data-target="#sModal-<?php echo $sports_cat->slug; ?>" data-id="<?php echo $dataId ?>">
                    <div class="s-thumbnail">
                        <img src="<?php echo $images[0]; ?>" alt="">
                      </div>
                      <div class="s-info">
                        <p><?php echo get_the_excerpt();?></p>
                      </div>
                    </div>
                  </li>
                  <?php
                        $dataId++;
                      endwhile;
                    endif;
                    wp_reset_query();
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div><!--end s-section-->
      </div>
    </div><!--end listJobs-->
  </div><!--end section-2-->
</div>
  
