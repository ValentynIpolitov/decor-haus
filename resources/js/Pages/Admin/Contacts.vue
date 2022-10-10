<template>

    <Head>
        <title>Contacts</title>
    </Head>

    <BreezeAuthenticatedLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Contacts
            </h1>
        </template>

        <template #main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            Contacts page
                            {{contacts.name}}
                                <div class="flex flex-col">
                                    <div class="overflow-x-auto">
                                        <div class="p-1.5 w-full inline-block align-middle">
                                            <div class="overflow-hidden border rounded-lg">
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
                                                                class="px-6 py-3 text-xs font-bold text-right text-gray-500 uppercase">
                                                                Email
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-xs font-bold text-right text-gray-500 uppercase">
                                                                Phone
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-xs font-bold text-right text-gray-500 uppercase">
                                                                Message
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-xs font-bold text-right text-gray-500 uppercase">
                                                                Created at
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200">
                                                        <tr v-for="contact in contacts" :key="contact.id">
                                                            <td>{{contact.id}}</td>
                                                            <td>{{contact.name}} {{contact.surname}}</td>
                                                            <td>{{contact.email}}</td>
                                                            <td>{{contact.phone}}</td>
                                                            <td>{{contact.message}}</td>
                                                            <td>{{contact.created_at}}</td>
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
