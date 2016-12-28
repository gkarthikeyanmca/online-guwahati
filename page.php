<?php get_header(); ?>
<div class="container blog-wrapper">
	<div class="row section-wrapper">
		<div class="col-md-9 col-sm-8 col-xs-12">
			<?php
				if(have_posts()):
					while(have_posts()): the_post();
						?>
						<div>
							<h3><strong><?php the_title(); ?></strong></h3>
							<?php the_content(); ?>
						</div>
						<?php
						//$author_id=get_the_author_meta( 'ID' );
					endwhile;
				endif;
			?>
		</div>
		<div class="col-md-3 col-sm-4 col-xs-12">
			<div class="sidebar">
				<h4>Enquiry</h4>
				<?php
					echo do_shortcode('[formidable id=7]');
				?>
				<div class="space-40"></div>
				<h4>Important Links</h4>
				<?php
		            wp_nav_menu( array(
		                'menu'              => 'Important Links',
		                'theme_location'    => 'important_links',
		                'menu_class'        => 'list-group',
		                'link_before'		=> '<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;'
		                )
		            );
		        ?>
		    </div>
		</div>
	</div>
</div>
<?php get_footer(); ?>