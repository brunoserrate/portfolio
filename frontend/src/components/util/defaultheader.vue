<template>
<div>
	<div class="row q-gutter-lg">
	  <div class="col">
	    <h4 class="text-weight-regular text-primary" style="margin:15px 0 0 0"><slot></slot></h4>
	  </div>
	</div>
	<div v-if="breadcrumbs != ''" class="row gutter-lg q-py-md text-weight-regular">
		<div class="col">
			<q-breadcrumbs
		        active-color="primary"
		        color="light"
		    >
		      <q-breadcrumbs-el
		      	v-for="item in breadcrumbs"
		      	:key="item.rota"
		      	:label="item.titulo"
		      	:to="item.rota"
		      />
	    </q-breadcrumbs>
	  </div>
	</div>
</div>
</template>

<script>
export default {
	props:['breadcrumbs'],
	data (){
		return {
		}
	},
	mounted(){
	},
	methods:{
	}
};
</script>

<style>
</style>