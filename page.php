<?php get_header(); ?>
	<!-- Main -->
	<div id="main">
		<!-- Posts -->
		<section class="post">
			<?php while ( have_posts() ) : the_post(); ?>
				<article>
					<header class="major">
						<span class="date"><?php the_date('l, F j, Y'); ?></span>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</header>
					<a href="<?php the_permalink(); ?>" class="image fit"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></a>
					<div><?php the_content();?></div>
				</article>
			<?php endwhile; ?>
		</section>
    </div>
<?php get_footer(); ?>