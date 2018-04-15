<?php get_header(); ?>
<?php
$test = 1;
if ( have_posts() ) : while ( have_posts() && $test != 6 ) : the_post();
$test = $test + 1;
if (!isset($grid)) { ?>

<!-- Popular posts -->

<section class='popular--posts'>
    <div class="popular--1">

        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('big-one'); ?></a>
        <div class='popular--posts--tag categories'>
            <p><?php the_category( ' ' ); ?></p>
        </div>
        <h2>
          <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a>
        </h2>
      </div>
<?php $grid = 'ok'; } else { ?>

  <div class="popular--2">
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('small'); ?>
    </a>

    <div class="popular--sub">
      <h4>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h4>
    </div>

  </div>

<?php } endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</section>

<!-- Featured post -->

<section class="featured--posts">
    <h5><span>FEATURED POSTS    </span></h5>
    <div class="featured--grid">
    <?php
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'Featured',
        'posts_per_page' => 3
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

      <a href="">
        <i class="fab fa-facebook-f"> 21562 Fans <span>LIKE</span></i>
      </a>
      <a href="#">
      <div class="color-twitter">
      <i class="fab fa-twitter"> 1401 Followers <span>FOLLOW</span> </i>
      </div>
      </a>
      <a href="#">
      <i class="fab fa-instagram"> 23358 Followers <span>FOLLOW</span> </i>
      </a>
    </div>

    <div class="featured--pub">
    </div>

  </div>
</section>

<div class="latest--title">
    <h5><span>LATEST POSTS     </span></h5>
</div>

<!-- latest posts -->

<section class="latest--posts">
<?php
$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 6
);
$arr_posts = new WP_Query( $args );

if ( $arr_posts->have_posts() ) :
  while( $arr_posts->have_posts() ):
    $arr_posts->the_post();
?>

    <div class="latest--posts--a">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured'); ?></a>
      <div class="categories">
        <?php the_category( ' ' ); ?>
      </div>
      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      <?php the_excerpt(); ?>
    </div>

<?php endwhile; endif; ?>
</section>

<div class="pagination--latest">

</div>
</div>

<?php get_footer(); ?>
