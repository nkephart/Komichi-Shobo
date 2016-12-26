<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/* Template Name: Top */

get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php
      $loop = new WP_Query('page_id='.$post->ID);

      while ( $loop->have_posts() ) : $loop->the_post();
        the_content();
      endwhile;

      wp_reset_postdata();
      ?>

        <section class="index-pickup section-wrapper">
          <h2>話題の書籍</h2>
          <ol class="pickup-books cf">
            <?php
          unset( $args, $loop );
          $args = array(
            'post_type' => 'books',
            'tag' => 'pickup',
            'posts_per_page' => '3',
            'paged' => 0
          );
          $loop = new WP_Query( $args );

          while ( $loop->have_posts() ) : $loop->the_post();
          ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <?php twentyfifteen_post_thumbnail(); ?>
                </a>
                <span <?php post_class(); ?>></span>
                <span><?php the_title( sprintf( '<a href="%s">『', esc_url( get_permalink() ) ), '』</a>' ); ?></span>
                <?php echo '<span>' .get_post(get_post_thumbnail_id())->post_excerpt. '</span>'; ?>
              </li>
              <?php
          endwhile;
          wp_reset_postdata();
          ?>
          </ol>
        </section>

        <section class="index-books section-wrapper">
          <h2>書籍の紹介</h2>
          <ol class="new-books cf">
            <?php
          unset( $args, $loop );
          $args = array(
            'post_type' => 'books',
            'posts_per_page' => '3',
            'paged' => 0
          );
          $loop = new WP_Query( $args );

          while ( $loop->have_posts() ) : $loop->the_post();
          ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <?php twentyfifteen_post_thumbnail(); ?>
                </a>
                <span><?php the_title( sprintf( '<a href="%s">『', esc_url( get_permalink() ) ), '』</a>' ); ?></span>
                <?php echo '<span>' .get_post(get_post_thumbnail_id())->post_excerpt. '</span>'; ?>
              </li>
              <?php
          endwhile;
          wp_reset_postdata();
          ?>
          </ol>
        </section>

        <section class="index-editorial section-wrapper cf">
          <h2>編集部より</h2>
          <?php
        unset ( $args, $loop );
        $args = array(
          'post_type' => 'editor',
          'posts_per_page' => '1',
          'paged' => 0
        );
        $loop = new WP_Query( $args );

        while ( $loop->have_posts() ) : $loop->the_post();
        ?>
            <h3><?php the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?>&nbsp;<?php the_date('Y.m.d', '<time>', '</time>'); ?></h3>
            <?php the_content(); ?>
              <a href="<?php echo esc_url( get_permalink() ); ?>" class="link-more">続きを読む&nbsp;&gt;&gt;</a>
              <?php
        endwhile;
        wp_reset_postdata();
        ?>
        </section>

        <section class="index-news section-wrapper cf">
          <h2>お知らせ</h2>
          <ul>
            <li>
              <ol class="news-contents">
                <?php
              unset( $args, $loop );
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => '4',
                'paged' => 0
              );
              $loop = new WP_Query( $args );

              while ( $loop->have_posts() ) : $loop->the_post();
              ?>
                  <li>
                    <time>
                      <?php the_time('Y.m.d'); ?>
                    </time>
                    <?php the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?>
                  </li>
                  <?php
              endwhile;
              wp_reset_postdata();
              ?>
              </ol>
            </li>
          </ul>
          <a href="/test/news" class="link-more">一覧へ&nbsp;&gt;&gt;</a>
        </section>
    </main>
    <!-- .site-main -->
  </div>
  <!-- .content-area -->
  <?php get_footer(); ?>