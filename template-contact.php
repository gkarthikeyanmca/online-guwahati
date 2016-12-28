<?php
/*
Template Name: Contact Us
*/
get_header(); ?>
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
<div class="container contact-wrapper">
	<div class="row section-wrapper">
		<div class="col-md-9 col-sm-8 col-xs-12">
			<?php
				if(have_posts()):
					while(have_posts()): the_post();
						?>
						<!--<h3><?php the_title(); ?></h3>-->
						<div class="fimage">
							<?php the_post_thumbnail('contact-us-image',array( 'class' => 'img-responsive' )); ?>
						</div>
						<div class="contact-content"><?php the_content(); ?></div>
						<div class="contact-numbers">
							<?php
								if(have_rows('phone_numbers','option')):
									?>
									<h3>Our Contact Numbers</h3>
									<?php
				                  	while(have_rows('phone_numbers','option')): the_row();
				                    	echo "<p>".get_sub_field('phone_number_title')." : ".get_sub_field('phone_number')."</p>";
				                  	endwhile;
					            endif;
							?>
						</div>
						<div class="contact-address">
							<?php
								if(have_rows('locations','option')):
									$count=0;
									$locations=array();
									?>
									<h3>Our Addresses</h3>
									<?php
				                  	while(have_rows('locations','option')): the_row();
				                    	?>
				                    	<div class="row address-item">
				                    		<div class="col-sm-6 col-xs-12">
				                    			<p>
				                    				<strong><?php the_sub_field('location_title'); ?></strong>
				                    			</p>
				                    			<p><?php the_sub_field('location_address'); ?></p>
				                    		</div>
				                    		<div class="col-sm-6 col-xs-12">
				                    			<div class="address-map" id="map<?php echo $count; ?>"></div>
				                    		</div>
				                    	</div>
				                    	<?php
				                    	$map=get_sub_field('location_map');
				                    	$locations[]=array('lat'=>(float)$map['lat'],'lng'=>(float)$map['lng']);
				                    	$count++;
				                  	endwhile;
				                  	$locs=json_encode($locations);
					            endif;
							?>
						</div>
						<script>
					      function initMap() {
					      	var locs=<?php echo $locs; ?>;
					      	var myLatLng,map,marker;
					      	if(locs.length>1){
                                for (i = 0; i < locs.length; i++) {		      	
							        myLatLng = {lat: locs[i]['lat'], lng: locs[i]['lng']};

							        map = new google.maps.Map(document.getElementById('map'+i), {
							          zoom: 12,
							          center: myLatLng
							        });

							        marker = new google.maps.Marker({
							          position: myLatLng,
							          map: map
							        });
							    }
							}
							else{
								myLatLng = {lat: locs[0]['lat'], lng: locs[0]['lng']};

						        map = new google.maps.Map(document.getElementById('map0'), {
						          zoom: 12,
						          center: myLatLng
						        });

						        marker = new google.maps.Marker({
						          position: myLatLng,
						          map: map
						        });
							}
					      }
					    </script>
					    <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
						<?php
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
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>