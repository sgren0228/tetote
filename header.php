<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
<body <?php body_class(); ?>>
    <header id="header">
        <div class="header__wrapper">
            <div class="header__left">
                <h1>
                    <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/tetote-logo-white.png'); ?>" alt="" class="logo logo--white"></a>
                    <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/tetote-logo-black.png'); ?>" alt="" class="logo logo--black"></a>
                </h1>
            </div>
            <div class="header__right">
                <a href="" class="btn btn--recruit">募集要項</a>
                <a href="" class="btn btn--entry">ENTRY</a>
                <div id="hamburger"><span></span><span></span><span></span></div>
            </div>
        </div>
    </header>

     <div class="header-menu">
        <div class="header-menu__wrapper">
            <div class="header-menu__left">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/tetote-logo-black.png'); ?>" alt="">
            </div>
            <div class="header-menu__right">
                <ul class="menu">
                    <li class="menu__list">ABOUT US<span>TETOTEについて</span></li>
                    <li class="menu__list">BENEFITS<span>福利厚生について</span></li>
                    <li class="menu__list">STAFF<span>社員について</span></li>
                    <li class="menu__list">CARRER<span>研修制度とキャリアパス</span></li>
                    <li class="menu__list">BLOG<span>採用ブログ</span></li>
                    <li class="menu__list">FAQ<span>よくある質問</span></li>
                    <li class="menu__list"><a href="" class="btn btn--recruit btn--header-menu">募集要項</a></li>
                    <li class="menu__list"><a href="" class="btn btn--entry btn--header-menu">ENTRY</a></li>
                </ul>
            </div>
        </div>
    </div>
