<template>
  <div id="page-app" class="page-section is-active" data-page="app" ref="containerRef">
    <main id="primary-app" class="site-main">
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
            <div
              v-for="app in appItems"
              :key="app.id"
              class="app-item fade-in-up"
              @click="openAppModal(app)"
            >
              <div class="app-thumbnail"></div>
              <div class="app-info">
                <h3 class="app-title">{{ app.title }}</h3>
                <p class="app-desc">{{ app.desc }}</p>
                <div class="app-meta">
                  <span class="meta-label">対応言語・スキル</span>
                  <p class="meta-tech">{{ app.skills }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- App Modal -->
      <AppModal
        :isActive="isAppModalActive"
        :item="selectedAppItem"
        @close="closeAppModal"
      />
    </main>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { useInViewMultiple } from '../composables/useInView'
import AppModal from '../components/AppModal.vue'

const containerRef = ref(null)
const { observe } = useInViewMultiple(containerRef)

const appItems = [
  {
    id: 'skill-sheet',
    title: 'スキルシートメーカー',
    desc: 'エンジニア向けにスキルシート作成ツールも無料で利用できExcel,Sheet,Base形式でダウンロードできます',
    fullDesc: 'このアプリはエンジニアのスキルシート作成を簡略化するためのツールです。直感的なインターフェースで必要事項を入力するだけで、ビジネスでそのまま使えるフォーマット（Excel, Google Sheets, Base）で出力可能です。',
    url: '#',
    skills: 'Javascript(React) | HTML / CSS, Git'
  },
  {
    id: 'metronome',
    title: 'Metronome-Mega-Max',
    desc: '音楽練習に必要なメトロノーム・タイマー・音楽再生機能がひとつのアプリで完結！',
    fullDesc: '楽器演奏者のための究極のメトロノームアプリです。精度の高いクリックに加え、練習時間を管理するタイマー機能、自分の演奏をすぐに確認できる録音機能を搭載しています。',
    url: '#',
    skills: 'Javascript(ReactNative) | HTML / CSS, Git, Firebase'
  },
  {
    id: '3tap-video',
    title: '3 Tap Video',
    desc: 'iPhoneの動画を3タップ以内で動画共有。TwitterなどのURLの動画を簡単に保存できるアプリ',
    fullDesc: 'お気に入りのSNS動画を素早く保存・共有するためのアプリです。極限までタップ回数を減らしたUXで、ストレスなく動画をライブラリに保存できます。',
    url: '#',
    skills: 'Javascript(ReactNative) | HTML / CSS, Git, Firebase'
  },
  {
    id: '2tap-recorder',
    title: '2TapRecoder',
    desc: 'iPhoneの音声を2タップして録音開始。バックグラウンド録音も可能な録音アプリ',
    fullDesc: '会議やメモを逃さないための超高速録音アプリです。ロック画面からのアクセスも含め、わずか2タップで録音を開始でき、バックグラウンドでの安定した動作を保証します。',
    url: '#',
    skills: 'Javascript(ReactNative) | HTML / CSS, Git, Firebase'
  },
  {
    id: 'batsugaku',
    title: 'Batsugaku',
    desc: 'フォロワーが「サボり」を監視！エンジニア向け絶対に学習をサボらせない学習習慣化アプリ',
    fullDesc: 'SNSでの技術的な発信を最大化するための分析ツールです。どのような投稿がリーチを伸ばすのか、最適な投稿タイミングはいつなのかをデータに基づいて提案します。',
    url: '#',
    skills: 'Javascript(ReactNative) | HTML / CSS, Git, Firebase'
  },
  {
    id: 'kapusai',
    title: 'カプサイ',
    desc: 'ふたりのお金を見える化して"欲しい"を叶えるカップル向け家計簿アプリ',
    fullDesc: 'ひらめきを逃さないためのミニマルな録音アプリです。あえて機能を削ぎ落とし、起動してすぐに録音することに特化したデザインになっています。',
    url: '#',
    skills: 'Javascript(ReactNative) | HTML / CSS, Git, Firebase'
  },
  {
    id: 'zokumeishi',
    title: 'ゾクメイシ',
    desc: '30秒で作成可能！フリーランスエンジニア・デザイナー向け名刺作成アプリ',
    fullDesc: '30秒でプロ仕様の名刺が作成できるアプリ。エンジニアやデザイナーに最適なテンプレートが豊富です。',
    url: '#',
    skills: 'Javascript(ReactNative) | HTML / CSS, Git, Firebase'
  },
  {
    id: 'shuchu-chu',
    title: '集中チュー',
    desc: 'スマホ一台では集中できない人向け！フロー導入をリードするアプリ',
    fullDesc: 'ポモドーロテクニックと環境音を組み合わせ、深い集中状態（フロー）への導入をサポートします。',
    url: '#',
    skills: 'Javascript(ReactNative) | HTML / CSS, Git, Firebase'
  },
  {
    id: 'nukebai',
    title: 'ヌケバイ',
    desc: '次はいつ？テストの日程を身で管理し忘れ防止の参考にする',
    fullDesc: '複雑なスケジュール管理をシンプルに。リマインダー機能で重要なイベントを見逃しません。',
    url: '#',
    skills: 'Javascript(Vue.js), HTML, CSS, Git, Firebase'
  },
  {
    id: 'frontend-1',
    title: 'フロントエンド開発',
    desc: '主にReactを使用しVue.js等のサービス開発をしています',
    fullDesc: 'モダンなフロントエンドフレームワークを用いた開発実績をまとめたプロジェクトです。',
    url: '#',
    skills: 'Javascript(React/Vue.js), HTML, CSS, Git'
  },
  {
    id: 'frontend-2',
    title: 'フロントエンド開発',
    desc: '主にReactを使用したSNSサービスの開発をしています',
    fullDesc: 'React/Next.jsを用いた大規模なSNSサービスのUI/UX実装に携わりました。',
    url: '#',
    skills: 'Javascript(React/Next.js), HTML, CSS, Git'
  },
  {
    id: 'frontend-3',
    title: 'フロントエンド開発',
    desc: '主にVue.jsを用いたCMS開発および開発運用をしています',
    fullDesc: 'Vue.jsを用いた管理画面の開発一式および効率的な運用の仕組みづくりを行っています。',
    url: '#',
    skills: 'Javascript(Vue.js/Nuxt.js), HTML, CSS, Git'
  }
]

const isAppModalActive = ref(false)
const selectedAppItem = ref(null)

const openAppModal = (app) => {
  selectedAppItem.value = app
  isAppModalActive.value = true
  document.body.style.overflow = 'hidden'
}

const closeAppModal = () => {
  isAppModalActive.value = false
  document.body.style.overflow = ''
}

onMounted(() => {
  observe()
})
</script>
