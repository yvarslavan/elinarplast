<?php get_header(); ?>

<main>

    <!-- 1. HERO BLOCK -->
    <section class="hero">
        <div class="hero-overlay"></div>

        <!-- Large Logo Overlay (Side Positioned) -->
        <div class="hero-logo-overlay">
            <svg width="600" height="600" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Dark Semi-transparent Circle Background -->
                <circle cx="50" cy="50" r="48" fill="#1e293b" fill-opacity="0.6" />

                <g opacity="0.9"> <!-- High visibility -->
                    <!-- Top "M" Shape (White/Grey) -->
                    <path d="M20 42 L 20 35 L 35 35 L 35 20 L 50 35 L 65 20 L 65 35 L 80 35 L 80 42" stroke="#e2e8f0" stroke-width="2" stroke-linecap="square" stroke-linejoin="miter" />
                    <path d="M35 35 V 42" stroke="#e2e8f0" stroke-width="2" />
                    <path d="M65 35 V 42" stroke="#e2e8f0" stroke-width="2" />

                    <!-- Bottom "W" Shape (White/Grey) -->
                    <path d="M20 58 L 20 65 L 35 65 L 35 80 L 50 65 L 65 80 L 65 65 L 80 65 L 80 58" stroke="#e2e8f0" stroke-width="2" stroke-linecap="square" stroke-linejoin="miter" />
                    <path d="M35 65 V 58" stroke="#e2e8f0" stroke-width="2" />
                    <path d="M65 65 V 58" stroke="#e2e8f0" stroke-width="2" />

                    <!-- Text Overlay (Teal) -->
                    <text x="50" y="54" text-anchor="middle" font-family="Arial, sans-serif" font-weight="900" font-size="9" fill="#00838F" letter-spacing="0.5">ЭЛИНАР ПЛАСТ</text>

                    <!-- Circular Text Ring (Grey) -->
                    <path d="M12 50 A 38 38 0 1 1 88 50 A 38 38 0 1 1 12 50" stroke="#94a3b8" stroke-width="1" stroke-dasharray="2 3" stroke-opacity="0.8" />
                </g>
            </svg>
        </div>

        <!-- Background Image Container (CSS handles the image) -->
        <div class="hero-bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg');"></div>

        <div class="container">
            <div class="hero-content">
                <div class="hero-slogan">Профили,&nbsp;которые служат десятилетиями</div>
                <h1>20 лет создаем решения для промышленности</h1>
                <p class="lead">«Элинар Пласт» работает с 2001 года и производит пластиковые профили и изделия для промышленных, строительных и инженерных предприятий. Мы создаем продукты, которые должны служить точно и надежно в течение многих лет.</p>
                <div class="hero-actions">
                    <a href="#contact-form" class="btn btn-primary">Рассчитать проект</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. STORYTELLING BLOCK (Media + Text) -->
    <section class="section section-story">
        <div class="container">
            <div class="split-layout">
                <div class="split-content">
                    <h2>Современное производство, основанное на инженерной точности</h2>
                    <p>Наши производственные линии оснащены экструзионным и литьевым оборудованием нового поколения.</p>
                    <p>Каждый профиль и каждая деталь проходят путь от инженерной разработки до контроля качества под руководством опытных специалистов.</p>
                    <p>Эта технологическая база обеспечивает точность, стабильность и предсказуемость продукции.</p>
                </div>
                <div class="split-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/extrusion-machinery.jpg" alt="Фото оборудования (Extrusion Machinery)" style="width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
        </div>
    </section>

    <!-- 3. KEY DIRECTIONS -->
    <section id="products" class="section bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Ключевые направления</h2>
                <p>Производим пластиковые профили, комплектующие и литьевые изделия для широкого спектра отраслей.</p>
            </div>

            <div class="section-desc-block mb-5" style="max-width: 800px; margin: 0 auto 3rem;">
                <p>Мы выполняем полный цикл работ – от разработки оснастки до серийного выпуска. Наши изделия используются в строительстве, машиностроении, вентиляции, мебели, приборостроении и других сферах, где важны точность и качество.</p>
            </div>

            <div class="grid-3">
                <div class="card product-card">
                    <div class="card-body">
                        <h3>Термовставки ПВХ</h3>
                        <p>Ударопрочный материал для фасадных систем. Стабильная геометрия.</p>
                        <a href="#" class="link-arrow" id="pvc-modal-trigger">Подробнее &rarr;</a>
                    </div>
                </div>

                <div class="card product-card">
                    <div class="card-body">
                        <h3>Фаскообразователи</h3>
                        <p>Профили для создания фасок на железобетонных изделиях.</p>
                        <a href="#" class="link-arrow" id="chamfer-modal-trigger">Подробнее &rarr;</a>
                    </div>
                </div>

                <div class="card product-card">
                    <div class="card-body">
                        <h3>Втулки и профили</h3>
                        <p>Технические профили и комплектующие по чертежам заказчика.</p>
                        <a href="#" class="link-arrow" id="profiles-modal-trigger">Подробнее &rarr;</a>
                    </div>
                </div>

                <div class="card product-card">
                    <div class="card-body">
                        <h3>Литье под давлением</h3>
                        <p>Серийное производство деталей весом от 1г до 5кг.</p>
                        <a href="#" class="link-arrow" id="injection-modal-trigger">Подробнее &rarr;</a>
                    </div>
                </div>

                <div class="card product-card">
                    <div class="card-body">
                        <h3>Погонажные изделия</h3>
                        <p>Шланги, трубки, уплотнители из ПВХ, ТЭП и других материалов.</p>
                        <a href="#" class="link-arrow" id="extruded-modal-trigger">Подробнее &rarr;</a>
                    </div>
                </div>

                <div class="card product-card highlight-card">
                    <div class="card-body">
                        <h3>Индивидуальный заказ</h3>
                        <p>Разработка и производство изделий по вашим чертежам и ТЗ.</p>
                        <a href="#contact-form" class="btn btn-sm btn-accent">Отправить чертеж</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. FEATURES (Why Choose Us) -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Наши преимущества</h2>
            </div>
            <div class="grid-3 features-grid">
                <div class="feature-item">
                    <div class="feature-icon">20+</div>
                    <h4>Лет опыта</h4>
                    <p>20+ лет стабильной работы в отрасли.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">DE</div>
                    <h4>Оснастка</h4>
                    <p>Разработана немецкой Multiplast и российскими инженерами.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">⚙️</div>
                    <h4>Оборудование</h4>
                    <p>Современные высокопроизводительные экструзионные линии и ТПА.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">✓</div>
                    <h4>Качество</h4>
                    <p>Строгий контроль качества на каждом этапе.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">📦</div>
                    <h4>Гибкость</h4>
                    <p>Серийное и мелкосерийное производство.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🛠️</div>
                    <h4>Решения</h4>
                    <p>Индивидуальные инженерные решения и поддержка.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. STATS BLOCK -->
    <section class="section bg-dark text-white stats-section">
        <div class="container">
            <div class="section-title text-white">
                <h2 style="color: #fff;">Рост компании за 10 лет</h2>
                <p style="color: #cbd5e1;">Эти результаты подтверждают устойчивое развитие, инвестиции в технологии и высокую оценку нашей работы клиентами.</p>
            </div>
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">×13</div>
                    <div class="stat-label">Рост выручки</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">×16</div>
                    <div class="stat-label">Увеличение объема производства</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">×8</div>
                    <div class="stat-label">Рост выпуска профильной продукции</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">×5</div>
                    <div class="stat-label">Увеличение числа клиентов</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. CLIENTS (TRUST) -->
    <section class="section bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Нам доверяют ведущие промышленные компании</h2>
                <p>С нами работают компании, для которых важны надежность поставок, техническая точность и долгосрочное партнёрство. Наши изделия используются в производстве конструкций, оборудования, мебели, фасадных систем и инженерных комплексов.</p>
            </div>
            <!-- Client Logos Grid Placeholder -->
            <div class="clients-grid">
                <div class="client-logo">Logo 1</div>
                <div class="client-logo">Logo 2</div>
                <div class="client-logo">Logo 3</div>
                <div class="client-logo">Logo 4</div>
                <div class="client-logo">Logo 5</div>
                <div class="client-logo">Logo 6</div>
            </div>
        </div>
    </section>

    <!-- 7. PRODUCTION CYCLE -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Полный цикл производства</h2>
            </div>
            <div class="steps-grid production-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h4>Проектирование</h4>
                    <p>Проектирование и 3D-моделирование</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h4>Оснастка</h4>
                    <p>Разработка и изготовление оснастки</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h4>Производство</h4>
                    <p>Экструзия и литье пластмасс</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h4>Контроль</h4>
                    <p>Контроль качества каждого изделия</p>
                </div>
                <div class="step">
                    <div class="step-number">5</div>
                    <h4>Логистика</h4>
                    <p>Упаковка и логистика</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. ABOUT COMPANY (Extended) -->
    <section class="section section-about">
        <div class="container">
            <div class="split-layout reverse-mobile">
                <div class="split-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-photo.jpg" alt="Фото команды (Team Photo)" style="width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                </div>
                <div class="split-content">
                    <h2>О компании</h2>
                    <p>«Элинар Пласт» — российское предприятие, работающее с 2001 года и специализирующееся на экструзионном и литьевом производстве пластиковых изделий.</p>
                    <p>Наше оборудование и оснастка разработаны немецкой Multiplast Kunststoffverarbeitung GmbH и российскими инжиниринговыми центрами, что обеспечивает высокую точность выпускаемой продукции.</p>
                    <p>Мы строим работу на прозрачности, ответственности и принципах долгосрочного партнерства.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FINAL CTA -->
    <section id="contact-form" class="section bg-primary text-white cta-section">
        <div class="container">
            <div class="cta-wrapper">
                <div class="cta-text">
                    <h2>Готовы рассчитать ваш проект?</h2>
                    <p>Мы подготовим оптимальное техническое и коммерческое предложение под вашу задачу.</p>
                </div>
                <div class="cta-form-wrapper">
                    <form class="simple-form" action="#" method="post">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Ваше имя" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="Телефон" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-buttons">
                            <button type="submit" class="btn btn-accent full-width">Запросить расчет</button>
                            <a href="tel:+74963477944" class="btn btn-outline full-width text-center" style="margin-top: 10px;">Связаться с инженером</a>
                        </div>
                        <p class="form-note">Нажимая кнопку, вы соглашаетесь с политикой обработки данных.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Extruded Products Modal (Погонажные изделия) -->
    <div id="extruded-modal" class="modal">
        <div class="modal-content">
            <span class="modal-close">&times;</span>

            <div class="pvc-modal-header">
                <h2 class="pvc-title">Погонажные изделия</h2>
                <div class="pvc-subtitle">Экструзионное производство профилей и комплектующих</div>
                <p class="pvc-description">
                    Профессиональное производство погонажных изделий методом экструзии: <strong>шланги, трубки, уплотнители, профили из ПВХ, ТЭП и других материалов</strong>. Мы изготавливаем изделия различного сечения и длины с высоким качеством поверхности и стабильными геометрическими параметрами. Наше производство позволяет выпускать как стандартные, так и нестандартные профили по вашим требованиям.
                </p>

                <div class="pvc-features-title">ПРЕИМУЩЕСТВА НАШИХ ПОГОНАЖНЫХ ИЗДЕЛИЙ:</div>

                <div class="pvc-features-grid">
                    <div class="pvc-feature-card">
                        <div class="pvc-feature-title">Широкий ассортимент</div>
                        <div class="pvc-feature-desc">Шланги, трубки, уплотнители, профили различного сечения и назначения для разных отраслей промышленности.</div>
                    </div>
                    <div class="pvc-feature-card">
                        <div class="pvc-feature-title">Разнообразие материалов</div>
                        <div class="pvc-feature-desc">Работа с ПВХ, ТЭП, ПЭ, ПП и другими материалами, подбирая оптимальный вариант под ваши задачи.</div>
                    </div>
                    <div class="pvc-feature-card">
                        <div class="pvc-feature-title">Любая длина</div>
                        <div class="pvc-feature-desc">Изготовление изделий любой длины, включая намотку в бухты для удобства транспортировки и хранения.</div>
                    </div>
                    <div class="pvc-feature-card">
                        <div class="pvc-feature-title">Стабильность размеров</div>
                        <div class="pvc-feature-desc">Гарантированная повторяемость геометрии и размеров по всей длине изделия благодаря современному оборудованию.</div>
                    </div>
                    <div class="pvc-feature-card">
                        <div class="pvc-feature-title">Качество поверхности</div>
                        <div class="pvc-feature-desc">Гладкая и однородная поверхность изделий без дефектов, обеспечивающая отличные эксплуатационные свойства.</div>
                    </div>
                    <div class="pvc-feature-card">
                        <div class="pvc-feature-title">Универсальность применения</div>
                        <div class="pvc-feature-desc">Подходят для вентиляции, водоснабжения, уплотнения, изоляции и других технических применений.</div>
                    </div>
                </div>
            </div>

            <div class="pvc-dark-section">
                <h3 class="pvc-dark-title">Индивидуальное производство «под задачу»</h3>
                <p class="pvc-dark-subtitle">Мы не просто производим профиль, мы сопровождаем проект на всех этапах:</p>

                <div class="pvc-steps-grid">
                    <div class="pvc-step">
                        <div class="pvc-step-num">01</div>
                        <div class="pvc-step-text">Анализ требований и подбор<br>материала</div>
                    </div>
                    <div class="pvc-step">
                        <div class="pvc-step-num">02</div>
                        <div class="pvc-step-text">Проектирование и изготовление<br>экструзионной оснастки</div>
                    </div>
                    <div class="pvc-step">
                        <div class="pvc-step-num">03</div>
                        <div class="pvc-step-text">Настройка процесса экструзии<br>и оптимизация параметров</div>
                    </div>
                    <div class="pvc-step">
                        <div class="pvc-step-num">04</div>
                        <div class="pvc-step-text">Контроль качества и серийное<br>производство</div>
                    </div>
                </div>
            </div>

            <div class="pvc-modal-footer">
                <p class="pvc-footer-text">Наши погонажные изделия обеспечивают надежность, долговечность и отличные эксплуатационные характеристики, что особенно важно для технических применений в различных отраслях промышленности.</p>

                <div class="pvc-footer-action">
                    <span class="pvc-cta-text">Нужно создать новую форму или работать по вашему чертежу?</span>
                    <button class="btn-pvc-cta" id="extruded-cta-btn">ОТПРАВИТЬ ЧЕРТЕЖ</button>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>
