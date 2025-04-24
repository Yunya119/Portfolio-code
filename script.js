/*ハンバーガー*/
$(function (){
    $(".header__list--btn").click(function () {
        $(this).toggleClass('active');
        $("#hamburger__nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
        $(".header__list--btn").addClass('header__list--logo')
            
    });
    });

//fade-in
$(document).ready(function () {
    $('.fadeUp').css('display','none').fadeIn(2000);
});

$(function () {
    $(window).scroll(function () {
    const wHeight = $(window).height();
    const wScroll = $(window).scrollTop();
        $(".fadeIn1000ms").each(function () {
            const bPosition = $(this).offset().top;
            if (wScroll > bPosition - wHeight + 200) {
                $(this).addClass("fadeInAnime1000ms");
        }
    });
});
});

//feature
$('#feature-slick').slick({
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    fade: false,
    speed:500,//スライドの動きのスピード。初期値は300。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    slidesToShow: 1,//スライドを画面に3枚見せる
    slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
    arrows: false,//左右の矢印あり
    dots: false,//下部ドットナビゲーションの表示
    pauseOnFocus: false,//フォーカスで一時停止を無効
    pauseOnHover: false,//マウスホバーで一時停止を無効
    pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
    centerMode: true,
    centerPadding: "5%",
});

//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$('#feature-slick').on('touchmove', function(event, slick, currentSlide, nextSlide){
$('.slider').slick('slickPlay');
});


$('#feature-response-slick').slick({
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    fade: true,
    speed:5000,//スライドの動きのスピード。初期値は300。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    arrows: false,//左右の矢印あり
    dots: false,//下部ドットナビゲーションの表示
    pauseOnFocus: false,//フォーカスで一時停止を無効
    pauseOnHover: false,//マウスホバーで一時停止を無効
    pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
    
});

//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$('#feature-response-slick').on('touchmove', function(event, slick, currentSlide, nextSlide){
$('.slider').slick('slickPlay');
});

// page-topボタン
$(document).ready(function() {
    var pagetop = $('.pagetop').hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
            }
        });
        pagetop.click(function () {
            $('body, html').animate({ scrollTop: 0 }, 500);
                return false;
    });
    });

    //tel-
    $(document).ready(function() {
        $('input[type="tel"]').on('input', function() {
            var phone_val = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
    
            if (phone_val.length > 3 && phone_val.length <= 6) {
                phone_val = phone_val.substring(0, 3) + '-' + phone_val.substring(3);
            } else if (phone_val.length > 6) {
                phone_val = phone_val.substring(0, 3) + '-' + phone_val.substring(3, 6) + '-' + phone_val.substring(6, 10);
            }
    
            $(this).val(phone_val);
        });
    });

    //parallax
    
    $(document).ready(function () {
        $('.main-content-wrapper').stickyStack({
            stackingElement: '.page'
        });
    });

    function initMap() {
        var map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 35.6895, lng: 139.6917 }, // 東京の座標
            zoom: 10,
        });
    }

    function initMap() {
        var mapElement = document.getElementById('store-map');
        if (!mapElement) return;
    
        var lat = parseFloat(mapElement.dataset.lat);
        var lng = parseFloat(mapElement.dataset.lng);
        var zoom = parseInt(mapElement.dataset.zoom, 10);
    
        var map = new google.maps.Map(mapElement, {
            center: { lat: lat, lng: lng },
            zoom: zoom
        });
    
        new google.maps.Marker({
            position: { lat: lat, lng: lng },
            map: map
        });
    }

    $(document).querySelectorAll('.category-link').forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1); // #の後ろの部分を取得
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100, // 100px上に余白を取る
                    behavior: 'smooth' // スムーズにスクロール
                });
            }
        });
    });