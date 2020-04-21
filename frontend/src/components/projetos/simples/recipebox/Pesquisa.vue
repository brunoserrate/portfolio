<template>
  <div>
    <!--  -->
    <div class="row q-mb-lg">
      <div class="col-4">
        <q-input bottom-slots v-model="pesquisa.titulo" label="Pesquisar" hint="Pesquise pelo nome da receita">
          <template v-slot:append>
            <q-btn dense round flat icon="fas fa-search" @click="pesquisar" />
          </template>
        </q-input>
      </div>
      <div class="col q-ml-lg">
        <q-toggle v-model="pesquisa.externo" left-label label="Receita externa?" :true-value="true" :false-value="false" /> {{ pesquisa.externo | converterBoolean }}<br />
        <strong class="text-negative">(Atenção: Somente em inglês)</strong>
      </div>
    </div>
    <!--  -->
  </div>
</template>

<script>

export default {
  name: 'Pesquisa',
  data(){
    return {
      pesquisa: {
        titulo: '',
        externo: false
      }
    }
  },
  components:{
  },
  methods: {
    pesquisar(){
      let that = this

      that.$q.loading.show()

      that.$axios.get(that.$pathAPI + '/receita/filtro', {
        params: {
          'titulo': that.pesquisa.titulo,
          'externo': Boolean(that.pesquisa.externo)
        }
      })
      .then((response) => {
        let item = response.data.data

        if(item.length != 0){
          for (var i = 0 ; i < item.length; i++) {
            item[i].etapas = JSON.parse(item[i].etapas)
            item[i].ingredientes = JSON.parse(item[i].ingredientes)
          }

          that.sucesso()
        }
        else {
          that.semDados()
          item = []

        }
        
        that.$emit('pesquisado', item)
      })
      .catch((response) => {
        that.falha(response)
      })
      .finally(() => {
        that.$q.loading.hide()
      })
    },
    semDados(){
      this.$q.notify({
        type: 'warning',
        position: 'top',
        message: 'Nenhuma receita encontrada, verificar a pesquisa',
        timeout: 2500,
      })
    },
  }
};
</script>

<style>
</style>
