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
  <div class="books-single">
    <header class="entry-header">
      <ul class="entry-image">
        <li class="post-thumbnail"><?php the_post_thumbnail( 'books-thumbnails' ); ?>
        </li><?php $url = post_image_capture(); if (  !empty( $url ) ) { echo '<li><img src="' . $url . '" class="entry-subimage" /></li>'; } ?>
      </ul>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php
      the_title( '<h3 class="entry-title">', '</h3>' );
      the_content();
      ?>
    </div><!-- .entry-content -->
  </div>
  <a href="javascript:history.back();" class="link-previous">&lt;&lt;&nbsp;前のページに戻る</a>
</section><!-- #post-## -->
