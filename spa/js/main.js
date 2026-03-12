/**
 * SPA Router and Page Management
 */
const SpaRouter = {
  currentPage: 'home',

  init: function() {
    this.handleHashChange();
    window.addEventListener('hashchange', () => this.handleHashChange());

    document.querySelectorAll('a[data-nav]').forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        const hash = link.getAttribute('href');
        window.location.hash = hash;
      });
    });
  },

  handleHashChange: function() {
    let hash = window.location.hash.slice(1) || 'home';

    if (hash === 'portfolio' || hash === 'profile' || hash === 'top') {
      if (this.currentPage !== 'home') {
        this.showPage('home', () => {
          this.scrollToAnchor(hash);
        });
      } else {
        this.scrollToAnchor(hash);
      }
      return;
    }

    if (hash === 'home' || hash === 'work' || hash === 'app' || hash === 'contact') {
      this.showPage(hash);
    }
  },

  showPage: function(pageName, callback) {
    if (this.currentPage === pageName && !callback) return;

    const body = document.body;
    body.classList.remove('is-loaded');
    body.classList.add('is-transitioning');

    const mobileNav = document.getElementById('mobile-navigation');
    if (mobileNav) {
      mobileNav.classList.remove('is-open');
    }

    setTimeout(() => {
      document.querySelectorAll('.page-section').forEach(section => {
        section.classList.remove('is-active');
      });

      const targetPage = document.getElementById('page-' + pageName);
      if (targetPage) {
        targetPage.classList.add('is-active');
      }

      this.currentPage = pageName;
      window.scrollTo(0, 0);
      this.resetAnimations(targetPage);
      this.initSplitText(targetPage);

      body.classList.remove('is-transitioning');
      body.classList.add('is-loaded');

      if (callback) {
        setTimeout(callback, 100);
      }
    }, 600);
  },

  scrollToAnchor: function(anchorId) {
    const element = document.getElementById(anchorId);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    }
  },

  resetAnimations: function(container) {
    if (!container) return;

    const animatedElements = container.querySelectorAll('.slide-down-bounce, .fade-in-left, .fade-in-right, .fade-in-up, .js-split-text');
    animatedElements.forEach(el => {
      el.classList.remove('is-inview');
    });

    setTimeout(() => {
      animatedElements.forEach(el => {
        if (window.spaObserver) {
          window.spaObserver.observe(el);
        }
      });
    }, 100);
  },

  initSplitText: function(container) {
    if (!container) return;

    const splitTargets = container.querySelectorAll('.js-split-text:not([data-split-initialized])');
    splitTargets.forEach(target => {
      const text = target.textContent;
      let newText = '';
      text.split('').forEach((char, index) => {
        if (char === ' ') {
          newText += ' ';
        } else {
          newText += `<span style="transition-delay: ${index * 0.15}s">${char}</span>`;
        }
      });
      target.innerHTML = newText;
      target.setAttribute('data-split-initialized', 'true');
    });
  }
};

document.addEventListener('DOMContentLoaded', function () {
  SpaRouter.init();

  const typewriterElement = document.getElementById('typewriter-text');
  if (typewriterElement) {
    const texts = ["Front end engineer", "Web designer", "Individual developer"];
    let textIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typeSpeed = 100;

    function type() {
      const currentText = texts[textIndex];

      if (isDeleting) {
        typewriterElement.textContent = currentText.substring(0, charIndex - 1);
        charIndex--;
        typeSpeed = 50;
      } else {
        typewriterElement.textContent = currentText.substring(0, charIndex + 1);
        charIndex++;
        typeSpeed = 100;
      }

      if (!isDeleting && charIndex === currentText.length) {
        isDeleting = true;
        typeSpeed = 2000;
      } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        textIndex = (textIndex + 1) % texts.length;
        typeSpeed = 500;
      }

      setTimeout(type, typeSpeed);
    }

    type();
  }

  const splitTargets = document.querySelectorAll('.js-split-text');
  splitTargets.forEach(target => {
    const text = target.textContent;
    let newText = '';
    text.split('').forEach((char, index) => {
      if (char === ' ') {
        newText += ' ';
      } else {
        newText += `<span style="transition-delay: ${index * 0.15}s">${char}</span>`;
      }
    });
    target.innerHTML = newText;
    target.setAttribute('data-split-initialized', 'true');
  });

  document.querySelectorAll('a[href^="#"]:not([data-nav])').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#home' || targetId === '#work' || targetId === '#app') {
        return;
      }
      e.preventDefault();
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        targetElement.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  const appModal = document.getElementById('app-modal');
  const appItems = document.querySelectorAll('.app-item');
  const modalClose = document.querySelector('.modal-close');
  const modalOverlay = document.querySelector('.modal-overlay');

  if (appModal && appItems.length > 0) {
    appItems.forEach(item => {
      item.addEventListener('click', () => {
        const title = item.querySelector('.app-title').textContent;
        const fullDesc = item.getAttribute('data-full-desc');
        const url = item.getAttribute('data-url');

        appModal.querySelector('.modal-title').textContent = title;
        appModal.querySelector('.modal-description').textContent = fullDesc;
        appModal.querySelector('.modal-link').href = url;

        appModal.classList.add('is-active');
        document.body.style.overflow = 'hidden';
      });
    });

    const closeModal = () => {
      appModal.classList.remove('is-active');
      document.body.style.overflow = '';
    };

    if (modalClose) modalClose.addEventListener('click', closeModal);
    if (modalOverlay) modalOverlay.addEventListener('click', closeModal);

    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && appModal.classList.contains('is-active')) {
        closeModal();
      }
    });
  }

  const menuToggle = document.getElementById('mobile-menu-toggle');
  const mobileNav = document.getElementById('mobile-navigation');
  const menuClose = document.getElementById('mobile-menu-close');

  if (menuToggle && mobileNav) {
    menuToggle.addEventListener('click', function() {
      mobileNav.classList.add('is-open');
    });
  }

  if (menuClose && mobileNav) {
    menuClose.addEventListener('click', function() {
      mobileNav.classList.remove('is-open');
    });
  }

  if (mobileNav) {
    mobileNav.querySelectorAll('a[data-nav]').forEach(link => {
      link.addEventListener('click', () => {
        mobileNav.classList.remove('is-open');
      });
    });
  }
});

