import Vue from 'vue'
import store from '~/store'
import router from '~/router'
import i18n from '~/plugins/i18n'
import App from '~/components/App'

import '~/plugins'
import '~/components'

import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueSweetalert2);
import VueCarousel from 'vue-carousel';

Vue.use(VueCarousel);

Vue.config.productionTip = false


/* eslint-disable no-new */
new Vue({
  i18n,
  store,
  router,
  ...App
})
