<?php get_header(); ?>

<div class="container-fluid">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <div class="entry">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
  <p><?php next_posts_link('&laquo; Old Posts') ?>
    <?php previous_posts_link('New Posts &raquo;') ?></p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
