<?php get_header(); ?>


<div class="category">
  <h2>Lifestyle</h2>
</div>

<section class="featured--posts">
    <div class="featured--grid">
    <?php
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'lifestyle',
        'posts_per_page' => 8
      );
      $arr_posts = new WP_Query( $args );

      if ( $arr_posts->have_posts() ) :
        while( $arr_posts->have_posts() ):
          $arr_posts->the_post();
    ?>
    <div class="featured">
      <div class="featured--img">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('featured'); ?>
        </a>
      </div>
      <div class="featured--txt">
        <div class="categories">
          <?php the_category( ' ' ); ?>
        </div>
        <h4>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h4>
          <?php the_excerpt(); ?>
      </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
      <div class="featured--grid0">
    <div class="featured--media">
      <p>Twitter</p>
      <p>Facebook</p>
      <p>Instragram</p>
    </div>

    <div class="featured--pub">
      <img src="assets/images/pub.jpg" alt="" width="300" height="450">
    </div>

  </div>
</section>
</div>
<?php get_footer(); ?>
