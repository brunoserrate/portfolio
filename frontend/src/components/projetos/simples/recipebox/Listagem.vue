<template>
<div>
	<div class="row q-gutter-md q-mb-md" :style="gridStyle" style="display:grid; grid-gap: 1em">
		<div class="col" v-for="(dado, index) in dados">
			<div v-ripple @click="abrirReceita(dado)" class="cursor-pointer relative-position">
				<q-card class="text-primary" tabindex="0" style="overflow: hidden;outline:0">
					<img :src="dado.img" />
						<q-card-section class="q-my-sm">
							<div class="text-weight-bolder">{{ dado.titulo }}</div>
							<div class="text-subtitle2">{{ dado.criado_por }}</div>
						</q-card-section>
						<q-card-section>
              <div class="row text-center q-mb-md">
                <div class="col">
    							<q-icon name="fas fa-clock" /><br>
    							{{ dado.tempo_preparo }} min
                </div>
                <div class="col">
    							<q-icon name="fas fa-concierge-bell" /><br>
    							{{ dado.porcoes }} Porções
                </div>
              </div>
						</q-card-section>
				</q-card>
			</div>
		</div>
	</div>
	<!-- Recipe modal -->
	<q-dialog v-model="recipeModel">
		<q-card class="my-card q-pa-md">
			<q-card-section class="row q-mb-md">
				<div class="text-h6">{{ receita.titulo }}</div>
				<q-space />
				<q-btn icon="close" flat round dense v-close-popup />
		    </q-card-section>
		    <q-card-section horizontal>
		    	<q-card-section>
		    		<ul>
			    		<li v-for="ingredientes in receita.ingredientes">{{ ingredientes }}</li>
		    		</ul>
		    	</q-card-section>
		    		<q-space />
		    		<q-img class="col-6" :src="receita.img"
		    		/>
		    </q-card-section>
		    <q-card-section>
		    	<ol>
		    		<li v-for="etapas in receita.etapas">{{ etapas }}</li>
		    	</ol>
		    </q-card-section>
		    <q-card-section horizontal align="center" class="recipe-extra-info">
		    	<div class="col">{{ receita.tempo_preparo }} min(s)</div> |
		    	<div class="col">{{ receita.porcoes }} Porções</div>
		    </q-card-section>
		    <q-card-section horizontal align="center" class="recipe-extra-info">
		    	<div class="col">Para: {{ receita.tipo_refeicao }}</div> |
		    	<div class="col">{{ receita.dificuldade | dificuldade }}</div>
		    </q-card-section>
		    <q-card-actions class="q-mt-md" align="right">
			     <q-btn size="sm" color="negative" icon="fas fa-times" label="Excluir" @click="excluir" />
		    	<q-btn size="sm" icon="fas fa-edit" label="Editar" @click="editar" />
		    </q-card-actions>
		</q-card>
	</q-dialog>
	<!-- Recipe modal -->
</div>
</template>

<script>

const endpoint = '/receita'

export default {
  name: 'RecipeBox',
  props:['recarregar', 'pesquisado'],
  data(){
    return {
    	recipeModel:false,
    	receita: {},
    	count: 1,
      dados: [],
    }
  },
  filters: {
    dificuldade(valor){
      switch (valor) {
        case 'facil':
          return 'Fácil'
          break;

        case 'medio':
          return 'Mediano'
          break;

        case 'dificil':
          return 'Difícil'
          break;
      }
    }
  },
  computed: {
  	gridStyle() {
  		return {
  			gridTemplateColumns: `repeat(3, minmax(100px, 1fr))`
  		}
  	}
  },
  mounted(){
    this.carregarDados()
  },
  watch: {
    recarregar(novo, antigo) {
      if(this.recarregar === true){
        this.carregarDados()
      }

      return false

    },
    pesquisado(novo, antigo) {
      if(this.pesquisado.length != 0){
        this.dados = this.pesquisado
      }

    }

  },
  methods: {
    carregarDados(){
      let that = this

      that.$q.loading.show()

      that.$axios.get(that.$pathAPI + endpoint)
      .then((response) => {
        let item = response.data.data

        for (var i = 0 ; i < item.length; i++) {
          item[i].etapas = JSON.parse(item[i].etapas)
          item[i].ingredientes = JSON.parse(item[i].ingredientes)
        }

        that.dados = item
      })
      .catch((response) => {
        that.falha(response)
      })
      .finally(() => {
        that.$q.loading.hide()
      })
    },
    editar(){
      this.recipeModel = false
      this.$emit('editar', this.receita)
      this.receita = []
    },
    excluir(){
      let that = this

      that.$q.loading.show()

      that.$axios.delete(that.$pathAPI + endpoint + '/' + that.receita.id)
      .then((response) => {
        that.carregarDados()
        that.sucesso()
      })
      .catch((response) => {
        that.falha(response)
      })
      .finally(() => {
        that.$q.loading.hide()
        that.recipeModel = false
      })
    },
    abrirReceita(dado) {
      console.log(dado)
    	this.recipeModel = true
    	this.receita = dado
    }
  }
};	
</script>

<style lang="sass" scoped>
.my-card
  width: 100%
  max-width: 800px

.recipe-extra-info
	position: relative
	background-color: #f0f0f0
	padding: 10px
	margin: 0px

</style>
