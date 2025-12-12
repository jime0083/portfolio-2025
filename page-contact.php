<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<main id="primary" class="site-main">
    <section class="top">
        <div class="top-container slide-down-bounce">
            <h1 class="top-title">Contact</h1>
            <p class="top-subtitle-1">ご用件が定まっていない状態からでもお気軽にお問い合わせください</p>
            <p class="top-subtitle-2">
                料金や納期などのご相談はフォームからご送信ください<br>
                翌営業日中に折り返しご連絡いたします。
        </div>
    </section>

    <section class="contact-main">
        <div class="contact-container slide-down-bounce">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
