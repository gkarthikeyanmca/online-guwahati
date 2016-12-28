<div class="footer-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <h4>Important Links</h4>
            <?php
              wp_nav_menu( array(
                  'menu'              => 'Footer Menu',
                  'theme_location'    => 'footer_menu',
                  'menu_class'        => 'important-links'
                )
              );
            ?>
          </div>
          <div class="col-sm-3 col-xs-12">
            <h4>Tags</h4>
            <div class="tagcloud">
              <?php wp_tag_cloud(); ?>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="address-wrapper">
              <?php
                if(have_rows('locations','option')):
                  while(have_rows('locations','option')): the_row();
                    ?>
                    <p>
                      <i class="fa fa-home" aria-hidden="true"></i> <?php the_sub_field('location_address'); ?>
                    </p>
                    <?php
                    break;
                  endwhile;
                endif;
              ?>
              <?php
                if(have_rows('phone_numbers','option')):
                  while(have_rows('phone_numbers','option')): the_row();
                    ?>
                    <p>
                      <i class="fa fa-phone" aria-hidden="true"></i> <?php the_sub_field('phone_number'); ?>
                    </p>
                    <?php
                    break;
                  endwhile;
                endif;
              ?>
              <?php
                if(get_field('email','option')){
                  ?>
                  <p>
                    <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@onlineguwahati.com">e-Mail: info@onlineguwahati.com</a>
                  </p>
                  <?php
                }
              ?>              
              <!--<p>
                <i class="fa fa-skype" aria-hidden="true"></i> <a href="skype:gizmeon.technologies">gizmeon.technologies</a>
              </p>-->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 copyright-wrapper">
            <?php
              $logo_id=get_field('logo','option');
              if($logo_id!=''){
                $img=wp_get_attachment_image_src($logo_id,'logo-image');
                ?>
                <a href="<?php echo home_url(); ?>"><img src="<?php echo $img[0]; ?>" /></a>
                <?php
              }
            ?>
            <!--<strong style="color: #fff">ONLINE GUWAHATI</strong>-->
            <span><?php the_field('copyright_text','option'); ?></span>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/custom-scripts.js"></script>
    <?php wp_footer(); ?>
    <script>
      jQuery(document).ready(function(){
        jQuery(document).on('click','.loved-it',function(){
          var pid=jQuery(this).attr('pid');
          var t=this;
          jQuery.ajax({
              url:'<?php echo admin_url("admin-ajax.php"); ?>',
              method:'post',
              data:{'pid':pid,'action':'love_this_post'},
              success:function(data){
                jQuery(t).find('span.loved-count').html(data);
              }
          });
        });
      });
    </script>
    <div class="contact-us-form" style="display:none;">
      <p><center>Please share your Phone Number/short description on project . We shall get back to you soon.</center></p>
      <?php echo do_shortcode('[formidable id=9]'); ?>
    </div>
    <!--<a href="javascript:void(0);" id="back-to-top" title="Back to top">&uarr;</a>-->
    <a href="javascript:void(0);" id="back-to-top" title="Back to top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <a href="javascript: void(0);" data-placement="top" data-toggle="popover" data-trigger="click" title="CONTACT US" data-content="" class="contact-us"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
    <!--<a href="javascript: void(0);" data-toggle="modal" data-target="#contactFormModal" class="contact-us"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>-->
    
    <div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
          </div>
          <div class="modal-body">
            <p><center>Please share your Phone Number/short description on project . We shall get back to you soon.</center></p>
            <?php echo do_shortcode('[formidable id=9]'); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>