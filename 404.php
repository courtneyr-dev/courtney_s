<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Courtney
 */

get_header();
?>


<header class="page-header alignwide">
		<h1 class="page-title"><?php esc_html_e( 'OOOPS 🦸🏻‍♀️', 'courtney' ); ?></h1>
	</header><!-- .page-header -->

	<div class="error-404 not-found default-max-width">
	
	<div class="page-content">
			<div class="search404"> 
				<?php get_search_form(); ?>	
			</div>

			<div class="giphy" style="width:60%;padding:0 0 0 0;float:left;">
				<div style="width:100%;height:0;padding-bottom:75%;position:relative;"><iframe src="https://giphy.com/embed/8p9O3TyoTaNlXDwmSj" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/BTTF-back-to-the-future-bttf-one-8p9O3TyoTaNlXDwmSj">via GIPHY</a></p>
			</div>

			<div class="404content" style="width:40%;padding:0 0 0 30px;float:left;">
				<?php esc_html_e( 'Looking for something? Search or look throough the posts below.', 'courtney' ); ?>
				<?php $_courtney_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', '_s' ), convert_smilies( ':)' ) ) . '</p>';
				
				the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$_courtney_archive_content" );?>
							
				<?php the_widget( 'WP_Widget_Recent_Posts' );?>
			</div>
			
			<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', '_courtney' ); ?></h2>
				<ul>
					<?php
					wp_list_categories(
						array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						)
					);
					?>
				</ul>	
					<?php the_widget( 'WP_Widget_Tag_Cloud' );?>
		</div>
		<div style="clear:both;"></div>
		<!-- .page-content -->
	</div>	<!-- .error-404 -->


	</main><!-- #main -->

<?php
get_footer();
