<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';

const { $inertia, route } = usePage();

const form = useForm({
    materias: ''
});

const submit = () => {
    form.post('/materia', {
        onSuccess: () => form.reset()
    });
};

function deleteMateria(id) {
    if (confirm('Tem certeza que quer deletar a materia?')) {
        $inertia.delete(route('materia', id));
    }
}

const prop = defineProps({
    materias: ''
});
</script>

<template>
    <Head title="Materias" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Matérias</h2>
        </template>

        <form @submit.prevent="submit" class="flex justify-center">
            <div class="my-2">
            <InputLabel for="materias" value="Cadastre suas matérias:" />

            <div class="inline-flex">
                <TextInput
                    id="materias"
                    type="text"
                    class="mt-1 block h-8 w-3/4"
                    v-model="form.materias"
                    required
                    autofocus
                    autocomplete="materias"
                />

                <InputError class="mt-2" :message="form.errors.materias"/>

                <div class="flex items-center">
                    <PrimaryButton class="ml-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing">
                        Cadastrar
                    </PrimaryButton>
                </div>
            </div>
        </div>
        </form>

        <br>

            <div class="p-6 text-gray-900 float">
                <ul v-for="(mat, index) in materias" :key="index">
                    <li>
                        <div class="flex justify-center p-4">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-5 text-gray-900">{{ mat.nome }}<SecondaryButton @click="deleteMateria(mat.id)">Deletar</SecondaryButton></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
    </AuthenticatedLayout>
</template>
