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
  <div class="books-index cf">
    <header class="entry-header">
      <a href="<?php echo post_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail( 'books-thumbnails' ); ?></a>
      <?php
        the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
      ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- .entry-content -->
  </div>
</section><!-- #post-## -->
