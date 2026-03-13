<template>
  <div id="page-home" class="page-section is-active" data-page="home" ref="containerRef">
    <div class="home-container">
      <!-- Sidebar -->
      <aside id="secondary" class="widget-area home-sidebar">
        <nav class="sidebar-navigation">
          <ul>
            <li><a href="#profile" @click.prevent="scrollTo('profile')">Profile</a></li>
            <li><a href="#portfolio" @click.prevent="scrollTo('portfolio')">Portfolio</a></li>
            <li><a href="#top" @click.prevent="scrollTo('top')">Top</a></li>
          </ul>
        </nav>
        <div class="sidebar-social">
          <a href="https://x.com/Mikel_front_dev" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/x-red 1.png" alt="X">
          </a>
          <a href="https://github.com/jime0083" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/github-red 1.png" alt="GitHub">
          </a>
        </div>
      </aside>

      <main id="primary" class="site-main">
        <section id="top" class="hero-section">
          <video class="hero-video" autoplay muted loop playsinline>
            <source src="/assets/images/port.mp4" type="video/mp4">
          </video>
          <div class="hero-overlay"></div>
          <div class="hero-content">
            <h1 id="typewriter-text">{{ displayText }}</h1>
          </div>
        </section>

        <section id="portfolio" class="portfolio-section">
          <div class="portfolio-container">
            <!-- Left Column: portfolio-section1 -->
            <div class="portfolio-section1">
              <div class="section-header">
                <h2 class="js-split-text">Portfolio</h2>
              </div>

              <!-- Item 1 -->
              <article
                class="portfolio-item portfolio-item1 slide-down-bounce portfolio-modal-trigger"
                @click="openPortfolioModal(portfolioItems[0])"
              >
                <div class="portfolio-thumbnail">
                  <img src="/assets/images/port-1.png" alt="教育系企業コーポレートサイト">
                  <img src="/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                  <span class="portfolio-tag">Webデザイン</span>
                </div>
                <h3 class="portfolio-title">教育系企業コーポレートサイト</h3>
              </article>

              <!-- Item 2 -->
              <article
                class="portfolio-item portfolio-item2 slide-down-bounce portfolio-modal-trigger"
                @click="openPortfolioModal(portfolioItems[1])"
              >
                <div class="portfolio-thumbnail">
                  <img src="/assets/images/port-2.png" alt="造園系企業コーポレートサイト">
                  <img src="/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                  <span class="portfolio-tag">アプリデザイン・開発</span>
                </div>
                <h3 class="portfolio-title">造園系企業コーポレートサイト</h3>
              </article>
            </div>

            <!-- Right Column: portfolio-section2 -->
            <div class="portfolio-section2">
              <!-- Item 3 -->
              <article
                class="portfolio-item portfolio-item3 slide-down-bounce portfolio-modal-trigger"
                @click="openPortfolioModal(portfolioItems[2])"
              >
                <div class="portfolio-thumbnail">
                  <img src="/assets/images/port-3.png" alt="ソクメイシ">
                  <img src="/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                  <span class="portfolio-tag">Webデザイン・開発</span>
                </div>
                <h3 class="portfolio-title">エンジニア・個人開発者向け名刺アプリ「ソクメイシ」</h3>
              </article>

              <!-- Item 4 -->
              <article
                class="portfolio-item portfolio-item4 slide-down-bounce portfolio-modal-trigger"
                @click="openPortfolioModal(portfolioItems[3])"
              >
                <div class="portfolio-thumbnail">
                  <img src="/assets/images/port4.png" alt="ヌケバイ">
                  <img src="/assets/images/link 1.png" alt="Link" class="portfolio-link-icon">
                  <span class="portfolio-tag">アプリデザイン・フロントエンド開発</span>
                </div>
                <h3 class="portfolio-title">ヘルスケア系アプリ「ヌケバイ」</h3>
              </article>
            </div>
          </div>
        </section>

        <!-- Portfolio Modal -->
        <PortfolioModal
          :isActive="isPortfolioModalActive"
          :item="selectedPortfolioItem"
          @close="closePortfolioModal"
        />

        <section id="profile" class="profile-section">
          <div class="portfolio-container">
            <!-- Left Column: Profile Text -->
            <div class="profile-text-column">
              <div class="section-header">
                <h2 class="js-split-text">Profile</h2>
              </div>
              <!-- Responsive Image -->
              <div class="profile-image-responsive">
                <img src="/assets/images/port5.png" alt="Profile Image">
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

            <!-- Right Column: Profile Images -->
            <div class="profile-image-column fade-in-right">
              <div class="profile-images">
                <img src="/assets/images/prof1.png" alt="Profile Image 1" class="profile-img-1">
                <img src="/assets/images/prof3.png" alt="Profile Image 2" class="profile-img-2">
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue'
import { useTypewriter } from '../composables/useTypewriter'
import { useInViewMultiple } from '../composables/useInView'
import PortfolioModal from '../components/PortfolioModal.vue'

