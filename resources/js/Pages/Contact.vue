<template>

    <Head>
        <title>Contact</title>
    </Head>

    <section>
        <div
            class="w-full h-auto min-h-screen bg-[url('/images/contact-bg.jpg')] backdrop-blur black-shadow bg-bottom bg-no-repeat bg-cover bg-fixed">
            <div class="container m-auto h-full px-6 py-12 md:py-28">
                <div
                    class="w-full h-full z-50 flex flex-col justify-start items-start md:items:center content-start md:content-center">
                    <h1 class="text-white text-5xl mb-12 mt-16 z-50 white-text-shadow" data-aos="fade-right">Contact
                    </h1>
                </div>

                <div class="flex flex-col md:flex-row justify-between align-center items-center">
                    <div
                        class="w-full md:w-1/2 h-full z-50 flex flex-col justify-start items-start md:items:center content-start md:content-center">
                        <div class="w-full flex flex-col">
                            <div v-if="form.recentlySuccessful" class="px-6 container w-full h-8 info-message md:w-auto">
                                <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200"
                                    role="alert">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                                        Your form was succesfully submitted!
                                    </div>
                                    <!-- <button type="button"
                                        class="ml-auto -mx-1.5 -my-1.5 ml-4 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                                        data-dismiss-target="#alert-3" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button> -->
                                </div>
                            </div>
                            <form class="flex flex-col" 
                                @submit.prevent="form.post('/contact', {
                                    preserveScroll: true,
                                    onSuccess: () => form.reset(),
                                })"
                            >
                                <!-- progress -->
                                <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                    {{ form.progress.percentage }}%
                                </progress>

                                <div class="grid gap-6 mb-6 xl:grid-cols-2">
                                    <!-- name -->
                                    <div>
                                        <MazInput v-model="form.name" label="Name" color="warning" :hint="form.errors.name ? form.errors.name : ''" :error="form.errors.name ? true : false" />
                                    </div>

                                    <!-- surname -->
                                    <div>
                                        <MazInput v-model="form.surname" label="Surname" color="warning" :hint="form.errors.surname ? form.errors.surname : ''" :error="form.errors.surname ? true : false"/>
                                    </div>

                                    <!-- email -->
                                    <div>
                                        <MazInput v-model="form.email" label="Email" type="email" color="warning" :hint="form.errors.email ? form.errors.email : ''" :error="form.errors.email ? true : false"/>
                                    </div>

                                    <!-- phone -->
                                    <div>
                                        <MazPhoneNumberInput
                                            v-model="form.phone"
                                            show-code-on-list
                                            color="warning"
                                            :preferred-countries="['UA', 'SK', 'CZ', 'DE']"
                                            :ignored-countries="[]"
                                            @update="results = $event"
                                            :success="results?.isValid"
                                            :hint="form.errors.phone ? form.errors.phone : ''" :error="form.errors.phone ? true : false"
                                        />
                                    </div>
                                </div>

                                <!-- message -->
                                <MazInput v-model="form.message" label="Message" color="warning" :hint="form.errors.message ? form.errors.message : ''" :error="form.errors.message ? true : false"/>

                                <!-- submit -->
                                <button class="mt-6 btn btn-primary" type="submit"
                                    :disabled="form.processing">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div
                        class="w-full md:w-1/2 h-full flex justify-center content-center items-center z-50 pt-12 md:pt-0">
                        <div class="flex flex-col">
                            <a href="tel:+421 919322088"
                                class="mb-4 text-white text-xl hover:text-amber-500 text-center md:text-left"><i
                                    class="fa-solid fa-phone mr-4"></i> +421
                                919322088</a>
                            <a href="mailto:decorhaus.sk@gmail.com"
                                class="mb-4 text-white text-xl hover:text-amber-500 text-center md:text-left"><i
                                    class="fa-solid fa-envelope mr-4"></i>decorhaus.sk@gmail.com</a>
                            <p class="mb-4 text-white text-3xl text-center md:text-left">Service abroad:</p>
                            <a href="tel:+421944725652"
                                class="mb-4 text-white text-xl hover:text-amber-500 text-center md:text-left"><i
                                    class="fa-solid fa-phone mr-4"></i>+421 944725652</a>
                            <a href="tel:+380966230115"
                                class="mb-4 text-white text-xl hover:text-amber-500 text-center md:text-left"><i
                                    class="fa-solid fa-phone mr-4"></i>+380 966230115</a>
                            <div class="flex justify-center md:justify-start">
                                <a href="https://www.instagram.com/decorhaus.sk/" title="Instagram"
                                    class="white-text-shadow mr-8 text-white transition-all hover:text-amber-500"><span
                                        class="fa fa-instagram text-2xl"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'

export default {
    setup() {
        const form = useForm({
            name: '',
            surname: '',
            email: '',
            phone: '',
            message: '',
        })

        return { form }
    },
}
</script>

<style lang="scss" scoped>
.black-shadow {
    position: relative;

    &::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: linear-gradient(to bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        z-index: 1;
    }
}

.info-message {
    position: absolute;
    top: 107px;
    left: 50%;
    transform: translateX(-50%);
}
</style>