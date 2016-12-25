<?php get_header(); ?>
<?php
	if(have_posts()):
		while(have_posts()): the_post();
			?>
			<div class="single-title-wrapper">
				<div class="container">
					<h4><?php the_title(); ?></h4>
				</div>
			</div>
			<?php
		endwhile;
	endif;
?>
<div class="container">
	<div class="row section-wrapper">
		<div class="col-lg-12">
			<?php
				if(have_posts()):
					while(have_posts()): the_post();
						?>
						<div>
							<div><?php the_post_thumbnail('blog-single',array( 'class' => 'img-responsive' )); ?></div>
							<h3><strong><?php the_title(); ?></strong></h3>
							<div class="row post-meta-wrapper">
								<div class="col-sm-8 col-xs-12">
									<?php
										$archive_year=get_the_time('Y');
										$archive_month=get_the_time('m');
									?>
									By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> Posted <a href="<?php echo get_month_link( $archive_year, $archive_month ); ?>"><?php the_date(); ?></a> In <?php the_category( ' ' ); ?>
								</div>
								<div class="col-sm-4 col-xs-12">
									<div class="share-icons">
										<a href=""><i class="fa fa-print" aria-hidden="true"></i></a>
										<a href="javascript: void(0);" data-placement="bottom" data-toggle="popover" data-trigger="click" title="Dismissible popover" data-content="" class="single-post-share"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
										<a href="#comments-scroll"><i class="fa fa-comments-o" aria-hidden="true"></i> <?php comments_number( 0, 1, '%' ); ?></a>
										<?php
			                                $count=get_post_meta(get_the_ID(),'loved',true);
			                                if($count==''){
			                                  $count=0;
			                                }
			                            ?>
										<a href="javascript:void(0);" class="loved-it" pid="<?php the_ID(); ?>"><i class="fa fa-heart" aria-hidden="true"></i> <span class="loved-count"><?php echo $count; ?></span></a>
									</div>
								</div>
								<div id="share-html" style="display:none;">
									<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
								</div>
							</div>
							<?php the_content(); ?>
						</div>
						<?php
						$author_id=get_the_author_meta( 'ID' );
					endwhile;
				endif;
			?>
		</div>
	</div>
	<div class="row section-wrapper author-wrapper">
		<div class="col-lg-12">
			<?php
				$author_info = get_userdata($author_id);
			?>
			<?php echo get_avatar( $author_id, 100 ); ?>
			<h4><a href="<?php echo get_author_posts_url($author_id); ?>"><?php echo $author_info->display_name; ?></a></h4> 
			<p>
				<?php echo get_user_meta($author_id,'description',true); ?><br/>
				<a href="<?php the_field('twitter_url', 'user_'.$author_id); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="mailto:<?php echo $author_info->user_email; ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
			</p>
		</div>
	</div>

	<div class="row section-wrapper recent-posts-wrapper">
		<h4>Recent Posts</h4>
		<?php
			$args=array(
				'post_type'=>'post',
				'posts_per_page'=>4
			);
			$query=new WP_Query($args);
			if($query->have_posts()):
				while($query->have_posts()): $query->the_post();
					?>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="thumbnail">
							<a href="<?php the_permalink(); ?>">
				      			<?php the_post_thumbnail('recent-posts-image'); ?>
				  				<div class="caption">
				        			<h5><?php the_title(); ?></h5>
				      			</div>
				      		</a>
			    		</div>
					</div>
					<?php
				endwhile;
			endif;
		?>		
	</div>
	
	<div class="row section-wrapper comments-wrapper" id="comments-scroll">
		<div class="col-lg-12">
			<?php
				if(have_posts()):
					while(have_posts()): the_post();
						comments_template();
					endwhile;
				endif;
			?> 
		</div>
	</div>
</div>
<?php get_footer(); ?>