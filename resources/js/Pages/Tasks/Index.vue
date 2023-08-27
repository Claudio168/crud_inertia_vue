<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';
</script>

<script>
export default {
  props: {
    tasks: Array
  },
  methods: {
    editTask(task) {
      this.$inertia.visit(`/tasks/${task.id}/edit`);
    },
    deleteTask(task) {
      let text = "Vas a eliminar la nota.";
      if (confirm(text) == true) {
        this.$inertia.delete(`/tasks/${task.id}`);
      } else {
        text = "cancelado!";
      }
    }
  }
};
</script>


<template>
  <AppLayout title="crud">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Lista de Tareas
      </h2>
    </template>


    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <ul>
            <li v-for="task in tasks" :key="task.id">
              <span>{{ task.title }}</span> Estado: <span>{{ task.completed }}</span>
              <button @click="editTask(task)" class="m-2"> Editar</button>
              <button @click="deleteTask(task)" class="m-2"> Eliminar</button>
            </li>
          </ul>
          <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
            <Link :href="route('tasks.create')">
            Crear Nueva Tarea
            </Link>
          </button>
        </div>

      </div>
    </div>

  </AppLayout>
</template>
  
  
  