<template>
  <div :class="{ 'is-loaded': isLoaded, 'is-transitioning': isTransitioning }">
    <LoadingScreen v-if="showLoading" />
    <div class="transition-overlay-1"></div>
    <div class="transition-overlay-2"></div>

    <SiteHeader />

    <router-view />

    <SiteFooter />
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { useRouter } from 'vue-router'
import SiteHeader from './components/SiteHeader.vue'
import SiteFooter from './components/SiteFooter.vue'
import LoadingScreen from './components/LoadingScreen.vue'

const router = useRouter()
const isLoaded = ref(false)
const isTransitioning = ref(false)
const showLoading = ref(!document.documentElement.classList.contains('visited'))

// カバーアニメーションが画面を覆いきるまでの時間(ms)
// CSS の transition 0.6s + overlay-2 の遅延 0.1s に対応
const COVER_DURATION = 700

onMounted(() => {
  setTimeout(() => {
    isLoaded.value = true
    document.documentElement.classList.add('visited')
  }, showLoading.value ? 500 : 0)
})

// 遷移開始：カバーアニメーションで画面を覆いきるまで遷移を確定させない。
// この間はルーターが遷移先へ切り替わらないため、元のページを表示し続ける。
router.beforeEach(async (to, from) => {
  if (!from.name || to.path === from.path) return true

  isLoaded.value = false
  isTransitioning.value = true

  // カバーが画面全体を覆うまで待ってから遷移を確定させる
  await new Promise((resolve) => setTimeout(resolve, COVER_DURATION))
  return true
})

// 遷移確定後：遷移先ページはオーバーレイの裏で描画済みなので、
// ここでリビール（オーバーレイを右へ引く）を開始し、遷移先ページを表示する。
router.afterEach((to, from) => {
  if (!from.name || to.path === from.path) return

  isTransitioning.value = false
  isLoaded.value = true
})
</script>
