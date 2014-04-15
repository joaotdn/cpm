<?php get_header(); ?>

    <section class="page-wrapper container rel">
      <header class="container page-header text-center">
        <h3 class="text-upp">Últimos eventos</h3>
      </header>
      
      <div class="blue-sky left page-content">
        <div class="row">
          <p class="container white">Venha comemorar conosco, fique por dentro de todos os eventos realizados pelo Colégio Primeiro Mundo, sinta-se convidade para participar.</p>
        
          <ul class="small-block-grid-4 list-news-posts">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li>
              <figure class="th">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php
                    if(has_post_thumbnail()) {
                      the_post_thumbnail( 'events-thumb' );
                    }
                  ?>
                </a>
              </figure>
              
              <article class"container left">
                <h6 class="text-upp">
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h6>
                <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_excerpt(100); ?></a></p>
              </article>
            </li>
            <?php endwhile; else: endif; ?>
          </ul>

          <nav class="nav-news-page small-12 columns left">
            <div class="small-4 small-push-4 text-center">
              <?php
                global $wp_query;
                $big = 999999999; // need an unlikely integer

                echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages,
                  'prev_text'    => __('<div class="icon-prev-event"></div>'),
                  'next_text'    => __('<div class="icon-next-event"></div>'),
                ) );
              ?>
            </div>
          </nav>
        </div><!-- //row -->
      </div>
    </section><!-- //page-wrapper -->

<?php get_footer(); ?>
