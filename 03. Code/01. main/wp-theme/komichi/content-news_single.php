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
  <a href="javascript:history.back();" class="link-previous">&lt;&lt;&nbsp;前のページに戻る</a>
  <div class="news-single">
    <header class="entry-header">
      <?php
        twentyfifteen_post_thumbnail();
        the_date('Y.n.j', '<time class="entry-date">','</time>');
        the_title( '<h3 class="entry-title">', '</h3>' );
      ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- .entry-content -->
  </div>
  <a href="javascript:history.back();" class="link-previous">&lt;&lt;&nbsp;前のページに戻る</a>
</section><!-- #post-## -->
