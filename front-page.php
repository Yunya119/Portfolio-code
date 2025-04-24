<?php get_header(); ?>

<section class="headerFV">
    <h2 class="headerFV__h2 fadeUp">
        <span class="pc-only">自分を知っている人は<br></span>
        <span class="mobile-only">自分を<br>
        知っている人は<br></span>
        美しい。
    </h2>
</section>

<section class="news">
    
    <div class="news__inner" id="news">
        <h2 class="title fadeIn1000ms">
            news
            <p class="subtitle">お知らせ</p>
        </h2>

        <a href="<?php echo get_post_type_archive_link('news'); ?>" class="news__item--more--response fadeIn1000ms">
            view all
        </a>
    </div>

    <div class="news__blog fadeIn1000ms">
        
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            
        <div class="news__blog--inner">
            <a href="<?php the_permalink(); ?>"  class="news-link">        
                <div class="news__date">
                    <?php echo get_the_date(); ?>
                </div>
                
                <div class="news__title">
                    <?php the_title(); ?>
                </div>

                <div class="news__category">
                <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        foreach ($categories as $category) {
                            echo '<span>' . esc_html($category->name) . '</span> ';
                        }
                    }
                    ?>
                </div>
            </a>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <a href="<?php echo get_post_type_archive_link('news'); ?>" class="news__item--more fadeIn1000ms">
        view all
    </a>

</section>

<section class="concept"><a name="concept"></a>
    <div class="concept__inner">
        <div class="concept__inner--item fadeIn1000ms">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top-concept_01-sp.jpg" alt="脱毛の施術風景" loading="lazy" width="315" height="247">
        </div>

        
        <div class="concept__inner--item--response fadeIn1000ms">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top-concept_01-pc.jpg" alt="脱毛の施術風景" loading="lazy" width="865" height="680">
        </div>

        <div class="concept__inner--item--title">
            <h2 class="title fadeIn1000ms">
                concept
                <p class="subtitle">コンセプト</p>
            </h2>

            <h3 class="concept__h3 fadeIn1000ms">
                <p class="mobile-only">
                洗練された<br>
                ワンランク上の<br>
                女性を目指す
                </p>
                <p class="pc-only">
                洗練されたワンランク上の女性を目指す
                </p>
            </h3>
        </div>
    </div>

    <div class="concept__inner--response fadeIn1000ms">
        <div class="concept__inner--response--item fadeIn1000ms">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top-concept_02-pc.jpg" alt="受付の様子" loading="lazy" width="540" height="210">
        </div>

    <p class="concept__inner fadeIn1000ms">
        バレンタインローズでは脱毛の完了はゴールではなく、<br class="pc-only">あくまでもお客様がワンランク上の女性に近づくための<br class="pc-only">第一歩と考えています。<br>
        「洗練されたワンランク上の女性を目指す」<br class="pc-only">というコンセプトのもと、<br>
        スタッフが徹底したホスピタリティによりお客様をもてなし、<br class="pc-only">脱毛を通してお客様が理想とする女性像に導きます。
    </p>
</div>

    <div class="concept__inner--more fadeIn1000ms">
        <a href="<?php echo esc_url(home_url()); ?>/concept">view more</a>

        <p class="arrow"></p>
    </div>

</section>

<section class="feature">
    <h2 class="title fadeIn1000ms">
        feature
    </h2>

    <div class="feature__details" id="feature-slick">
        <div class="feature__inner">

            <div class="feature__inner--item fadeIn1000ms">
                <img src="<?php echo get_template_directory_uri(); ?>/img/feature_01-sp.jpg" alt="導入している高性能な機械" loading="lazy" width="315" height="275">
            </div>

            <h3 class="feature__inner--h3 fadeIn1000ms">
                featureⅠ
            </h3>

            <p class="feature__inner--title fadeIn1000ms">
                高性能の機械を導入
            </p>

            <p class="feature__inner--txt fadeIn1000ms">
                美肌に特化したフィルターを使用し<br>
                真皮層に働きかけることで<br>
                コラーゲンの生成を促進させます。<br>
                また、むくみの原因である溜まった<br>
                リンパを流すことで顔のむくみを取り、<br>
                若々しいお肌と小顔効果が期待できます。
            </p>
        </div>

        <div class="feature__inner">

            <div class="feature__inner--item fadeIn1000ms">
                <img src="<?php echo get_template_directory_uri(); ?>/img/feature_02-sp.jpg" alt="丁寧で優しい施術風景" loading="lazy" width="315" height="275">
            </div>

            <h3 class="feature__inner--h3 fadeIn1000ms">
                featureⅡ
            </h3>

            <p class="feature__inner--title fadeIn1000ms">
                痛みを最小限まで抑えた施術
            </p>

            <p class="feature__inner--txt fadeIn1000ms">
                毛質・毛量や脱毛箇所などに合わせて<br>
                オーダーメイドの脱毛プランを作成し<br>
                メンズ専用の脱毛器を使用して施術します。
            </p>
        </div>

        <div class="feature__inner">
            <div class="feature__inner--item fadeIn1000ms">
                <img src="<?php echo get_template_directory_uri(); ?>/img/feature_03-sp.jpg" alt="初めてのご来店時の様子" loading="lazy" width="315" height="275">
            </div>

            <h3 class="feature__inner--h3 fadeIn1000ms">
                featureⅢ
            </h3>

            <p class="feature__inner--title fadeIn1000ms">
                1回の施術は<br>
                入店 ～ 退店まで約30分
            </p>

            <p class="feature__inner--txt fadeIn1000ms">
                施術自体は15分程度<br>
                初回はカウンセリングもあるので<br>
                多少お時間をいただきますが<br>
                2回目以降は薄化粧で来ていただくと<br>
                入店から退店まで30分弱で済みます。
            </p>
        </div>
    </div>

