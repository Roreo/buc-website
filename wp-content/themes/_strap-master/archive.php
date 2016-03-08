<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<!-- Blog Banner -->
	<div id="heroBanner3" class="header-hero">
		<h1>Ballincollig Ultimate</h1>
		<p>Home of Ultimate Frisbee in the Ballincollig area</p>
		<div class="bar"></div>
	</div>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		

		<?php if ( have_posts() ) : ?>
		
			<header class="page-header">

				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<br><br><br><br>

			<!-- Start of blog posts -->
			<div class="container">
			
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="postyPost">
				<div class="blogThumb">
					<?php
						
						the_post_thumbnail(); 
					?>
				</div>
				
				<h2>
				        <a href="<?php the_permalink() ?>" rel="bookmark">
				        <?php the_title(); ?></a>
				 </h2>
				
				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>
				</div><!-- postyPost -->
			<?php endwhile; ?>
				
			<?php the_posts_navigation(); ?>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</div> <!-- END Container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
