<?php
$jobs_detail = get_fields(get_the_ID());
if(!empty($jobs_detail)):
    $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
    $level_jobs = [
        'intern' => 'Intern',
        'junior' => 'Junior',
        'senior' => 'Senior',
        'manager' => 'Manager',
    ];
?>
<div id="page-info">
        <div class="section-1">
            <div class="s-inner">
                <div class="banner-title">
                  <p class="heading">what's <br />Your PASSION?</p>
                  <p>join with us to find your <span>PASSION</span></p>
                </div>
            </div>
        </div><!--end section-1-->
        <div class="section-2 clearfix">
          <div class="listJobsDescription s-container">
            <ul class="list-inline clearfix tabs">
            <?php
                generate_tab_jobs($jobs_detail, $level_jobs);
            ?>  
            </ul>
            <div class="contentTabs">
              <ul class="tabContent">
                <?php
                    $loopItem = 0;
                    foreach($level_jobs as $key => $level):
                        $class = '';
                        if(intval($jobs_detail["quantity_$key"]) !== 0):
                            $class = ($loopItem === 0) ? 'active' : '';
                            $title = "$key ".get_the_title();
                ?>
                    <li class="<?php echo $class; ?>" data-tab="<?php echo $level; ?>" data-role="<?php echo the_title(); ?>">
                        <div class="s-main-box s-container">
                            <div class="s-inner-box">
                                <div class="s-img-thumb">
                                    <img src="<?php echo $image[0]; ?>" alt="">
                                </div>
                                <div class="s-content">
                                    <h3><?php echo $title; ?></h3>
                                    <ul class="infoJob">
                                    <li>
                                        <div>
                                        <strong>quantity:</strong>
                                        <span><?php echo $jobs_detail["quantity_$key"];?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                        <strong>location:</strong>
                                        <span><?php echo $jobs_detail["location_$key"];?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                        <strong>experience:</strong>
                                        <span><?php echo $jobs_detail["experience_$key"];?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                        <strong>salary:</strong>
                                        <span><?php echo $jobs_detail["salary_$key"];?></span>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                                <div class="s-content-button">
                                    <a href="#contact_form_pop" class="s-btn btnApplyNow fancybox apply">apply now</a>
                                </div>
                            </div>
                        </div><!--end s-main-box-->
                        <div class="s-content-box s-container">
                            <ul class="list-inline">
                            <li>
                                <div class="s-content-icon"></div>
                                <div class="s-content-info">
                                <h3>challenges</h3>
                                <p>
                                <?php echo $jobs_detail["challenges_$key"];?>
                                </p>
                                </div>
                            </li>
                            <li>
                                <div class="s-content-icon"></div>
                                <div class="s-content-info">
                                <h3>what you'll do</h3>
                                <?php echo $jobs_detail["what_you_will_do_$key"];?>
                                </div>
                            </li>
                            <li>
                                <div class="s-content-icon"></div>
                                <div class="s-content-info">
                                <h3>what you need to succeed</h3>
                                <?php echo $jobs_detail["what_you_need_to_succeed_$key"];?>
                                </div>
                            </li>
                            <li>
                                <div class="s-content-icon"></div>
                                <div class="s-content-info">
                                <h3>benefits</h3>
                                <?php echo $jobs_detail["benefits_$key"];?>
                                </div>
                            </li>
                            </ul>
                            <a href="#contact_form_pop" class="btnJoinUsNow fancybox apply"></a>
                        </div><!--end s-content-box-->
                    </li>
                <?php
                        $loopItem++;
                        endif;
                    endforeach;
                ?>
              </ul>
            </div><!--end contentTabs-->
          </div><!--end listJobs-->
        </div><!--end section-2-->
      </div><!-- end page-info -->
<script>
    // script to active menu
    $(function() {
        var $jobMenu = $('.menu-item-jobs');
        if ($jobMenu) {
            $jobMenu.addClass('menu-item-active');
        }
    });
</script>
<?php endif;?>