</section>

<section class="feature__response">
    <h2 class="title fadeIn1000ms">
        feature
    </h2>

    <div class="feature__response--details" id="feature-response-slick">
        <div class="feature__container">
            <ul class="feature__container--list fadeIn1000ms">
                <li class="feature__container--list--title"><span>I</span>高性能の機械を導入</li>
                <li class="feature__container--list--title2 feature-padding opacity"><span>Ⅱ</span>痛みを最小限まで抑えた施術</li>
                <li class="feature__container--list--title3 opacity"><span>Ⅲ</span>1回の施術は<br> 入店 ～ 退店まで約30分</span></li>
            </ul>

            <div class="feature__container--item fadeIn1000ms">
                <img src="<?php echo get_template_directory_uri(); ?>/img/feature_01-pc.jpg" alt="導入している高性能な機械" loading="lazy" width="450" height="630">
            </div>

            <div class="feature__container--txt fadeIn1000ms">
                <h3 class="feature__container--txt--h3">
                    feature I
                </h3>

                <p class="feature__container--txt--title">
                    高性能の機械を導入
                </p>

                <p class="feature__container--txt--inner">
                    美肌に特化したフィルターを使用し<br>
                    真皮層に働きかけることで<br>
                    コラーゲンの生成を促進させます。<br>
                    また、むくみの原因である溜まった<br>
                    リンパを流すことで顔のむくみを取り、<br>
                    若々しいお肌と小顔効果が期待できます。
                </p>
            </div>
        </div>

        <div class="feature__container">
            <ul class="feature__container--list fadeIn1000ms">
                <li class="feature__container--list--title opacity"><span>Ⅰ</span>高性能の機械を導入</li>
                <li class="feature__container--list--title2 feature-padding"><span>Ⅱ</span>痛みを最小限まで抑えた施術</li>
                <li class="feature__container--list--title3 opacity"><span>Ⅲ</span>1回の施術は<br> 入店 ～ 退店まで約30分</span></li>
            </ul>

            <div class="feature__container--item fadeIn1000ms">
                <img src="<?php echo get_template_directory_uri(); ?>/img/feature_02-pc.jpg" alt="丁寧で優しい施術風景" loading="lazy" width="450" height="630">
            </div>

            <div class="feature__container--txt fadeIn1000ms">
                <h3 class="feature__container--txt--h3">
                    feature Ⅱ
                </h3>

                <p class="feature__container--txt--title">
                    痛みを最小限まで抑えた施術
                </p>

                <p class="feature__container--txt--inner">
                    毛質・毛量や脱毛箇所などに合わせて<br>
                    オーダーメイドの脱毛プランを作成し<br>
                    メンズ専用の脱毛器を使用して施術します。
                </p>
            </div>
        </div>

        <div class="feature__container">
            <ul class="feature__container--list fadeIn1000ms">
                <li class="feature__container--list--title opacity"><span>Ⅰ</span>高性能の機械を導入</li>
                <li class="feature__container--list--title2 feature-padding opacity"><span>Ⅱ</span>痛みを最小限まで抑えた施術</li>
                <li class="feature__container--list--title3"><span>Ⅲ</span>1回の施術は<br> 入店 ～ 退店まで約30分</span></li>
            </ul>

            <div class="feature__container--item fadeIn1000ms">
                <img src="<?php echo get_template_directory_uri(); ?>/img/feature_03-pc.jpg" alt="初めてのご来店時の様子" loading="lazy" width="450" height="630">
            </div>

            <div class="feature__container--txt padding fadeIn1000ms">
                <h3 class="feature__container--txt--h3">
                    feature Ⅲ
                </h3>

                <p class="feature__container--txt--title">
                    1回の施術は<br>
                    入店 ～ 退店まで約30分
                </p>

                <p class="feature__container--txt--inner">
                    施術自体は15分程度<br>
                    初回はカウンセリングもあるので<br>
                    多少お時間をいただきますが<br>
                    2回目以降は薄化粧で来ていただくと<br>
                    入店から退店まで30分弱で済みます。
                </p>
            </div>
        </div>
    </div>

