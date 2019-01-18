<?php
/*
Template Name: Blog
*/

/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

			<!-- 
			=============================================
				Theme Main Banner
			============================================== 
			-->
						<?php
wp_reset_query();
$args = array( 'post_type' => 'slider', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$homeslider = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>	
			<div id="theme-main-banner" class="banner-one">

				<div data-src="<?php echo $homeslider; ?>">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated"></p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s"><br><?php the_content() ?></h1>
							<a href="<?php the_permalink();?>" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				
			</div> <!-- /#theme-main-banner -->
			<?php endwhile; ?>
			
			<!-- 
			=============================================
				Top Feature
			============================================== 
			-->

			<div class="top-feature section-spacing">
				
				<div class="top-features-slide">
					<?php
wp_reset_query();
$args2 = array( 'post_type' => 'topFeature', 'posts_per_page' => 15 );
$loop2 = new WP_Query( $args2 );
while ( $loop2->have_posts() ) : $loop2->the_post();
$topFeature = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
					<div class="item">
						<div class="main-content" style="background:#fafafa;">
							<img src="<?php echo $topFeature; ?>" alt="">
							<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
							<p><?php the_content(); ?></p>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					
					<?php endwhile; ?>
				</div> <!-- /.top-features-slide -->
			</div> <!-- /.top-feature -->
			



			<!-- 
			=============================================
				About Company
			============================================== 
			-->
			<div class="about-compnay section-spacing">
				<div class="container">
																	<?php /*
wp_reset_query();
$args3 = array( 'post_type' => 'aboutcompany', 'posts_per_page' => 11 );
$loop3 = new WP_Query( $args3 );
while ( $loop3->have_posts() ) : $loop3->the_post();
$aboutcompany = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  */?>
						<div class="row">
						<?php
						for($i=1;$i<=4;$i++)
						{
							?>
						<div class="col-sm-1 col-2"><img src="<?php echo get_theme_mod('image_upload_test'); ?>" alt=""></div>
						<div class="col-sm-2 col-4">
							<div class="text">
								<div class="theme-title-one">
									<h2>
									<?php
									//echo "gggggg";
                                     echo get_theme_mod('text_test');
									 //the_title()
									 ?>
									 </h2>
									<p><?php  echo get_theme_mod('theme_slug_customizer_text'); ?></p>
									<p><?php //the_content() ?></p>
								</div> <!-- /.theme-title-one -->
								<!--<ul class="mission-goal clearfix">
									<li>
										<i class="icon flaticon-star"></i>
										<h4>Vision</h4>
									</li>
									<li>
										<i class="icon flaticon-medal"></i>
										<h4>Missions</h4>
									</li>
									<li>
										<i class="icon flaticon-target"></i>
										<h4>Goals</h4>
									</li>
								</ul>--> <!-- /.mission-goal -->
							</div> <!-- /.text -->
						</div> <!-- /.col- -->
					<?php } ?>
					</div> <!-- /.row -->
					<?php
						for($i=1;$i<=3;$i++)
						{
							?>
							<div class="col-sm-2 col-4"><img src="<?php echo get_theme_mod('image_upload_test'); ?>" alt=""></div>
						<div class="col-sm-2 col-4">
							<div class="text">
								<div class="theme-title-one">
									<h2><?php
                                     echo get_theme_mod('text_test');
									 //the_title()?></h2>
									<p><?php  echo get_theme_mod('theme_slug_customizer_text'); ?></p>
									<p><?php //the_content() ?></p>
								</div> <!-- /.theme-title-one -->
								<!--<ul class="mission-goal clearfix">
									<li>
										<i class="icon flaticon-star"></i>
										<h4>Vision</h4>
									</li>
									<li>
										<i class="icon flaticon-medal"></i>
										<h4>Missions</h4>
									</li>
									<li>
										<i class="icon flaticon-target"></i>
										<h4>Goals</h4>
									</li>
								</ul>--> <!-- /.mission-goal -->
							</div> <!-- /.text -->
						</div> <!-- /.col- -->
						<div class="clearfix"></div>
						<?php } ?>
					<?php //endwhile; ?>
				</div> <!-- /.container -->
			</div> <!-- /.about-compnay -->

 <?php dynamic_sidebar('sidebar-5'); ?>
 
 
 <?php

for($r=1;$r<=4;$r++)
{
	
	
	for($t=1;$t<=3;$t++)
	
		{
		
		echo dynamic_sidebar('sidebar-5'); 
		
	}

echo "<br>";
}	
?>
 
 
			<!-- 
			=============================================
				Feature Banner
			============================================== 
			-->
			<?php $ProfessionalStaff=get_post(62) ?>
			<div class="feature-banner section-spacing">
				<div class="opacity">
					<div class="container">
						<h2><?php echo $ProfessionalStaff->post_content; ?></h2>
						
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.feature-banner -->


			<!-- 
			=============================================
				Service Style One
			============================================== 
			-->
			<?php
wp_reset_query();
$args = array( 'post_type' => 'ourservices', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$ourserviceimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
			<div class="service-style-one section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2><?php the_title(); ?></h2>
						<p><?php the_content() ?></p>
					</div> <!-- /.theme-title-one --><?php endwhile; ?>
					<div class="wrapper">
						<div class="row">
<?php
wp_reset_query();
$args = array( 'post_type' => 'ourservice', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$ourserviceimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="<?php echo $ourserviceimg; ?>" alt=""></div>
									<div class="text">
									
										<h5><a href="service-details.html"><?php the_title(); ?></a></h5>
										<p><?php the_content() ?> </p>
										<a href="<?php the_permalink(); ?>" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<?php endwhile; ?>
						</div>
							
						
			
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
					<?php
wp_reset_query();
$args = array( 'post_type' => 'ourmail', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$ourserviceimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
					<div class="contact-text">
						<h4><?php the_content() ?></h4>
						<h5><a href="#"></a>    <a href="#"></a></h5>
					</div>
					<?php endwhile; ?>
				</div> <!-- /.container -->
			</div> <!-- /.service-style-one -->


			<!--
			=====================================================
				Testimonial Slider
			=====================================================
			-->

			<div class="testimonial-section section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="wrapper">
							<div class="bg">
								<div class="testimonial-slider">
																<?php
wp_reset_query();
$args = array( 'post_type' => 'ourslider', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$ourserviceimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
									<div class="item">
										<p><?php the_content(); ?></p>
										<div class="name">
											<h6></h6>
											<span></span>
										</div> <!-- /.name -->
									</div> <!-- /.item -->
									<?php endwhile; ?>
																	<?php
wp_reset_query();
$args = array( 'post_type' => 'ourslider', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$ourserviceimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
									<div class="item">
										<p><?php the_content(); ?></p>
										<div class="name">
											<h6></h6>
											<span></span>
										</div> <!-- /.name -->
									</div> <!-- /.item -->
									
<?php endwhile; ?>
									
																	<?php
wp_reset_query();
$args = array( 'post_type' => 'ourslider', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$ourserviceimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>                                      
										<div class="item">
										<p><?php the_content(); ?></p>
										<div class="name">
											<h6></h6>
											<span></span>
										</div> 
										</div> 
<?php endwhile; ?><!-- /.name -->
									<!-- /.item -->
								</div> <!-- /.testimonial-slider -->
							</div> <!-- /.bg -->
						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.testimonial-section -->

			<!--
			=====================================================
				Our Team
			=====================================================
			-->
										<?php
wp_reset_query();
$args5 = array( 'post_type' => 'ourteams', 'posts_per_page' => 10 );
$loop5 = new WP_Query( $args5 );
while ( $loop5->have_posts() ) : $loop5->the_post();
$ourteam = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
			<div class="our-team section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
					</div> <!-- /.theme-title-one --><?php endwhile; ?>
					<div class="wrapper">
						<div class="row">

							<?php
wp_reset_query();
$args5 = array( 'post_type' => 'ourteam', 'posts_per_page' => 10 );
$loop5 = new WP_Query( $args5 );
while ( $loop5->have_posts() ) : $loop5->the_post();
$ourteam = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
							<div class="col-lg-3 col-sm-6 col-12">
								<div class="team-member">
									<div class="image-box">
										<img src="<?php echo $ourteam; ?>" alt="">
										<div class="overlay">
											<div class="hover-content">
												<ul>
													<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
													<li><a href="facebook.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
												</ul>
												<p> <?php the_content(); ?></p>
											</div> <!-- /.hover-content -->
										</div> <!-- /.overlay -->
									</div> <!-- /.image-box -->
									<div class="text">
										<h6><?php the_title(); ?></h6>
										<span><?php the_content(); ?></span>
									</div> <!-- /.text -->
								</div> <!-- /.team-member -->
							</div> <!-- /.col- -->
							<?php endwhile; ?>
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.our-team -->


			<!--
			=====================================================
				Theme Counter
			=====================================================
			-->

			<div class="theme-counter section-spacing">
				<div class="container">
					<div class="bg">
															<?php
wp_reset_query();
$args5 = array( 'post_type' => 'company', 'posts_per_page' => 10 );
$loop5 = new WP_Query( $args5 );
while ( $loop5->have_posts() ) : $loop5->the_post();
$ourteam = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>						<h6><?php the_title(); ?></h6>
						<h2><?php the_content(); ?></h2>
<?php endwhile; ?>


						<div class="cunter-wrapper">

							<div class="row">
																						
										<?php
wp_reset_query();
$args5 = array( 'post_type' => 'companysuccess', 'posts_per_page' => 10 );
$loop5 = new WP_Query( $args5 );
while ( $loop5->have_posts() ) : $loop5->the_post();
$ourteam = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
								<div class="col-md-3 col-6">
												
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="30" data-speed="1200" data-refresh-interval="5"></span><?php the_title(); ?></div>
				        				<p><?php the_content(); ?></p>
				        			</div> <!-- /.single-counter-box -->
									</div>
								<?php endwhile; ?>
								<!-- /.col- -->
																		<?php
wp_reset_query();
$args5 = array( 'post_type' => 'companysuccess1', 'posts_per_page' => 10 );
$loop5 = new WP_Query( $args5 );
while ( $loop5->have_posts() ) : $loop5->the_post();
$ourteam = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
	<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="100" data-speed="1200" data-refresh-interval="5"></span><?php the_title(); ?></div>
				        				<p><?php the_content(); ?></p>
				        			</div> <!-- /.single-counter-box -->
								 <!-- /.col- -->
								</div>
								<?php endwhile; ?>
																										<?php
wp_reset_query();
$args5 = array( 'post_type' => 'companysuccess2', 'posts_per_page' => 10 );
$loop5 = new WP_Query( $args5 );
while ( $loop5->have_posts() ) : $loop5->the_post();
$ourteam = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="53" data-speed="1200" data-refresh-interval="5"></span><?php the_title(); ?></div>
				        				<p><?php the_content(); ?></p>
				        			</div> <!-- /.single-counter-box -->
								 <!-- /.col- -->
								</div>
								<?php endwhile; ?>
												<?php
wp_reset_query();
$args5 = array( 'post_type' => 'companysuccess3', 'posts_per_page' => 10 );
$loop5 = new WP_Query( $args5 );
while ( $loop5->have_posts() ) : $loop5->the_post();
$ourteam = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="24" data-speed="1200" data-refresh-interval="5"></span></div>
				        				<p><?php the_content(); ?></p>
				        			</div> <!-- /.single-counter-box -->
								
								
							<!-- /.col- -->
							</div>
							<?php endwhile; ?>

								<!-- /.row -->
						</div> <!-- /.cunter-wrapper -->
						
						<a href="#" class="theme-button-one">VIEW CASE STUDIES</a>
					</div> <!-- /.bg -->
					
				</div> <!-- /.container -->
			</div> <!-- /.theme-counter -->


			<!--
			=====================================================
				Free Consultation
			=====================================================
			-->
			<!--===================================================== ---->
<?php
$args = array( 'post_type' => 'xyz', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
			<!-- ===================================================== --->
			
			<div class="consultation-form section-spacing">
				<div class="container">
					<div class="theme-title-one">
<h2>  <?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
					</div> <!-- /.theme-title-one -->
					<div class="clearfix main-content no-gutters row">
						<div class="col-xl-6 col-lg-5 col-12"><div class="img-box"></div></div>
						<div class="col-xl-6 col-lg-7 col-12">
							<div class="form-wrapper">
								<form action="#" class="theme-form-one">
									<?php echo do_shortcode( '[contact-form-7 id="55" title="Contact form 1"]' ); ?><!-- /.row -->
									
								</form>
							</div> <!-- /.form-wrapper -->
						</div> <!-- /.col- -->
					</div> <?php //endwhile; ?><!-- /.main-content -->
				</div> <!-- /.container -->
			</div> <!-- /.consultation-form -->
                <?php endwhile; ?>


			<!--
			=====================================================
				Partner Slider
			=====================================================
			-->
			<div class="partner-section bg-color">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-12">
														<?php
wp_reset_query();
$args = array( 'post_type' => 'ourpatner1', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$ourpatner = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
							<h6> <?php the_content(); ?><br></h6>
							<?php endwhile; ?>
						</div>
						
						<div class="col-md-9 col-sm-8 col-12">
							
							<div class="partner-slider">
								<?php
wp_reset_query();
$args = array( 'post_type' => 'ourpatner', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$ourpatner = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
								<div class="item"><img src="<?php echo $ourpatner; ?>" alt=""></div>
								<?php endwhile; ?>
							</div>
							
						</div>
					
					</div>
				</div>
			</div> <!-- /.partner-section -->


			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<?php get_footer(); ?>
