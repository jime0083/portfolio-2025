<template>
  <div id="app-modal" class="app-modal" :class="{ 'is-active': isActive }">
    <div class="modal-overlay" @click="close"></div>
    <div class="modal-content">
      <div class="modal-inner">
        <div class="modal-image"></div>
        <div class="modal-body">
          <h2 class="modal-title">{{ item?.title }}</h2>
          <p class="modal-description">{{ item?.fullDesc }}</p>
          <div class="modal-skills">
            <span class="modal-skills-label">対応言語・スキル</span>
            <p class="modal-skills-list">{{ item?.skills }}</p>
          </div>
          <a
            :href="item?.url || '#'"
            class="modal-link"
            target="_blank"
            rel="noopener noreferrer"
          >アプリをチェックする</a>
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
