<?php
/*
Template Name: Work Page
*/
get_header();
?>

<main id="primary" class="site-main">
    <section class="top">
        <div class="top-container slide-down-bounce">
            <h1 class="top-title">Work</h1>
            <p class="top-subtitle-1">フロントエンド開発・Webデザイン・Webサイト制作など幅広くお受けいたします</p>
            <p class="top-subtitle-2">
                貴社の目的に対してどのような方策がベストか<br>
                要件が明確に定まってなくてもサポートいたします。
            </p>
        </div>
    </section>

    <section class="work-field">
        <div class="work-container">
            <h2 class="field-section-title js-split-text">対応可能領域</h2>
            
            <div class="field-list">
                <!-- Item 1 -->
                <div class="field-item">
                    <div class="field-image fade-in-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work2.png" alt="フロントエンド開発">
                    </div>
                    <div class="field-main fade-in-right">
                        <div class="field-header">
                            <h3 class="field-title">フロントエンド開発</h3>
                            <span class="field-subtitle">Frontend Development</span>
                        </div>
                        <p class="field-description">主にVue.jsを使用したWebサービスの開発をしています</p>
                        <div class="field-skills">
                            <h4 class="skills-title">対応言語・スキル</h4>
                            <p class="skills-list">Javascript(Vue.js,React.js),HTML,CSS,Git</p>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="field-item reverse">
                    <div class="field-image fade-in-right">
                        <!-- Reusing Work1Pic.png as placeholder if specific image not provided, or use a gray box if preferred. Using Work1Pic for now as per instruction context -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work1.png" alt="Webサイト制作">
                    </div>
                    <div class="field-main fade-in-left">
                        <div class="field-header">
                            <h3 class="field-title">Webサイト制作</h3>
                            <span class="field-subtitle">Website production</span>
                        </div>
                        <p class="field-description">WordPressを使用したコーポレートサイトやLPのデザイン・開発をしています。</p>
                        <div class="field-skills">
                            <h4 class="skills-title">対応言語・スキル</h4>
                            <p class="skills-list">Javascript(jQuery),HTML,CSS,PHP,WordPress,Git</p>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="field-item">
                    <div class="field-image fade-in-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work3.png" alt="Webデザイン">
                    </div>
                    <div class="field-main fade-in-right">
                        <div class="field-header">
                            <h3 class="field-title">Webデザイン</h3>
                            <span class="field-subtitle">Web design</span>
                        </div>
                        <p class="field-description">FigmaやIllustratorを使用しUI/UXデザインを作成します</p>
                        <div class="field-skills">
                            <h4 class="skills-title">対応言語・スキル</h4>
                            <p class="skills-list">Figma,Illustrator,Photoshop</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work-ex">
        <div class="work-container">
            <h2 class="ex-section-title js-split-text">過去の事例紹介(一部)</h2>
            
            <div class="case-study-list">
                <!-- Case Study 1 -->
                <div class="case-study fade-in-up">
                    <div class="case-divider"></div>
                    <div class="case-content">
                        <div class="case-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spana1.png" alt="事例画像">
                            <p class="case-category">情報通信</p>
                        </div>
                        <div class="case-details">
                            <h3 class="case-title">toB向け設計アプリ デザイン・開発</h3>
                            <p class="case-description">Adobe XDを使用し約10画面デザインカンプを作成、Vue.jsを使⽤してフロントエンド開発をしました。<br/>デザイナー・フロントエンドエンジニアが自分1人しかいなかったためこの案件内のデザイン・フロントエンド開発のすべてを担い、要件定義に加わり設計書の作成にも携わりました。</p>
                            <div class="case-tags">
                                <span class="case-tag">Webアプリ</span>
                                <span class="case-tag">フロントエンド</span>
                                <span class="case-tag">アプリデザイン</span>
                                <span class="case-tag">要件定義</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="case-study fade-in-up">
                    <div class="case-divider"></div>
                    <div class="case-content">
                        <div class="case-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spana1.png" alt="事例画像">
                            <p class="case-category">情報通信</p>
                        </div>
                        <div class="case-details">
                            <h3 class="case-title">toC向けカーリスアプリ  デザイン・開発</h3>
                            <p class="case-description">自動車関連企業のtoB向けアプリ(ウォーターフォール)のデザインとフロントエンド開発に携わりました。<br/>デザインではAdobe XDを使用し40ページ以上のデザインカンプを作成し、開発ではフロントエンドエンジニアとしてVue.jsを使⽤してSPA開発も行いました。</p>
                            <div class="case-tags">
                                <span class="case-tag">Webアプリ</span>
                                <span class="case-tag">フロントエンド</span>
                                <span class="case-tag">アプリデザイン</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3 -->
                <div class="case-study fade-in-up">
                    <div class="case-divider"></div>
                    <div class="case-content">
                        <div class="case-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/helth.png" alt="事例画像">
                            <p class="case-category">ヘルスケア</p>
                        </div>
                        <div class="case-details">
                            <h3 class="case-title">toC向けヘルスケアアプリ  デザイン・開発</h3>
                            <p class="case-description">フロントエンド開発(Vue.js)加え要件定義から携わり設計書の作成も行いました。<br/>また、UI/UXに関する知見のあるのが自分しかいなかったため、Figmaを使用し約20画面デザインカンプを作成しました。</p>
                            <div class="case-tags">
                                <span class="case-tag">Webアプリ</span>
                                <span class="case-tag">フロントエンド</span>
                                <span class="case-tag">アプリデザイン</span>
                                <span class="case-tag">要件定義</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 5 -->
                <div class="case-study fade-in-up">
                    <div class="case-divider"></div>
                    <div class="case-content">
                        <div class="case-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spana1.png" alt="事例画像">
                            <p class="case-category">情報通信</p>
                        </div>
                        <div class="case-details">
                            <h3 class="case-title">IT企業コーポレートサイトカスタマイズ  デザイン・開発</h3>
                            <p class="case-description">IT企業のコーポレートサイトの刷新に携わりました。デザイン制作~コーディングまでを全て1人で対応しました。</p>
                            <div class="case-tags">
                                <span class="case-tag">Webデザイン</span>
                                <span class="case-tag">Web制作</span>
                                <span class="case-tag">WordPress</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 6 -->
                <div class="case-study fade-in-up">
                    <div class="case-divider"></div>
                    <div class="case-content">
                        <div class="case-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop.png" alt="事例画像">
                            <p class="case-category">小売</p>
                        </div>
                        <div class="case-details">
                            <h3 class="case-title">toC向けコーヒー豆販売LP  デザイン・開発</h3>
                            <p class="case-description">LPデザイン制作~コーディングまでを全て1人で対応しました。</p>
                            <div class="case-tags">
                                <span class="case-tag">Webデザイン</span>
                                <span class="case-tag">LP制作</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="case-divider"></div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
