<template>
    <!-- change color active to amber -->
    <Link
        class="text-white"
        :class="{'underline': active}" 
    >
        <slot />
    </Link>
</template>

<script>

    export default {
        props: {
            active: Boolean,
        }
    }
</script>