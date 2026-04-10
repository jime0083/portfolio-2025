<template>
  <div id="page-home" class="page-section is-active" data-page="home" ref="containerRef">
    <div class="home-container">
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
            <img :src="baseUrl + 'assets/images/x-red 1.png'" alt="X">
          </a>
          <a href="https://github.com/jime0083" target="_blank" rel="noopener noreferrer">
            <img :src="baseUrl + 'assets/images/github-red 1.png'" alt="GitHub">
          </a>
        </div>
      </aside>

      <main id="primary" class="site-main">
        <section id="top" class="hero-section">
          <video class="hero-video" autoplay muted loop playsinline>
            <source :src="baseUrl + 'assets/images/port.mp4'" type="video/mp4">
          </video>
          <div class="hero-overlay"></div>
          <div class="hero-content">
            <h1 id="typewriter-text">{{ displayText }}</h1>
          </div>
        </section>

        <section id="portfolio" class="portfolio-section">
          <div class="portfolio-container">
            <div class="portfolio-section1">
              <div class="section-header">
                <h2 class="js-split-text" ref="portfolioTitle">Portfolio</h2>
              </div>

              <article
                class="portfolio-item portfolio-item1 slide-down-bounce"
                @click="openUrl(portfolioItems[0].siteUrl)"
              >
                <div class="portfolio-thumbnail">
                  <img :src="baseUrl + 'assets/images/port-1.png'" alt="教育系企業コーポレートサイト">
                  <img :src="baseUrl + 'assets/images/link 1.png'" alt="Link" class="portfolio-link-icon">
                  <span class="portfolio-tag">Webデザイン</span>
                </div>
                <h3 class="portfolio-title">教育系企業コーポレートサイト</h3>
              </article>

              <article
                class="portfolio-item portfolio-item2 slide-down-bounce"
                @click="openUrl(portfolioItems[1].siteUrl)"
              >
                <div class="portfolio-thumbnail">
                  <img :src="baseUrl + 'assets/images/port-2.png'" alt="造園系企業コーポレートサイト">
                  <img :src="baseUrl + 'assets/images/link 1.png'" alt="Link" class="portfolio-link-icon">
                  <span class="portfolio-tag">アプリデザイン・開発</span>
                </div>
                <h3 class="portfolio-title">造園系企業コーポレートサイト</h3>
              </article>
            </div>

            <div class="portfolio-section2">
              <article
                class="portfolio-item portfolio-item3 slide-down-bounce"
                @click="openUrl(portfolioItems[2].siteUrl)"
              >
                <div class="portfolio-thumbnail">
                  <img :src="baseUrl + 'assets/images/Batsugaku-top.png'" alt="Batsugaku">
                  <img :src="baseUrl + 'assets/images/link 1.png'" alt="Link" class="portfolio-link-icon">
                  <span class="portfolio-tag">アプリデザイン・開発</span>
                </div>
                <h3 class="portfolio-title">エンジニア向け学習習慣化アプリ「Batsugaku」</h3>
              </article>

              <article
                class="portfolio-item portfolio-item4 slide-down-bounce"
                @click="openUrl(portfolioItems[3].siteUrl)"
              >
                <div class="portfolio-thumbnail">
                  <img :src="baseUrl + 'assets/images/ソクメイシ iPad用.png'" alt="ソクメイシ">
                  <img :src="baseUrl + 'assets/images/link 1.png'" alt="Link" class="portfolio-link-icon">
                  <span class="portfolio-tag">Webデザイン・開発</span>
                </div>
                <h3 class="portfolio-title">エンジニア・個人開発者向け名刺アプリ「ソクメイシ」</h3>
              </article>
            </div>
          </div>
        </section>

        <section id="profile" class="profile-section">
          <div class="portfolio-container">
            <div class="profile-text-column">
              <div class="section-header">
                <h2 class="js-split-text" ref="profileTitle">Profile</h2>
              </div>
              <div class="profile-image-responsive">
                <img :src="baseUrl + 'assets/images/port5.png'" alt="Profile Image">
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

            <div class="profile-image-column fade-in-right">
              <div class="profile-images">
                <img :src="baseUrl + 'assets/images/prof1.png'" alt="Profile Image 1" class="profile-img-1">
                <img :src="baseUrl + 'assets/images/prof3.png'" alt="Profile Image 2" class="profile-img-2">
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const baseUrl = '/portfolio-2025/'
const containerRef = ref(null)
const portfolioTitle = ref(null)
const profileTitle = ref(null)

