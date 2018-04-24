<?php get_header(); ?>

<section class="featured--posts">
    <div class="featured--grid">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 <?php the_title(); ?>
 <?php the_content(); ?>

<?php endwhile; ?>
<?php endif; ?>
</div>
<div class="featured--grid0">
<div class="featured--media">
<p>Twitter</p>
<p>Facebook</p>
<p>Instragram</p>
</div>

<div class="featured--pub">
  <?php get_sidebar(); ?>
</div>

</div>
</section>
</div>
<?php get_footer(); ?>
