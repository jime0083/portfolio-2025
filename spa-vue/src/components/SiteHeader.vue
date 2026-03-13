<template>
  <header id="masthead" class="site-header">
    <div class="header-container">
      <div class="site-branding">
        <p class="site-title">
          <router-link to="/">Hajime Kurita</router-link>
        </p>
      </div>

      <!-- PC Navigation -->
      <nav id="site-navigation" class="main-navigation">
        <ul>
          <li><router-link to="/work">Work</router-link></li>
          <li><router-link to="/app">App</router-link></li>
          <li><router-link to="/contact">Contact</router-link></li>
        </ul>
      </nav>

      <!-- Mobile Menu Icon -->
      <div class="header-menu-icon" id="mobile-menu-toggle" @click="openMobileMenu">
        <img src="/assets/images/menu.png" alt="Menu">
      </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <nav id="mobile-navigation" class="mobile-navigation" :class="{ 'is-open': isMobileMenuOpen }">
      <div class="mobile-menu-close" @click="closeMobileMenu">
        <span>&times;</span>
      </div>
      <div class="mobile-menu-content">
        <ul>
          <li><router-link to="/work" @click="closeMobileMenu">Work</router-link></li>
          <li><router-link to="/app" @click="closeMobileMenu">App</router-link></li>
          <li><router-link to="/contact" @click="closeMobileMenu">Contact</router-link></li>
        </ul>
        <div class="mobile-sns-links">
          <a href="https://x.com/Mikel_front_dev" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/x-red 1.png" alt="X">
          </a>
          <a href="https://github.com/jime0083" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/github-red 1.png" alt="GitHub">
          </a>
        </div>
      </div>
    </nav>
  </header>
</template>

<script setup>
import { ref } from 'vue'

const isMobileMenuOpen = ref(false)

const openMobileMenu = () => {
  isMobileMenuOpen.value = true
}

const closeMobileMenu = () => {
  isMobileMenuOpen.value = false
}
</script>
