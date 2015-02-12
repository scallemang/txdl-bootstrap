<?php get_header(); ?>

  <div class="container">
    <div class="page-header">
      <div class="row">
        <div class="col-xs-9">
          <h1>Portfolio</h1>
        </div>
        <div class="col-xs-9 prev-next">
          <?php next_post_link( '%link', 'Left' ); ?>
          <?php prev_post_link( '%link', 'Right' ); ?>
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
      </div>
    </div>
<?php get_footer(); ?>