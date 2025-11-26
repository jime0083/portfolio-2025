<?php
/*
Template Name: Work Page
*/
get_header();
?>

<main id="primary" class="site-main">
    <section class="work-top">
        <div class="work-container">
            <h1 class="work-title">Work</h1>
            <p class="work-subtitle-1">ご用件が定まっていない状態からでもお気軽にお問い合わせください</p>
            <p class="work-subtitle-2">
                料金や納期などまずはお気軽にお問い合わせください<br>
                フォームから送信いただきまたら翌営業日中に折り返しご連絡いたします。
            </p>
        </div>
    </section>

    <section class="work-field">
        <div class="work-container">
            <h2 class="field-section-title">対応可能領域</h2>
            
            <div class="field-list">
                <!-- Item 1 -->
                <div class="field-item">
                    <div class="field-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Work1Pic.png" alt="フロントエンド開発">
                    </div>
                    <div class="field-main">
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
                    <div class="field-image">
                        <!-- Reusing Work1Pic.png as placeholder if specific image not provided, or use a gray box if preferred. Using Work1Pic for now as per instruction context -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Work1Pic.png" alt="Webサイト制作">
                    </div>
                    <div class="field-main">
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
                    <div class="field-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Work1Pic.png" alt="Webデザイン">
                    </div>
                    <div class="field-main">
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
            <h2 class="ex-section-title">過去の事例紹介(一部)</h2>
            
            <div class="case-study-list">
                <!-- Case Study 1 -->
                <div class="case-study">
                    <div class="case-divider"></div>
                    <div class="case-content">
                        <div class="case-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spana1.png" alt="事例画像">
                        </div>
                        <div class="case-details">
                            <p class="case-category">情報通信</p>
                            <h3 class="case-title">toB向け設計アプリ デザイン・開発</h3>
                            <p class="case-description">設計士の方に向けた図面作成・管理アプリケーションのデザインと開発を行いました。ユーザビリティを重視し、直感的な操作性を実現しています。</p>
                            <div class="case-tags">
                                <span class="case-tag">Webアプリ</span>
                                <span class="case-tag">フロントエンド</span>
                                <span class="case-tag">UI/UX</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="case-study">
                    <div class="case-divider"></div>
                    <div class="case-content">
                        <div class="case-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spana1.png" alt="事例画像">
                        </div>
                        <div class="case-details">
                            <p class="case-category">EC・小売</p>
                            <h3 class="case-title">コーポレートサイト デザイン・開発</h3>
                            <p class="case-description">企業の魅力を最大限に伝えるコーポレートサイトを制作しました。WordPressをベースに、更新性と拡張性を両立させた設計を実現しています。</p>
                            <div class="case-tags">
                                <span class="case-tag">WordPress</span>
                                <span class="case-tag">Webデザイン</span>
                                <span class="case-tag">コーディング</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3 -->
                <div class="case-study">
                    <div class="case-divider"></div>
                    <div class="case-content">
                        <div class="case-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spana1.png" alt="事例画像">
                        </div>
                        <div class="case-details">
                            <p class="case-category">ヘルスケア</p>
                            <h3 class="case-title">習慣化サポートアプリ 開発</h3>
                            <p class="case-description">日々の習慣を記録・管理できるモバイルアプリを開発しました。Vue.jsを活用し、スムーズなユーザー体験を提供しています。</p>
                            <div class="case-tags">
                                <span class="case-tag">モバイルアプリ</span>
                                <span class="case-tag">Vue.js</span>
                                <span class="case-tag">フロントエンド</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 4 -->
                <div class="case-study">
                    <div class="case-divider"></div>
                    <div class="case-content">
                        <div class="case-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spana1.png" alt="事例画像">
                        </div>
                        <div class="case-details">
                            <p class="case-category">観光・地域</p>
                            <h3 class="case-title">地域情報アプリ デザイン・開発</h3>
                            <p class="case-description">地域の魅力を発信する情報アプリを制作しました。ユーザーが使いやすいインターフェースと、充実した機能を備えています。</p>
                            <div class="case-tags">
                                <span class="case-tag">React</span>
                                <span class="case-tag">UI/UX</span>
                                <span class="case-tag">開発</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 5 -->
                <div class="case-study">
                    <div class="case-divider"></div>
                    <div class="case-content">
                        <div class="case-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spana1.png" alt="事例画像">
                        </div>
                        <div class="case-details">
                            <p class="case-category">教育</p>
                            <h3 class="case-title">学習管理システム フロントエンド開発</h3>
                            <p class="case-description">教育機関向けの学習管理システムのフロントエンド部分を担当しました。直感的な操作性と、豊富な機能を両立させています。</p>
                            <div class="case-tags">
                                <span class="case-tag">Webアプリ</span>
                                <span class="case-tag">フロントエンド</span>
                                <span class="case-tag">JavaScript</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 6 -->
                <div class="case-study">
                    <div class="case-divider"></div>
                    <div class="case-content">
                        <div class="case-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spana1.png" alt="事例画像">
                        </div>
                        <div class="case-details">
                            <p class="case-category">金融</p>
                            <h3 class="case-title">ファイナンシャルプランニングツール UI設計</h3>
                            <p class="case-description">資産管理をサポートするツールのUI設計を担当しました。使いやすさと信頼性を重視したデザインを実現しています。</p>
                            <div class="case-tags">
                                <span class="case-tag">UI設計</span>
                                <span class="case-tag">Figma</span>
                                <span class="case-tag">デザイン</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
