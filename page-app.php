<?php
/*
Template Name: App Page
*/
get_header();
?>

<main id="primary" class="site-main">
    <section class="top">
        <div class="top-container slide-down-bounce">
            <h1 class="top-title">App</h1>
            <p class="top-subtitle-1">個人開発も行っています</p>
            <p class="top-subtitle-2">
                クライアントワークとは別にWebアプリやスマホアプリのアプリ<br>
                の個人開発も行っています<br>
                気になったアプリやサービスはぜひチェックしてみてください
            </p>
        </div>
    </section>

    <section class="app-section">
        <div class="app-container">
            <div class="app-grid">
                <?php
                // Dummy app data for initial implementation
                $apps = [
                    [
                        'id' => 'skill-sheet',
                        'title' => 'スキルシートメーカー',
                        'desc' => 'エンジニア向けにスキルシート作成ツールも無料で利用できExcel,Sheet,Base形式でダウンロードできます',
                        'skills' => 'Javascript(React) | HTML / CSS, Git',
                        'full_desc' => 'このアプリはエンジニアのスキルシート作成を簡略化するためのツールです。直感的なインターフェースで必要事項を入力するだけで、ビジネスでそのまま使えるフォーマット（Excel, Google Sheets, Base）で出力可能です。',
                        'url' => '#'
                    ],
                    [
                        'id' => 'metronome',
                        'title' => 'Metronome-Mega-Max',
                        'desc' => '楽器練習用の多機能メトロノーム。タイマー・録音機能もついたひとつのアプリで完結',
                        'skills' => 'Javascript(ReactNative) | HTML / CSS, Git, Firebase',
                        'full_desc' => '楽器演奏者のための究極のメトロノームアプリです。精度の高いクリックに加え、練習時間を管理するタイマー機能、自分の演奏をすぐに確認できる録音機能を搭載しています。',
                        'url' => '#'
                    ],
                    [
                        'id' => '3tap-video',
                        'title' => '3 Tap Video',
                        'desc' => 'iPhoneの動画を3タップ以内で動画共有。TwitterなどのURLの動画を簡単に保存できるアプリ',
                        'skills' => 'Javascript(ReactNative) | HTML / CSS, Git, Firebase',
                        'full_desc' => 'お気に入りのSNS動画を素早く保存・共有するためのアプリです。極限までタップ回数を減らしたUXで、ストレスなく動画をライブラリに保存できます。',
                        'url' => '#'
                    ],
                    [
                        'id' => '2tap-recorder',
                        'title' => '2TapRecoder',
                        'desc' => 'iPhoneの音声を2タップして録音開始。バックグラウンド録音も可能な録音アプリ',
                        'skills' => 'Javascript(ReactNative) | HTML / CSS, Git, Firebase',
                        'full_desc' => '会議やメモを逃さないための超高速録音アプリです。ロック画面からのアクセスも含め、わずか2タップで録音を開始でき、バックグラウンドでの安定した動作を保証します。',
                        'url' => '#'
                    ],
                    [
                        'id' => 'batsugaku',
                        'title' => 'Batsugaku',
                        'desc' => 'フォロワー「1人より1000」を目指すエンジニアに向けた爆速でフォローを増やすための分析アプリ',
                        'skills' => 'Javascript(ReactNative) | HTML / CSS, Git, Firebase',
                        'full_desc' => 'SNSでの技術的な発信を最大化するための分析ツールです。どのような投稿がリーチを伸ばすのか、最適な投稿タイミングはいつなのかをデータに基づいて提案します。',
                        'url' => '#'
                    ],
                    [
                        'id' => 'kapusai',
                        'title' => 'カプサイ',
                        'desc' => 'ふとした時のアイデアをおさめておけるようなシンプルなUIの録音アプリ',
                        'skills' => 'Javascript(ReactNative) | HTML / CSS, Git, Firebase',
                        'full_desc' => 'ひらめきを逃さないためのミニマルな録音アプリです。あえて機能を削ぎ落とし、起動してすぐに録音することに特化したデザインになっています。',
                        'url' => '#'
                    ],
                ];

                foreach ($apps as $app) : ?>
                    <div class="app-item fade-in-up" data-app-id="<?php echo esc_attr($app['id']); ?>" data-full-desc="<?php echo esc_attr($app['full_desc']); ?>" data-url="<?php echo esc_attr($app['url']); ?>">
                        <div class="app-thumbnail">
                            <!-- Image will be #D9D9D9 by CSS -->
                        </div>
                        <div class="app-info">
                            <h3 class="app-title"><?php echo esc_html($app['title']); ?></h3>
                            <p class="app-desc"><?php echo esc_html($app['desc']); ?></p>
                            <div class="app-meta">
                                <span class="meta-label">対応言語・スキル</span>
                                <p class="meta-tech"><?php echo esc_html($app['skills']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- App Modal -->
    <div id="app-modal" class="app-modal">
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <div class="modal-inner">
                <div class="modal-image"></div>
                <div class="modal-body">
                    <h2 class="modal-title"></h2>
                    <p class="modal-description"></p>
                    <a href="#" class="modal-link" target="_blank" rel="noopener noreferrer">サイトを見る</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
