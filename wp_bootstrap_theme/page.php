<?php get_header(); ?>

  <!-- Page Content -->
  <div class="container">
<div class="fade-in">
    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

          <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
        
          <!-- Blog Post -->
        <div class="col-mb-4"><!-- class="card mb-4" -->
          <div class="card-body">
            <h2 class="card-title">
                  <?php the_title(); ?>
              </h2>
            <p class="card-text"><?php the_content(); ?></p>
          </div>
        </div>

          <?php endwhile; ?>
          <?php else : ?>
          <p><?php __('No page found!'); ?></p>
        <?php endif; ?>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">            
        <!-- Side Widget -->
        <div class="card my-4">
       <!--   <h5 class="card-header">Side Widget</h5> -->
          <div class="card-body">
          <?php if(is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->
</div>
  </div>
  <!-- /.container -->

  <?php get_footer(); ?>
