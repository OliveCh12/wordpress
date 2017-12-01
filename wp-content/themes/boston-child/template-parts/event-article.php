<article class="card-event">
  <header class="entry-header">
    <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="entry-meta">
      <span class="entry-cate"><a class="entry-category">Evenement</a></span>
      <span class="author vcard">admin</span>
      <span class="entry-date"><time class="entry-date published updated"><?php the_field('datetime') ?></time></span>
    </div>
  </header>
  <div class="card-body">
    <div class="card-image">
      <img alt="thumbnail" class="card-thumbnail" src="<?php the_post_thumbnail()?>
    </div>
    <div class="card-text">
      <p><?php the_excerpt(); ?></p>
    </div>
  </div>
  <div class="card-footer">
    <div class="entry-more">
  		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php esc_html_e( 'Continuer à lire', 'boston' ); ?></a>
  	</div>
  </div>
</article>
<br>
