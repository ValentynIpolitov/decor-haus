<template>

    <Head>
        <title>Contacts</title>
    </Head>

    <BreezeAuthenticatedLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-white leading-tight">
                Contacts
            </h1>
        </template>

        <template #main>
            <section class="w-full h-auto min-h-screen">
                <div class="py-12">
                    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="card sm:rounded-lg w-full max-w-none">
                            <div class="p-6 text-xl w-full text-center text-white">
                                <div v-if="contacts.length == 0" class="text-3xl text-center white-text-shadow text-white">
                                    No contacts in database.
                                </div>
                                <div v-else class="flex flex-col">
                                    <div class="overflow-x-auto">
                                        <div class="p-1.5 w-full inline-block align-middle">
                                            <div class="overflow-hidden border rounded-lg overflow-x-scroll">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead class="bg-gray-50">
                                                        <tr>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">
                                                                ID
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">
                                                                Name
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">
                                                                Email
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">
                                                                Phone
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">
                                                                Message
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">
                                                                Created at
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200">
                                                        <tr v-for="contact in contacts" :key="contact.id">
                                                            <td class="px-6 text-left">{{contact.id}}</td>
                                                            <td class="px-6 text-left">{{contact.name}} {{contact.surname}}</td>
                                                            <td class="px-6 text-left">{{contact.email}}</td>
                                                            <td class="px-6 text-left">{{contact.phone}}</td>
                                                            <td class="px-6 text-left">{{contact.message}}</td>
                                                            <td class="px-6 text-left">{{new Date(contact.created_at).toDateString()}} {{new Date(contact.created_at).toLocaleTimeString()}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

export default {
    layout: '',
    components: {
        BreezeAuthenticatedLayout,
        Head,
    },
    props: ['contacts'],
}
</script>
