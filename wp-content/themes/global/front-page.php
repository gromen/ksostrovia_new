<?php get_header(); ?>





  <h1 class="h2 no-margin-top">Aktualności</h1>

<?php
  $count = 0;
  $args = array( 'post_type' => 'aktualnosci', 'posts_per_page' => 3 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
  $count++;
?>




      <div class="row">
        <div class="small-12 column">

          <!-- article post -->
          <article class="news-post <?php if($count === 1) : ?>first<?php endif; ?> clearfix">
            <div class="row align-middle">

              <div class="small-12 medium-shrink column">
                <!-- display image size 700x250px for first Post -->
                <?php if ( has_post_thumbnail() && $count === 1 ) : ?>
                    <figure class="news-post__image"> <?php the_post_thumbnail('img700x250'); ?>
                    </figure>

                <!-- if is not first post, display 250x250px image size -->
                <?php else : ?>
                    <figure class="news-post__image"> <?php the_post_thumbnail('img250x250'); ?>
                    </figure>
                <?php endif; ?>
              </div>

              <!-- if not first post -->
              <div class="small-12 <?php if( has_post_thumbnail() && $count >= 2 ) : ?>medium-7<?php endif; ?> column">
                <div class="news-post__content">
                  <h3 class="h4">
                    <a href="<?php the_permalink() ?>" title="Read more <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    <small class="news-post__published-date block"><?php the_date(); ?></small>
                  </h3>
                  <p class="news-post__body"><?php echo get_the_excerpt(); ?></p>
                </div>
              </div>

            </div><!-- .row  -->
          </article>

      </div>
    </div>



  <?php endwhile; // end of one post ?>

<?php

?>









<?php get_footer(); ?>