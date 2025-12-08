document.addEventListener('DOMContentLoaded', function () {
  // Typewriter Animation
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
        typeSpeed = 50; // Deleting speed
      } else {
        typewriterElement.textContent = currentText.substring(0, charIndex + 1);
        charIndex++;
        typeSpeed = 100; // Typing speed
      }

      if (!isDeleting && charIndex === currentText.length) {
        isDeleting = true;
        typeSpeed = 2000; // Wait before deleting
      } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        textIndex = (textIndex + 1) % texts.length;
        typeSpeed = 500; // Wait before typing next text
      }

      setTimeout(type, typeSpeed);
    }

    // Start typing
    type();
  }

  // Split Text Animation
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
  });

  // Smooth Scroll for Anchor Links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });
});

// Page Transition
const body = document.body;

// Page Load
window.addEventListener('load', () => {
  if (document.documentElement.classList.contains('visited')) {
    body.classList.add('is-loaded');
  } else {
    setTimeout(() => {
      body.classList.add('is-loaded');
    }, 500);
  }
});

// Link Click
document.querySelectorAll('a:not([target="_blank"]):not([href^="#"]):not([href^="mailto:"]):not([href^="tel:"])').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    const targetUrl = this.getAttribute('href');
    const currentHost = window.location.hostname;
    let targetHost = currentHost;

    try {
      targetHost = new URL(targetUrl, window.location.href).hostname;
    } catch (error) {
      // Invalid URL, treat as internal
    }

    if (targetHost !== currentHost) {
      return; // External link, allow default behavior
    }

    e.preventDefault();

    // Remove loaded class to reset transform-origin if needed, 
    // but here we want to start from left.
    // Actually, we need to remove is-loaded and add is-transitioning
    body.classList.remove('is-loaded');
    body.classList.add('is-transitioning');

    // Set internal navigation flag
    sessionStorage.setItem('from_internal', 'true');

    setTimeout(() => {
      window.location.href = targetUrl;
    }, 800); // Wait for animation (0.6s + 0.1s delay + buffer)
  });
});

// Force Video Loop
const heroVideo = document.querySelector('.hero-video');
if (heroVideo) {
  heroVideo.addEventListener('ended', function () {
    this.currentTime = 0;
    this.play();
  });
}

