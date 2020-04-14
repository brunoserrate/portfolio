<template>
<div class="q-mb-lg">
  <div class="row text-right">
    <div class="col">
      <q-btn round size="sm" color="primary" icon="fas fa-question" @click="helpModal = true" />
      <q-btn class="q-ml-md" size="sm" icon="fas fa-bullseye" label="Objetivos" @click="objetivosModal = true" />
      <q-btn class="q-ml-md" size="sm" color="positive" icon="fas fa-plus" label="Nova receita" @click="incluir" />
    </div>
  </div>
  <!-- Help Modal -->
  <q-dialog v-model="helpModal">
    <q-card class="q-pa-md">
      <!-- Ajuda -->
      <q-card-section class="row items-center q-mb-md">
        <div class="text-h6">Ajuda</div>
        <q-space />
        <q-btn icon="close" flat round dense v-close-popup />
      </q-card-section>
      <q-card-section class="q-mb-md text-justify">
        Clique nas caixas para visualizar a receita e suas instruções.<br>
        Você pode adicionar uma nova receita clicando no botão "Nova receita" e preenchendo o formulário corretamente.<br>
        Você pode editar uma receita clicando no botão "editar" dentro da receita escolhida. Depois clique no botão "salvar", para gravar as informações da receita.<br>
        Para pesquisar uma receita digite o título na barra de pesquisa e clique no ícone dentro dele. É possível pesquisar receitas internas (receitas que estão no banco de dados da aplicação) ou receitas externas (receitas vindas de uma API).
      </q-card-section>
      <!-- Ajuda -->
    </q-card>
  </q-dialog>
  <!-- Help Modal -->
  <!-- Objetivos Modal -->
  <q-dialog v-model="objetivosModal">
    <q-card class="q-pa-md">
      <!-- Objetivos principais -->
      <q-card-section class="row items-center q-mb-md">
        <div class="text-h6">Objetivos</div>
        <q-space />
        <q-btn icon="close" flat round dense v-close-popup />
      </q-card-section>
      <q-card-section class="q-mb-md text-justify">
        O objetivo do Recipe Box é ajudar o usuário a gerenciar receitas de uma maneira que facilite seu acompanhamento.<br>
        A baixo, alguns objetivos que a aplicação precisa cumprir.
      </q-card-section>
      <q-card-section class="q-mb-md">
        <ul class="text-justify">
          <li>O usuário pode ver uma lista de títulos de receita;</li>
          <li>O usuário pode clicar no título de uma receita para exibir um cartão de receita que contém o título da receita, o tipo de refeição (café da manhã, almoço, jantar ou lanche), número de pessoas a quem serve, nível de dificuldade (iniciante, intermediário, avançado), a lista de ingredientes (incluindo seus valores) e as etapas de preparação;</li>
          <li>O usuário clica em um novo título de receita para substituir o cartão atual por uma nova receita.</li>
        </ul>
      </q-card-section>
      <!-- Objetivos principais -->
      <!-- Objetivos principais -->
      <q-card-section class="q-mb-md">
        <div class="text-h6">Objetivos Bônus</div>
      </q-card-section>
      <q-card-section class="q-mb-md">
        <ul class="text-justify">
          <li>O usuário pode ver uma foto mostrando a aparência do item após ter sido preparado;</li>
          <li> O usuário pode procurar uma receita que não esteja na lista de títulos de receita digitando o nome da refeição em uma caixa de pesquisa e clicando no botão 'Pesquisar'. Qualquer API de receita de código aberto pode ser usada como fonte de receitas;</li>
          <li>O usuário pode ver uma lista de receitas que correspondem aos termos da pesquisa;</li>
          <li>O usuário pode clicar no nome da receita para exibir seu cartão de receita;</li>
          <li>O usuário pode ver uma mensagem de aviso se nenhuma receita correspondente foi encontrada;</li>
          <li>O usuário pode clicar no botão 'Salvar' nos cartões de receitas localizadas na API para salvar uma cópia neste arquivo de receita ou banco de dados do aplicativo.</li>
        </ul>
      </q-card-section>
    </q-card>
  </q-dialog>
  <!-- Objetivos Modal -->
  <!-- New Recpie -->
  <q-dialog v-model="newRecipe">
    <q-card class="q-pa-md">
      <!-- Objetivos principais -->
      <q-card-section class="row items-center q-mb-md">
        <div class="text-h6">Nova receita</div>
        <q-space />
        <q-btn icon="close" flat round dense v-close-popup />
      </q-card-section>
      <q-card-section class="q-mb-md">
        Em construção
      </q-card-section>
      <!-- Objetivos principais -->
    </q-card>
  </q-dialog>
  <!-- New Recpie -->
</div>
</template>

<script>

export default {
  name: 'RecipeBox',
  data(){
    return {
      breadcrumbs:[
        { titulo:'Início', rota:'/sistema' },
        { titulo:'Projetos', rota:'/sistema' },
        { titulo:'Recipe Box', rota:'recipe_box' }
      ],
      helpModal:false,
      objetivosModal:false,
      newRecipe:false,
      form: {}
    }
  },
  methods: {
    incluir() {
      this.$set(this, 'newRecipe', true)
      this.$set(this, 'form', {})
    }
  }
};
</script>

<style>
</style>