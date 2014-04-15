<?php get_header(); ?>

    <nav id="main-slide" class="container left rel">
      <div class="slide-mask container">
          <?php       
            query_posts('showposts=3&category_name=banners'); 
            if (have_posts()): while (have_posts()) : the_post();
            $img = wp_get_attachment_image_src( get_post_thumbnail_id(returnId()), 'full' );
          ?>
          
          <figure class="left container" style="background-image: url(<?php echo $img[0]; ?>); background-size: cover;"></figure>

          <?php endwhile; else: endif; wp_reset_query(); ?>
      </div>

      <div id="nav" class="abs">
      </div>
    </nav>

    <div class="wrapper home-content container rel">
      <div class="sky-clouds abs"></div>      
      <div class="blue-sky abs">

        <div class="row" style="padding-top:60px;">
          
          <section id="last-news" class="small-8 columns">
            <header class="small-12 left">
              <div class="icon-cloud">
                <h5 class="text-upp soft left">Últimas Notícias</h5>
              </div>
            </header>
            
            <div class="small-12 border-dashed left">
            
            <div class="bg-news small-12 left rel">

            <nav class="nav-news small-6 left">
              <?php       
                query_posts('showposts=3&category_name=noticias'); 
                if (have_posts()): while (have_posts()) : the_post();
              ?>
              <figure class="news-thumb rel">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="display-block left">
                  <?php
                    if(has_post_thumbnail()) {
                      the_post_thumbnail( 'news-thumb' );
                    }
                  ?>
                </a>
              </figure>
              <?php endwhile; else: endif; wp_reset_query(); ?>
            </nav>

            <div class="hide-navs" style="display:none;"></div>

            <nav class="list-news small-6 abs">
              <?php       
                query_posts('showposts=3&category_name=noticias'); 
                if (have_posts()): while (have_posts()) : the_post();
              ?>
              <a href="<?php the_permalink(); ?>" class="display-block left rel active" title="<?php the_title(); ?>">
                <div class="icon-hover-news abs"></div>
                <div class="icon-news-active abs"></div>
                <h6 class="text-upp rel left"><?php the_title(); ?></h6>                
              </a>
              <?php endwhile; else: endif; wp_reset_query(); ?>
            </nav>

            </div>

            </div>

            <div class="container left" style="margin-top:20px;">
              <div class="icon-bt-more left">
                <?php  $category_id = get_cat_ID( 'Noticias' ); $category_link = get_category_link( $category_id ); ?>
                <span class="left text-upp font-cursive"><a href="<?php echo esc_url( $category_link ); ?>" title="Mais notícias">Mais Notícias</a></span>
              </div>
            </div>
          </section><!-- //Ultimas noticias -->

          <section id="videos" class="small-4 columns">
            <header class="small-12 left">
              <div class="icon-small-cloud">
                <h5 class="text-upp soft left">Tv Mundo</h5>
              </div>
            </header>

            <div class="icon-bg-videos rel left">
              <?php       
                query_posts('showposts=1&category_name=videos'); 
                if (have_posts()): while (have_posts()) : the_post();
                $video = get_field('video');
              ?>
              <div class="g-video">
                <figure class="small-12 left rel thumb-video get-video">
                  <a href="#" class="icon-play abs display-block" data-postid="<?php echo returnId(); ?>" data-reveal-id="video-modal" data-reveal></a>
                  <a href="#" title="" data-postid="<?php echo returnId(); ?>" data-reveal-id="video-modal" data-reveal>
                  <?php
                    if(has_post_thumbnail()) {
                      the_post_thumbnail( 'videos-thumb' );
                    }
                  ?>
                  </a>
                </figure>

                <h5 class="video-title small-12 left text-upp text-center get-video">
                  <a href="#" title="" data-postid="<?php echo returnId(); ?>" data-postid="<?php echo returnId(); ?>" data-reveal-id="video-modal" data-reveal><?php the_title(); ?></a>
                </h5>
                <div class="this-video"><?php echo $video; ?></div>
                <?php endwhile; else: endif; wp_reset_query(); ?>
              </div>

              <div class="container left">
                <div class="icon-bt-more right">
                  <?php  $category_id = get_cat_ID( 'Videos' ); $category_link = get_category_link( $category_id ); ?>
                  <span class="left text-upp font-cursive"><a href="<?php echo esc_url( $category_link ); ?>" title="Mais notícias">Mais Vídeos</a></span>
                </div>
              </div>
            </div>
          </section><!-- //Videos -->

          <section id="events" class="small-12 columns">
            <header class="small-12 left">
              <div class="icon-cloud left">
                <h5 class="soft left text-upp">Últimos eventos</h5>
              </div>

              <!--<div class="nav-events right">
                <a href="" class="display-block icon-prev-event left"></a>
                <a href="" class="display-block icon-next-event right"></a>
              </div>-->
            </header>

            <nav class="small-12 left lists-of-events">

              <ul class="small-block-grid-4 list-events">
                <?php       
                  query_posts('showposts=4&category_name=eventos'); 
                  if (have_posts()): while (have_posts()) : the_post();
                ?>
                <li>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <figure class="th">
                      <?php
                        if(has_post_thumbnail()) {
                          the_post_thumbnail( 'events-thumb' );
                        }
                      ?>
                    </figure>
                    <h5 class="text-upp"><?php the_title(); ?></h5>
                    <p><?php echo get_excerpt(100); ?></p>
                  </a>
                </li>
                <?php endwhile; else: endif; wp_reset_query(); ?>       
              </ul>
              
              <div class="container left">
                <div class="icon-bt-more right">
                  <?php  $category_id = get_cat_ID( 'Videos' ); $category_link = get_category_link( $category_id ); ?>
                  <span class="left text-upp font-cursive"><a href="<?php echo esc_url( $category_link ); ?>" title="Mais Eventos">Mais Eventos</a></span>
                </div>
              </div>
            </nav>
          </section>
          
        </div><!-- //row -->

<?php get_footer(); ?>
