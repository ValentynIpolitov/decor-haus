<template>

    <Head>
        <title>Contact</title>
    </Head>

    <section>
        <div
            class="w-full h-screen bg-[url('/images/contact-bg.jpg')] black-shadow bg-bottom bg-no-repeat bg-cover bg-fixed">
            <div class="container m-auto h-full px-6 py-12 md:py-28 flex justify-end items-start content-start">
                <div class="w-1/2 h-full z-50 flex flex-col justify-start items-start content-start">
                    <h1 class="text-white text-5xl mt-16 z-50 white-text-shadow" data-aos="fade-right">Contact</h1>

                    <div class="">
                        <div v-if="form.recentlySuccessful" class="w-100 h-8">
                            <h2>lols</h2>
                        </div>
                        <form @submit.prevent="form.post('/contact', {
                                                preserveScroll: true,
                                                onSuccess: () => form.reset(),
                                                })"
                        >
                            <!-- progress -->
                            <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                {{ form.progress.percentage }}%
                            </progress>
    
                            <!-- name -->
                            <input type="text" v-model="form.name">
                            <div v-if="form.errors.name">{{ form.errors.name }}</div>
    
                            <!-- surname -->
                            <input type="text" v-model="form.surname">
                            <div v-if="form.errors.surname">{{ form.errors.surname }}</div>
    
                            <!-- email -->
                            <input type="email" v-model="form.email">
                            <div v-if="form.errors.email">{{ form.errors.email }}</div>
    
                            <!-- phone -->
                            <input type="tel" v-model="form.phone">
                            <div v-if="form.errors.phone">{{ form.errors.phone }}</div>
                            
                            <!-- message -->
                            <input type="text" v-model="form.message">
                            <div v-if="form.errors.message">{{ form.errors.message }}</div>
                            
                            <!-- submit -->
                            <button type="submit" :disabled="form.processing">Submit</button>
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
</style>