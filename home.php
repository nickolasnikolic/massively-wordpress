<?php get_header(); ?>
	<!-- Main -->
	<div id="main">
        <p>home</p>
		<?php $my_query = new WP_Query( 'category_name=featured&posts_per_page=1' ); ?>
		    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
	            <?php $do_not_duplicate = $post->ID; ?>
				<!-- Featured Post -->
				<article class="post featured">
					<header class="major">
						<span class="date"><?php the_date('l, F j, Y'); ?></span>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_excerpt(); ?></p>
					</header>
					<a href="<?php the_permalink(); ?>" class="image main"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></a>
					<ul class="actions">
						<li><a href="<?php the_permalink(); ?>" class="button big">Full Story</a></li>
					</ul>
				</article>
			<?php endwhile; ?>


		<!-- Posts -->
		<section class="posts">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	            <?php if ( $post->ID == $do_not_duplicate ) continue; ?>
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

            <?php endif; ?>

		</section>

		<!-- Footer -->
		<footer>
			<?php posts_nav_link(); ?>
		</footer>

	</div>
<?php get_footer(); ?>