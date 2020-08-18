import Vue from 'vue'
import Vuetify from 'vuetify'
import VueProgressBar from 'vue-progressbar'
import VueSweetalert2 from 'vue-sweetalert2';

// import library
import router from './router'
import store from './store'

// root app
import App from './App.vue'

// use plugin
Vue.use(Vuetify)
Vue.use(VueSweetalert2);
Vue.use(VueProgressBar, {
  thickness: '5px',
})

export default new Vue({
  router,
  store,
  vuetify: new Vuetify(),
  render: h => h(App)
}).$mount('#app');