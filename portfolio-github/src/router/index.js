import { createRouter, createWebHashHistory } from 'vue-router'
import HomePage from '../views/HomePage.vue'
import WorkPage from '../views/WorkPage.vue'
import AppPage from '../views/AppPage.vue'
import ContactPage from '../views/ContactPage.vue'

const routes = [
  { path: '/', name: 'home', component: HomePage },
  { path: '/home', redirect: '/' },
  { path: '/work', name: 'work', component: WorkPage },
  { path: '/app', name: 'app', component: AppPage },
  { path: '/contact', name: 'contact', component: ContactPage }
]

const router = createRouter({
  history: createWebHashHistory('/portfolio-2025/'),
  scrollBehavior() {
    return { top: 0 }
  },
  routes
})

export default router
