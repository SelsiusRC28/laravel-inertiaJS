<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Notes
            </h2>
        </template>

        <div class="py-12">


            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                     <p>Crear nueva nota</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-while font-bold py-2 px-4"><Link :href="route('notes.create')">Crear</Link></button>
                    <table  class="p-12">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Excerpt</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="note in notes" :key="note.id">
                                <td>{{note.id}}</td>
                                <td>{{note.excerpt}}</td>
                                <td>
                                    <Link :href="route('notes.show', note.id)">Ver</Link> |
                                    <Link :href="route('notes.edit', note.id)">Editar</Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3'

    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
            Link,
        },
        props:{
            notes: Array
        }
    })
</script>
