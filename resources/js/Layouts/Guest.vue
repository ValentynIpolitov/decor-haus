<template>
    <Header />

    
    <slot />
    
    <Footer />
    <Cookies />
</template>

<script>
    import Header from '../Shared/Header.vue';
    import Footer from '../Shared/Footer.vue';
    import Cookies from '../Shared/Cookies.vue';

    export default {
        components: { Header, Footer, Cookies },
    }
</script>