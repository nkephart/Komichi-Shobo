<?php
/**
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/* Template Name: News */

get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <h2 class="banner-news" title="お知らせ">お知らせ</h2>

      <?php
//      global $post;

      // Get page contents
//      $page_loop = new WP_Query('page_id='.$post->ID);
//      while ( $page_loop->have_posts() ) : $page_loop->the_post();
//        the_content();
//      endwhile;
//      wp_reset_postdata(); // Clean-up

      // Get specified posts data
      $args = array(
        'post_type' => array( 'news', 'editor' ),
        'paged' => $paged
      );      
      $loop = new WP_Query( $args );
      // Set pages info for pagination
      $max_num_pages = $loop->max_num_pages;

      numeric_nav( $max_num_pages ); // Pagination

      while( $loop->have_posts() ) : $loop->the_post();
        get_template_part( 'content', 'news' );
      endwhile;

//      $loop = get_posts( $args );
//      foreach( $loop as $post ) {
//        setup_postdata( $post );
//        get_template_part( 'content', 'news' );
//      }
//      wp_reset_postdata();

      numeric_nav( $max_num_pages ); // Pagination
      wp_reset_postdata(); // Clean-up
      ?>

    </main><!-- .site-main -->
  </div><!-- .content-area -->
<?php get_footer(); ?>
