<?php get_header(); ?>

  <div class="container">
    <div class="row">
      
      <div class="col-md-9">
        <div class="page-header">
          <h1><?php wp_title(''); ?></h1>
        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p>By <?php the_author(); ?> on <?php echo the_time('l, F jS, Y'); ?> in <?php the_category(', '); ?>. <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></p>
          </article>
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