<template>
  <div class="fixed-center text-center">
    <p>
      <img
        src="~assets/sad.svg"
        style="width:30vw;max-width:150px;"
      >
    </p>
    <p class="text-faded">
      Página não encontrada...<strong>(404)</strong>
    </p>
    <q-btn
      color="secondary"
      style="width:200px;"
      label="Voltar"
      :to="rota"
    />
  </div>
</template>

<script>
export default {
  name: 'Error404',
  data(){
    return {
    }
  },
  computed:{
    rota: function () {
      if(this.$route.path.includes('sistema')) {
        return "/sistema/"
      }

      return "/"
    }
  },
  methods:{
  }
};
</script>
