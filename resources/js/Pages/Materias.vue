<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    materias: ''
});

const submit = () => {
    form.post(route('materia'));
};

</script>

<template>
    <Head title="Materias" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Matérias</h2>
        </template>

        <form @submit.prevent="submit"  class="flex justify-center">
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

                <InputError class="mt-2" :message="form.errors.materias" />

                <div class="flex items-center">
                    <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Cadastrar
                    </PrimaryButton>
                </div>
            </div>
        </div>
        </form>
    </AuthenticatedLayout>
</template>
