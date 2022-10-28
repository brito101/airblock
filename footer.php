<footer class="footer">
  <a href="<?php bloginfo('url'); ?>" title="Airblock">
    <h2>Air<span>block</span></h2>
  </a>

  <div class="container footer-info">
    <section>
      <h3>Páginas</h3>
      <?php
      wp_nav_menu([
        'menu' => 'footer',
        'container' => 'nav',
        'container_class' => 'footer-menu'
      ]);
      ?>
    </section>
    <section>
      <h3>Redes Sociais</h3>
      <ul>
        <li><a href="https://www.facebook.com/" title="Airblock no Facebook" target="_blank" rel="noreferrer" class="menu-icon">Facebook <img src="<?= get_stylesheet_directory_uri(); ?>/img/icons/facebook.svg" alt=""></a></li>
        <li><a href="https://www.instagram.com/" title="Airblock no Instagram" target="_blank" rel="noreferrer" class="menu-icon">Instagram <img src="<?= get_stylesheet_directory_uri(); ?>/img/icons/instagram.svg" alt=""></a></li>
      </ul>
    </section>
    <section>
      <h3>Contato</h3>
      <ul>
        <li><a href="https://wa.me/5511972952096" title="WhatsApp" target="_blank" rel="noreferrer" class="menu-icon">(11) 97295-2096 <img src="<?= get_stylesheet_directory_uri(); ?>/img/icons/whatsapp.svg" alt=""></a></li>
        <li>
          <a title="Contato por e-mail" href="mailto:contato@airblock.com.br" rel="noreferrer">contato@airblock.com.br</a>
        </li>
      </ul>
    </section>
    <section>
      <h3>Pagamentos</h3>
      <ul>
        <li>Cartão de Crédito <img src="<?= get_stylesheet_directory_uri(); ?>/img/icons/credit-card-regular.svg" alt="" class="icon-img"></li>
        <li>Boleto Bancário <img src="<?= get_stylesheet_directory_uri(); ?>/img/icons/barcode-solid.svg" alt="" class="icon-img"></li>
        <li>PagSeguro <img src="<?= get_stylesheet_directory_uri(); ?>/img/icons/pagseguro.svg" alt="" class="icon-img"></li>
      </ul>
    </section>
  </div>
  <?php
  $countries = WC()->countries;
  $base_address = $countries->get_base_address();
  $base_city = $countries->get_base_city();
  $base_state = $countries->get_base_state();
  $complete_address = "$base_address, $base_city, $base_state";
  ?>
  <small class="footer-copy"><?= bloginfo(); ?> &copy; <?= date('Y'); ?></small>
</footer>
<?php wp_footer(); ?>
<script src="<?= get_stylesheet_directory_uri(); ?>/js/slide.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/js/script.js"></script>
</body>

</html>