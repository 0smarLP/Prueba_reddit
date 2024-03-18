<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { defineProps, ref, onMounted, reactive } from "vue";

// Propiedades
const props = defineProps({
  categories: {
    type: Array,
    default: () => [],
  },
  posts: {
    type: Array,
    default: () => [],
  },
});

// Un estado para manejar el error
const state = reactive({
  selectedCategory: "",
  error: "",
});

// Variable para guardar la categoría seleccionada
const selectedCategory = ref("");

// Función para cambiar de categoría
const handleCategoryChange = () => {
  if (selectedCategory.value) {
    window.location.href = `/api/reddit/${selectedCategory.value}`;
  } else {
    state.error = "Por favor, selecciona una categoría";
  }
};

//Debugging
// onMounted(() => {
//   console.log(props.posts);
// });
</script>

<template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Reddit</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div>
            <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
              <ApplicationLogo class="block h-12 w-auto" />

              <h1 class="mt-8 text-2xl font-medium text-gray-900">
                Bienvenido a los Post de Reddit
              </h1>

              <p class="mt-6 text-gray-500 leading-relaxed">
                Por favor, selecciona una categoría de Reddit, despues da click
                en el boton "Consultar" para ver los resultados.
              </p>
            </div>

            <!-- Mostrar Error -->
            <div
              v-if="state.error"
              class="bg-red-100 text-red-800 text-center p-3 rounded-lg mx-auto mt-4 mb-4 max-w-4xl"
            >
              {{ state.error }}
            </div>

            <div
              class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8"
            >
              <!-- Selector de Categorías -->
              <select
                v-model="selectedCategory"
                class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow form"
              >
                <option value="" disabled>Selecciona una categoría</option>
                <option
                  v-for="category in props.categories"
                  :key="category.id"
                  :value="category.name"
                >
                  {{ category.name }}
                </option>
              </select>
              <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                @click="handleCategoryChange"
              >
                Consultar Información
              </button>

              <!-- Mostrar Resultados -->
              <div v-for="post in props.posts" :key="post.data.id">
                <h3>{{ post.data.title }}</h3>
                <p>{{ post.data.selftext }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
