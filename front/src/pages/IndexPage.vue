<template>
  <q-page>
    <pre>{{productos}}</pre>
  </q-page>
</template>

<script>
import { defineComponent } from 'vue'

export default defineComponent({
  name: 'IndexPage',
  data () {
    return {
      productos: []
    }
  },
  mounted () {
    this.getProductos()
  },
  methods: {
    async getProductos () {
      const response = await this.$axios.get('http://localhost:8000/api/products')
      this.productos = response.data
    }
  },
})
</script>
