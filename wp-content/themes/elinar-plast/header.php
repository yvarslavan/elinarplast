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
                    <svg width="52" height="52" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Top "M" Shape (Stylized Zig-Zag/Arrows) -->
                        <path d="M20 42 L 20 35 L 35 35 L 35 20 L 50 35 L 65 20 L 65 35 L 80 35 L 80 42" stroke="#00838F" stroke-width="3" stroke-linecap="square" stroke-linejoin="miter" />
                        <path d="M35 35 V 42" stroke="#00838F" stroke-width="3" />
                        <path d="M65 35 V 42" stroke="#00838F" stroke-width="3" />

                        <!-- Bottom "W" Shape (Mirrored) -->
                        <path d="M20 58 L 20 65 L 35 65 L 35 80 L 50 65 L 65 80 L 65 65 L 80 65 L 80 58" stroke="#00838F" stroke-width="3" stroke-linecap="square" stroke-linejoin="miter" />
                        <path d="M35 65 V 58" stroke="#00838F" stroke-width="3" />
                        <path d="M65 65 V 58" stroke="#00838F" stroke-width="3" />

                        <!-- Circular Text Implication (Optional, keeping it subtle) -->
                        <path d="M15 50 A 35 35 0 1 1 85 50 A 35 35 0 1 1 15 50" stroke="#94a3b8" stroke-width="1" stroke-dasharray="2 4" stroke-opacity="0.5" />
                    </svg>
                </div>
                <div class="logo-text">
                    <span class="logo-title">ЭЛИНАР</span>
                    <span class="logo-subtitle">ПЛАСТ</span>
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
                        <li><a href="/" class="home-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg> Главная</a></li>
                        <li><a href="/about">О компании</a></li>
                        <li><a href="/products">Продукция</a></li>
                        <li><a href="/technology">Технологии</a></li>
                        <li><a href="/partners">Партнеры</a></li>
                        <li><a href="/contacts">Контакты</a></li>
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
