<template>
  <div :class="bodyClasses">
    <LoadingScreen v-if="showLoading" />
    <div class="transition-overlay-1"></div>
    <div class="transition-overlay-2"></div>

    <SiteHeader />

    <router-view v-slot="{ Component, route }">
      <component
        :is="Component"
        :key="route.path"
        @before-enter="onBeforeEnter"
      />
    </router-view>

    <SiteFooter />
  </div>
</template>

<script setup>
import { ref, computed, watch, onMounted } from 'vue'
import { useRouter } from 'vue-router'
import SiteHeader from './components/SiteHeader.vue'
import SiteFooter from './components/SiteFooter.vue'
import LoadingScreen from './components/LoadingScreen.vue'

const router = useRouter()
const isLoaded = ref(false)
const isTransitioning = ref(false)
const showLoading = ref(!document.documentElement.classList.contains('visited'))

const bodyClasses = computed(() => ({
  'is-loaded': isLoaded.value,
  'is-transitioning': isTransitioning.value
}))

onMounted(() => {
  setTimeout(() => {
    isLoaded.value = true
  }, showLoading.value ? 500 : 0)
})

watch(() => router.currentRoute.value.path, (newPath, oldPath) => {
  if (newPath !== oldPath) {
    isLoaded.value = false
    isTransitioning.value = true

    setTimeout(() => {
      isTransitioning.value = false
      isLoaded.value = true
    }, 600)
  }
})

const onBeforeEnter = () => {
  // Animation reset handled by watch
}
</script>
