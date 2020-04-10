
const routes = [
  {
    path: '/',
    component: () => import('layouts/Website.vue'),
    children: [
      { path: '', component: () => import('pages/Index.vue') }
    ]
  },
  {
    path: '/sistema',
    component: () => import('layouts/Systens.vue'),
    children: [
      { path: '', component: () => import('pages/Index.vue') },
      { path: 'simples', component: () => import('pages/Projetos/Projetos.vue') },
      // Projetos simples
      { path: 'quizz_app', component: () => import('pages/Projetos/Simples/QuizzApp.vue') },
      { path: 'recipe_box', component: () => import('pages/Projetos/Simples/RecipeBox.vue') },
      // Projetos simples
      { path: 'elaborado', component: () => import('pages/Projetos/Projetos.vue') },
      // Projetos elaborados
      // Projetos elaborados
    ]
  },
  {
    path: '/auth',
    component: () => import('layouts/Auth.vue'),
    children: [
      { path: '', component: () => import('pages/Login.vue') }
    ]
  }
]

// Always leave this as last one
if (process.env.MODE !== 'ssr') {
  routes.push({
    path: '*',
    component: () => import('pages/Error404.vue')
  })
}

export default routes
