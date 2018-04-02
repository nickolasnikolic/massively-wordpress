<?php get_header(); ?>
				<!-- Main -->
					<div id="main">
                        <p>index</p>

						<!-- Posts -->
							<section class="posts">
<?php while ( have_posts() ) : the_post(); ?>
								<article>
									<header>
										<span class="date"><?php the_date('l, F j, Y'); ?></span>
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									</header>
									<a href="<?php the_permalink(); ?>" class="image fit"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></a>
									<p><?php the_excerpt();?></p>
									<ul class="actions">
										<li><a href="<?php the_permalink(); ?>" class="button">Full Story</a></li>
									</ul>
								</article>
<?php endwhile; ?>
							</section>

						<!-- Footer -->
							<footer>
                                <?php the_posts_pagination(); ?>
							</footer>

					</div>
<?php get_footer(); ?>