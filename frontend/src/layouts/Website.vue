<template>
  <q-layout view="hHh lpR fFf">

    <q-header class="bg-primary text-white" height-hint="98">
      <q-toolbar class="q-pa-sm">
        <q-toolbar-title>
          <q-avatar>
            <img src="https://cdn.quasar.dev/logo/svg/quasar-logo.svg">
          </q-avatar>
          Portfólio
        </q-toolbar-title>
        <q-tabs align="right">
          <q-route-tab to="/" label="Home" />
          <q-route-tab to="/auth" label="Sistemas" />
        </q-tabs>
      </q-toolbar>

    </q-header>

    <q-page-container>
      <router-view />
    </q-page-container>

  </q-layout>
</template>

<script>
export default {
  data () {
    return {
    }
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
</style>