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
              <p>
                <i class="fa fa-home" aria-hidden="true"></i> #793, 2nd Floor, 1st Block, 1st Stage, HBR Layout,Bangalore Karnataka - 56004
              </p>
              <p>
                <i class="fa fa-phone" aria-hidden="true"></i> Tel. +91 9480115687, +91 9945858107
              </p>
              <p>
                <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@onlineguwahati.com">e-Mail: info@onlineguwahati.com</a>
              </p>
              <p>
                <i class="fa fa-skype" aria-hidden="true"></i> <a href="skype:gizmeon.technologies">gizmeon.technologies</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 copyright-wrapper">
            <!--<a href=""><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>-->
            <strong style="color: #fff">ONLINE GUWAHATI</strong>
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
      <?php echo do_shortcode('[formidable id=7]'); ?>
    </div>
    <a href="javascript:void(0);" id="back-to-top" title="Back to top">&uarr;</a>
    <a href="javascript: void(0);" data-placement="top" data-toggle="popover" data-trigger="click" title="CONTACT US" data-content="" class="contact-us"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
  </body>
</html>