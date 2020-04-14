<template>
	<q-page style="padding:0 30px">
	<appheader :breadcrumbs="breadcrumbs">Recipe Box</appheader>
	<!-- Cadastro -->
		<cadastro-receita>
		</cadastro-receita>
	<!-- Cadastro -->
	<!-- Listagem -->
		<listagem-receita></listagem-receita>
	<!-- Listagem -->
	</q-page>
</template>

<script>
import CadastroReceita from 'components/projetos/simples/recipebox/Cadastro'
import ListagemReceita from 'components/projetos/simples/recipebox/Listagem'

export default {
  name: 'RecipeBox',
  data(){
    return {
      breadcrumbs:[
        { titulo:'Início', rota:'/sistema' },
        { titulo:'Projetos', rota:'/sistema' },
        { titulo:'Recipe Box', rota:'recipe_box' }
      ],
    }
  },
  components:{
  	CadastroReceita,
  	ListagemReceita
  }
};
</script>

<style>
</style>