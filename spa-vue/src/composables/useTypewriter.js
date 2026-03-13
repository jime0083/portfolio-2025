import { ref, onMounted, onUnmounted } from 'vue'

export function useTypewriter(texts, options = {}) {
  const displayText = ref('')
  let textIndex = 0
  let charIndex = 0
  let isDeleting = false
  let typeSpeed = options.typeSpeed || 100
  let deleteSpeed = options.deleteSpeed || 50
  let pauseAfterComplete = options.pauseAfterComplete || 2000
  let pauseBeforeStart = options.pauseBeforeStart || 500
  let timeoutId = null

  const type = () => {
    const currentText = texts[textIndex]

    if (isDeleting) {
      displayText.value = currentText.substring(0, charIndex - 1)
      charIndex--
      typeSpeed = deleteSpeed
    } else {
      displayText.value = currentText.substring(0, charIndex + 1)
      charIndex++
      typeSpeed = options.typeSpeed || 100
    }

    if (!isDeleting && charIndex === currentText.length) {
      isDeleting = true
      typeSpeed = pauseAfterComplete
    } else if (isDeleting && charIndex === 0) {
      isDeleting = false
      textIndex = (textIndex + 1) % texts.length
      typeSpeed = pauseBeforeStart
    }

    timeoutId = setTimeout(type, typeSpeed)
  }

  onMounted(() => {
    type()
  })

  onUnmounted(() => {
    if (timeoutId) {
      clearTimeout(timeoutId)
    }
  })

  return {
    displayText
  }
}
