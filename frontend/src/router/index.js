import Vue from 'vue'
import VueRouter from 'vue-router'

import routes from './routes'

import Vuelidate from 'vuelidate'

if(process.env.DEV){
   Vue.prototype.$pathAPI = '/backend/api' 
}
else{
   Vue.prototype.$pathAPI = '/app/backend/public/api'  
}

Vue.use(Vuelidate)

Vue.use(VueRouter)

/*
 * If not building with SSR mode, you can
 * directly export the Router instantiation;
 *
 * The function below can be async too; either use
 * async/await or return a Promise which resolves
 * with the Router instance.
 */

export default function (/* { store, ssrContext } */) {
  const Router = new VueRouter({
    scrollBehavior: () => ({ x: 0, y: 0 }),
    // scrollBehavior: () => ({ y: 0 }),
    routes,

    // Leave these as is and change from quasar.conf.js instead!
    // quasar.conf.js -> build -> vueRouterMode
    // quasar.conf.js -> build -> publicPath
    mode: process.env.VUE_ROUTER_MODE,
    base: process.env.VUE_ROUTER_BASE
  })

    Router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.requiresAuth)) {
    
    if(sessionStorage.getItem('autenticado')){
      next()
    }
    else
    {
      //next({ path: '/auth', query: { redirect: to.fullPath }});      
      next({path:'/auth'})
    }
  } else {
    next();
  }
});

  return Router
}
