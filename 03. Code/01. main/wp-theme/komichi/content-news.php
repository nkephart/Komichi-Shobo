<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="news-index cf">
    <header class="entry-header">
      <?php twentyfifteen_post_thumbnail(); ?>
      <time class="entry-date"><?php the_time('Y.n.j'); ?></time>
      <?php
      the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
      ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- .entry-content -->
  </div>
</section><!-- #post-## -->
