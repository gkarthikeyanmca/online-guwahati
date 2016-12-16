<?php get_header(); ?>
<?php echo do_shortcode('[crellyslider alias="home"]'); ?>
<?php
// check if the flexible content field has rows of data
if( have_rows('home_layout') ):
     // loop through the rows of data
     while ( have_rows('home_layout') ) : the_row();
        if( get_row_layout() == 'single_content' ):
          ?>
          <div class="container">
            <div class="row section-wrapper">
              <div class="col-lg-12">
                <h2 class="section-title-center"><strong><?php the_sub_field('single_content_heading'); ?></strong></h2>
                <hr class="title-underline" />
                <div class="section-content">
                  <?php the_sub_field('single_content_text'); ?>
                </div>
              </div>
            </div>
          </div>
          <?php
        elseif( get_row_layout() == 'tabs_content' ): 
          ?>
          <div class="container">
            <div class="row section-wrapper">
              <div class="col-lg-12 hidden-sm hidden-xs">
                <h2 class="section-title-center"><strong><?php the_sub_field('tabs_content_heading'); ?></strong></h2>
                <hr class="title-underline" />
                <div class="section-content">
                  <center>
                    <?php the_sub_field('tabs_content_text'); ?>
                  </center>
                  <div class="tabs-wrapper">                    
                    <?php
                      if(have_rows('tabs')):
                        $count=0;
                        ?>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <?php
                            while(have_rows('tabs')): the_row();
                              $count++;
                              ?>
                              <li role="presentation" class="<?php if($count==1){ echo 'active'; } ?>"><a href="#tab<?php echo $count ?>" aria-controls="tab<?php echo $count ?>" role="tab" data-toggle="tab"><?php the_sub_field('tab_heading'); ?></a></li>
                              <?php
                            endwhile;
                          ?>
                        </ul>
                        <?php
                      endif;
                    ?>
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <?php
                        if(have_rows('tabs')):
                          $count=0;
                          while(have_rows('tabs')): the_row();
                            $count++;
                            ?>
                            <div role="tabpanel" class="tab-pane <?php if($count==1){ echo 'active'; } ?>" id="tab<?php echo $count ?>">
                              <div class="row">
                                <div class="col-sm-4 col-xs-12">
                                  <?php
                                    $img_id=get_sub_field('tab_image');
                                    $img=wp_get_attachment_image_src($img_id,'home-tab-image');
                                  ?>
                                  <img src="<?php echo $img[0]; ?>" />
                                </div>
                                <div class="col-sm-8 col-xs-12">
                                  <h3><?php the_sub_field('tab_content_heading'); ?></h3>
                                  <p><?php the_sub_field('tab_content'); ?></p>
                                  <div class="clearfix"></div>
                                  <div class="margin-20">
                                    <a href="<?php the_sub_field('read_more_link'); ?>" class="blue-button">Read More</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php
                          endwhile;
                        endif;
                      ?>                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 hidden-lg hidden-md">
                <h2 class="section-title-center"><strong><?php the_sub_field('tabs_content_heading'); ?></strong></h2>
                <hr class="title-underline" />
                <div class="section-content">
                  <center>
                    <?php the_sub_field('tabs_content_text'); ?>
                  </center>

                  <!-- Tab panes -->
                  <?php
                    if(have_rows('tabs')):
                      $count=0;
                      while(have_rows('tabs')): the_row();
                        $count++;
                        ?>
                        <div class="row service-item">
                          <div class="col-lg-12">
                            <h5><?php the_sub_field('tab_content_heading'); ?></h5>
                            <p>
                              <?php
                                $img_id=get_sub_field('tab_image');
                                $img=wp_get_attachment_image_src($img_id,'home-tab-image');
                              ?>
                              <img src="<?php echo $img[0]; ?>" />
                            </p>
                            <p><?php the_sub_field('tab_content'); ?></p>
                            <div class="clearfix"></div>
                            <div class="margin-20">
                              <a href="<?php the_sub_field('read_more_link'); ?>" class="blue-button">Read More</a>
                            </div>
                          </div>
                        </div>
                        <?php
                      endwhile;
                    endif;
                  ?>
                </div>
              </div>
            </div>
          </div>
          <?php
        elseif( get_row_layout() == 'blog_layout' ):
          ?>
          <div class="container">
            <div class="row section-wrapper">
              <div class="col-lg-12">
                <h2 class="section-title-center"><strong><?php the_sub_field('blog_heading'); ?></strong></h2>
                <hr class="title-underline" />
                <div class="section-content">
                  <div class="row case-study-wrapper">
                    <?php
                      $args=array(
                        "post_type"=>"post",
                        "posts_per_page"=>3
                      );
                      if(get_sub_field('blog_category')!=''){
                        $args["cat"]=get_sub_field('blog_category');
                      }
                      $query=new WP_Query($args);
                      if($query->have_posts()):
                        while($query->have_posts()): $query->the_post();
                          ?>
                          <div class="col-xs-12 col-sm-4">
                            <?php the_post_thumbnail('home-blog-image'); ?>
                            <div class="thumbnail">
                              <div class="caption">
                                <h4><?php the_title(); ?></h4>
                                <p class="date"><a href=""><?php echo get_the_date('F j, Y'); ?></a></p>
                                <?php the_excerpt(); ?>
                              </div>
                            </div>
                            <p class="read-more-wrapper">
                              <a href="<?php the_permalink(); ?>" class="read-more"><i class="fa fa-chevron-right" aria-hidden="true"></i> Read More</a>
                              <?php
                                $count=get_post_meta(get_the_ID(),'loved',true);
                                if($count==''){
                                  $count=0;
                                }
                              ?>
                              <a href="javascript:void(0);" class="pull-right loved-it" pid="<?php the_ID(); ?>"><i class="fa fa-heart" aria-hidden="true"></i> <span class="loved-count"><?php echo $count; ?></span></a>
                            </p>
                          </div>
                          <?php
                        endwhile;
                        wp_reset_postdata();
                      endif;
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
        elseif( get_row_layout() == 'color_block' ):
          ?>
          <div class="colored-block">
            <div class="container">
              <div class="row section-wrapper">
                <div class="col-lg-12">
                  <h2 class="section-title-center"><strong><?php the_sub_field('blog_heading'); ?></strong></h2>
                  <hr class="title-underline" />
                  <div class="section-content">
                    <center><?php the_sub_field('introduction_text'); ?></center>
                  </div>
                </div>
              </div>
              <div class="row section-wrapper">
                <div class="col-md-6 col-sm-12">        
                  <?php the_sub_field('left_content'); ?>
                </div>
                <div class="col-md-6 col-sm-12">
                  <?php the_sub_field('right_content'); ?>
                </div>
              </div>
            </div>
          </div>
          <?php
        endif;
    endwhile;
endif;
?>
<?php get_footer(); ?>