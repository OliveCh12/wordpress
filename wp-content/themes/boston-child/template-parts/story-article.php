<div class="marker"></div>
<div class="card-story">
  <div class="entry-meta">
    <?php

// get raw date
$date = get_field('date', false, false);


// make date object
$date = new DateTime($date);

?>
    <span class="entry-cate"><a class="entry-category"><?php echo $date->format('j M Y'); ?></a></span>
  </div>
  <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <p class="card-subtitle"><?php the_field('subtitle') ?></p>
  <div class="card-story-body">
    <p><?php the_field('description') ?></p>
  <a href="<?php the_permalink() ?>" class="card-link">Découvrir</a>
</div>
</div>
