import { Notify } from 'quasar'

export default {
	methods: {
	    sucesso() {
	      Notify.create({
	        position: 'top',
	        color: 'positive',
	        message: 'Operação realizada com sucesso',
	        icon: 'fas fa-check',
	        timeout: 1500,
	      })
	    },
	    falha(msg) {
	    	console.log(msg)
	       this.$q.notify({
	          color: 'negative',
	          position: 'top',
	          message: 'Falha na operação ' + msg,
	          icon: 'report_problem',
	          timeout: 2500,
	        })
	    },
	},
}
