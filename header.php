<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALENTINE ROSE</title>
    <?php get_template_part('meta-data'); ?>
    <link rel="canonical" href="https://sunny-raly.fool.jp">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">

    <?php if( is_user_logged_in() ) : ?>
        <style type="text/css">
        @media screen and (min-width: 768px) {
        .header {
        margin-top: 32px;
        }
    }
        </style>
    <?php endif; ?>

    <script type="text/javascript">
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>

    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <a href="<?php echo esc_url(home_url()); ?>" class=" fadeUp">
                <h1 class="header__h1">
                    <div class="header__h1--logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="VALENTINE ROSEのロゴ" loading="lazy" width="32" height="32">
                    </div>
                    <p class="header__h1--response">valentine<br>rose</p>
                </h1>
            </a>
            
        
            <div class="header__list">
                <div class="header__list--btn fadeUp">
                    メニュー
                    <span></span>
                    <span></span>
                    <span></span>
                </div>    
            </div>

            <nav id="hamburger__nav" class=" fadeUp">
                <ul class="hamburger__nav--list">
                    <li><a href="<?php echo esc_url(home_url()); ?>">home</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/concept">salon concept</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/pricemenu">price menu</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/salons">salons</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('news'); ?>">news</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/contact">reserve</a></li>
                </ul>
            </nav>

            <ul class="hamburger__nav--response">
                <li class="fadeUp">
                    <a href="<?php echo esc_url(home_url()); ?>/concept">
                        concept
                    </a>
                </li>

                    <li class="fadeUp">
                        <a href="<?php echo esc_url(home_url()); ?>/pricemenu">
                            price
                        </a>
                    </li>

                    <li class="fadeUp">
                        <a href="<?php echo get_post_type_archive_link('news'); ?>">
                            news
                        </a>
                    </li>
                    
                    <li class="fadeUp">
                        <a href="<?php echo esc_url(home_url()); ?>/contact" class="nav_reserve">
                            <i class="fas fa-calendar-alt"></i>ご予約
                        </a>
                    </li>
            </ul>
        </nav>
    </header>