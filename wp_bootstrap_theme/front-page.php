<?php get_header(); ?>

  <!-- Page Content -->
  <div class="container">
      <div class="fade-in">
    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">

          <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
        
          <!-- Blog Post -->
        <div class="col-mb-4"><!-- class="card mb-4" -->
        <!--  
                <h2 class="card-title">
                  <?php the_title(); ?>
              </h2>
        -->
            <p class="card-text"><?php the_content(); ?></p>
        </div>

          <?php endwhile; ?>
          <?php else : ?>
          <p><?php __('No page found!'); ?></p>
        <?php endif; ?>

      </div>


    </div>
    <!-- /.row -->
      </div>
  </div>
  <!-- /.container -->

  <?php get_footer(); ?>
