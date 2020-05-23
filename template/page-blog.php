  <?php 
    $args = array( 'numberposts' => 3, 'orderby' => 'modify' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post); ?>

    <article class="col-md-4 blog__wrapper__card">
      <div class="blog__wrapper__card__overlay">

        <?php if(has_post_thumbnail( )): ?>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'full', array('class' => 'post_miniatura')); ?>
          </a>
        <?php endif; ?>
          <div class="block-title">
            <h2>
              <?php title_limit( 45 ); ?>
            </h2>
          </div>

      </div>
    </article>
  <?php endforeach; ?>