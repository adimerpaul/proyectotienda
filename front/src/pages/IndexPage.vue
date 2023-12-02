<template>
  <q-page>
    <q-carousel
      v-model="slide"
      swipeable
      animated
      infinite
      navigation
      padding
      arrows
      height="300px"
      class="text-white"
    >
      <q-carousel-slide :name="1" class="column no-wrap flex-center" style="background: url('./images/fondo1.jpg') no-repeat center center; background-size: cover;">
        <q-icon name="style" size="56px" />
        <div class="q-mt-md text-center">
          {{ lorem }}
        </div>
      </q-carousel-slide>
      <q-carousel-slide :name="2" class="column no-wrap flex-center" style="background: grey no-repeat center center; background-size: cover;" >
        <q-icon name="live_tv" size="56px" />
        <div class="q-mt-md text-center">
          {{ lorem }}
        </div>
      </q-carousel-slide>
      <q-carousel-slide :name="3" class="column no-wrap flex-center" style="background: grey no-repeat center center; background-size: cover;" >
        <q-icon name="layers" size="56px" />
        <div class="q-mt-md text-center">
          {{ lorem }}
        </div>
      </q-carousel-slide>
      <q-carousel-slide :name="4" class="column no-wrap flex-center" style="background: grey no-repeat center center; background-size: cover;" >
        <q-icon name="terrain" size="56px" />
        <div class="q-mt-md text-center">
          {{ lorem }}
        </div>
      </q-carousel-slide>
    </q-carousel>
    <q-virtual-scroll
      :items="heavyList"
      virtual-scroll-horizontal
    >
      <q-chip outline color="black" text-color="white" v-for="categoria in categorias" :key="categoria.id">
        {{ categoria.nombre }}
      </q-chip>
    </q-virtual-scroll>
    <div>
      <div class="text-subtitle2 text-bold q-pl-lg">Venta express</div>
    </div>
    <div>
      <q-virtual-scroll
        :items="heavyList"
        virtual-scroll-horizontal
      >
        <q-card class="q-ma-md" style="width: 150px;" v-for="producto in productos" :key="producto.id">
          <q-card-section class="q-pa-none">
            <q-img :src="`http://137.184.46.177/images/${producto.imagen}`" />
          </q-card-section>
          <q-card-section class="q-pa-md">
            <div class="text-h6 text-bold">{{ producto.nombre }}</div>
            <div class="text-subtitle2 text-bold">{{ producto.precio }}</div>
          </q-card-section>
        </q-card>
      </q-virtual-scroll>
    </div>
<!--    <pre>{{productos}}</pre>-->
<!--    <pre>{{categorias}}</pre>-->
  </q-page>
</template>

<script>
import { defineComponent } from 'vue'
export default defineComponent({
  name: 'IndexPage',
  data () {
    return {
      slide: 1,
      lorem: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris',
      productos: [],
      categorias: [],
      heavyList: []
    }
  },
  mounted () {
    this.getProductos()
    this.getCategorias()
    for (let i = 0; i < 1; i++) {
      this.heavyList.push({
        label: 'Option ' + (i + 1),
        class: i % 2 === 0 ? 'q-pa-md self-center bg-grey-2 text-black' : 'q-pa-lg bg-black text-white'
      })
    }
  },
  methods: {
    async getProductos () {
      const response = await this.$axios.get('http://137.184.46.177/api/products')
      this.productos = response.data
    },
    async getCategorias () {
      const response = await this.$axios.get('http://137.184.46.177/api/categories')
      this.categorias = response.data
    }
  },
})
</script>
