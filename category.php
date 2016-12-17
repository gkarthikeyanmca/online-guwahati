<?php get_header(); ?>

<div class="single-title-wrapper">
	<div class="container">
		<h4>Category Posts</h4>
	</div>
</div>
			
<div class="container blog-wrapper">
	<div class="row section-wrapper">
		<div class="col-md-9 col-sm-8 col-xs-12">
			<?php
				if(have_posts()):
					$count=0;
					while(have_posts()): the_post();
						?>
						<div class="blog-item">
							<div class="row">
								<div class="col-lg-12">
									<div class="fimage">
										<?php the_post_thumbnail('blog-archive-image',array( 'class' => 'img-responsive' )); ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-2 col-xs-3">
									<div class="pull-right">
										<ul>
											<li><a href="javascript: void(0);" share-html="<?php echo $count; ?>" data-placement="top" data-toggle="popover" data-trigger="click" title="Dismissible popover" data-content="" class="post-share"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
											<li><a href=""><i class="fa fa-comments-o" aria-hidden="true"></i><br/>2</a></li>
											<?php
				                                $lcount=get_post_meta(get_the_ID(),'loved',true);
				                                if($lcount==''){
				                                  $lcount=0;
				                                }
				                            ?>
											<li><a href="javascript:void(0);" class="loved-it" pid="<?php the_ID(); ?>"><i class="fa fa-heart" aria-hidden="true"></i><br/><span class="loved-count"><?php echo $lcount; ?></span></a></li>
										</ul>
									</div>
								</div>
								<div class="col-sm-10 col-xs-9">
									<div class="post-meta-wrapper">
										<?php
											$archive_year=get_the_time('Y');
											$archive_month=get_the_time('m');
										?>										
										By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> Posted <a href="<?php echo get_month_link( $archive_year, $archive_month ); ?>"><?php the_date(); ?></a> In <?php the_category( ' ' ); ?>
									</div>
									<h3><?php the_title(); ?></h3>						
									<div class="blog-excerpt"><?php the_excerpt(); ?></div>
									<div class="read-more-wrapper"><a href="<?php the_permalink(); ?>">Read More</a></div>
								</div>
							</div>
							<div id="share-html<?php echo $count; ?>" style="display:none;">
								<a onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;" href="http://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a><br/>
								<a onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;" href="http://twitter.com/home?status=<?php echo get_the_title(); ?>+<?php echo get_permalink(); ?>">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a><br/>
								<a onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>&source=<?php echo home_url(); ?>">
									<i class="fa fa-linkedin" aria-hidden="true"></i>
								</a><br/>
								<a onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>">
									<i class="fa fa-google-plus" aria-hidden="true"></i>
								</a><br/>
								<a onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;" href="https://pinterest.com/pin/create/button/?url=<?php echo esc_url(get_permalink()); ?>&media=<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
									<i class="fa fa-pinterest" aria-hidden="true"></i>
								</a>
							</div>
						</div>
						<?php
						$count++;
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