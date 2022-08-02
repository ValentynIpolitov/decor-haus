<template>
    <Header />

    <!-- nuzna li section tut?                             -->
    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot />
        </div>
    </section>

    
</template>

<script>
    import Header from './Header.vue';

    export default {
        components: { Header },
    }
</script>