<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
     <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/vnd.microsoft.icon"/>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-ico"/>
    <link href='http://fonts.googleapis.com/css?family=Concert+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
    <?php wp_head(); ?>
  </head>
  <body>
    
    <header id="header" class="container rel left">
      <div class="row">
      
      <nav class="main-menu left-menu small-5 columns">
        <ul class="no-bullet inline-list">
          <li>
            <?php $page = get_page_by_title('Nosso Mundo'); ?>
            <a href="<?php echo get_page_link($page->ID); ?>" title="Nosso mundo" class="display-block text-center">
              <span class="icon-home display-block centered"></span>
              <h5 class="text-upp">Nosso Mundo</h5>
            </a>
          </li>

          <li>
            <?php $page = get_page_by_title('Ensinos'); ?>
            <a href="<?php echo get_page_link($page->ID); ?>" title="Ensinos" class="display-block">
              <span class="icon-pencil display-block centered"></span>
              <h5 class="text-upp">Ensinos</h5>
            </a>
          </li>

          <li>
            <?php $page = get_page_by_title('Servicos'); ?>
            <a href="<?php echo get_page_link($page->ID); ?>" title="Serviços" class="display-block">
              <span class="icon-alphabetical display-block centered"></span>
              <h5 class="text-upp">Serviços</h5>
            </a>
          </li>
        </ul>
      </nav>
      
      <figure class="small-2 logo columns rel">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Página principal" class="display-block abs">
          <div class="icon-logo"></div>
        </a>
      </figure>

      <nav class="main-menu left-menu small-5 columns">
        <ul class="no-bullet inline-list right">
          <li>
            <?php  $category_id = get_cat_ID( 'Eventos' ); $category_link = get_category_link( $category_id ); ?>
            <a href="<?php echo esc_url( $category_link ); ?>" title="Eventos" class="display-block text-center">
              <span class="icon-baloons display-block centered"></span>
              <h5 class="text-upp">Eventos</h5>
            </a>
          </li>

          <li>
            <?php  $category_id = get_cat_ID( 'Noticias' ); $category_link = get_category_link( $category_id ); ?>
            <a href="<?php echo esc_url( $category_link ); ?>" title="Notícias" class="display-block">
              <span class="icon-post display-block centered"></span>
              <h5 class="text-upp">Notícias</h5>
            </a>
          </li>

          <li>
            <?php $page = get_page_by_title('Contato'); ?>
            <a href="<?php echo get_page_link($page->ID); ?>" title="Contato" class="display-block">
              <span class="icon-mail display-block centered"></span>
              <h5 class="text-upp">Contato</h5>
            </a>
          </li>
        </ul>
      </nav>

      </div><!-- //row -->
    </header><!-- //header -->