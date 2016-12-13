<?php get_header(); ?>
<div class="container">
	<div class="row section-wrapper">
		<div class="col-lg-12">
			<?php
				if(have_posts()):
					while(have_posts()): the_post();
						?>
						<div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div><?php the_post_thumbnail('blog-single',array( 'class' => 'img-responsive' )); ?></div>
							<?php the_excerpt(); ?>
						</div>
						<?php
					endwhile;
				endif;
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>