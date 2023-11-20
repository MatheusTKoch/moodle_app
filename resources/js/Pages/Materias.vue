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


</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Matérias</h2>
        </template>

        <form @submit.prevent="submit">
            <InputLabel for="materias" value="Matérias" />

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

                <InputError class="mt-2" :message="form.errors.email" />

                <div class="flex items-center">
                    <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Cadastrar
                    </PrimaryButton>
                </div>
            </div>
        </form>
    </AuthenticatedLayout>
</template>
