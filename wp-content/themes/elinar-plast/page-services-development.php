<?php
/*
Template Name: Разработка и производство
*/
get_header();
?>

<main class="site-main">
    <!-- Hero Section for Services -->
    <section class="page-hero" style="background-image: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="text-white">Что мы делаем</h1>
            <p class="lead">Предлагаем полный цикл разработки и производства полимерных изделий: от идеи и инженерного проектирования до изготовления пресс-формы и запуска серийного выпуска.</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="section section-services">
        <div class="container">

            <!-- Engineering Section -->
            <div class="service-block mb-5">
                <div class="split-layout">
                    <div class="split-content">
                        <h2 class="section-title mb-4 text-primary">Инженерия и разработка</h2>
                        <p class="lead mb-4 text-secondary">Мы выполняем полный цикл инженерных работ для промышленных компаний, обеспечивая точность, надежность и технологичность будущего изделия.</p>

                        <div class="service-features mt-4">
                            <div class="feature-row mb-3">
                                <div class="feature-icon-small text-accent mr-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                        <polyline points="2 17 12 22 22 17"></polyline>
                                        <polyline points="2 12 12 17 22 12"></polyline>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-1 font-bold">Подбор материалов</h5>
                                    <p class="text-sm text-muted mb-0">Под конкретные задачи с учетом условий эксплуатации, нагрузок и технологичности обработки.</p>
                                </div>
                            </div>

                            <div class="feature-row mb-3">
                                <div class="feature-icon-small text-accent mr-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="16" x2="12" y2="12"></line>
                                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-1 font-bold">Испытания и доработка</h5>
                                    <p class="text-sm text-muted mb-0">Тестирование прототипов для подтверждения прочности, геометрии и работоспособности.</p>
                                </div>
                            </div>

                            <div class="feature-row mb-3">
                                <div class="feature-icon-small text-accent mr-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="3" y1="9" x2="21" y2="9"></line>
                                        <line x1="9" y1="21" x2="9" y2="9"></line>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-1 font-bold">Профессиональное CAD-проектирование</h5>
                                    <p class="text-sm text-muted mb-0">3D-моделирование, конструкторская документация, оптимизация конструкции.</p>
                                </div>
                            </div>

                            <div class="feature-row">
                                <div class="feature-icon-small text-accent mr-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-1 font-bold">Проектирование оснастки</h5>
                                    <p class="text-sm text-muted mb-0">Разработка инструментальной оснастки по индивидуальным техническим требованиям.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="split-image">
                        <?php if (file_exists(get_template_directory() . '/assets/images/engineering-cad.jpg')) : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/engineering-cad.jpg" alt="Инженерное проектирование CAD" class="rounded shadow-lg" loading="lazy">
                        <?php else : ?>
                            <div class="image-placeholder placeholder-lg rounded shadow-sm bg-light d-flex align-items-center justify-content-center" style="min-height: 400px;">
                                <div class="text-center p-4">
                                    <div class="mb-3 opacity-50">
                                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="3" y1="9" x2="21" y2="9"></line>
                                            <line x1="9" y1="21" x2="9" y2="9"></line>
                                        </svg>
                                    </div>
                                    <h5 class="text-secondary">Инженерное проектирование</h5>
                                    <code class="text-small text-muted">engineering-cad.jpg</code>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <hr class="separator-light my-5" style="opacity: 0.1;">

            <!-- Tooling Production Section -->
            <div class="service-block mb-5">
                <div class="split-layout reverse-mobile">
                    <div class="split-image">
                        <?php if (file_exists(get_template_directory() . '/assets/images/tooling-production.jpg')) : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tooling-production.jpg" alt="Инструментальное производство" class="rounded shadow-lg" loading="lazy">
                        <?php else : ?>
                            <div class="image-placeholder placeholder-lg rounded shadow-sm bg-light d-flex align-items-center justify-content-center" style="min-height: 400px;">
                                <div class="text-center p-4">
                                    <div class="mb-3 opacity-50">
                                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                        </svg>
                                    </div>
                                    <h5 class="text-secondary">Инструментальный цех</h5>
                                    <code class="text-small text-muted">tooling-production.jpg</code>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="split-content">
                        <h2 class="section-title mb-4 text-primary">Инструментальное производство</h2>
                        <p class="lead mb-4 text-secondary">Производственные мощности позволяют выпускать высокоточную инструментальную оснастку и выполнять сложную металлообработку.</p>

                        <div class="service-features mt-4">
                            <div class="feature-row mb-3">
                                <div class="feature-icon-small text-accent mr-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-1 font-bold">Электроэрозионная обработка (CAM)</h5>
                                    <p class="text-sm text-muted mb-0">Обеспечивает высокую точность геометрии и идеальное качество поверхности.</p>
                                </div>
                            </div>

                            <div class="feature-row mb-3">
                                <div class="feature-icon-small text-accent mr-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-1 font-bold">Изготовление пресс-форм и штампов</h5>
                                    <p class="text-sm text-muted mb-0">Технологическая оснастка любой сложности для экструзии и литья под давлением.</p>
                                </div>
                            </div>

                            <div class="feature-row">
                                <div class="feature-icon-small text-accent mr-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                        <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                        <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-1 font-bold">Комплексная металлообработка</h5>
                                    <p class="text-sm text-muted mb-0">Комбинация современных и классических методов для достижения стабильного качества и ресурсной стойкости.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="cta-wrapper bg-white p-5 rounded shadow-lg" style="padding: 3rem;">
                <div class="text-center">
                    <h2 class="mb-3">Ваша идея — наше воплощение</h2>
                    <p class="mb-4 text-muted" style="max-width: 600px; margin: 0 auto 2rem;">Свяжитесь с нашими инженерами для предварительного анализа чертежей и расчета стоимости изготовления оснастки.</p>
                    <a href="<?php echo home_url('/contacts'); ?>" class="btn btn-primary btn-lg">Связаться с инженерами</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