</section>

<section class="price"><a name="price"></a>
    <h2 class="title fadeIn1000ms">
        price menu
        <p class="subtitle">メニュー料金</p>
    </h2>

        <ul class="price__list fadeIn1000ms">
            <li class="price__border price__borderright">
                <a class="price__list--inner" href="<?php echo esc_url(home_url()); ?>/pricemenu#body">
                    body<span>体脱毛</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
            </li>

            <li class="price__border">
                <a class="price__list--inner" href="<?php echo esc_url(home_url()); ?>/pricemenu#Vline">
                    v-<span class="letterspace">line</span>
                    <span>VIO脱毛</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
            </li>
            
                <li class="price__border price__borderright">
                    <a class="price__list--inner price-padding" href="<?php echo esc_url(home_url()); ?>/pricemenu#set">
                        set<span>セット脱毛</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
                <li class="price__border">
                    <a class="price__list--inner" href="<?php echo esc_url(home_url()); ?>/pricemenu#custom">
                        custom<span>オーダーメイド</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>

            <li class="price__border price__borderright2">
                <a class="price__list--inner" href="<?php echo esc_url(home_url()); ?>/pricemenu#body">
                    all<span>全てのメニュー</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
            </li>
        </ul>
</section>

<section class="faq">
    <h2 class="title fadeIn1000ms">
        faq<p class="subtitle">よくある質問</p>
    </h2>

    <div class="accordion fadeIn1000ms" id="faq-accordion">
        <div class="faq__inner">
            <a class="collapse-title" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
                    脱毛後にまた毛が生えてくることはありますか？
            </a>

            <div class="collapse show" id="collapse1" data-bs-parent="#faq-accordion">
                <div class="card card-body">
                    出産や生理といったホルモンバランスの変化によって、脱毛後も体毛が生えてくるケースがあります。
                </div>
            </div>
        </div>

        <div class="faq__inner">
            <a class="collapse-title collapsed" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                脱毛すると汗の量が増えると聞いたことがあるのですが本当ですか？
            </a>

            <div class="collapse" id="collapse2" data-bs-parent="#faq-accordion">
                <div class="card card-body">
                    脱毛によって発汗量が増えるというエビデンスはありませんが、毛がなくなることによって汗が直接衣服に触れることで、汗が増えたように感じることはあるかもしれません。 
                </div>
            </div>
        </div>

        <div class="faq__inner">
            <a class="collapse-title collapsed" data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                コースの勧誘やセールスなどはありますか？ 

            </a>

            <div class="collapse" id="collapse3" data-bs-parent="#faq-accordion">
                <div class="card card-body">
                    お客様の毛質や毛量、ご予算等をお伺いして最適な脱毛プランを提案しますが、最終的にはお客様が無理なく通える範囲のコースを、ご自身で決定いただきたいと考えています。 特に、初めての脱毛の場合は不安になる気持ちもよくわかりますので、その場で契約せずにゆっくりと考えていただく時間も大切です。 バレンタインローズでは、無理な勧誘やしつこい営業行為は一切行いませんので、安心して無料体験にお越しください。 
                </div>
            </div>
        </div>

        <div class="faq__inner">
            <a class="collapse-title collapsed" data-bs-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">
                脱毛することで毛が濃くなることはありますか？
            </a>

            <div class="collapse" id="collapse4" data-bs-parent="#faq-accordion">
                <div class="card card-body">
                    脱毛によって毛が濃くなることはありません。 ただし、硬毛化という現象によって一時的に体毛が濃くなるケースが稀にありますが、施術を進めていくことで少しずつ体毛は薄くなっていきます。 

                </div>
            </div>
        </div>

        <div class="faq__inner">
            <a class="collapse-title collapsed" data-bs-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
                脱毛箇所を剃毛することで、かえって体毛が太くなることはありますか？ 

            </a>

            <div class="collapse" id="collapse5" data-bs-parent="#faq-accordion">
                <div class="card card-body">
                    剃毛によって体毛が太くなることはありません。剃毛すると体毛の断面が見えやすくなることによって太く見えることはありますが、施術を重ねるたびに少しずつ薄く・細くなっていきます。
                </div>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>