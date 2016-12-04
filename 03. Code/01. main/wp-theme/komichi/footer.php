<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

  <footer role="contentinfo" id="global-footer" class="cf">
    <ul class="banner-wrapper">
      <li><a href="http://www.custom.komichi.co.jp/" target="_blank" class="footer-banner-1" title="こみち書房カスタム出版"></a></li>
      <li><a href="http://www.softwater-japan.com/" target="_blank" class="footer-banner-2" title="快適軟水生活"></a></li>
    </ul>
    <nav role="navigation" class="footer-navigation cf">
      <ol>
        <li><a href="<?php echo esc_url( home_url() ); ?>" title="TOP">TOP</a></li>
        <li><a href="/news" title="お知らせ">お知らせ</a></li>
        <li><a href="/books" title="書籍の紹介">書籍の紹介</a></li>
        <li><a href="/bs" title="書店さまへ">書店さまへ</a></li>
        <li><a href="/order" title="本を購入される方へ">本を購入される方へ</a></li>
      </ol>
      <ol>
        <li><a href="/company" title="会社について">会社について</a></li>
        <li>&nbsp;</li>
        <li><a href="#" title="お問い合わせ">お問い合わせ</a></li>
        <li><a href="/privacy" title="プライバシーポリシー">プライバシーポリシー</a></li>
      </ol>
      <ul class="footer-company-info">
        <li>こ&nbsp;み&nbsp;ち&nbsp;書&nbsp;房</li>
        <li>&#12306;160-0012&nbsp;東京都新宿区南元町11-3</li>
        <li>TEL:&nbsp;03-3350-5571</li>
        <li>FAX:&nbsp;03-3350-5572</li>
      </ul>
    </nav>
    <div class="footer-copyright">
      <p>&copy;&nbsp;komichi shobo. All rights reserved. No reproduction or republication without written permission.<br />掲載の記事・写真・イラスト等のすべてのコンテンンツのすべて無断複写・転載を禁じます。</p>
    </div>
  </footer>
</div><!-- .site-content -->
</div><!-- .site -->
<?php wp_footer(); ?>
</body>
</html>