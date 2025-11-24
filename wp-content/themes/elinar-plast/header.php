<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="container">
            <a href="<?php echo home_url(); ?>" class="brand-logo-container">
                <div class="logo-icon">
                    <svg width="70" height="70" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Circular Background (Transparent) -->
                        <circle cx="50" cy="50" r="48" fill="none" />

                        <!-- Top "M" Shape (Stylized Zig-Zag/Arrows) -->
                        <path d="M20 42 L 20 35 L 35 35 L 35 20 L 50 35 L 65 20 L 65 35 L 80 35 L 80 42" stroke="#00838F" stroke-width="3" stroke-linecap="square" stroke-linejoin="miter" />
                        <path d="M35 35 V 42" stroke="#00838F" stroke-width="3" />
                        <path d="M65 35 V 42" stroke="#00838F" stroke-width="3" />

                        <!-- Bottom "W" Shape (Mirrored) -->
                        <path d="M20 58 L 20 65 L 35 65 L 35 80 L 50 65 L 65 80 L 65 65 L 80 65 L 80 58" stroke="#00838F" stroke-width="3" stroke-linecap="square" stroke-linejoin="miter" />
                        <path d="M35 65 V 58" stroke="#00838F" stroke-width="3" />
                        <path d="M65 65 V 58" stroke="#00838F" stroke-width="3" />

                        <!-- Circular Text Path (Top) -->
                        <defs>
                            <!-- Radius: 40 (optimal for spacing) -->
                            <path id="circlePath" d="M 50,50 m -40,0 a 40,40 0 1,1 80,0 a 40,40 0 1,1 -80,0" />
                        </defs>

                        <!-- Text Color: #00838F (Teal, matches logo geometry) -->
                        <!-- Font Size: 10.5 (Readable but not overlapping) -->
                        <text fill="#00838F" font-family="Arial, sans-serif" font-size="10.5" font-weight="800" letter-spacing="3.5">
                            <textPath href="#circlePath" startOffset="50%" text-anchor="middle">
                                ПЕРЕРАБОТКА ПЛАСТМАСС
                            </textPath>
                        </text>

                        <!-- Company Name in Center -->
                        <!-- Size reduced back to 16 following user request -->
                        <text x="50" y="48" text-anchor="middle" font-family="Arial, sans-serif" font-weight="900" font-size="16" fill="#FFFFFF" stroke="#000000" stroke-width="0.4" letter-spacing="0.5" style="text-shadow: 0px 1px 2px rgba(0,0,0,0.8);">ЭЛИНАР</text>
                        <text x="50" y="61" text-anchor="middle" font-family="Arial, sans-serif" font-weight="900" font-size="16" fill="#FFFFFF" stroke="#000000" stroke-width="0.4" letter-spacing="0.5" style="text-shadow: 0px 1px 2px rgba(0,0,0,0.8);">ПЛАСТ</text>
                    </svg>
                </div>
            </a>

            <nav class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'fallback_cb' => false,
                    'container' => false,
                    'items_wrap' => '<ul>%3$s</ul>',
                    // Fallback if no menu assigned
                    'fallback_cb' => function () {
                        echo '<ul>
                        <li class="menu-item"><a href="' . home_url('/') . '" class="home-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg> Главная</a></li>
                        <li class="menu-item"><a href="' . home_url('/about') . '">О компании</a></li>
                        <li class="menu-item"><a href="' . home_url('/products') . '">Продукция</a></li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Наши услуги</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="' . home_url('/development-production') . '">Разработка и производство</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="' . home_url('/partners') . '">Партнеры</a></li>
                        <li class="menu-item"><a href="' . home_url('/contacts') . '">Контакты</a></li>
                    </ul>';
                    }
                ));
                ?>
            </nav>

            <div class="header-actions">
                <a href="tel:+74963477944" class="contact-phone">+7 (496) 34-77-944</a>
                <a href="#contact-form" class="btn btn-primary">Запросить расчет</a>
            </div>

            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
