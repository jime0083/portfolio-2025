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
            <form action="#" method="post" class="contact-form">
                <!-- Row 1 -->
                <div class="contact-row">
                    <div class="contact-item">
                        <label class="text-title">お問い合わせ内容</label>
                        <input type="text" name="subject" class="contact-input">
                    </div>
                    <div class="contact-item">
                        <label class="text-title">氏名</label>
                        <input type="text" name="name" class="contact-input">
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="contact-row">
                    <div class="contact-item">
                        <label class="text-title">メールアドレス</label>
                        <input type="email" name="email" class="contact-input">
                    </div>
                    <div class="contact-item">
                        <label class="text-title">電話番号</label>
                        <input type="tel" name="phone" class="contact-input">
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="contact-row full-width">
                    <div class="contact-item">
                        <label class="text-title">お問い合わせ内容詳細</label>
                        <textarea name="message" class="contact-textarea"></textarea>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="contact-row full-width">
                    <button type="submit" class="contact-submit">SEND</button>
                </div>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>
