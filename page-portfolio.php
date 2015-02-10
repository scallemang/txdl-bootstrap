<?php
/*
Template Name: Portfolio Grid Template
*/
?>
<?php get_header(); ?>

  <div class="container">
    <div class="row">
      
      <div class="col-md-12">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="page-header">
            <h1><?php the_title(); ?></h1>
          </div>
          <?php the_content(); ?>
        <?php endwhile; else: ?>
          <div class="page-header">
            <h1>There isn&rsquo;t any content here!</h1>
            <p>Someone must have misplaced this amazing page&hellip;.</p>
          </div>
        <?php endif; ?>
     </div>
    </div>

    <div class="row">
      <?php
        $args = array( 
          'post_type' => 'portfolio'
        );
        $the_query = new WP_Query( $args );

      ?>

      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="col-sm-3 portfolio-piece">
        <?php
          $thumbnail_id = get_post_thumbnail_id();
          $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
         ?>
        <p><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive"></p>
        <h3><?php the_title(); ?>
      </div>

    <?php $portfolio_count = $the_query->current_post + 1; ?>
    <?php if ( $portfolio_count % 4 == 0): ?>
      </div>
      <div class="row">
    <?php endif; ?>
    <?php endwhile; endif; ?>
    </div>
<?php get_footer(); ?>