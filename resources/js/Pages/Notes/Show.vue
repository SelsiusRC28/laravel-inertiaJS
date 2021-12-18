<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                 Módulo de Notas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px0">
                            <h3 class="text-lg text-gray-900">Detalle de una nota</h3>
                            <p class="text-sm text-gray-600">{{ note.excerpt }}</p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <p>{{ note.content }}</p>

                            <hr class="my-6">

                            <Link :href="route('notes.index')">
                                Volver
                            </Link>
                        </div>
                    </div>
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
           note: Object,
        }
    })
</script>
