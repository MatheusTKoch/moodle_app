<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Moodle App" />

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:ring-indigo-500"
                >Dashboard</Link
            >

            <template v-else>
                <Link
                    :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >Login</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >Registrar-se</Link
                >
            </template>
        </div>

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAACC0lEQVR4nO3Xv29NYRjA8U+1VdU2FQkpI5PEXyDoIjFYJNhoJ1ak4W+QSCwWf4BJ/FgsxhqKkLAQwdCIREgQP8KAHrnJGU6ue879Ufdwvc83eZZz87zv+3zfn5cgCIIgCIIgCIIgqINxbMM+nMA5XME9zPmPC3yA98haxEccMOBsygvNuozn2GHAOYK3PRR/OxeX3KxnuIQRCc56lseCBGc9K8QnbJTYrGdNcVZis541xaMO+p7GUVzHE3zGFzzNv81jwyDNelaIWxgq6XcUp/Ghg3Ya74szGOuniCyPZn70WPxDTOVtnMIrXMxnczPu9tDmHczULeB1DwNdxpY8/xB+Fn57hherWFXL/ZKQlQhY7HKA7wovv1342oettdSP7ZCVCDjfxcC+YXeetx1v+lB8394ZWYmAnfmr7jFWKgbUWOaHC3mXuyzoKmYxkcdsfgtUrbTpOgQ0X5cHcQH38b2Qd9Lv7MHLDopv3AZlLFTkzdUlYBiTLb43Tvn9OFbR7kybg/RaB2O7sYrcPyJgKt/fN3G8h1N4vkLA3g7yZ0tyG4+l2gRkTft9qYun7tYKAa1WVrv+i/83ahEwWXHwddt+c9SV35aqBidSF7A+dQHjIUDaK2Bd6gLGUhewtqTzlVQEjIYAaa+AkRQEVDGcuoA1qQsYSl3Av1DAXxcQBEEQBEEQBEEQBIGB4Bd7UccnKkQzAgAAAABJRU5ErkJggg==">
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8">
                    <div
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
                    >
                        <div>


                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Sobre o aplicativo</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                O objetivo do Moodle App é oferecer soluções para alunos e professores, facilitando a correção de provas
                                e trocas de conhecimento. Agradecemos pela sua visita!
                            </p>
                        </div>
                    </div>



                <div class="flex justify-center mt-16 px-6 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a
                                href="https://github.com/MatheusTKoch"
                                class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:ring-indigo-500"
                                target="_blank"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                </svg>
                                Github
                            </a>
                        </div>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    Moodle App® V 0.0.1
                </div>
            </div>
        </div>
        </div>
    </div>
</template>

<style>

</style>
