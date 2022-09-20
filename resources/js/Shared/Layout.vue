<template>
    <Header />

    
    <slot />
    
    <Footer />
    <Cookies />
</template>

<script>
    import Header from './Header.vue';
    import Footer from './Footer.vue';
    import Cookies from './Cookies.vue';

    export default {
        components: { Header, Footer, Cookies },
    }
</script>