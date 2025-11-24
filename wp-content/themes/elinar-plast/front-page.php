<?php get_header(); ?>

<main>

    <!-- Hero Section -->
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

        <div class="container">
            <div class="hero-content">
                <h1>Производство изделий из пластмасс <br>любой сложности</h1>
                <p class="lead">Полный цикл: от проектирования и изготовления оснастки до серийного выпуска. Надежный партнер для вашего бизнеса.</p>
                <div class="hero-actions">
                    <a href="#products" class="btn btn-primary">Смотреть каталог</a>
                    <a href="#contact-form" class="btn btn-outline text-white border-white">Рассчитать проект</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="section bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Ключевые направления</h2>
                <p>Специализированные решения для различных отраслей промышленности</p>
            </div>

            <div class="grid-3">
                <div class="card product-card" id="pvc-card">
                    <div class="card-body">
                        <h3>Термовставки ПВХ</h3>
                        <p>Ударопрочный материал для фасадных систем. Стабильная геометрия и точность.</p>
                        <a href="#" class="link-arrow" id="pvc-modal-trigger">Подробнее &rarr;</a>
                    </div>
                </div>

                <div class="card product-card">
                    <div class="card-body">
                        <h3>Фаскообразователи</h3>
                        <p>Профили для создания фасок на железобетонных изделиях.</p>
                        <a href="#" class="link-arrow">Подробнее &rarr;</a>
                    </div>
                </div>

                <div class="card product-card">
                    <div class="card-body">
                        <h3>Втулки и профили</h3>
                        <p>Технические профили и комплектующие по чертежам заказчика.</p>
                        <a href="#" class="link-arrow">Подробнее &rarr;</a>
                    </div>
                </div>

                <div class="card product-card">
                    <div class="card-body">
                        <h3>Литье под давлением</h3>
                        <p>Серийное производство деталей весом от 1г до 5кг.</p>
                        <a href="#" class="link-arrow">Подробнее &rarr;</a>
                    </div>
                </div>

                <div class="card product-card">
                    <div class="card-body">
                        <h3>Погонажные изделия</h3>
                        <p>Шланги, трубки, уплотнители из ПВХ, ТЭП и других материалов.</p>
                        <a href="#" class="link-arrow">Подробнее &rarr;</a>
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

    <!-- Advantages -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Почему выбирают «Элинар Пласт»</h2>
            </div>
            <div class="grid-4 features-grid">
                <div class="feature-item">
                    <div class="feature-icon">01</div>
                    <h4>Собственное производство</h4>
                    <p>Полный парк современного оборудования для экструзии и литья.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">02</div>
                    <h4>Контроль качества</h4>
                    <p>Лаборатория качества и строгий контроль на всех этапах.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">03</div>
                    <h4>Конструкторское бюро</h4>
                    <p>Помощь в проектировании и доработке изделий.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">04</div>
                    <h4>Опыт 20+ лет</h4>
                    <p>Богатый опыт работы с крупными промышленными заказчиками.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies -->
    <section class="section bg-dark text-white">
        <div class="container">
            <div class="split-layout">
                <div class="split-content">
                    <h2>Технологии производства</h2>
                    <p>Мы используем современные методы переработки пластмасс:</p>
                    <ul class="tech-list">
                        <li><strong>Экструзия:</strong> производство профилей сложного сечения из ПВХ, ПЭ, ПП.</li>
                        <li><strong>Литье под давлением:</strong> изготовление штучных изделий с высокой точностью.</li>
                        <li><strong>Изготовление оснастки:</strong> проектирование и выпуск фильер и пресс-форм.</li>
                    </ul>
                    <br>
                    <a href="/technology" class="btn btn-accent">Все технологии</a>
                </div>
                <div class="split-image">
                    <!-- Placeholder for Tech Image -->
                    <div style="background: #334155; height: 100%; min-height: 300px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #64748b;">Фото производства</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Steps -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Как начать сотрудничество</h2>
            </div>
            <div class="steps-grid">
                <div class="step">
                    <div class="step-number">1</div>
                    <h4>Заявка</h4>
                    <p>Оставьте заявку на сайте или пришлите чертеж на почту.</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h4>Расчет</h4>
                    <p>Мы рассчитаем стоимость и сроки изготовления оснастки и партии.</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h4>Договор</h4>
                    <p>Согласовываем условия, подписываем договор и запускаем производство.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form / CTA -->
    <section id="contact-form" class="section bg-primary text-white">
        <div class="container">
            <div class="cta-wrapper">
                <div class="cta-text">
                    <h2>Готовы обсудить проект?</h2>
                    <p>Заполните форму, и наш менеджер свяжется с вами для консультации и расчета стоимости.</p>
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
                        <div class="form-group">
                            <textarea name="message" placeholder="Комментарий или описание задачи" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-accent full-width">Отправить заявку</button>
                        <p class="form-note">Нажимая кнопку, вы соглашаетесь с политикой обработки персональных данных.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section id="map" class="map-section">
        <!-- Yandex Map for Ateptsevo -->
        <iframe src="https://yandex.ru/map-widget/v1/?text=Элинар+Пласт+Атепцево&z=17" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe>
    </section>

    <!-- PVC Modal -->
    <div id="pvc-modal" class="modal">
        <div class="modal-content">
            <span class="modal-close">&times;</span>

            <div class="pvc-modal-header">
                <h2 class="pvc-title">Термовставки из ударопрочного ПВХ</h2>
                <div class="pvc-subtitle">Решения для фасадных алюминиевых конструкций</div>
                <p class="pvc-description">
                    Надёжное, долговечное и технологичное решение для современной архитектуры. Наше предприятие производит термовставки для фасадных систем <strong>по индивидуальным чертежам и техническим требованиям заказчика</strong>. Мы специализируемся на изготовлении профилей сложной геометрии, обеспечивающих стабильную термоизоляцию, высокую механическую прочность и точность сопряжения элементов.
                </p>

                <div class="pvc-features-title">ПОЧЕМУ НАШИ ТЕРМОВСТАВКИ — ОПТИМАЛЬНЫЙ ВЫБОР:</div>

                <div class="pvc-features-grid">
                    <div class="pvc-feature-card">
                        <div class="pvc-feature-title">Ударопрочный ПВХ</div>
                        <div class="pvc-feature-desc">С повышенной стойкостью к климатическим нагрузкам, ультрафиолету и перепадам температур.</div>
                    </div>
                    <div class="pvc-feature-card">
                        <div class="pvc-feature-title">Стабильная геометрия</div>
                        <div class="pvc-feature-desc">Обеспечивает точное прилегание элементов и отсутствие деформаций в процессе эксплуатации.</div>
                    </div>
                    <div class="pvc-feature-card">
                        <div class="pvc-feature-title">Любая сложность</div>
                        <div class="pvc-feature-desc">Изготовление изделий любой сложности, включая многокамерные и функциональные профили.</div>
                    </div>
                    <div class="pvc-feature-card">
                        <div class="pvc-feature-title">Соответствие чертежам</div>
                        <div class="pvc-feature-desc">Чёткое следование допускам и требованиям к материалам алюминиевых фасадных систем.</div>
                    </div>
                    <div class="pvc-feature-card">
                        <div class="pvc-feature-title">Равномерность</div>
                        <div class="pvc-feature-desc">Идеальная повторяемость геометрии благодаря современному экструзионному оборудованию.</div>
                    </div>
                    <div class="pvc-feature-card">
                        <div class="pvc-feature-title">Качество поверхности</div>
                        <div class="pvc-feature-desc">Гарантированная гладкость и максимальная однородность материала.</div>
                    </div>
                </div>
            </div>

            <div class="pvc-dark-section">
                <h3 class="pvc-dark-title">Индивидуальное производство «под задачу»</h3>
                <p class="pvc-dark-subtitle">Мы не просто производим профиль, мы сопровождаем проект на всех этапах:</p>

                <div class="pvc-steps-grid">
                    <div class="pvc-step">
                        <div class="pvc-step-num">01</div>
                        <div class="pvc-step-text">Разработка совместно с<br>инженером-технологом</div>
                    </div>
                    <div class="pvc-step">
                        <div class="pvc-step-num">02</div>
                        <div class="pvc-step-text">Адаптация к конкретной фасадной<br>системе</div>
                    </div>
                    <div class="pvc-step">
                        <div class="pvc-step-num">03</div>
                        <div class="pvc-step-text">Подбор материала и оптимизация<br>формы</div>
                    </div>
                    <div class="pvc-step">
                        <div class="pvc-step-num">04</div>
                        <div class="pvc-step-text">Выпуск опытных партий и серийное<br>производство</div>
                    </div>
                </div>
            </div>

            <div class="pvc-modal-footer">
                <p class="pvc-footer-text">Наши термовставки обеспечивают энергоэффективность, долговечность и высокую точность сборки фасадных конструкций, что особенно важно для современных архитектурных проектов.</p>

                <div class="pvc-footer-action">
                    <span class="pvc-cta-text">Нужно создать новую форму или работать по вашему чертежу?</span>
                    <button class="btn-pvc-cta" id="pvc-cta-btn">ОТПРАВИТЬ ЧЕРТЕЖ</button>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>
