<?php get_header(); ?>

  <div class="container">
    <div class="row">
      
      <div class="col-md-9">
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
      <div class="col-md-3">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>
<?php get_footer(); ?>