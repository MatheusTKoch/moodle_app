<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    provaDesc: '',
    materiaId: '',
    fileProva: ''
})



const submit = () => {
    form.post('/prova', {
        onSuccess: () => form.reset()
    });
};

const props = defineProps({
    materias: '',
    provas: ''
});
</script>

<template>
    <Head title="Provas" />

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
                <div class="h-5"></div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-center w-auto">
                    <div class="p-6 text-gray-900 float">
                        <form @submit.prevent="submit" id="provas">
                            <InputLabel for="provasDesc" value="Título da Prova:" />

                            <TextInput
                                id="provasDesc"
                                type="text"
                                class="mt-1 block h-8 w-2/4"
                                v-model="form.provaDesc"
                                required
                                autofocus
                                autocomplete="Descrição das provas"
                            />

                            <div class="h-2"></div>

                            <InputLabel for="materiaDesc" value="Matéria:" />

                            <select
                                id="materiaDesc"
                                class="mt-1 block h-8 w-2/4"
                                v-model="form.materiaId"
                                required
                                autofocus
                                autocomplete="Selecione a matéria"

                            >
                                <option v-for="mat in materias" :value="mat.id">{{mat.id}} - {{ mat.nome }}</option>
                            </select>

                            <InputLabel for="inputFile" value="Arquivo da Prova:" />

                            <TextInput
                                id="inputFile"
                                type="file"
                                class="mt-1 block h-8 w-2/4"
                                v-model="form.fileProva"
                                autofocus
                                autocomplete="Adicione o PDF/Imagem da Prova"
                            />

                            <InputError class="mt-2" :message="form.errors.provas"/>


                            <div class="h-3"></div>
                            <div class="flex items-center">
                                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    Cadastrar Prova
                                </PrimaryButton>
                            </div>
                    </form>
                    </div>
                </div>

                <h2 class="font-semibold py-12 flex justify-center text-xl text-gray-800 leading-tight">Suas Provas</h2>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                    <div class="p-6 text-gray-900 float">
                        <table class="table-auto">
                            <thead>
                                <tr>
                                <th class="font-bold py-2 px-4 border-t border-b border-l border-r text-left">Prova</th>
                                <th class="font-bold py-2 px-4 border-t border-b border-l border-r text-left">Nota</th>
                                <th class="font-bold py-2 px-4 border-t border-b border-l border-r text-left">Matéria</th>
                                <th class="font-bold py-2 px-4 border-t border-b border-l border-r text-left">Status</th>
                                </tr>
                            </thead>
                            <tbody v-for="prov in provas">
                                <tr>
                                <td class="p-2 border-t border-b border-l border-r text-left">{{ prov.descricao }}</td>
                                <td class="p-2 border-t border-b border-l border-r text-left">{{ prov.nota == null ? 'Sem nota' : prov.nota }}</td>
                                <td class="p-2 border-t border-b border-l border-r text-left">{{ prov.materia_id }}</td>
                                <td class="p-2 border-t border-b border-l border-r text-left">{{ prov.nota == null ? 'Não Avaliado' : 'Avaliado'}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </AuthenticatedLayout>
</template>
