import { onMounted, onUnmounted, ref } from 'vue'

export function useInView(options = {}) {
  const elementRef = ref(null)
  const isInView = ref(false)
  let observer = null

  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1,
    ...options
  }

  onMounted(() => {
    observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-inview')
          isInView.value = true
        } else {
          entry.target.classList.remove('is-inview')
          isInView.value = false
        }
      })
    }, observerOptions)

    if (elementRef.value) {
      observer.observe(elementRef.value)
    }
  })

  onUnmounted(() => {
    if (observer) {
      observer.disconnect()
    }
  })

  return {
    elementRef,
    isInView
  }
}

export function useInViewMultiple(containerRef) {
  let observer = null

  const observe = () => {
    if (!containerRef.value) return

    observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-inview')
        } else {
          entry.target.classList.remove('is-inview')
        }
      })
    }, { threshold: 0.1 })

    const targets = containerRef.value.querySelectorAll(
      '.slide-down-bounce, .fade-in-left, .fade-in-right, .fade-in-up, .js-split-text'
    )
    targets.forEach(target => observer.observe(target))
  }

  onMounted(() => {
    observe()
  })

  onUnmounted(() => {
    if (observer) {
      observer.disconnect()
    }
  })

  return { observe }
}
