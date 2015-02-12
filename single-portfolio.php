<?php get_header(); ?>

  <div class="container">
    <div class="page-header">
      <div class="row">
        <div class="col-xs-9">
          <h1>Portfolio</h1>
        </div>
        <div class="col-xs-3 prev-next">
          <?php next_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>' ); ?>
          <a href="<?php bloginfo('url'); ?>/?p=46"><span class="glyphicon glyphicon-th"></span></a>
          <?php prev_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>' ); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8 img-portfolio">
        <?php
          $thumbnail_id = get_post_thumbnail_id();
          $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
         ?>
        <p><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive"></a></p>
      </div>

      <div class="col-sm-4">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <p><a href="<?php the_field('link'); ?>" class="btn btn-large btn-primary">View Final Piece <span class="glyphicon glyphicon-arrow-right"></span></a></p>
      </div>
    </div>
<?php get_footer(); ?>