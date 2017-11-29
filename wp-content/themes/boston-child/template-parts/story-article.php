<article class="passing-reverse">
<div class="marker">
</div>
<div class="card-story">
  <div class="entry-meta">
    <span class="entry-cate"><a class="entry-category"><?php the_time('j, F, Y') ?></a></span>
  </div>
  <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <p class="card-subtitle"><?php the_field('subtitle') ?></p>
  <div class="card-story-body">
    <p><?php the_field('description') ?></p>
  </div>
</div>
</article>
