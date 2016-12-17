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
									By <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a> Posted <a href="<?php echo get_month_link( $archive_year, $archive_month ); ?>"><?php the_date(); ?></a> In <?php the_category( ' ' ); ?>
								</div>
								<div class="col-sm-4 col-xs-12">
									<div class="share-icons">
										<a href=""><i class="fa fa-print" aria-hidden="true"></i></a>
										<a href="javascript: void(0);" data-placement="bottom" data-toggle="popover" data-trigger="click" title="Dismissible popover" data-content="" class="single-post-share"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
										<a href=""><i class="fa fa-comments-o" aria-hidden="true"></i> 2</a>
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
					endwhile;
				endif;
			?>
		</div>
	</div>
	<div class="row section-wrapper comments-wrapper">
		<div class="col-lg-12">
			<?php comments_template(); ?> 
		</div>
	</div>
</div>
<?php get_footer(); ?>