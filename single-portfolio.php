<?php get_header(); ?>

  <div id="primary" class="content-area extended">

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

          <header class="entry-header">

            <?php the_title( '<h1>', '</h1>' ); ?>

          </header>

          <div class="entry-content">

            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail( 'full' ); ?>
            </a>

            <?php the_content(); ?>

            <p>
              <a class="button" href="<?php the_field( 'url' ); ?>">
                <?php esc_html_e( 'Visit the Site', 'courtney' ); ?>
              </a>
            </p>

			<div class="prev-next">
			<?php the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'courtney' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'courtney' ) . '</span> <span class="nav-title">%title</span>',
				)
			); ?>
		</div>

          </div>

        </article>


      <?php endwhile; endif; ?>

    </main>

  </div>

<?php get_footer(); ?>
