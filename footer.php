 <footer id="footer" class="container">
          <div class="row rel line-footer">
            
            <div id="newsletter" class="small-4 columns">
              <header class="small-12 left">
                <h4 class="white footer-wd">Receba nossa Newsletter</h4>
              </header>
              <div class="icon-bg-newsletter">
                <form action="" class="small-12 left">
                  <div class="row collapse">
                    
                    <div class="small-8 columns abs n-email n-input">
                      <input type="text" placeholder="Digite seu email">
                    </div>
                    
                    <div class="small-4 columns abs n-send n-input">
                      <input type="submit" class="button postfix text-upp font-cursive" value="Enviar">
                    </div>

                  </div>
                </form>
              </div>
            </div><!-- //newsletter -->

            <div id="we-are" class="small-4 columns">
              <header class="small-12 left">
                <h4 class="white footer-wd text-right small-pull-1">Nossa Estrutura</h4>
              </header>
              <div class="icon-bg-estrutura">
                <p class="small-8 right"><a href="#" title="" class="blue">Conheça a estrutura do nosso colégio</a></p>
              </div>
            </div><!-- //Nossa estrutura -->

            <div id="private-area" class="small-4 columns">
              <header class="small-12 left">
                <h4 class="white footer-wd text-right small-pull-1 text-upp">Área restrita</h4>
              </header>
              <div class="icon-bg-restrita">
                <p class="small-7 right"><a href="#" title="" class="blue">Área destinada para os professores</a></p>
              </div>
            </div><!-- //Area restrita -->

            <div class="div small-12 columns text-center" id="address">
              <p class="font-cursive"><strong class="text-upp">Unidade Manaíra:</strong> Avenida França, 409 | (83) 3226 6147</p>
              <p class="font-cursive"><strong class="text-upp">Unidade Bessa:</strong> Avenida Argemiro de Figueiredo, 2575 | (83) 3031-4808</p>
            </div>

            <div class="social-buttons small-1 abs">
              <a href="#" title="Facebook" class="display-block icon-facebook left"></a>
              <a href="#" title="Facebook" class="display-block icon-instagram right"></a>
            </div>

            <div class="small-12 columns credits abs">
              <p class="white left">&copy; 2014. Colégio Primeiro Mundo. Todos os direitos reservados.</p>
              <a href="http://www.wfbd.com.br/" target="_blank" class="display-block icon-developer right"></a>
            </div>

          </div><!-- //row -->
        </footer><!-- //footer -->

      </div>
    </div><!-- //sky -->

    <div id="video-modal" class="reveal-modal" data-reveal>
      <div class="play-video full-width left">
        
      </div>
      <a class="close-reveal-modal">&#215;</a>
    </div>

    <script>
        //<![CDATA[
        var getData = {
            'urlDir':'<?php bloginfo('template_directory'); ?>/'
        }
        //]]>
    </script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>