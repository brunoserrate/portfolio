<template>
  <!-- Config layout -->
  <q-layout view="hHh lpR fFf">
    <!-- Header -->
    <q-header elevated>
      <q-toolbar>
        <!-- Open menu lateral -->
        <q-btn flat dense round icon="menu" aria-label="Menu" @click="leftDrawerOpen = !leftDrawerOpen" />
        <!-- Open menu lateral -->
        <!-- Titulo do app -->
        <q-toolbar-title>
          Port Apps
        </q-toolbar-title>
        <!-- Titulo do app -->
        <!-- Informação lateral direita -->
        <div>PortApps {{ version }}</div>
        <!-- Informação lateral direita -->
      </q-toolbar>
    </q-header>
    <!-- Header -->

    <!-- Menu lateral -->
    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      bordered
      content-class="bg-grey-1"
    >
    <!-- Scroll do menu lateral -->
    <q-scroll-area style="height: calc(100% - 150px); 1px solid #ddd">
      <!-- Lista manual -->
      <q-list bordered class="rounded-borders">
        <!-- Item expansivo -->
        <q-expansion-item
          expand-separator
          icon="fas fa-book-reader"
          label="Projetos"
        >
        <!-- Card dentro do expansivo (opcional) -->
          <q-card>
            <q-card-section>
              <q-list>
                <!-- Itens da lista -->
                <q-item clickable link to="simples">
                  <q-item-section avatar>
                    <q-icon name="far fa-hourglass" />
                  </q-item-section>
                  <q-item-section>
                    Simples
                  </q-item-section>
                </q-item>
                <!-- Itens da lista -->
                <q-item clickable link to="elaborado">
                  <q-item-section avatar>
                    <q-icon name="fas fa-hourglass-half" />
                  </q-item-section>
                  <q-item-section>
                    Elaborados
                  </q-item-section>
                </q-item>
                <!-- Itens da lista -->
              </q-list>
            </q-card-section>
          </q-card>
        </q-expansion-item>
        <!-- Item expansivo -->
      </q-list>
      <!--  -->
      <q-list v-for="(menuItem, index) in menuList" :key="index">
        <q-item clickable link :to="menuItem.rota" :active="menuItem.label === 'Outbox'" v-ripple>
          <q-item-section avatar>
            <q-icon :name="menuItem.icon" />
          </q-item-section>
          <q-item-section>
            {{ menuItem.label }}
          </q-item-section>
        </q-item>

        <q-separator v-if="menuItem.separator" />

      </q-list>

    </q-scroll-area>
    <!-- Scroll do menu lateral -->
    </q-drawer>
    <!-- Menu lateral -->

    <!-- Conteudo da pagina -->
    <q-page-container>
      <router-view />
    </q-page-container>
    <!-- Conteudo da pagina -->

  </q-layout>
</template>

<script>

const menuList = [
  { icon: 'fas fa-sign-out-alt', label: 'Sair', rota:'/auth', separator: true },
]

export default {
  name: 'SystensLayout',

  data () {
    return {
      version: '0.0.1',
      leftDrawerOpen: false,
      menuList,
    }
  },
  methods: {
  }
};
</script>

<style>
.body--light {
  /* ... */
}

.body--dark {
  background: #000
  /* ... */
}
.q-card__section--vert {
    padding: 0 0 0 16px;
}
</style>