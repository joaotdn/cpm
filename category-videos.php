<?php get_header(); ?>

    <section class="page-wrapper container rel">
      <header class="container page-header text-center">
        <h3 class="text-upp">Últimos vídeos</h3>
      </header>
      
      <div class="blue-sky left page-content">
        <div class="row">
          <p class="container white">Fique informado com tudo o que acontece dentro do Colégio Primeiro Mundo.</p>
        
          <ul class="large-block-grid-3 list-news-posts">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li>
            <div class="g-video">
              <figure class="th" data-video="">
                <a href="#" title="<?php the_title(); ?>" data-reveal-id="video-modal" data-reveal>
                  <?php
                    if(has_post_thumbnail()) {
                      the_post_thumbnail( 'videos-thumb' );
                    }
                  ?>
                </a>
              </figure>
              
              <article class"container left">
                <h6 class="text-upp">
                  <a href="#" title="<?php the_title(); ?>" data-reveal-id="video-modal" data-reveal><?php the_title(); ?></a>
                </h6>
              </article>
              <div class="this-video"><?php $video = get_field('video'); echo $video; ?></div>
            </div>
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
