<?php get_header(); ?>





  <h1 class="h2 no-margin-top">Aktualności</h1>

<?php
// the query to set the posts per page to 3
$count = 0;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
  'post_type' => 'aktualnosci',
  'posts_per_page' => 3,
  'paged' => $paged
);

query_posts('post_type=aktualnosci&paged=&paged&posts_per_page=3'); ?>


<!-- the loop -->
<?php if ( have_posts() ) : while (have_posts()) : the_post();
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
                  <h3 class="h4 no-margin-top">

                    <a href="<?php the_permalink() ?>" title="Read more <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    <small class="news-post__published-date block"><?php the_date(); ?></small>
                  </h3>
                  <p class="news-post__body no-margin-bottom"><?php echo get_the_excerpt(); ?></p>
                </div>
              </div>

            </div><!-- .row  -->
          </article>

      </div>
    </div>



  <?php endwhile; // end of one post ?>

  <!-- pagination -->
  <?php previous_posts_link('Poprzednia strona',$post->max_num_pages); ?>
  <?php next_posts_link('Następna strona', $post->max_num_pages); ?>

  <?php else : ?>
    <!-- No posts found -->
    <div class="h2">nothin found !!!</div>
<?php endif; ?>


    </div>   <!-- news post column -->

    <!-- Sidebar -->
    <div class="medium-12 large-5 column">

      <?php get_sidebar('league_table'); ?>
      <?php get_sidebar('upcoming_matches'); ?>

    </div><!-- Sidebar -->

  </div><!-- .row -->

  <div class="row align-justify">
    <div class="small-12 medium-12 large-6 column">
      <div class="widget match-played">
        <div class="row">
          <div class="small-12 column">
            <h4 class="h4 no-margin-top">Poprzedni mecz - 02.09.2015</h4>
          </div>
        </div>
        <div class="row small-align-center align-justify align-middle">

          <div class="text-center column">
            <img src="<?php bloginfo('template_directory') ?>/src/images/logo.png" alt="Ks ostrovia klub sportowy piłka nożna">
          </div>

          <div class="small-12 medium-shrink column">

            <div class="score">
              <div class="row align-middle align-center">
                <div class="shrink column"><span class="score--number-big"><b>5</b></span></div>
                <div class="small-4 medium-5 column">
                  <div class="row align-center">
                    <div class="shrink column">
                      <p class="uppercase no-margin text-center"><small><b>do przerwy</b></small></p>
                    </div>
                    <div class="shrink column">
                      <span class="score--number-small"><b>2</b></span>
                      <span class="score--number-small"><b>0</b></span>
                    </div>
                  </div>
                </div>
                <div class="shrink column"><span class="score--number-big"><b>0</b></span></div>
              </div>
            </div>

          </div>

          <div class="text-center column">
            <img src="<?php bloginfo('template_directory') ?>/src/images/logo.png" alt="Ks ostrovia klub sportowy piłka nożna">
          </div>
        </div>
      </div>
    </div>
    <!-- next match -->
    <div class="small-12 medium-12 large-6 column bg-gray">
      <div class="widget match-played">
        <div class="row">
          <div class="small-12 column">
            <h4 class="h4 no-margin-top">Następny mecz - 02.09.2015</h4>
          </div>
        </div>
        <div class="row small-align-center align-justify align-middle">
          <div class="text-center column">
            <img src="<?php bloginfo('template_directory') ?>/src/images/logo.png" alt="Ks ostrovia klub sportowy piłka nożna">
          </div>
          <div class="small-12 medium-shrink column">
            <div class="score">
              <div class="row align-middle align-center">
                <div class="shrink column"><span class="score--number-big"><b>?</b></span></div>
                <div class="small-4 medium-5 column">
                  <div class="row align-center">
                    <div class="shrink column">
                      <p class="uppercase no-margin text-center"><small><b>do przerwy</b></small></p>
                    </div>
                    <div class="shrink column">
                      <span class="score--number-small"><b>?</b></span>
                      <span class="score--number-small"><b>?</b></span>
                    </div>
                  </div>
                </div>
                <div class="shrink column"><span class="score--number-big"><b>?</b></span></div>
              </div>
            </div>
          </div>
          <div class="text-center column">
            <img src="<?php bloginfo('template_directory') ?>/src/images/logo.png" alt="Ks ostrovia klub sportowy piłka nożna">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Nasi zawodnicy -->
  <section class="player">
    <div class="row">
      <div class="small-12 column">
        <h3 class="player__title h3">Nasz zespół / zawodnicy</h3>
      </div>
    </div>
    <div class="row small-up-1 medium-up-2 large-up-4">

      <div class="small-only-text-center column">
        <div class="player__body">
          <img class="player__img" src="<?php bloginfo('template_directory') ?>/src/images/player-1.jpg" alt="zawodnik Dawid Wilczewski lewy pomocnik">
          <div class="player__name uppercase h3">Janusz <br> Kowalski</div>
          <div class="player__position player__position--border">lewy obrońca</div>
        </div>
      </div>

      <div class="small-only-text-center column">
        <div class="player__body">
          <img class="player__img" src="<?php bloginfo('template_directory') ?>/src/images/player-1.jpg" alt="zawodnik Dawid Wilczewski lewy pomocnik">
          <div class="player__name uppercase h3">Janusz <br> Kowalski</div>
          <div class="player__position player__position--border">lewy obrońca</div>
        </div>
      </div>

      <div class="small-only-text-center column">
        <div class="player__body">
          <img class="player__img" src="<?php bloginfo('template_directory') ?>/src/images/player-1.jpg" alt="zawodnik Dawid Wilczewski lewy pomocnik">
          <div class="player__name uppercase h3">Janusz <br> Kowalski</div>
          <div class="player__position player__position--border">lewy obrońca</div>
        </div>
      </div>

      <div class="small-only-text-center column">
        <div class="player__body">
          <img class="player__img" src="<?php bloginfo('template_directory') ?>/src/images/player-1.jpg" alt="zawodnik Dawid Wilczewski lewy pomocnik">
          <div class="player__name uppercase h3">Janusz <br> Kowalski</div>
          <div class="player__position player__position--border">lewy obrońca</div>
        </div>
      </div>

    </div>
  </section>

</main><!-- #content -->







<?php get_footer(); ?>