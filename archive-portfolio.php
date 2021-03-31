<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Courtney
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				post_type_archive_title('<h1 class="page-title">', '</h1>');
				the_archive_description( '<h3 class="archive-description">', '</h3>' );
				?>
			</header><!-- .page-header -->

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'portfolio' ); ?>

			<?php endwhile; else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			<?php echo paginate_links(); ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'portfolio' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php

get_footer();
