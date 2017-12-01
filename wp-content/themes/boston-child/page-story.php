<?php
/**
 * Template Name: Story
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
			<!-- Header Section START -->
      <h1 class="main-title">Historique :</h1>
			<p class="main-subtitle">Présentation des événements</p>
			<!-- Header Section END -->

      <!-- Displays all new events -->
			<?php
			$args = array('post_type' => 'story', );
			$the_query = new WP_Query($args);
			?>
			<?php if ($the_query->have_posts() ): while($the_query->have_posts() ) :$the_query->the_post();?>
			<?php include('template-parts/story-article.php'); ?>
			<?php endwhile ?>
			<?php endif?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
