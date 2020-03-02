<?php get_header();?>
<?php $term = $wp_query->get_queried_object();?>
<div class="container" style="margin-top: 60px; margin-bottom: 35px;">
  <div class="row">
    <div class="col-sm-12">
      <h1 style="text-transform: capitalize;margin-bottom: 30px;" class="text-center">
        <?php if( $term != null ): ?>
          Tagged Under: <?php echo $term->name; ?>
        <?php endif;?>
      </h1>
      <?php if (have_posts()) : ?>
      <ul class='article-list three-list list-unstyled' style='padding-left: 0;'>
        <?php while ( have_posts() ) : the_post(); ?>
          <li class="orbit-article"><?php get_template_part( 'partials/content', 'article' );?></li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer();?>