const containerRef = ref(null)
const { observe } = useInViewMultiple(containerRef)

const texts = ["Front end engineer", "Web designer", "Individual developer"]
const { displayText } = useTypewriter(texts)

// Portfolio items data
const portfolioItems = [
  {
    title: "教育系企業コーポレートサイト",
    desc: "教育系企業のコーポレートサイトを作成させていただきました",
    note: "※実案件ではWordPressで作成しましたが、",
    skills: "Javascript,HTML,CSS,Git,WordPress",
    siteUrl: "",
    designUrl: "https://www.figma.com/design/7DwKDpnTIOTrrXvZWmtyqo/%E5%AD%A6%E7%BF%92%E5%A1%BE%E3%83%9D%E3%83%BC%E3%83%88?node-id=0-1&t=IEUfA94LH48VgJul-1"
  },
  {
    title: "造園企業コーポレートサイト",
    desc: "造園系企業のコーポレートサイトを作成させていただきました",
    note: "※実案件ではWordPressで作成しましたが、",
    skills: "Javascript,HTML,CSS,Git,WordPress",
    siteUrl: "",
    designUrl: "https://www.figma.com/design/GFCL9UcXDSLEm824LC1T6f/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA-green?node-id=0-1&t=17TGWNZQcz4rjzOM-1"
  },
  {
    title: "エンジニア・個人開発者向け名刺アプリ「ソクメイシ」",
    desc: "エンジニアや個人開発者向けの名刺作成アプリを開発しました",
    note: "",
    skills: "Javascript(ReactNative),HTML,CSS,Git,Firebase",
    siteUrl: "https://apps.apple.com/us/app/%E3%82%BD%E3%82%AF%E3%83%A1%E3%82%A4%E3%82%B7/id6755348490",
    designUrl: ""
  },
  {
    title: "ヘルスケア系アプリ「ヌケバイ」",
    desc: "ヘルスケア管理をサポートするアプリを開発しました",
    note: "",
    skills: "Javascript(Vue.js),HTML,CSS,Git,Firebase",
    siteUrl: "https://nukebuy.web.app/",
    designUrl: ""
  }
]

const isPortfolioModalActive = ref(false)
const selectedPortfolioItem = ref(null)

const openPortfolioModal = (item) => {
  selectedPortfolioItem.value = item
  isPortfolioModalActive.value = true
  document.body.style.overflow = 'hidden'
}

const closePortfolioModal = () => {
  isPortfolioModalActive.value = false
  document.body.style.overflow = ''
}

const scrollTo = (id) => {
  const element = document.getElementById(id)
  if (element) {
    element.scrollIntoView({ behavior: 'smooth' })
  }
}

// Initialize split text animation
const initSplitText = () => {
  if (!containerRef.value) return
  const splitTargets = containerRef.value.querySelectorAll('.js-split-text:not([data-split-initialized])')
  splitTargets.forEach(target => {
    const text = target.textContent
    let newText = ''
    text.split('').forEach((char, index) => {
      if (char === ' ') {
        newText += ' '
      } else {
        newText += `<span style="transition-delay: ${index * 0.15}s">${char}</span>`
      }
    })
    target.innerHTML = newText
    target.setAttribute('data-split-initialized', 'true')
  })
}

onMounted(() => {
  initSplitText()
  observe()
})
</script>
