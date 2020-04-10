// import something here
import Vue from 'vue'
import appheader from '../components/util/defaultheader.vue'

// "async" is optional
export default ({ app, router, Vue }) => {
	Vue.use(appheader)
	Vue.component('appheader', appheader)
  // something to do
}