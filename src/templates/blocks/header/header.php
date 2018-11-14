<?php include './blocks/header/menu-fastaccess.php'; ?>
<?php include './blocks/header/menu-trigger.php'; ?>
<header id="header" class="header" role="banner">
    <div class="container">
        <div class="header__logo">
            <a href="01-home.php" class="header__logo-link">
                <!-- <?php //echo get_the_post_thumbnail( 0, 'logo-beapi', array( 'data-location' => 'header-logo', 'class' => 'header__img', 'alt' => 'Logo' ) ); ?>  -->
                <svg class="header__icon icon" aria-hidden="true" role="img">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-logo-beapi"></use>
                </svg>
                <?php if ( $class == 'home' ) :?>
                <h1 class="header__title visuallyhidden">BeAPI FrontEnd Framework</h1>
                <?php else: ?>
                <div class="header__title visuallyhidden">BeAPI FrontEnd Framework</div>
                <?php endif; ?>
            </a>
        </div>
        <?php include './blocks/header/menu.php'; ?>
    </div>
</header>