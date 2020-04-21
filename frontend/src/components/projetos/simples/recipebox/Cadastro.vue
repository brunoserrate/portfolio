<template>
<div class="q-mb-lg">
  <div class="row text-right">
    <div class="col">
      <q-btn round size="sm" color="primary" icon="fas fa-question" @click="helpModal = true" />
      <q-btn class="q-ml-md" size="sm" icon="fas fa-bullseye" label="Objetivos" @click="objetivosModal = true" />
      <q-btn class="q-ml-md" size="sm" color="positive" icon="fas fa-plus" label="Nova receita" @click="incluir()" />
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
  <q-dialog v-model="newRecipe" ref="dialog" @hide="limpar">
    <q-card class="q-pa-md my-card">
      <!-- Objetivos principais -->
      <q-card-section class="row items-center q-mb-md">
        <div class="text-h6">Nova receita</div>
        <q-space />
        <q-btn icon="close" flat round dense v-close-popup />
      </q-card-section>

      <q-card-section class="q-mb-md">
        <div class="row q-gutter-lg q-mb-lg">
          <div class="col">
            <q-input v-model="form.titulo" label="Título" hint="Insira nome da receita" />
          </div>
        </div>
        <div class="row q-gutter-lg q-mb-lg">
          <div class="col-3">
            <q-input v-model="form.criado_por" label="Criado por" hint="Seu nome e sobrenome" />
          </div>
          <div class="col-4">
            <q-input v-model="form.img" label="Imagem" hint="Insira URL da imagem" />
          </div>
          <div class="col">
            <select-tipo-refeicao :id="form.tipo_refeicao_id" @input="tipoRefeicaoSelecionada" ></select-tipo-refeicao>
          </div>
        </div>
        <div class="row q-gutter-lg q-mb-lg">
          <div class="col">
            <q-input v-model.number="form.porcoes" type="number" label="Porções" />
          </div>
          <div class="col">
            <q-input v-model="form.tempo_preparo" label="Tempo" hint="Tempo de preparo em minutos" />
          </div>
          <div class="col-4">
              <q-select emit-value map-options label="Dificuldade" v-model="form.dificuldade" :options="dificuldades" />
          </div>
        </div>
        <div class="row q-gutter-lg q-mb-lg">
          <div class="col">
            <q-input v-model="form.ingredientes" type="textarea" label="Ingredientes" hint="Ingredientes da receita com suas proporções. Separar os ingredientes com ; (ponto e vírgula)" />
          </div>
        </div>
        <div class="row q-gutter-lg q-mb-lg">
          <div class="col">
            <q-input v-model="form.etapas" type="textarea" label="Etapas" hint="Etapas para preparar a receita. Separar as etapas por ; (ponto e vírgula)" />
          </div>
        </div>
      </q-card-section>

      <q-card-actions class="q-mt-md" align="right">
         <q-btn size="sm" icon="fas fa-times" label="Cancelar" @click="limpar" />
        <q-btn size="sm" color="positive" icon="fas fa-save" label="Gravar" @click="gravar" />
      </q-card-actions>

    </q-card>
  </q-dialog>
  <!-- New Recpie -->
</div>
</template>

<script>
import SelectTipoRefeicao from 'components/util/SelectTipoRefeicao'
import { required } from 'vuelidate/lib/validators'

const endpoint = '/receita'

export default {
  name: 'RecipeBox',
  props:['receita', 'operacao'],
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
      form: {},
      dificuldades: [
        { label:'Fácil', value:'facil' },
        { label:'Mediano', value:'medio' },
        { label:'Difícil', value:'dificil' }
      ],
    }
  },
  components: {
    SelectTipoRefeicao
  },
  mounted(){
  },
  watch: {
    receita(novo, antigo) {
      let ingredientes = ""
      let etapas = ""

      if(Object.keys(this.receita).length != 0) {

        this.$set(this, 'form', Object.assign({},this.receita))

        ingredientes = this.form.ingredientes.toString()
        etapas = this.form.etapas.toString()

        this.form.ingredientes = ingredientes.replace(/,/g, ";\n")
        this.form.etapas = etapas.replace(/,/g, ";\n")

        this.newRecipe = true
      }
      else {
        this.form = {}
        this.newRecipe = false
      }

    },
  },
  methods: {
    incluir() {
      this.$set(this, 'newRecipe', true)
      this.$set(this, 'form', {})
    },
    gravar() {
      let that = this

      that.$q.loading.show()

      if(that.operacao == 'editar' && that.receita.criado_por != "The Meal DB") {
        that.$axios.put(that.$pathAPI + endpoint + '/' + that.form.id, that.form)
        .then((response) => {
          that.sucesso()
          that.limpar()
          that.$emit('recarregar')
        })
        .catch((response) => {
          that.falha(response)
        })
      }
      else {
        that.$axios.post(that.$pathAPI + endpoint, that.form)
        .then((response) => {
          that.sucesso()
          that.limpar()
          that.$emit('recarregar')
        })
        .catch((response) => {
          that.falha(response)
        })
        .finally(() => {
          that.$q.loading.hide()
        })

      }

    },
    limpar() {
      this.$set(this, 'newRecipe', false)
      this.$set(this, 'form', {})
      this.$emit('limpar')
    },
    tipoRefeicaoSelecionada(valor){
      this.$set(this.form, 'tipo_refeicao_id', valor.value)
    }
  }
};
</script>

<style lang="sass" scoped>
.my-card
  width: 100%
  max-width: 800px

</style>