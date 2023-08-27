<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';
import Welcome from '@/Components/Welcome.vue';
import FormSection from '../Components/FormSection.vue';
import NavLink from '@/Components/NavLink.vue';
import { ref } from 'vue';

const contador = ref(0)

const increment = () => {
    contador.value++
}


</script>

<template>
    <AppLayout title="example">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Example
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h2>Hola {{ $page.props.auth.user.name }}</h2>
                    <h1>{{ contador }}</h1>
                    <button @click="increment"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Incremetar</button>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h2>Crud</h2>
                    <Link :href="route('tasks.index')">
                    ir a crud
                    </Link>
                </div>

            </div>
        </div>
    </AppLayout>
</template>

<style></style>