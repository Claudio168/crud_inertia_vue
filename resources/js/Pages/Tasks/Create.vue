<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';
</script>

<template>
  <AppLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Lista de Tareas
      </h2>
    </template>


    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div>
            <h1>Crear Nueva Tarea</h1>
            <form @submit.prevent="createTask">
              <input v-model="title" placeholder="Título de la tarea" />
              <button type="submit">Crear</button>
            </form>
           
            <Link :href="route('tasks.index')">
              Volver al Listado
            </Link>
          </div>
        </div>

      </div>
    </div>

  </AppLayout>
</template>

  
<script>
export default {
  data() {
    return {
      title: ''
    };
  },
  methods: {
    createTask() {
      this.$inertia.post('/tasks', {
        title: this.title
      });
    }
  }
};
</script>
  