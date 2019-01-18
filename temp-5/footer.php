<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		<footer class="theme-footer-one">
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div class="col-xl-3 col-lg-4 col-sm-6 about-widget">
								<?php $abtus=get_post(56) ?>
								<h6 class="title"><?php echo $abtus->post_title; ?></h6>
								<p><?php echo $abtus->post_content; ?></p>
								<div class="queries"><i class="flaticon-phone-call"></i> Any Queries : <a href="#">(+1) 234 567 900</a></div>
							</div> <!-- /.about-widget -->

							
							<div class="col-xl-4 col-lg-3 col-sm-6 footer-recent-post">
								<h6 class="title">RECENT POSTS</h6>
								<?php
wp_reset_query();
$args = array( 'post_type' => 'recentpost', 'posts_per_page' => 2 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$recentpost = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
								<ul>
									<li class="clearfix">
										<img src="<?php echo $recentpost ?>" alt="" class="float-left">
										<div class="post float-left">
											<a href="blog-details.html"><?php the_content(); ?></a>
											<div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Feb 06, 2018</div>
										</div>
									</li>
								</ul>
							<?php endwhile; ?>
							</div> <!-- /.footer-recent-post -->
							<div class="col-xl-2 col-lg-3 col-sm-6 footer-list">
								<h6 class="title">SOLUTIONS</h6>
								<?php
wp_reset_query();
$args = array( 'post_type' => 'ourservice', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$ourserviceimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
								<ul>
									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									
								</ul>
								<?php endwhile; ?>
							</div> <!-- /.footer-list -->
							<div class="col-xl-3 col-lg-2 col-sm-6 footer-newsletter">
								<h6 class="title">NEWSLETTER</h6>
								<form action="#">
									<input type="text" placeholder="Name *">
									<input type="email" placeholder="Email *">
									<button class="theme-button-one">SUBSCRIBE</button>
								</form>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-footer -->
				<div class="bottom-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-12"><p>&copy; Copyrights 2018. All Rights Reserved.</p></div>
							<div class="col-md-6 col-12">
								<ul>
									<li><a href="about.html">About</a></li>
									<li><a href="service.html">Solutions</a></li>
									<li><a href="#">FAQ’s</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- /.bottom-footer -->
			</footer> <!-- /.theme-footer -->
			

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="<?php echo bloginfo('template_url') ?>/vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="<?php echo bloginfo('template_url') ?>/vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo bloginfo('template_url') ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Camera Slider -->
		<script src='<?php echo bloginfo('template_url') ?>/vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
	    <script src='<?php echo bloginfo('template_url') ?>/vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
	    <script src='<?php echo bloginfo('template_url') ?>/vendor/Camera-master/scripts/camera.min.js'></script>
	    <!-- menu  -->
		<script src="<?php echo bloginfo('template_url') ?>/vendor/menu/src/js/jquery.slimmenu.js"></script>
		<!-- WOW js -->
		<script src="<?php echo bloginfo('template_url') ?>/vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="<?php echo bloginfo('template_url') ?>/vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="<?php echo bloginfo('template_url') ?>/vendor/jquery.appear.js"></script>
		<script src="<?php echo bloginfo('template_url') ?>/vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="<?php echo bloginfo('template_url') ?>/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

		<!-- Theme js -->
		<script src="<?php echo bloginfo('template_url') ?>/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
