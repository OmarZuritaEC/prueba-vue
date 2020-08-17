/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

window.Vue = require('vue')

Vue.config.productionTip = false

import App from './App.vue'

// Router
import router from './routes/routes'
import store from './store/store'

// Plugins

import GlobalComponents from './globalComponents'
import GlobalDirectives from './globalDirectives'

Vue.use(GlobalComponents)
Vue.use(GlobalDirectives)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
  el: '#app',
  render: h => h(App),
  router,
  store
})
