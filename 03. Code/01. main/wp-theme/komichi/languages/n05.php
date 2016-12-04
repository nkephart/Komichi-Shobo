<?php
/**
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/* Template Name: n05 */

get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <h2 class="banner-books" title="書籍の紹介">書籍の紹介</h2>
      <div class="books-header cf">
        <nav class="books-nav">
          <ul>
            <li class="n01"><a href="/books" title="全ての本">全ての本
            </a></li><li class="n02"><a href="/category/n02" <?php body_class(); ?> title="こころの健康">こころの健康
            </a></li><li class="n03"><a href="/category/n03" <?php body_class(); ?> title="からだの健康">からだの健康
            </a></li><li class="n04"><a href="/category/n04" <?php body_class(); ?> title="社会・思想・哲学">社会・思想・哲学
            </a></li><li class="n05"><a href="/category/n05" <?php body_class(); ?> title="ノンフィクション">ノンフィクション
            </a></li><li class="n06"><a href="/category/n06" <?php body_class(); ?> title="文学・絵本">文学・絵本
            </a></li><li class="n07"><a href="/category/n07" <?php body_class(); ?> title="英語の教え方・学び方">英語の教え方・学び方
            </a></li>
            <li>
              <form class="search-form" method="get" action="<?php bloginfo('url'); ?>/">
                <label class="search-text" for="s"></label>
                <input class="search-field" placeholder="検索 ..." type="text" name="s" value="<?php echo $_GET['s']; ?>" />
                <input class="search-submit" type="image" value="検索">
              </form>
            </li>
          </ul>
        </nav>
      </div>

      <?php
      $slug = get_queried_object()->slug;
      $args = array(
        'post_type' => 'books',
        'paged' => $paged,
        'taxonomy' => 'category',
        'category_name' => 'n05'
      );
      $post_loop = new WP_Query( $args );
      $max_num_pages = $post_loop->max_num_pages; // Set pages info for pagination

      numeric_nav( $max_num_pages ); // Pagination

      while ( $post_loop->have_posts() ) : $post_loop->the_post();
        get_template_part( 'content', 'books' );
      endwhile;

      numeric_nav( $max_num_pages ); // Pagination
      wp_reset_postdata(); // Clean-up
      ?>

    </main><!-- .site-main -->
  </div><!-- .content-area -->
<?php get_footer(); ?>
