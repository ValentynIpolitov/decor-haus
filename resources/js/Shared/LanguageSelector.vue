<template>
    <div class="ml-4">
        <inertia-link :href="route('language', [selectable_locale])">
            DE
            <!-- <icon class="w-5 h-5" :name="selectable_locale" /> -->
        </inertia-link>
    </div>
</template>

<script>
import Icon from '@/Shared/Icon'

export default {
    components: {
        Icon,
    },
    computed: {
        selectable_locale() {
            if(this.$page.locale == 'de') {
                return 'en';
            }
            return 'de'
        }
    },
}
</script>