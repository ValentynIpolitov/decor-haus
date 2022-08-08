<template>
    <Head>
        <title>Home</title>
    </Head>

    <section>
        <!-- <div class="container mx-auto"> -->
            <carousel :items-to-show="1" :autoplay="16000" :wrap-around="true" :breakpoints="breakpoints">
                <slide :key="1">
                    <div class="carousel__item w-full h-screen bg-[url('/images/house-bg-3.jpg')] bg-center bg-no-repeat bg-cover" :key="1">
                        <div class="container m-auto px-6 flex flex-col justify-center content-start items-start h-full">
                            <h1 class="text-white text-5xl mb-6 z-50 white-text-shadow" data-aos="fade-right">CUSTOM-MADE PREFABRICATED WOODEN HOUSES</h1>
                            <p class="text-white text-xl z-50 white-text-shadow" data-aos="flip-down" data-aos-delay="900" data-aos-offset="0">
                                Production and assembly of low-energy passive prefabricated SIP houses
                            </p>
                        </div>
                    </div>
                </slide>
                <slide  :key="2">
                    <div class="carousel__item w-full h-screen bg-[url('/images/house-bg-2.jpg')] bg-center bg-no-repeat bg-cover" :key="2">

                    </div>
                </slide>

                 <template #addons="{ slidesCount }" class="z-50">
                    <navigation v-if="slidesCount > 1" />
                    <pagination />
                </template>
            </carousel>
        <!-- </div> -->
    </section>


    <div style="margin-top: 2000px">
        <h2>lol</h2>
    </div>
</template>

<script>
    import { Carousel, Navigation, Slide } from "vue3-carousel";

    import "vue3-carousel/dist/carousel.css";

    export default {
         components: {
            Carousel,
            Slide,
            Navigation,
        },
    }
</script>

<style lang="scss">
    .carousel__prev,
    .carousel__next {
        background: none;
        transition: all .15 cubic-bezier(0.4, 0, 0.2, 1);

        svg {
            height: 30px;
            // scale: 2.5;

            &:hover {
                color:  rgb(245 158 11);
            }
        }
    }

    .carousel__prev {
        left: 5rem;
    }
    .carousel__next {
        right: 5rem;
    }

    .carousel__item {
        position: relative;

        &::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(to bottom,  rgba(0, 0, 0, .5), rgba(0,0,0,0));
            z-index: 1;
        }
    }
</style>
