<template>
    <Head>
        <title>Dashboard</title>
    </Head>

    <BreezeAuthenticatedLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h1>
        </template>

        <template #main>
            <section class="w-full h-auto min-h-screen bg-[url('/images/login-bg.jpg')] backdrop-blur black-shadow bg-bottom bg-no-repeat bg-cover bg-fixed">
                <div class="py-12">
                    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="card sm:rounded-lg w-full max-w-none">
                            <div class="p-6 text-3xl text-center white-text-shadow text-white">
                                You're logged in!
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </template>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Admin.vue'
import { Head } from '@inertiajs/inertia-vue3';
import VanillaTilt from 'vanilla-tilt';
import { onMounted } from '@vue/runtime-core';

export default {
    layout: '',
    components: {
        BreezeAuthenticatedLayout,
        Head,
    },

}
onMounted(() => {
    const element = document.querySelectorAll(".card");
    VanillaTilt.init(element, {
        max: 5,
        speed: 400,
        glare: true,
        'max-glare': .5
    });
}) 
</script>