const texts = ["Front end engineer", "Web designer", "Individual developer"]
const displayText = ref('')
let textIndex = 0
let charIndex = 0
let isDeleting = false
let typeTimeout = null

const portfolioItems = [
  {
    title: "教育系企業コーポレートサイト",
    desc: "教育系企業のコーポレートサイトを作成させていただきました",
    note: "※実案件ではWordPressで作成しましたが、",
    skills: "Javascript,HTML,CSS,Git,WordPress",
    siteUrl: "https://jime0083.github.io/cramSchoolPort/#/",
    designUrl: "https://www.figma.com/design/7DwKDpnTIOTrrXvZWmtyqo/%E5%AD%A6%E7%BF%92%E5%A1%BE%E3%83%9D%E3%83%BC%E3%83%88?node-id=0-1&t=IEUfA94LH48VgJul-1"
  },
  {
    title: "造園企業コーポレートサイト",
    desc: "造園系企業のコーポレートサイトを作成させていただきました",
    note: "※実案件ではWordPressで作成しましたが、",
    skills: "Javascript,HTML,CSS,Git,WordPress",
    siteUrl: "https://jime0083.github.io/landscapingPort/#/",
    designUrl: "https://www.figma.com/design/GFCL9UcXDSLEm824LC1T6f/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA-green?node-id=0-1&t=17TGWNZQcz4rjzOM-1"
  },
  {
    title: "エンジニア向け学習習慣化アプリ「Batsugaku」",
    desc: "フォロワーが「サボり」を監視！エンジニア向け絶対に学習をサボらせない学習習慣化アプリ",
    note: "",
    skills: "Javascript(ReactNative),HTML,CSS,Git,Firebase",
    siteUrl: "https://apps.apple.com/jp/app/batsugaku-%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2%E5%90%91%E3%81%91%E5%AD%A6%E7%BF%92%E7%BF%92%E6%85%A3%E5%8C%96%E3%82%A2%E3%83%97%E3%83%AA/id6758074322",
    designUrl: ""
  },
  {
    title: "エンジニア・個人開発者向け名刺アプリ「ソクメイシ」",
    desc: "エンジニアや個人開発者向けの名刺作成アプリを開発しました",
    note: "",
    skills: "Javascript(ReactNative),HTML,CSS,Git,Firebase",
    siteUrl: "https://apps.apple.com/us/app/%E3%82%BD%E3%82%AF%E3%83%A1%E3%82%A4%E3%82%B7/id6755348490",
    designUrl: ""
  }
]

const openUrl = (url) => {
  if (url) {
    window.open(url, '_blank', 'noopener,noreferrer')
  }
}

const scrollTo = (id) => {
  const element = document.getElementById(id)
  if (element) {
    element.scrollIntoView({ behavior: 'smooth' })
  }
}

// Typewriter effect
const type = () => {
  const currentText = texts[textIndex]

  if (isDeleting) {
    displayText.value = currentText.substring(0, charIndex - 1)
    charIndex--
  } else {
    displayText.value = currentText.substring(0, charIndex + 1)
    charIndex++
  }

  let speed = isDeleting ? 50 : 100

  if (!isDeleting && charIndex === currentText.length) {
    isDeleting = true
    speed = 2000
  } else if (isDeleting && charIndex === 0) {
    isDeleting = false
    textIndex = (textIndex + 1) % texts.length
    speed = 500
  }

  typeTimeout = setTimeout(type, speed)
}

// Split text animation
const initSplitText = () => {
  const targets = [portfolioTitle.value, profileTitle.value]
  targets.forEach(target => {
    if (!target || target.getAttribute('data-split-initialized')) return
    const text = target.textContent || ''
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

// IntersectionObserver for animations
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
      '.slide-down-bounce, .fade-in-left, .fade-in-right, .fade-in-up, .js-split-text'
    )
    targets.forEach(target => {
      observer.observe(target)
    })
  }
}

onMounted(() => {
  type()
  initSplitText()
  initObserver()
})

onUnmounted(() => {
  if (typeTimeout) {
    clearTimeout(typeTimeout)
  }
  if (observer) {
    observer.disconnect()
  }
})
</script>
