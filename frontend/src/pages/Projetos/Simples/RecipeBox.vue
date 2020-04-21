<template>
	<q-page style="padding:0 30px">
	<appheader :breadcrumbs="breadcrumbs">Recipe Box</appheader>
	<!-- Cadastro -->
		<cadastro-receita
      @limpar="limpar"
      @recarregar="recarregar = true"
      :receita="receita"
      :operacao="operacao"
    >
		</cadastro-receita>
	<!-- Cadastro -->
  <!-- Pesquisa -->
  <pesquisa-receita
    @pesquisado="pesquisa"
  ></pesquisa-receita>
  <!-- Pesquisa -->
	<!-- Listagem -->
		<listagem-receita
      @editar="editar"
      :recarregar="recarregar"
      :pesquisado="pesquisado"
    ></listagem-receita>
	<!-- Listagem -->
	</q-page>
</template>

<script>
import CadastroReceita from 'components/projetos/simples/recipebox/Cadastro'
import PesquisaReceita from 'components/projetos/simples/recipebox/Pesquisa'
import ListagemReceita from 'components/projetos/simples/recipebox/Listagem'

export default {
  name: 'RecipeBox',
  data(){
    return {
      breadcrumbs:[
        { titulo:'Início', rota:'/sistema/' },
        { titulo:'Projetos', rota:'/sistema/' },
        { titulo:'Recipe Box', rota:'recipe_box' }
      ],
      recarregar: false,
      receita: {},
      operacao: "incluir",
      pesquisado: []
    }
  },
  components:{
  	CadastroReceita,
    PesquisaReceita,
  	ListagemReceita
  },
  methods: {
    editar(receita){
      this.operacao = "editar"
      this.receita = receita
    },
    pesquisa(receita) {
      this.pesquisado = receita
    },
    limpar(){
      this.receita = {}
      this.operacao = "incluir"
      this.recarregar = false
    }
  }
};
</script>

<style>
</style>