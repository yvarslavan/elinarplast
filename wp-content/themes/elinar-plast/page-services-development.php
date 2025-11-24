<?php
/*
Template Name: Разработка и производство
*/
get_header();
?>

<main class="site-main">
    <!-- Hero Section for Services -->
    <section class="page-hero bg-dark text-white">
        <div class="container">
            <h1>Разработка и производство под ваши задачи</h1>
            <p class="lead">Мы превращаем идею в готовое изделие. Помогаем выбрать материалы, создаем инструмент, запускаем производство и обеспечиваем стабильное качество на каждом этапе.</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="section section-services">
        <div class="container">

            <!-- Intro Block -->
            <div class="service-intro mb-5">
                <p>Вы получаете решение, точно соответствующее функциональности, дизайну и бюджету.</p>
            </div>

            <hr class="separator">

            <h2 class="section-heading mb-4">Что мы делаем</h2>

            <!-- Engineering Section -->
            <div class="service-block">
                <div class="row split-layout">
                    <div class="col-text">
                        <h3>Инженерия и разработка</h3>
                        <ul class="service-list">
                            <li>Подбор материалов под конкретные задачи</li>
                            <li>Испытания прототипов</li>
                            <li>Современные CAD-разработки</li>
                            <li>Проектирование и изготовление инструментов</li>
                        </ul>
                    </div>
                    <div class="col-image">
                        <div class="image-placeholder placeholder-lg">
                            <span>Фото: Инженерный отдел / CAD проектирование</span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="separator-light">

            <!-- Tooling Production Section -->
            <div class="service-block">
                <div class="row split-layout reverse-mobile">
                    <div class="col-image">
                        <div class="image-placeholder placeholder-lg">
                            <span>Фото: Инструментальный цех / Обработка металла</span>
                        </div>
                    </div>
                    <div class="col-text">
                        <h3>Инструментальное производство</h3>
                        <ul class="service-list">
                            <li>Точная электроэрозионная обработка (CAM)</li>
                            <li>Традиционные методы изготовления оснаст</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="section bg-light">
        <div class="container text-center">
            <h3>Готовы обсудить ваш проект?</h3>
            <p class="mb-4">Свяжитесь с нашими инженерами для предварительной консультации.</p>
            <a href="#contact-form" class="btn btn-primary">Оставить заявку</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
