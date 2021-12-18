<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                 Crear Nota
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
                <form @submit.prevent="submit">
                    <label for="">Excerpt:</label>
                    <input type="text" v-model="form.excerpt">
                    <br>
                    <label for="">Content:</label>
                    <textarea name="" id="" cols="30" rows="10" v-model="form.content"></textarea>
                    <br>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-while font-bold py-2 px-4">Editar</button>
                </form>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3'
    import { Inertia } from '@inertiajs/inertia'

    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
            Link,
        },
        props:{
           note: Object,
        },
        data(){
            return {
                form: {
                    excerpt : '',
                    content: ''
                }
            }
        },
        methods: {
            submit(){
                this.$inertia.post(this.route('notes.store'), this.form)
            }
        }

    })
</script>
