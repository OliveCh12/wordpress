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

      <!-- Article event single view start -->
      <article class="card-event">
        <header class="entry-header">
          <h3 class="entry-title"><?php the_title(); ?></h3>
          <div class="entry-meta">
            <span class="entry-cate"><a class="entry-category">Informations :</a></span>
            <br><br>
            <span class="author vcard">Lieu : <strong class="highlight"><?php the_field('lieu') ?></strong></span>
            <br>
            <span class="author vcard">Prix : <strong class="highlight"><?php the_field('prix') ?> €</strong></span>
            <br>
            <span class="entry-date"><time class="entry-date published updated">DATE DE L'EVENEMENT : <strong class="highlight"><?php the_field('start_date'); ?></strong></time></span>
          </div>
        </header>
        <div class="card-body">
          <div class="card-image">
            <img alt="thumbnail" class="card-thumbnail" src="<?php the_post_thumbnail()?>">
          </div>
          <div class="card-text">
            <p><?php the_content(); ?></p>
          </div>
        </div>
        <div class="card-footer">
          <div class="entry-more">
          </div>
        </div>
      </article>



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
