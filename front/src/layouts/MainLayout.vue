<template>
  <q-layout view="lHh Lpr lFf">
    <q-header>
      <q-toolbar class="bg-white text-black">
        <div>
          <div class="text-subtitle2 text-bold">Descubre</div>
          <div class="text-grey text-caption">Busca y encuentra lo que necesitas</div>
        </div>

        <q-space />

        <q-btn-toggle
          outline
          v-model="leftDrawerOpen"
          flat
          :options="options"
        />
      </q-toolbar>
    </q-header>
    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
import { defineComponent, ref } from 'vue'

export default defineComponent({
  name: 'MainLayout',
  setup () {
    const leftDrawerOpen = ref(false)

    return {
      options: [
        { icon: 'search', label: '', value: 'search' },
        { icon: 'notifications', label: '', value: 'notifications' }
      ],
      leftDrawerOpen,
      toggleLeftDrawer () {
        leftDrawerOpen.value = !leftDrawerOpen.value
      }
    }
  }
})
</script>
