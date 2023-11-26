<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Provas</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Bem-vindo(a) ao menu de Provas! Envie uma nova prova para
                        correção ou verifique as provas já enviadas!
                    </div>
                </div>
                <h2 class="font-semibold py-12 float align-center text-xl text-gray-800 leading-tight">Suas Provas</h2>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 float">
                        <table class="table-auto">
                            <thead>
                                <tr>
                                <th class="font-bold py-2 px-4 border-b border-l text-left">Prova</th>
                                <th class="font-bold py-2 px-4 border-b border-l text-left">Nota</th>
                                <th class="font-bold py-2 px-4 border-b border-l text-left">Matéria</th>
                                <th class="font-bold py-2 px-4 border-b border-l text-left">Corrigido Por</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td class="p-2 border-b border-l text-left">Prova 1</td>
                                <td class="p-2 border-b border-l text-left">9.5</td>
                                <td class="p-2 border-b border-l text-left">Historia</td>
                                <td class="p-2 border-b border-l text-left">Professor 1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </AuthenticatedLayout>
</template>
