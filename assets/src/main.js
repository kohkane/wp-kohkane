import Vue from 'vue';
import App from './App.vue';
import router from './router';
import store from './store';

import '../node_modules/normalize.css/normalize.css';
import '../src/assets/css/styles.css';

const KOHKANE_SETTINGS = {
  baseURL: '/wp-content/plugins/wp-kohkane/',
};

window.KOHKANE_SETTINGS = KOHKANE_SETTINGS;

Vue.config.productionTip = false;
new Vue({
  KOHKANE_SETTINGS,
  router,
  store,
  render: h => h(App),
}).$mount('#kohkane');
