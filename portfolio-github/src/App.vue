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
import { ref, onMounted, watch } from 'vue'
import { useRoute } from 'vue-router'
import SiteHeader from './components/SiteHeader.vue'
import SiteFooter from './components/SiteFooter.vue'
import LoadingScreen from './components/LoadingScreen.vue'

const route = useRoute()
const isLoaded = ref(false)
const isTransitioning = ref(false)
const showLoading = ref(!document.documentElement.classList.contains('visited'))

onMounted(() => {
  setTimeout(() => {
    isLoaded.value = true
    document.documentElement.classList.add('visited')
  }, showLoading.value ? 500 : 0)
})

watch(() => route.path, (newPath, oldPath) => {
  if (oldPath && newPath !== oldPath) {
    isLoaded.value = false
    isTransitioning.value = true

    setTimeout(() => {
      isTransitioning.value = false
      isLoaded.value = true
    }, 600)
  }
})
</script>
