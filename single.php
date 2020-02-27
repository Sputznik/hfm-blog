<?php get_header();?>
  <div class="container" style="margin-top: 80px;">
    <div class="row">
      <div class="col-md-8">
        <?php if( have_posts() ): while( have_posts() ) : the_post();?>
        <div class="entry-header text-center">
          <h1 class="entry-title"><?php the_title();?></h1>
        </div>
        <div class="entry-content">
          <p class="excerpt text-center"><em><?php echo excerpt(30);?></em></p>
          <div class="main-content">
            <?php the_content();?>
          </div>
        </div>
        <div class="entry-meta">
          <span class="tags">
            Tagged: <?php the_tags( '', ', ', '' ); ?>
          </span>
        </div>
        <?php endwhile;endif;?>
      </div>
      <div class="col-md-4">
        <?php echo do_shortcode( "[sidebar]" );?>
      </div>
    </div>
  </div>
<?php get_footer();?>