const body = document.body;

window.addEventListener('load', () => {
  if (document.documentElement.classList.contains('visited')) {
    body.classList.add('is-loaded');
  } else {
    setTimeout(() => {
      body.classList.add('is-loaded');
    }, 500);
  }
});

const heroVideo = document.querySelector('.hero-video');
if (heroVideo) {
  heroVideo.addEventListener('ended', function () {
    this.currentTime = 0;
    this.play();
  });
}

document.addEventListener('DOMContentLoaded', function () {
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-inview');
      } else {
        entry.target.classList.remove('is-inview');
      }
    });
  }, observerOptions);

  window.spaObserver = observer;

  const targets = document.querySelectorAll('.slide-down-bounce, .fade-in-left, .fade-in-right, .fade-in-up, .js-split-text');
  targets.forEach(target => {
    observer.observe(target);
  });
});

/**
 * Contact Form Submission
 * Google Formsへの送信を処理
 */
document.addEventListener('DOMContentLoaded', function() {
  const contactForm = document.getElementById('contact-form');
  const contactSuccess = document.getElementById('contact-success');

  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();

      // Google Forms URL
      const GOOGLE_FORMS_URL = 'https://docs.google.com/forms/d/e/1FAIpQLSekq3ma4q3JZtrkn4MLviqrc-4VGcF1YQm2qTC3qMOkgR_t4w/formResponse';

      // Google Forms entry IDs
      const ENTRY_IDS = {
        inquiryType: 'entry.89016268',
        name: 'entry.1959993333',
        furigana: 'entry.798376429',
        company: 'entry.521816702',
        email: 'entry.1724482242',
        message: 'entry.1961659720'
      };

      // フォームデータを取得
      const formData = {
        inquiryType: document.getElementById('inquiry-type').value,
        name: document.getElementById('name').value,
        furigana: document.getElementById('furigana').value,
        company: document.getElementById('company').value,
        email: document.getElementById('email').value,
        message: document.getElementById('message').value
      };

      // Google FormsのURLが設定されていない場合はmailtoにフォールバック
      if (!GOOGLE_FORMS_URL) {
        const mailtoBody = `
お問い合わせ内容: ${formData.inquiryType}
氏名: ${formData.name}
フリガナ: ${formData.furigana}
会社名: ${formData.company}
メールアドレス: ${formData.email}

お問い合わせ内容詳細:
${formData.message}
        `.trim();

        const mailtoLink = `mailto:kuritahajime.business@gmail.com?subject=${encodeURIComponent('ポートフォリオサイトからのお問い合わせ')}&body=${encodeURIComponent(mailtoBody)}`;

        window.location.href = mailtoLink;
        return;
      }

      // Google Formsに送信
      const googleFormData = new FormData();
      googleFormData.append(ENTRY_IDS.inquiryType, formData.inquiryType);
      googleFormData.append(ENTRY_IDS.name, formData.name);
      googleFormData.append(ENTRY_IDS.furigana, formData.furigana);
      googleFormData.append(ENTRY_IDS.company, formData.company);
      googleFormData.append(ENTRY_IDS.email, formData.email);
      googleFormData.append(ENTRY_IDS.message, formData.message);

      // iframe経由で送信（CORSを回避）
      const iframe = document.createElement('iframe');
      iframe.name = 'hidden_iframe';
      iframe.style.display = 'none';
      document.body.appendChild(iframe);

      const form = document.createElement('form');
      form.method = 'POST';
      form.action = GOOGLE_FORMS_URL;
      form.target = 'hidden_iframe';

      for (const [key, value] of googleFormData.entries()) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = key;
        input.value = value;
        form.appendChild(input);
      }

      document.body.appendChild(form);
      form.submit();

      // 送信完了を表示
      contactForm.style.display = 'none';
      contactSuccess.style.display = 'block';

      // クリーンアップ
      setTimeout(() => {
        document.body.removeChild(iframe);
        document.body.removeChild(form);
      }, 1000);
    });
  }
});
