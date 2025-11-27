<?php get_header(); ?>

<div class="home-container">
    <?php get_template_part( 'template-parts/sidebar-home' ); ?>

    <main id="primary" class="site-main">
        <section id="top" class="hero-section">
            <div class="hero-content">
                <h1>Engineer In...</h1>
            </div>
        </section>

        <section id="portfolio" class="portfolio-section">
            <div class="portfolio-container">
                <!-- Left Column: portfolio-section1 -->
                <div class="portfolio-section1">
                    <div class="section-header">
                        <h2>Portfolio</h2>
                    </div>
                    
                    <!-- Item 1: Garden Office -->
                    <article class="portfolio-item portfolio-item1">
                        <div class="portfolio-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/garden office3 1.png" alt="造園系企業コーポレートサイト">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                            <div class="portfolio-overlay">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link 1.png" alt="Link" class="overlay-icon">
                                <span class="overlay-text">イベント<br><small>CLASS & EVENT</small></span>
                            </div>
                            <span class="portfolio-tag">Webデザイン</span>
                        </div>
                        <h3 class="portfolio-title">造園系企業コーポレートサイト</h3>
                    </article>

                    <!-- Item 2: Jirabai -->
                    <article class="portfolio-item portfolio-item2">
                        <div class="portfolio-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cyukankun 1.png" alt="地図アプリ「ジラバイ」">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                            <span class="portfolio-tag">アプリデザイン・開発</span>
                        </div>
                        <h3 class="portfolio-title">地図アプリ「ジラバイ」</h3>
                    </article>
                </div>

                <!-- Right Column: portfolio-section2 -->
                <div class="portfolio-section2">
                    <!-- Item 3: Micro Habit Runner -->
                    <article class="portfolio-item portfolio-item3">
                        <div class="portfolio-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/green-port 1.png" alt="ヘルスケアアプリ「Micro Habit Runner」">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                            <span class="portfolio-tag">アプリデザイン・開発</span>
                        </div>
                        <h3 class="portfolio-title">ヘルスケアアプリ「Micro Habit Runner」</h3>
                    </article>

                    <!-- Item 4: Dasaowa -->
                    <article class="portfolio-item portfolio-item4">
                        <div class="portfolio-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dasaowa 1.png" alt="ファッション系アプリ「ダサオワ」">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                            <span class="portfolio-tag">フロントエンド開発</span>
                        </div>
                        <h3 class="portfolio-title">ファッション系アプリ「ダサオワ」</h3>
                    </article>
                </div>
            </div>
        </section>

        <section id="profile" class="profile-section">
            <div class="portfolio-container">
                <!-- Left Column: Profile Text -->
                <div class="profile-text-column">
                    <div class="section-header">
                        <h2>Profile</h2>
                    </div>
                    <div class="profile-text">
                        <h3 class="profile-name">栗田 孟 <span class="en-name">Hajime Kurita</span></h3>
                        <p>
                            1993年北海道生まれ。大学を3年で中退し墓石清掃事業立ち上げやアフィリエイトなどを経験<br>
                            2017年、独学でコーディングを学びフリーランスとしてWeb制作に携わるように。<br>
                            程なくしてWeb制作だけでなくWebデザインも任されるように。<br>
                            そして2020年株式会社ライズフォース入社、フロントエンドエンジニアとして勤務。<br>
                            2022年に退社。再びフリーランスとなりフロントエンド開発やWebデザイン、Web制作などの業務を請け負う。<br>
                            2024年よりクライアントワークの傍ら個人開発を開始、「ソクメイシ」「カプサイ」などのアプリを開発。<br>
                            フリーランスに転身した後も個人開発を通じて新しいスキルを身に付けクライアントに還元しています。
                        </p>
                    </div>
                </div>

                <!-- Right Column: Profile Images -->
                <div class="profile-image-column">
                    <div class="profile-images">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 14.png" alt="Profile Image 1" class="profile-img-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle 15.png" alt="Profile Image 2" class="profile-img-2">
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
