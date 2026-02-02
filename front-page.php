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
                    
                    <!-- Item 1: Garden Office -->
                     <a href="https://www.figma.com/design/7DwKDpnTIOTrrXvZWmtyqo/%E5%AD%A6%E7%BF%92%E5%A1%BE%E3%83%9D%E3%83%BC%E3%83%88?node-id=0-1&t=IEUfA94LH48VgJul-1">
                        <article href="https://www.figma.com/design/7DwKDpnTIOTrrXvZWmtyqo/%E5%AD%A6%E7%BF%92%E5%A1%BE%E3%83%9D%E3%83%BC%E3%83%88?node-id=0-1&t=IEUfA94LH48VgJul-1" class="portfolio-item portfolio-item1 slide-down-bounce">
                            <div class="portfolio-thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/port-1.png" alt="造園系企業コーポレートサイト">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                                <div class="portfolio-overlay">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link 1.png" alt="Link" class="overlay-icon">
                                    <span class="overlay-text">イベント<br><small>CLASS & EVENT</small></span>
                                </div>
                                <span class="portfolio-tag">Webデザイン</span>
                            </div>
                            <h3 class="portfolio-title">教育系企業コーポレートサイト</h3>
                        </article>
                    </a>

                    <!-- Item 2: Jirabai -->
                    <a href="https://www.figma.com/design/GFCL9UcXDSLEm824LC1T6f/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA-green?node-id=0-1&t=17TGWNZQcz4rjzOM-1">
                        <article href="https://www.figma.com/design/GFCL9UcXDSLEm824LC1T6f/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA-green?node-id=0-1&t=17TGWNZQcz4rjzOM-1" class="portfolio-item portfolio-item2 slide-down-bounce">
                            <div class="portfolio-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/port-2.png" alt="地図アプリ「ジラバイ」">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                                <span class="portfolio-tag">アプリデザイン・開発</span>
                            </div>
                        <h3 class="portfolio-title">造園系企業コーポレートサイト</h3>
                        </article>
                    </a>
                </div>

                <!-- Right Column: portfolio-section2 -->
                <div class="portfolio-section2">
                    <!-- Item 3: Micro Habit Runner -->
                    <a href="https://apps.apple.com/us/app/%E3%82%BD%E3%82%AF%E3%83%A1%E3%82%A4%E3%82%B7/id6755348490">
                        <article href="https://apps.apple.com/us/app/%E3%82%BD%E3%82%AF%E3%83%A1%E3%82%A4%E3%82%B7/id6755348490" class="portfolio-item portfolio-item3 slide-down-bounce">
                            <div class="portfolio-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/port-3.png" alt="ヘルスケアアプリ「Micro Habit Runner」">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                            <span class="portfolio-tag">Webデザイン・開発</span>
                            </div>
                        <h3 class="portfolio-title">エンジニア・個人開発者向け名刺アプリ「ソクメイシ」</h3>
                        </article>
                    </a>

                    <!-- Item 4: Dasaowa -->
                    <a href="https://nukebuy.web.app/">
                    <article href="https://nukebuy.web.app/" class="portfolio-item portfolio-item4 slide-down-bounce">
                        <div class="portfolio-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/port4.png" alt="ファッション系アプリ「ダサオワ」">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                            <span class="portfolio-tag">アプリデザイン・フロントエンド開発</span>
                        </div>
                        <h3 class="portfolio-title">ヘルスケア系アプリ「ヌケバイ」</h3>
                    </article>
                    </a>
                </div>
            </div>
        </section>

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
