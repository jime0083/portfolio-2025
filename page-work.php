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
</main>

<?php get_footer(); ?>
