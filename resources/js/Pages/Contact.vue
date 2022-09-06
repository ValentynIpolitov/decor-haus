<template>

    <Head>
        <title>Contact</title>
    </Head>

    <section>
        <div
            class="w-full h-auto min-h-screen bg-[url('/images/contact-bg.jpg')] black-shadow bg-bottom bg-no-repeat bg-cover bg-fixed">
            <div class="container m-auto h-full px-6 py-12 md:py-28 flex justify-end items-start content-start">
                <div class="contact-page-wrapper w-full h-full z-50 flex flex-col justify-start items-start md:items:center content-start md:content-center">
                    <h1 class="text-white text-5xl mb-12 mt-16 z-50 white-text-shadow" data-aos="fade-right">Contact</h1>

                    <div class="w-full flex flex-col">
                        <div v-if="form.recentlySuccessful" class="w-100 h-8">
                            <p>
                                OK
                            </p>
                        </div>
                        <form class="flex flex-col" @submit.prevent="form.post('/contact', {
                                                preserveScroll: true,
                                                onSuccess: () => form.reset(),
                                                })"
                        >
                            <!-- progress -->
                            <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                {{ form.progress.percentage }}%
                            </progress>
    
                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                                <!-- name -->
                                <div>
                                    <label for="" class="block mb-2 text-sm font-medium text-amber-400">Name:</label>
                                    <input :class="{'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm focus:ring-red-500': form.errors.name}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" type="text" autocomplete="given-name" v-model="form.name">
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500" v-if="form.errors.name">{{ form.errors.name }}</p>
                                </div>
        
                                <!-- surname -->
                                <div>
                                    <label for="" class="block mb-2 text-sm font-medium text-amber-400">Surname:</label>
                                    <input :class="{'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm focus:ring-red-500': form.errors.surname}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" type="text" autocomplete="family-name" v-model="form.surname">
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500" v-if="form.errors.surname">{{ form.errors.surname }}</p>
                                </div>
        
                                <!-- email -->
                                <div>
                                    <label for="" class="block mb-2 text-sm font-medium text-amber-400">Email:</label>
                                    <input :class="{'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm focus:ring-red-500': form.errors.email}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@joh.nd" type="email" autocomplete="email" v-model="form.email">
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500" v-if="form.errors.email">{{ form.errors.email }}</p>
                                </div>
        
                                <!-- phone -->
                                <div>
                                    <label for="" class="block mb-2 text-sm font-medium text-amber-400">Phone:</label>
                                    <input :class="{'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm focus:ring-red-500': form.errors.phone}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0950 432 345" type="tel" autocomplete="tel" v-model="form.phone">
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500" v-if="form.errors.phone">{{ form.errors.phone }}</p>
                                </div>
                            </div>
                            
                            <!-- message -->
                            <label for="" class="block mb-2 text-sm font-medium text-amber-400">Message:</label>
                            <input :class="{'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm focus:ring-red-500': form.errors.message}" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Youe message" type="text" v-model="form.message">
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500" v-if="form.errors.message">{{ form.errors.message }}</p>
                            
                            <!-- submit -->
                            <button class="mt-6 btn btn-primary" type="submit" :disabled="form.processing">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'

export default {
  setup () {
    const form = useForm({
      name: null,
      surname: null,
      email: null,
      phone: null,
      message: null,
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

.contact-page-wrapper {
    @media only screen and (min-width: 768px) {
        width: 47%;
    }
}
</style>