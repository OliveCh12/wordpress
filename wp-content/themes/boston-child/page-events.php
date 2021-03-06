<?php
/**
 * Template Name: Events
 *
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
      <!-- Displays all new events -->
			<?php
			$args = array('post_type' => 'events', );
			$the_query = new WP_Query($args);
			?>
			<?php if ($the_query->have_posts() ): while($the_query->have_posts() ) :$the_query->the_post();?>
			<?php include('template-parts/event-article.php'); ?>
			<?php endwhile ?>
			<?php endif?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>
