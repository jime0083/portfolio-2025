<?php get_header(); ?>

<div class="home-container">
    <?php get_template_part( 'template-parts/sidebar-home' ); ?>

    <main id="primary" class="site-main">
        <section id="top" class="hero-section">
            <video class="hero-video" autoplay muted loop playsinline>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/images/port.mp4" type="video/mp4">
            </video>
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1 id="typewriter-text"></h1>
            </div>
        </section>

        <section id="portfolio" class="portfolio-section">
            <div class="portfolio-container">
                <!-- Left Column: portfolio-section1 -->
                <div class="portfolio-section1">
                    <div class="section-header">
                        <h2 class="js-split-text">Portfolio</h2>
                    </div>

                    <!-- Item 1: 教育系企業コーポレートサイト -->
                    <article class="portfolio-item portfolio-item1 slide-down-bounce portfolio-modal-trigger"
                        data-title="教育系企業コーポレートサイト"
                        data-desc="教育系企業のコーポレートサイトを作成させていただきました"
                        data-note="※実案件ではWordPressで作成しましたが、"
                        data-skills="Javascript,HTML,CSS,Git,WordPress"
                        data-site-url=""
                        data-design-url="https://www.figma.com/design/7DwKDpnTIOTrrXvZWmtyqo/%E5%AD%A6%E7%BF%92%E5%A1%BE%E3%83%9D%E3%83%BC%E3%83%88?node-id=0-1&t=IEUfA94LH48VgJul-1">
                        <div class="portfolio-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/port-1.png" alt="教育系企業コーポレートサイト">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                            <span class="portfolio-tag">Webデザイン</span>
                        </div>
                        <h3 class="portfolio-title">教育系企業コーポレートサイト</h3>
                    </article>

                    <!-- Item 2: 造園系企業コーポレートサイト -->
                    <article class="portfolio-item portfolio-item2 slide-down-bounce portfolio-modal-trigger"
                        data-title="造園企業コーポレートサイト"
                        data-desc="造園系企業のコーポレートサイトを作成させていただきました"
                        data-note="※実案件ではWordPressで作成しましたが、"
                        data-skills="Javascript,HTML,CSS,Git,WordPress"
                        data-site-url=""
                        data-design-url="https://www.figma.com/design/GFCL9UcXDSLEm824LC1T6f/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA-green?node-id=0-1&t=17TGWNZQcz4rjzOM-1">
                        <div class="portfolio-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/port-2.png" alt="造園系企業コーポレートサイト">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                            <span class="portfolio-tag">アプリデザイン・開発</span>
                        </div>
                        <h3 class="portfolio-title">造園系企業コーポレートサイト</h3>
                    </article>
                </div>

                <!-- Right Column: portfolio-section2 -->
                <div class="portfolio-section2">
                    <!-- Item 3: ソクメイシ -->
                    <article class="portfolio-item portfolio-item3 slide-down-bounce portfolio-modal-trigger"
                        data-title="エンジニア・個人開発者向け名刺アプリ「ソクメイシ」"
                        data-desc="エンジニアや個人開発者向けの名刺作成アプリを開発しました"
                        data-note=""
                        data-skills="Javascript(ReactNative),HTML,CSS,Git,Firebase"
                        data-site-url="https://apps.apple.com/us/app/%E3%82%BD%E3%82%AF%E3%83%A1%E3%82%A4%E3%82%B7/id6755348490"
                        data-design-url="">
                        <div class="portfolio-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/port-3.png" alt="ソクメイシ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                            <span class="portfolio-tag">Webデザイン・開発</span>
                        </div>
                        <h3 class="portfolio-title">エンジニア・個人開発者向け名刺アプリ「ソクメイシ」</h3>
                    </article>

                    <!-- Item 4: ヌケバイ -->
                    <article class="portfolio-item portfolio-item4 slide-down-bounce portfolio-modal-trigger"
                        data-title="ヘルスケア系アプリ「ヌケバイ」"
                        data-desc="ヘルスケア管理をサポートするアプリを開発しました"
                        data-note=""
                        data-skills="Javascript(Vue.js),HTML,CSS,Git,Firebase"
                        data-site-url="https://nukebuy.web.app/"
                        data-design-url="">
                        <div class="portfolio-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/port4.png" alt="ヌケバイ">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                            <span class="portfolio-tag">アプリデザイン・フロントエンド開発</span>
                        </div>
                        <h3 class="portfolio-title">ヘルスケア系アプリ「ヌケバイ」</h3>
                    </article>
                </div>
            </div>
        </section>

        <!-- Portfolio Modal -->
        <div id="portfolio-modal" class="portfolio-modal">
            <div class="modal-overlay"></div>
            <div class="modal-content">
                <div class="modal-inner">
                    <div class="modal-image"></div>
                    <div class="modal-body">
                        <h2 class="modal-title"></h2>
                        <p class="modal-description"></p>
                        <p class="modal-note"></p>
                        <div class="modal-skills">
                            <span class="modal-skills-label">対応言語・スキル</span>
                            <p class="modal-skills-list"></p>
                        </div>
                        <div class="modal-buttons">
                            <a href="#" class="modal-link modal-site-link" target="_blank" rel="noopener noreferrer">サイトをチェック</a>
                            <a href="#" class="modal-link modal-design-link" target="_blank" rel="noopener noreferrer">デザインをチェック</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="profile" class="profile-section">
            <div class="portfolio-container">
                <!-- Left Column: Profile Text -->
                <div class="profile-text-column">
                    <div class="section-header">
                        <h2 class="js-split-text">Profile</h2>
                    </div>
                    <!-- Responsive Image: Visible only on small screens -->
                    <div class="profile-image-responsive">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/port5.png" alt="Profile Image">
                    </div>
                    <div class="profile-text fade-in-left">
                        <h3 class="profile-name">栗田 孟 <span class="en-name">Hajime Kurita</span></h3>
                        <p>
                            1993年北海道生まれ。大学を3年で中退し墓石清掃事業立ち上げやアフィリエイトなどを経験。<br>
                            2017年、独学でコーディングを学びフリーランスとしてWeb制作に携わるようになる。
                            程なくしてWeb制作だけでなくWebデザインも任されるように。<br>
                            2020年、株式会社ライズフォース入社、フロントエンドエンジニアとして勤務。<br>
                            2022年退社。再びフリーランスとなりフロントエンド開発やWebデザイン、Web制作などの業務を請け負う。<br>
                            2024年よりクライアントワークの傍ら個人開発を開始、「ソクメイシ」「ステルスレコーダー」などのアプリを開発。<br>
                            フリーランスに転身した後も個人開発を通じて新しいスキルを身に付けクライアントに還元している。
                        </p>
                    </div>
                </div>

                <!-- Right Column: Profile Images (Hidden on small screens) -->
                <div class="profile-image-column fade-in-right">
                    <div class="profile-images">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/prof1.png" alt="Profile Image 1" class="profile-img-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/prof3.png" alt="Profile Image 2" class="profile-img-2">
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
