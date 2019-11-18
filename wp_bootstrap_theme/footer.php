<br>
<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 text-white bg-dark">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><?php bloginfo('name'); ?></h5>
        <p><?php bloginfo('description'); ?></p>

      </div>

      <div class="col-md-2 mx-auto">

        <?php if(is_active_sidebar('footer_1')) : ?>
            <?php dynamic_sidebar('footer_1'); ?>
          <?php endif; ?>

      </div>

      <div class="col-md-2 mx-auto">

        <?php if(is_active_sidebar('footer_2')) : ?>
            <?php dynamic_sidebar('footer_2'); ?>
          <?php endif; ?>

      </div>
      <div class="col-md-2 mx-auto">

        <?php if(is_active_sidebar('footer_3')) : ?>
            <?php dynamic_sidebar('footer_3'); ?>
          <?php endif; ?>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->


  <!-- Social media -->
    <ul class="list-unstyled list-inline text-center">
    <?php if(is_active_sidebar('social_media')) : ?>
            <?php dynamic_sidebar('social_media'); ?>
          <?php endif; ?>
  </ul>
  <!-- Social media -->

    <hr style="border: 0.5px solid #222;">
    
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">&copy; <?php echo Date('Y'); ?>
    <a href="#"> <?php bloginfo('name'); ?></a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    <?php wp_footer(); ?>
  <!-- Bootstrap core JavaScript -->
  <script src="<?php bloginfo('template_url'); ?>/jquery/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
