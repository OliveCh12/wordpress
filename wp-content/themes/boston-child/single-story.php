<?php
/**
* The template for displaying all single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package Boston
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <!-- Start the loop -->
    <?php while ( have_posts() ) : the_post();?>

      <?php
      // get raw date
      $date = get_field('date', false, false);
      // make date object
      $date = new DateTime($date);
      ?>

      <!-- Story display view -->
      <div class="marker"></div>
      <div class="card-story">
        <div class="entry-meta">
          <span class="entry-cate"><a class="entry-category"><?php the_time('j, F, Y') ?></a></span>
        </div>
        <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p class="card-subtitle"><?php the_field('subtitle') ?></p>
        <div class="card-story-body">
          <p><?php the_field('description') ?></p>
          <a href="/historique" class="card-link">Retour à l'historique</a>
        </div>
      </div>
      <?php
      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
