<template>
<q-page style="padding:0 30px">
<appheader :breadcrumbs="breadcrumbs">Projetos</appheader>
<div id="lista" class="row q-mb-sm">
  <div class="col-4">
    <q-list bordered separator v-for="(item,index) in menuLista" :key="item.rota">

      <q-item clickable v-ripple link :to="item.rota">
        <q-item-section avatar>
          <q-icon :name="item.icone" />
        </q-item-section>
        <q-item-section>
          {{ item.titulo }}
        </q-item-section>
      </q-item>

    </q-list>
  </div>   
</div>
<div class="row text-right" style="margin-left:25px">
  <div class="col-4">
    <q-btn class="q-mr-md" icon="fas fa-arrow-left" size="sm" link to="/sistema/" label="Voltar" />
  </div>
</div>
</q-page>
</template>

<script>

let simpleList = [
  { titulo:'Recipe box', rota:'recipe_box', icone:'fas fa-receipt' },
  { titulo:'Quizz app', rota:'quizz_app', icone:'fas fa-question' },
]

let elaboratedList = [
  { titulo:'Nenhum', rota:'/sistema/', icone:'fas fa-times' },
]

export default {
  name: 'CadastrosAuxiliares',
  data(){
    return {
      breadcrumbs:[
        { titulo:'Início', rota:'/sistema/' },
        { titulo:'Projetos', rota:'/sistema/' },
      ],
      menuLista: '',
    }
  },
  watch:{   
    '$route' (to,from){
      if(this.$route.path.includes('elaborado')){
        this.breadcrumbs.pop()
        this.breadcrumbs.push({ titulo: 'Elaborado', rota: 'elaborado' })
        this.menuLista = elaboratedList
      }

      if(this.$route.path.includes('simples')){
        this.breadcrumbs.pop()
        this.breadcrumbs.push({ titulo: 'Simples', rota: 'simples' })
        this.menuLista = simpleList
      }

    },
  },
  created(){
    if(this.$route.path.includes('elaborado')){
      this.breadcrumbs.push({ titulo: 'Elaborado', rota: 'elaborado' })
      this.menuLista = elaboratedList
    }
    if(this.$route.path.includes('simples')){
      this.breadcrumbs.push({ titulo: 'Simples', rota: 'simples' })
      this.menuLista = simpleList
    }

  }
};
</script>

<style>
</style>
