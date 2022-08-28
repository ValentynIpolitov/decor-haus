<template>
    <Head>
        <title>Contact</title>
    </Head>

    <section>
        <div class="w-full h-96 bg-[url('/images/bg_tecgnology.jpg')] black-shadow bg-bottom bg-no-repeat bg-cover bg-fixed">
            <div class="container m-auto h-full px-6 py-12 md:py-28 flex justify-center items-center content-center">
                <h1 class="text-white text-5xl mt-16 z-50 white-text-shadow" data-aos="fade-right">Contact</h1>
            </div>
        </div>
    </section>

    <section>
        <div>
            <div class="container m-auto px-6 py-12 md:py-28">
                <p style="margin-top: 1000px">lol</p>
            </div>
        </div>
    </section>

</template>

<script>

</script>

<style lang="scss" scoped>
    .black-shadow {
        position: relative;
        
        &::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
            z-index: 1;
        }
    }
</style>