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
          <h1>Editar Tarea</h1>
          <form @submit.prevent="updateTask">
            <input v-model="task.title" />
            <input v-model="task.completed" />
            <button type="submit">Guardar Cambios</button>
          </form>
          <Link :href="route('tasks.index')">
          Volver al Listado
          </Link>
        </div>

      </div>
    </div>

  </AppLayout>
</template>
  
<script>
export default {
  props: {
    task: Object
  },
  methods: {
    updateTask() {
      this.$inertia.put(`/tasks/${this.task.id}`, {
        title: this.task.title,
        completed: this.task.completed
      });
    }
  }
};
</script>
  