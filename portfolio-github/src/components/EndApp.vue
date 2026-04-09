<template>
  <div class="end-app" :class="{ 'is-active': isActive }">
    <div class="popup-overlay" @click="close"></div>
    <div class="popup-content">
      <div class="popup-inner">
        <div class="popup-image">
          <img v-if="item?.image" :src="item.image" :alt="item?.title">
        </div>
        <div class="popup-body">
          <h2 class="popup-title">{{ item?.title }}</h2>
          <p class="popup-description">{{ item?.fullDesc }}</p>
          <p class="popup-ended-note">※現在はサービス終了</p>
          <div class="popup-skills">
            <span class="popup-skills-label">対応言語・スキル</span>
            <p class="popup-skills-list">{{ item?.skills }}</p>
          </div>
          <div class="popup-end-reason">
            <span class="popup-end-reason-label">サービス終了理由</span>
            <p class="popup-end-reason-text">{{ item?.endReason }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, onUnmounted } from 'vue'

const props = defineProps({
  isActive: { type: Boolean, default: false },
  item: { type: Object, default: null }
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

<style scoped>
.end-app {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 10000;
  display: none;
  align-items: center;
  justify-content: center;
}

.end-app.is-active {
  display: flex;
}

.popup-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.6);
}

.popup-content {
  position: relative;
  width: 90%;
  max-width: 720px;
  background-color: #666666;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
  z-index: 1;
  padding: 40px;
  box-sizing: border-box;
}

.popup-inner {
  display: flex;
  flex-direction: row;
  gap: 40px;
  align-items: stretch;
}

.popup-image {
  width: 240px;
  min-height: 280px;
  background-color: #C0C0C0;
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.popup-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.popup-body {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 0;
}

.popup-title {
  font-size: 24px;
  color: #D1597B;
  margin-bottom: 16px;
  font-weight: bold;
  margin-top: 0;
}

.popup-description {
  font-size: 14px;
  line-height: 1.8;
  color: #fff;
  margin-bottom: 8px;
  margin-top: 0;
}

.popup-ended-note {
  font-size: 12px;
  color: #ccc;
  margin: 0 0 16px 0;
  line-height: 1.6;
}

.popup-skills {
  margin-bottom: 16px;
}

.popup-skills-label {
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  display: block;
  margin-bottom: 4px;
}

.popup-skills-list {
  font-size: 13px;
  color: #fff;
  margin: 0;
  line-height: 1.6;
}

.popup-end-reason {
  margin-top: 8px;
}

.popup-end-reason-label {
  font-size: 16px;
  font-weight: bold;
  color: #D1597B;
  display: block;
  margin-bottom: 4px;
}

.popup-end-reason-text {
  font-size: 13px;
  color: #fff;
  margin: 0;
  line-height: 1.6;
}

@media (max-width: 768px) {
  .popup-content {
    padding: 24px;
    max-width: 90%;
  }

  .popup-inner {
    flex-direction: column;
    gap: 24px;
  }

  .popup-image {
    width: 100%;
    min-height: 200px;
  }
}
</style>
