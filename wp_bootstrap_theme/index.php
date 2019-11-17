<!--
Theme Name: WP Bootstrap Theme
Theme URI: http://alihussainfoto.com
Author: Ali Hussain Al-Mubarak
Author URI: http://alihussainfoto.com
Description: Photography Theme
Version: 1.0
Year: 2019
-->

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
        <div class="card mb-4">
            <?php if(has_post_thumbnail()) : ?>
              <div class="card-img-top">
              <?php the_post_thumbnail(); ?>
              </div>
              <?php endif; ?>
          <div class="card-body">
            <h2 class="card-title">
                  <?php the_title(); ?>
              </h2>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            <?php the_date(); ?>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <?php the_author(); ?></a>
          </div>
        </div>

          <?php endwhile; ?>
          <?php else : ?>
          <p><?php __('No post found!'); ?></p>
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
