import Vue from 'vue'
import App from './App.vue'
import axios from 'axios'
import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css'
Vue.config.productionTip = false
Vue.prototype.$http = axios
Vue.component('v-select', vSelect)

new Vue({
  render: h => h(App),
}).$mount('#app')
