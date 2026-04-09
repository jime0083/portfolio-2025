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
              @click="openPopup(app)"
            >
              <div class="app-thumbnail">
                <img :src="app.image" :alt="app.title">
              </div>
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

      <AppPopup
        :isActive="isAppPopupActive"
        :item="selectedAppItem"
        @close="closePopup"
      />

      <EndApp
        :isActive="isEndAppActive"
        :item="selectedAppItem"
        @close="closePopup"
      />
    </main>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import AppPopup from '../components/AppPopup.vue'
import EndApp from '../components/EndApp.vue'

const baseUrl = '/portfolio-2025/'
const containerRef = ref(null)

const appItems = [
  {
    id: 'skill-sheet',
    title: 'スキルシートメーカー',
    desc: 'エンジニア向けにスキルシート作成ツールも無料で利用できExcel,Sheet,Base形式でダウンロードできます',
    fullDesc: 'このアプリはエンジニアのスキルシート作成を簡略化するためのツールです。',
    url: '#',
    skills: 'Javascript(React),HTML,CSS,Git',
    image: baseUrl + 'assets/images/skill-sheat.png',
    isEnded: false
  },
  {
    id: 'metronome',
    title: 'Metronome-Mega-Max',
    desc: '音楽練習に必要なメトロノーム・タイマー・音楽再生機能がひとつのアプリで完結！',
    fullDesc: '楽器演奏者のための究極のメトロノームアプリです。',
    url: '#',
    skills: 'Javascript(ReactNative),HTML,CSS,Git,Firebase',
    image: baseUrl + 'assets/images/metronome-mega-max.png',
    isEnded: false
  },
  {
    id: '3tap-video',
    title: '3 Tap Video',
    desc: 'iPhoneの動画を3タップ以内で動画共有。TwitterなどのURLの動画を簡単に保存できるアプリ',
    fullDesc: 'お気に入りのSNS動画を素早く保存・共有するためのアプリです。',
    url: '#',
    skills: 'Javascript(ReactNative),HTML,CSS,Git,Firebase',
    image: baseUrl + 'assets/images/3tapvideo.png',
    isEnded: false
  },
  {
    id: '2tap-recorder',
    title: '2TapRecoder',
    desc: 'iPhoneの音声を2タップして録音開始。バックグラウンド録音も可能な録音アプリ',
    fullDesc: '会議やメモを逃さないための超高速録音アプリです。',
    url: '#',
    skills: 'Javascript(ReactNative),HTML,CSS,Git,Firebase',
    image: baseUrl + 'assets/images/2taprecoder.png',
    isEnded: false
  },
  {
    id: 'batsugaku',
    title: 'Batsugaku',
    desc: 'フォロワーが「サボり」を監視！エンジニア向け絶対に学習をサボらせない学習習慣化アプリ',
    fullDesc: 'SNSでの技術的な発信を最大化するための分析ツールです。',
    url: '#',
    skills: 'Javascript(ReactNative),HTML,CSS,Git,Firebase',
    image: baseUrl + 'assets/images/batsugaku.png',
    isEnded: false
  },
  {
    id: 'kapusai',
    title: 'カプサイ',
    desc: 'ふたりのお金を見える化して"欲しい"を叶えるカップル向け家計簿アプリ',
    fullDesc: 'ふたりのお金を見える化して"欲しい"を叶えるカップル向け家計簿アプリ。',
    url: '',
    skills: 'Javascript(ReactNative),HTML,CSS,Git,Firebase',
    image: baseUrl + 'assets/images/capsai.png',
    isEnded: true,
    endReason: 'アダルトコンテンツとみなされ外部決済サービスが利用できなくなったため'
  },
  {
    id: 'sokumeishi',
    title: 'ソクメイシ',
    desc: '30秒で作成可能！フリーランスエンジニア・デザイナー向け名刺作成アプリ',
    fullDesc: '30秒でプロ仕様の名刺が作成できるアプリ。',
    url: '#',
    skills: 'Javascript(ReactNative),HTML,CSS,Git,Firebase',
    image: baseUrl + 'assets/images/sokumeishi.png',
    isEnded: false
  },
  {
    id: 'shuchu-chu',
    title: '集中チュー',
    desc: 'スマホ一台では集中できない人向け！フロー導入をリードするアプリ',
    fullDesc: 'ポモドーロテクニックと環境音を組み合わせ、深い集中状態（フロー）への導入をサポートします。',
    url: '',
    skills: 'Javascript(ReactNative),HTML,CSS,Git,Firebase',
    image: baseUrl + 'assets/images/shuchuchu.png',
    isEnded: true,
    endReason: 'サービス終了理由をここに設定してください'
  },
  {
    id: 'nukebai',
    title: 'ヌケバイ',
    desc: '次はいつ？テストの日程を身で管理し忘れ防止の参考にする',
    fullDesc: '複雑なスケジュール管理をシンプルに。',
    url: '',
    skills: 'Javascript(Vue.js),HTML,CSS,Git,Firebase',
    image: baseUrl + 'assets/images/nukebye.png',
    isEnded: true,
    endReason: 'サービス終了理由をここに設定してください'
  }
]

const isAppPopupActive = ref(false)
const isEndAppActive = ref(false)
const selectedAppItem = ref(null)

const openPopup = (app) => {
  selectedAppItem.value = app
  if (app.isEnded) {
    isEndAppActive.value = true
  } else {
    isAppPopupActive.value = true
  }
  document.body.style.overflow = 'hidden'
}

const closePopup = () => {
  isAppPopupActive.value = false
  isEndAppActive.value = false
  document.body.style.overflow = ''
}

let observer = null

const initObserver = () => {
  observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-inview')
      }
    })
  }, { threshold: 0.1 })

  if (containerRef.value) {
    const targets = containerRef.value.querySelectorAll(
      '.slide-down-bounce, .fade-in-left, .fade-in-right, .fade-in-up'
    )
    targets.forEach(target => {
      observer.observe(target)
    })
  }
}

onMounted(() => {
  initObserver()
})

onUnmounted(() => {
  if (observer) {
    observer.disconnect()
  }
})
</script>

<style scoped>
.app-thumbnail {
  width: 220px;
  height: 220px;
  background-color: #D9D9D9;
  border-radius: 40px;
  margin-bottom: 16px;
  flex-shrink: 0;
  overflow: hidden;
}

.app-thumbnail img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
</style>
