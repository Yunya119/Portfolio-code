
<div class="pagetop"><a href="#wrap"><i class="fa-solid fa-chevron-right"></i></a></div>

<div class="full-bg">
<section class="reserve">
    <div class="reserve__inner fadeIn1000ms">
        <a class="reserve__inner--link" href="<?php echo esc_url(home_url()); ?>/contact">
            <span class="reserve__inner--link--title">reserve
                <span class="sub">予約はこちらから
                </span>
            </span>
        </a>
    </div>

    <div class="reserve__list fadeIn1000ms">
        
        <a class="reserve__list--link" href="<?php echo esc_url(home_url()); ?>/salons">
            salons
        <span class="sub">店舗一覧</p>
        </a>

        <a class="reserve__list--link" href="https://www.instagram.com/valentine_____rose?igsh=aGdobmVzZGNkenl0" target="_blank">
            sns
        <span class="sub">インスタグラム</p>
        </a>
    </div>  

</section>

<footer class="full-bg">
    <a href="<?php echo esc_url(home_url()); ?>" class="footer__h2 fadeIn1000ms">
        <div class="footer__h2--logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Valentine ROSEのロゴ" loading="lazy" width="50" height="50">
        </div>
        <div class="footer__h2--title">
            valentine<br>rose
        </div>
    </a>

    <p class="footer__nav">
        <ul class="footer__nav--list">
            <li class="footer__nav--list--inner fadeUp">
                <a href="<?php echo esc_url(home_url()); ?>" class="border-right uppercase">top</a>
                <a href="<?php echo esc_url(home_url()); ?>/concept" class="border-right padding-left">concept</a>
                <a href="<?php echo esc_url(home_url()); ?>/pricemenu" class="border-right-response padding-left">price</a>
            </li>
            <li class="footer__nav--list--inner fadeUp">
                <a href="<?php echo get_post_type_archive_link('news'); ?>" class="border-right padding-left">news</a>
                <a class="padding-left" href="<?php echo esc_url(home_url()); ?>/contact">reserve</a>
            </li>
        </ul>

        <ul class="footer__nav--list--response">
            <li class="footer__nav--list--inner fadeUp">
                <a class="footer-border uppercase" href="<?php echo esc_url(home_url()); ?>">top</a>
                <a class="footer-border" href="<?php echo esc_url(home_url()); ?>/concept" >concept</a>
                <a class="footer-border" href="<?php echo esc_url(home_url()); ?>/pricemenu">price</a>
                <a class="footer-border" href="<?php echo get_post_type_archive_link('news'); ?>">news</a>
                <a class="footer-border" href="<?php echo esc_url(home_url()); ?>/contact">reserve</a>
            </li>
        </ul>

        <p class="footer__nav--list--inner  space fadeUp">
            <a href="#" class="border-right">privacy policy</a>
            <a href="#">site map</a>
        </p>
    </p>

    <p class="footer__copylight fadeUp">
        © 2024 Valentine Rose., Ltd. All rights Reserved.
    </p>

</footer>
</div>
<?php wp_footer(); ?><!-- wpに必ず必要な一行-->

</body>
</html>