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
