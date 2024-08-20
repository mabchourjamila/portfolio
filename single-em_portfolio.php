<?php

/**
 * Standard blog single page
 *
 */

get_header();
get_template_part('includes/header', 'page-title'); ?>

<!-- BLOG AREA START -->
<div class="webtion-blog-area webtion-blog-single single-blog-details">
	<div class="container">
		<div class="row">


			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<?php
					$protitle  = get_post_meta(get_the_ID(), '_webtion_pftitle', true);
					$protgroup  = get_post_meta(get_the_ID(), '_webtion_portgroup', true);
					$pgellaryu  = get_post_meta(get_the_ID(), '_webtion_pgellaryu', true);
					if (isset($pgellaryu) && !empty($pgellaryu)) { ?>
						<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
							<div class="pimgs">
								<div class="single_gallery owl-carousel  curosel-style">
									<?php
									webtion_slider_o('_webtion_pgellaryu', 'full');
									?>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6  col-sm-12 col-xs-12 blog-lr">
							<div class="portfolio-content portfolio-details-box">
								<div class="prots-content">
									<?php if ($protitle) { ?>
										<h2><?php echo esc_html($protitle); ?></h2>
									<?php }; ?>
									<ul>
										<?php

										if ($protgroup) { ?>
											<?php
											foreach ((array) $protgroup as $portgropd => $portgropss) {
												$porttitle = $portdec = '';
												if (isset($portgropss['_webtion_pttitle'])) {
													$porttitle =  $portgropss['_webtion_pttitle'];
												}
												if (isset($portgropss['_webtion_ptvalue'])) {
													$portdec =  $portgropss['_webtion_ptvalue'];
												} ?>
												<?php if (!empty($portdec)){ // Vérifier si la description n'est pas vide 
												?>
													<li>

														<?php if (strpos($portdec, 'github.com') !== false): // Si le lien contient 'github.com' 
														?>
															<a href="<?php echo esc_url($portdec); ?>" class="witr_btn" target="_blank">
																<i class="fab fa-github"></i> <?php echo esc_html($porttitle); ?>
															</a>
														<?php elseif (filter_var($portdec, FILTER_VALIDATE_URL)): // Si c'est une URL valide mais pas GitHub (page web ou doc)
														?>
															<a href="<?php echo esc_url($portdec); ?>" class="witr_btn" target="_blank">
																<i class="fas fa-link"></i> <?php echo esc_html($porttitle); ?>
															</a>
														<?php else: // Si le champs n'est pas un lien, afficher seulement le titre et la description 
														?>
															<b class="eleft"><?php echo esc_html($porttitle); ?></b>
															<span class="eright"><?php echo esc_html($portdec); ?></span>
														<?php endif; ?>
													</li>
												<?php } // Si description vide, ne rien afficher 
												?>
										<?php }
										} ?>
									</ul>
								</div>

								<div class="webtion-blog-social">
									<div class="webtion-single-icon">
										<?php
										if (function_exists('webtion_blog_sharing')) {
											webtion_blog_sharing();
										}
										?>
									</div>
								</div>

								
							</div>
						</div>



						<div class="col-md-12 col-lg-12  col-sm-12 col-xs-12 blog-lr">
							<div class="portfolio-content portfolio-details-boxs">
								<div class="pr-title">
									<h2><?php the_title(); ?></h2>
								</div>
								<div class="prots-content">
									<?php the_content(); ?>
								</div>
							</div>
						</div>


					<?php } else { ?>

						<div class="col-lg-8  col-md-12  col-sm-12 col-xs-12 blog-lr">
							<div class="pimgs">

								<?php the_post_thumbnail('webtion-single-portfolio'); ?>

							</div>
						</div>


						<div class="col-lg-4 col-md-12  col-sm-12 col-xs-12 blog-lr">
							<div class="portfolio-content portfolio-details-box">
								<div class="prots-contentg">
									<?php if ($protitle) { ?>
										<h2><?php echo esc_html($protitle); ?></h2>
									<?php }; ?>
									<ul>
										<?php
										if ($protgroup) { ?>
											<?php
											foreach ((array) $protgroup as $portgropd => $portgropss) {
												$porttitle = $portdec = '';
												if (isset($portgropss['_webtion_pttitle'])) {
													$porttitle =  $portgropss['_webtion_pttitle'];
												}
												if (isset($portgropss['_webtion_ptvalue'])) {
													$portdec =  $portgropss['_webtion_ptvalue'];
												} ?>
												<?php if (!empty($portdec)){ // Vérifier si la description n'est pas vide 
												?>
													<li>

														<?php if (strpos($portdec, 'github.com') !== false): // Si le lien contient 'github.com' 
														?>
															<a href="<?php echo esc_url($portdec); ?>" class="witr_btn" target="_blank">
																<i class="fab fa-github"></i> <?php echo esc_html($porttitle); ?>
															</a>
														<?php elseif (filter_var($portdec, FILTER_VALIDATE_URL)): // Si c'est une URL valide mais pas GitHub (page web ou doc)
														?>
															<a href="<?php echo esc_url($portdec); ?>" class="witr_btn" target="_blank">
																<i class="fas fa-link"></i> <?php echo esc_html($porttitle); ?>
															</a>
														<?php else: // Si le champs n'est pas un lien, afficher seulement le titre et la description 
														?>
															<b class="eleft"><?php echo esc_html($porttitle); ?></b>
															<span class="eright"><?php echo esc_html($portdec); ?></span>
														<?php endif; ?>
													</li>
												<?php } // Si description vide, ne rien afficher 
												?>
										<?php }
										} ?>
									</ul>
								</div>


								<div class="webtion-blog-social">
									<div class="webtion-single-icon">
										<?php
										if (function_exists('webtion_blog_sharing')) {
											webtion_blog_sharing();
										}
										?>
									</div>
								</div>


							</div>
						</div>
						<div class="col-md-12 col-lg-12  col-sm-12 col-xs-12 blog-lr">
							<div class="portfolio-content portfolio-details-boxs">
								<div class="pr-title">
									<h2><?php the_title(); ?></h2>
								</div>
								<div class="prots-contentg">
									<?php the_content(); ?>
								</div>
							</div>
						</div>


					<?php } ?>

				<?php endwhile; // while has_post(); 
				?>
			<?php endif; // if has_post() 
			?>

		</div>
	</div>
</div>
<!-- END BLOG AREA START -->
<?php
get_footer();
