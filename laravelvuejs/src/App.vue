<script setup>
import { ref } from 'vue'
import axios from 'axios'

// Variables reactivas
const selectedTable = ref('superhero')
const allRecords = ref([])
const searchValue = ref('')
const recordById = ref(null)

// Función para consultar todos los registros de la tabla seleccionada
async function fetchAll() {
  try {
    const response = await axios.get(`http://localhost:8000/${selectedTable.value}`)
    allRecords.value = response.data
  } catch (error) {
    allRecords.value = []
    console.error('Error al obtener todos los registros:', error)
  }
}

// Función para buscar un registro por ID o nombre
async function fetchById() {
  if (!searchValue.value) {
    recordById.value = { error: 'Por favor ingresa un valor válido' }
    return
  }

  try {
    const response = await axios.get(`http://localhost:8000/${selectedTable.value}/${searchValue.value}`)
    recordById.value = response.data
  } catch (error) {
    recordById.value = { error: 'No se encontró el registro' }
    console.error('Error al buscar por ID o nombre:', error)
  }
}
</script>

<template>
  <h1>Consumo de API Laravel</h1>

  <!-- Sección para seleccionar la tabla -->
  <section>
    <h2>Seleccionar tabla</h2>
    <select v-model="selectedTable">
      <option value="superhero">Superheroes</option>
      <option value="gender">Genders</option>
      <option value="universe">Universes</option>
    </select>
  </section>

  <!-- Consulta de todos los registros -->
  <section>
    <h2>Consultar todos</h2>
    <button @click="fetchAll">Consultar</button>
    <ul v-if="allRecords.length > 0">
      <li v-for="item in allRecords" :key="item.id">
        {{ item }}
      </li>
    </ul>
    <p v-else>Sin resultados.</p>
  </section>

  <!-- Búsqueda por ID o nombre -->
  <section>
    <h2>Buscar por ID / Nombre</h2>
    <input type="text" v-model="searchValue" placeholder="Ingresa ID o nombre" />
    <button @click="fetchById">Buscar</button>
    <pre v-if="recordById">{{ JSON.stringify(recordById, null, 2) }}</pre>
  </section>
</template>
