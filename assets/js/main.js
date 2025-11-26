document.addEventListener('DOMContentLoaded', () => {
  const navToggle = document.querySelector('[data-nav-toggle]');
  const siteNav = document.querySelector('.site-nav');

  if (navToggle && siteNav) {
    navToggle.addEventListener('click', () => {
      const isOpen = siteNav.classList.toggle('is-open');
      navToggle.setAttribute('aria-expanded', String(isOpen));
    });
  }

  const filterButtons = document.querySelectorAll('.filter-button');
  const projectTiles = document.querySelectorAll('.project-tile');

  if (filterButtons.length && projectTiles.length) {
    filterButtons.forEach((button) => {
      button.addEventListener('click', () => {
        filterButtons.forEach((btn) => btn.classList.remove('is-active'));
        button.classList.add('is-active');
        const filter = button.dataset.filter || 'all';

        projectTiles.forEach((tile) => {
          const categories = (tile.dataset.category || '').split(',');
          const isVisible = filter === 'all' || categories.includes(filter);
          tile.classList.toggle('is-hidden', !isVisible);
        });
      });
    });
  }
});

