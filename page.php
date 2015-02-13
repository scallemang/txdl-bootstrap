<?php get_header(); ?>

  <div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
      
      <div class="col-md-9">
        <p class="pull-right visible-xs">
          <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle sidebar</button>
        </p>
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
      <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>