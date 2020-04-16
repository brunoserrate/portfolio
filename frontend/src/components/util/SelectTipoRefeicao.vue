<template>
	<q-select
		filter
		map-options
		label="Tipo de refeição"
		v-model="selected_id"
		:options="items"
		@input="selecionou"
	/>
</template>

<script>
export default{
	name: 'SelectTipoRefeicao',
	props:['id'],
	data (){
		return {
			items: [],
			selected_id: this.id
		}
	},
	mounted (){
		this.carregarDados()
	},
	watch: {
		id: function (idNovo, idAntigo){
			if(this.id == ''){
				this.selected_id = ''
			}
			if(this.id != ''){
				this.selected_id = parseInt(idNovo,10)
			}
		}
	},
	methods:{
		selecionou(selecionado){
			this.$emit('input', selecionado)
		},
		carregarDados(){
			let that = this
			that.$axios.get(that.$pathAPI + '/tipo_refeicao')
				.then((response) => {
					that.items = [];
					for(let item of response.data.data){
						that.items.push({label:item.nome, value:item.id})
					}
				})
		}
	}
};
</script>

<style>
</style>