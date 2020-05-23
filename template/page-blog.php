<div class="row blog__wrapper">

  <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <article class="col-md-4 blog__wrapper__card">
          <div class="blog__wrapper__card__overlay">

            <?php if(has_post_thumbnail( )): ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'full', array('class' => 'post_miniatura')); ?>
              </a>
            <?php endif; ?>
              <div class="block-title">
                <h2>
                  <?php the_title(); ?>
                </h2>
              </div>

          </div>
        </article>

  <?php endwhile; endif;?> 


  <!-- <div class="col-md-4 blog__wrapper__card">
    <div class="blog__wrapper__card__overlay">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>'/assets/images/card-01.png'" alt="" />
      </a>
      <div class="block-title">
        <h3>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </h3>
      </div>
    </div>
  </div>

  <div class="col-md-4 blog__wrapper__card">
    <div class="blog__wrapper__card__overlay">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>'/assets/images/card-01.png'" alt="" />
      </a>
      <div class="block-title">
        <h3>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </h3>
      </div>
    </div>
  </div>

  <div class="col-md-4 blog__wrapper__card">
    <div class="blog__wrapper__card__overlay">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>'/assets/images/card-01.png'" alt="" />
      </a>
      <div class="block-title">
        <h3>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </h3>
      </div>
    </div>
  </div> -->
</div>