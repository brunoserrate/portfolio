<template>
<div>
	<div class="row q-gutter-md q-mb-md">
		<div class="col">
			<div v-ripple @click="abrir" class="cursor-pointer relative-position">
				<q-card class="text-primary" tabindex="0" style="overflow: hidden;outline:0">
					<img src="https://cdn.quasar.dev/img/parallax2.jpg" />
					<q-card-section horizontal class="q-mt-sm">
						<q-card-section>
							<div class="text-h6">Receita 01</div>
							<div class="text-subtitle2">Criado por: Bruno</div>
						</q-card-section>
						<q-card-section align="center" class="col-3">
							<q-icon name="fas fa-clock" /><br>
							35 min<br>
						</q-card-section>
						<q-card-section align="center" class="col-4">
							<q-icon name="fas fa-concierge-bell" /><br>
							10 Porções
						</q-card-section>
							
					</q-card-section>
				</q-card>
			</div>
		</div>
		<div class="col">
			<div v-ripple @click="abrir" class="cursor-pointer relative-position">
				<q-card class="text-primary" tabindex="0" style="overflow: hidden;outline:0">
					<img src="https://cdn.quasar.dev/img/parallax2.jpg" />
					<q-card-section horizontal class="q-mt-sm">
						<q-card-section>
							<div class="text-h6">Receita 01</div>
							<div class="text-subtitle2">Criado por: Bruno</div>
						</q-card-section>
						<q-card-section align="center" class="col-3">
							<q-icon name="fas fa-clock" /><br>
							35 min<br>
						</q-card-section>
						<q-card-section align="center" class="col-4">
							<q-icon name="fas fa-concierge-bell" /><br>
							10 Porções
						</q-card-section>
							
					</q-card-section>
				</q-card>
			</div>
		</div>
		<div class="col">
			<div v-ripple @click="abrir" class="cursor-pointer relative-position">
				<q-card class="text-primary" tabindex="0" style="overflow: hidden;outline:0">
					<img src="https://cdn.quasar.dev/img/parallax2.jpg" />
					<q-card-section horizontal class="q-mt-sm">
						<q-card-section>
							<div class="text-h6">Receita 01</div>
							<div class="text-subtitle2">Criado por: Bruno</div>
						</q-card-section>
						<q-card-section align="center" class="col-3">
							<q-icon name="fas fa-clock" /><br>
							35 min<br>
						</q-card-section>
						<q-card-section align="center" class="col-4">
							<q-icon name="fas fa-concierge-bell" /><br>
							10 Porções
						</q-card-section>
							
					</q-card-section>
				</q-card>
			</div>
		</div>
	</div>
	<div class="row q-gutter-md">
		<div class="col">
			<div v-ripple @click="abrir" class="cursor-pointer relative-position">
				<q-card class="text-primary" tabindex="0" style="overflow: hidden;outline:0">
					<img src="https://cdn.quasar.dev/img/parallax2.jpg" />
					<q-card-section horizontal class="q-mt-sm">
						<q-card-section>
							<div class="text-h6">Receita 01</div>
							<div class="text-subtitle2">Criado por: Bruno</div>
						</q-card-section>
						<q-card-section align="center" class="col-3">
							<q-icon name="fas fa-clock" /><br>
							35 min<br>
						</q-card-section>
						<q-card-section align="center" class="col-4">
							<q-icon name="fas fa-concierge-bell" /><br>
							10 Porções
						</q-card-section>
							
					</q-card-section>
				</q-card>
			</div>
		</div>
		<div class="col">
			<div v-ripple @click="abrir" class="cursor-pointer relative-position">
				<q-card class="text-primary" tabindex="0" style="overflow: hidden;outline:0">
					<img src="https://cdn.quasar.dev/img/parallax2.jpg" />
					<q-card-section horizontal class="q-mt-sm">
						<q-card-section>
							<div class="text-h6">Receita 01</div>
							<div class="text-subtitle2">Criado por: Bruno</div>
						</q-card-section>
						<q-card-section align="center" class="col-3">
							<q-icon name="fas fa-clock" /><br>
							35 min<br>
						</q-card-section>
						<q-card-section align="center" class="col-4">
							<q-icon name="fas fa-concierge-bell" /><br>
							10 Porções
						</q-card-section>
							
					</q-card-section>
				</q-card>
			</div>
		</div>
		<div class="col">
			<div v-ripple @click="abrir" class="cursor-pointer relative-position">
				<q-card class="text-primary" tabindex="0" style="overflow: hidden;outline:0">
					<img src="https://cdn.quasar.dev/img/parallax2.jpg" />
					<q-card-section horizontal class="q-mt-sm">
						<q-card-section>
							<div class="text-h6">Receita 01</div>
							<div class="text-subtitle2">Criado por: Bruno</div>
						</q-card-section>
						<q-card-section align="center" class="col-3">
							<q-icon name="fas fa-clock" /><br>
							35 min<br>
						</q-card-section>
						<q-card-section align="center" class="col-4">
							<q-icon name="fas fa-concierge-bell" /><br>
							10 Porções
						</q-card-section>
							
					</q-card-section>
				</q-card>
			</div>
		</div>
	</div>
	<!-- Recipe modal -->
	<q-dialog v-model="recipeModel">
		<q-card class="my-card q-pa-md">
			<q-card-section class="row q-mb-md">
				<div class="text-h6">Título da Receita</div>
				<q-space />
				<q-btn icon="close" flat round dense v-close-popup />
		    </q-card-section>
		    <q-card-section horizontal>
		    	<q-card-section>
		    		<ul>
		    			<li>1 ingrediante</li>
		    			<li>2 ingrediantes</li>
		    			<li>3 ingrediantes</li>
		    			<li>4 ingrediantes</li>
		    			<li>5 ingrediantes</li>
		    			<li>6 ingrediantes</li>
		    			<li>7 ingrediantes</li>
		    		</ul>
		    	</q-card-section>
		    		<q-space />
		    		<q-img class="col-6" src="https://cdn.quasar.dev/img/parallax2.jpg"
		    		/>
		    </q-card-section>
		    <q-card-section>
		    	<ol>
		    		<li>Passo 1</li>
		    		<li>Passo 2</li>
		    		<li>Passo 3</li>
		    		<li>Passo 4</li>
		    		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
		    	</ol>
		    </q-card-section>
		</q-card>
	</q-dialog>
	<!-- Recipe modal -->
</div>
</template>

<script>

export default {
  name: 'RecipeBox',
  data(){
    return {
    	recipeModel:false,
    }
  },
  methods: {
    abrir() {
    	this.recipeModel = true
    }
  }
};	
</script>

<style lang="sass" scoped>
.my-card
  width: 100%

</style>