<template>
  <div id="portfolio-modal" class="portfolio-modal" :class="{ 'is-active': isActive }">
    <div class="modal-overlay" @click="close"></div>
    <div class="modal-content">
      <div class="modal-inner">
        <div class="modal-image"></div>
        <div class="modal-body">
          <h2 class="modal-title">{{ item?.title }}</h2>
          <p class="modal-description">{{ item?.desc }}</p>
          <p class="modal-note" v-if="item?.note">{{ item?.note }}</p>
          <div class="modal-skills">
            <span class="modal-skills-label">対応言語・スキル</span>
            <p class="modal-skills-list">{{ item?.skills }}</p>
          </div>
          <div class="modal-buttons">
            <a
              v-if="item?.siteUrl"
              :href="item.siteUrl"
              class="modal-link modal-site-link"
              target="_blank"
              rel="noopener noreferrer"
            >サイトをチェック</a>
            <a
              v-if="item?.designUrl"
              :href="item.designUrl"
              class="modal-link modal-design-link"
              target="_blank"
              rel="noopener noreferrer"
            >デザインをチェック</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, onUnmounted } from 'vue'

const props = defineProps({
  isActive: {
    type: Boolean,
    default: false
  },
  item: {
    type: Object,
    default: null
  }
})

const emit = defineEmits(['close'])

const close = () => {
  emit('close')
}

const handleEscape = (e) => {
  if (e.key === 'Escape' && props.isActive) {
    close()
  }
}

onMounted(() => {
  window.addEventListener('keydown', handleEscape)
})

onUnmounted(() => {
  window.removeEventListener('keydown', handleEscape)
})
</script>
