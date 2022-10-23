<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeCheckbox from '@/Components/Checkbox.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import VanillaTilt from 'vanilla-tilt';
import { onMounted } from '@vue/runtime-core';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};

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

<template>

    <Head title="Log in" />

    <section>
        <div
            class="w-full h-auto min-h-screen bg-[url('/images/login-bg.jpg')] backdrop-blur black-shadow bg-bottom bg-no-repeat bg-cover bg-fixed">
            <div class="container m-auto h-full px-6 py-12 md:py-28">
                <div class="w-full h-full z-50 flex flex-col justify-center align-center items-center">
                    <h1 class="text-white text-5xl mb-12 mt-16 z-50 white-text-shadow" data-aos="fade-right">
                        Log in
                    </h1>

                    <div class="card">
                        <BreezeValidationErrors class="mb-4" />
    
                        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                            {{ status }}
                        </div>
    
                        <form class="w-full" @submit.prevent="submit">
                            <div>
                                <BreezeInput id="email" label="E-mail" type="text" class="mt-1 block w-full" v-model="form.email" required
                                    autofocus autocomplete="username" />
                            </div>
    
                            <div class="mt-8">
                                <BreezeInput id="password" label="Password" type="password" class="mt-1 block w-full" v-model="form.password"
                                    required autocomplete="current-password" />
                            </div>
    
                            <div class="block mt-4">
                                <label class="flex items-center">
                                    <BreezeCheckbox name="remember" v-model:checked="form.remember" />
                                    <span class="ml-2 text-sm text-white">Remember me</span>
                                </label>
                            </div>
    
                            <div class="flex items-center justify-end mt-4 flex-col sm:flex-row">
                                <Link v-if="canResetPassword" :href="route('password.request')"
                                    class="underline text-sm text-white hover:text-gray-900 mb-4 sm:mb-0">
                                Forgot your password?
                                </Link>
    
                                <BreezeButton class="w-full sm:ml-4 sm:w-auto text-center" :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing">
                                    Log in
                                </BreezeButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
