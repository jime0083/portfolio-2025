<template>
  <div id="page-contact" class="page-section is-active" data-page="contact" ref="containerRef">
    <main id="primary-contact" class="site-main">
      <section class="top contact-top">
        <div class="top-container slide-down-bounce">
          <h1 class="top-title">Contact</h1>
          <p class="top-subtitle-1">ご用件が定まっていない状態からでも<br class="sp-only">お気軽にお問い合わせください</p>
          <p class="top-subtitle-2">
            料金や納期などのご相談はフォームから送信いただきましたら<br>
            翌営業日中に折り返しご連絡いたします。
          </p>
        </div>
      </section>

      <section class="contact-form-section">
        <div class="contact-container">
          <form
            v-if="!isSubmitted"
            id="contact-form"
            class="contact-form"
            @submit.prevent="handleSubmit"
          >
            <!-- お問い合わせ内容 -->
            <div class="contact-row full-width">
              <div class="contact-item contact-item-full">
                <label class="contact-label" for="inquiry-type">お問い合わせ内容</label>
                <select
                  id="inquiry-type"
                  v-model="formData.inquiryType"
                  class="contact-select"
                  required
                >
                  <option value="" disabled>選択してください</option>
                  <option value="開発に関するお問い合わせ">開発に関するお問い合わせ</option>
                  <option value="パートナーに関するお問い合わせ">パートナーに関するお問い合わせ</option>
                  <option value="その他のお問い合わせ">その他のお問い合わせ</option>
                </select>
              </div>
            </div>

            <!-- 氏名 / フリガナ -->
            <div class="contact-row">
              <div class="contact-item">
                <label class="contact-label" for="name">氏名</label>
                <input
                  type="text"
                  id="name"
                  v-model="formData.name"
                  class="contact-input"
                  required
                >
              </div>
              <div class="contact-item">
                <label class="contact-label" for="furigana">フリガナ</label>
                <input
                  type="text"
                  id="furigana"
                  v-model="formData.furigana"
                  class="contact-input"
                  required
                >
              </div>
            </div>

            <!-- 会社名 / メールアドレス -->
            <div class="contact-row">
              <div class="contact-item">
                <label class="contact-label" for="company">会社名</label>
                <input
                  type="text"
                  id="company"
                  v-model="formData.company"
                  class="contact-input"
                >
              </div>
              <div class="contact-item">
                <label class="contact-label" for="email">メールアドレス</label>
                <input
                  type="email"
                  id="email"
                  v-model="formData.email"
                  class="contact-input"
                  required
                >
              </div>
            </div>

            <!-- お問い合わせ内容詳細 -->
            <div class="contact-row full-width">
              <div class="contact-item contact-item-full">
                <label class="contact-label" for="message">お問い合わせ内容詳細</label>
                <textarea
                  id="message"
                  v-model="formData.message"
                  class="contact-textarea"
                  required
                ></textarea>
              </div>
            </div>

            <!-- 送信ボタン -->
            <div class="contact-row full-width">
              <button type="submit" class="contact-submit">SEND</button>
            </div>
          </form>

          <!-- 送信完了メッセージ -->
          <div v-else id="contact-success" class="contact-success">
            <p>お問い合わせありがとうございます。<br>内容を確認次第、ご連絡いたします。</p>
          </div>
        </div>
      </section>
    </main>
  </div>
</template>

<script setup>
import { ref, reactive, onMounted } from 'vue'
import { useInViewMultiple } from '../composables/useInView'

const containerRef = ref(null)
const { observe } = useInViewMultiple(containerRef)

const isSubmitted = ref(false)

const formData = reactive({
  inquiryType: '',
  name: '',
  furigana: '',
  company: '',
  email: '',
  message: ''
})

const GOOGLE_FORMS_URL = 'https://docs.google.com/forms/d/e/1FAIpQLSekq3ma4q3JZtrkn4MLviqrc-4VGcF1YQm2qTC3qMOkgR_t4w/formResponse'

const ENTRY_IDS = {
  inquiryType: 'entry.89016268',
  name: 'entry.1959993333',
  furigana: 'entry.798376429',
  company: 'entry.521816702',
  email: 'entry.1724482242',
  message: 'entry.1961659720'
}

const handleSubmit = () => {
  // Create iframe for CORS workaround
  const iframe = document.createElement('iframe')
  iframe.name = 'hidden_iframe'
  iframe.style.display = 'none'
  document.body.appendChild(iframe)

  const form = document.createElement('form')
  form.method = 'POST'
  form.action = GOOGLE_FORMS_URL
  form.target = 'hidden_iframe'

  // Add form fields
  const fields = [
    { name: ENTRY_IDS.inquiryType, value: formData.inquiryType },
    { name: ENTRY_IDS.name, value: formData.name },
    { name: ENTRY_IDS.furigana, value: formData.furigana },
    { name: ENTRY_IDS.company, value: formData.company },
    { name: ENTRY_IDS.email, value: formData.email },
    { name: ENTRY_IDS.message, value: formData.message }
  ]

  fields.forEach(field => {
    const input = document.createElement('input')
    input.type = 'hidden'
    input.name = field.name
    input.value = field.value
    form.appendChild(input)
  })

  document.body.appendChild(form)
  form.submit()

  // Show success message
  isSubmitted.value = true

  // Cleanup
  setTimeout(() => {
    document.body.removeChild(iframe)
    document.body.removeChild(form)
  }, 1000)
}

onMounted(() => {
  observe()
})
</script>
