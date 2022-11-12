<template>
    <div>
        <div @click="isOpen = !isOpen" class="relative">
            <!-- Dropdown toggle button -->
            <button @mouseover="open" class="flex items-center block p-2 bg-white bg-gray-100 rounded-md w-16">
                <span class="mr-4">{{ current_locale() }}</span>

                <svg class="w-6 h-6 text-white text-gray-800 select-lang-icon" :class="{'active': isOpen}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div @mouseleave="close" v-if="isOpen" class="absolute right-0 py-2 mt-2 bg-gray-100 rounded-md flex flex-col items-center dropdown-content w-16">
                <NavLink :href="route('language', ['en'])" @click="closeMenu()" :active="false" class="text-gray-800">
                    EN
                </NavLink>

                <NavLink :href="route('language', ['ua'])" @click="closeMenu()" :active="false" class="text-gray-800">
                    UA
                </NavLink>

                <NavLink :href="route('language', ['sk'])" @click="closeMenu()" :active="false" class="text-gray-800">
                    SK
                </NavLink>

                <NavLink :href="route('language', ['de'])" @click="closeMenu()" :active="false" class="text-gray-800">
                    DE
                </NavLink>
            </div>
        </div>
    </div>
</template>

<script>
import NavLink from './NavLink.vue';

export default {
    components: {
        NavLink
    },
    data() {
        return {
            isOpen: false
        }
    },
    methods: {
        open() {
            this.isOpen = true;
            console.log('op')
        },
        close() {
            this.isOpen = false;
            console.log('clo')
        },
        current_locale() {
            if (this.$page.locale == 'en') {
                return 'en';
            }
            if (this.$page.locale == 'de') {
                return 'de';
            }
            return this.$page.locale
        }
    },
    computed: {
        selectable_locale() {
            if (this.$page.locale == 'de') {
                return 'en';
            }
            return 'de'
        }
    },
}
</script>

<style lang="scss">
    .select-lang-icon {
        transition: .15s ease-in-out all;

        &.active {
            transform: rotate(-180deg);
            color: rgb(245, 158, 11);
        }
    }

</style>