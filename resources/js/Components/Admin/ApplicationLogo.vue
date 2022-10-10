<template>
    <NavLink :href="route('homepage')">
        <img class="w-28" src="/images/logo_1_white_active_bc.svg" alt="">
    </NavLink>
</template>

<script>
    import NavLink from './NavLink.vue';

    export default {
        components: {NavLink},
    }
</script>