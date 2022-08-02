<template>
    <!-- change color active to amber -->
    <Link
        class="hover:text-amber-500"
        :class="{'font-bold text-amber-500': active, 'text-white': !active}" 
    >
        <slot />
    </Link>
</template>

<script>

    export default {
        props: {
            active: Boolean
        }
    }
</script>