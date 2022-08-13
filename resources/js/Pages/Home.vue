<template>

    <Head>
        <title>Home</title>
    </Head>

    <section>
        <carousel :items-to-show="1" :autoplay="16000" :wrap-around="true">
            <slide :key="1">
                <div class="carousel__item w-full h-screen bg-[url('/images/slide-bg-1.jpg')] bg-center bg-no-repeat bg-cover"
                    :key="1">
                    <div class="container m-auto px-6 flex flex-col justify-center content-center items-center h-full">
                        <h1 class="text-white text-5xl mb-6 z-50 white-text-shadow" data-aos="fade-right">CUSTOM-MADE
                            PREFABRICATED WOODEN HOUSES</h1>

                        <div class="bg-opacity-70 rounded-xl bg-black py-10 box-shadow z-50 px-8" data-aos="fade-right">
                            <p class="text-white text-xl z-50 white-text-shadow" data-aos="flip-down"
                                data-aos-delay="900" data-aos-offset="0">
                                Production and assembly of low-energy passive prefabricated SIP houses
                            </p>
                        </div>
                    </div>
                </div>
            </slide>
            <slide :key="2">
                <div class="carousel__item w-full h-screen bg-[url('/images/slide-bg-2.jpg')] bg-center bg-no-repeat bg-cover"
                    :key="2">
                    <div class="container m-auto px-6 flex flex-col justify-center content-center items-center h-full">
                        <h1 class="text-white text-5xl mb-6 z-50 white-text-shadow" data-aos="fade-right">CUSTOM-MADE
                            PREFABRICATED WOODEN HOUSES</h1>

                        <div class="bg-opacity-70 rounded-xl bg-black py-10 box-shadow z-50 px-8" data-aos="fade-right">
                            <p class="text-white text-xl z-50 white-text-shadow" data-aos="flip-down"
                                data-aos-delay="900" data-aos-offset="0">
                                Production and assembly of low-energy passive prefabricated SIP houses
                            </p>
                        </div>
                    </div>
                </div>
            </slide>

            <template #addons="{ slidesCount }" class="z-50">
                <navigation v-if="slidesCount > 1" />
                <pagination v-if="slidesCount > 1" />
            </template>
        </carousel>
    </section>

    <section>
        <div data-aos="fade-up"
            class="container m-auto px-6 py-12 h-full flex flex-col justify-start content-center items-center md:flex-row md:justify-between md:content-start md:items-start md:py-28">
            <div class="flex flex-col justify-center content-start items-start mb-4 md:w-1/2 md:mb-0">
                <p class="text-slate-700 text-xl mb-4">
                    We focus on the construction of eco-friendly, energy-efficient, reliable and durable buildings using
                    Canadian technology,
                    which uses SIP constructions.
                </p>
                <p class="text-slate-700 text-xl mb-4">
                    We offer prefabricated houses based on standard designs, as well as the implementation of any
                    individual customer solutions.
                    Construction of a house these days can be a fairly simple process if you choose the right technology
                    solutions.
                </p>
                <p class="text-slate-700 text-xl">
                    You will be able to build a new and cosy house at a reasonable price and in the shortest time
                </p>
            </div>

            <div class="md:w-1/2">
                <Tabs :tabs="tabs" :initialTab="initialTab">
                    <template v-slot:tab-head-speed>
                        Speed
                    </template>
                    <template v-slot:tab-panel-speed>
                            <p class="text-slate-700 text-xl">
                                An unbeatable advantage of our houses is the customized production in the factory and the completion 
                           exactly according to the production project on the land. Dry processes allow you to occupy your 
                           home as soon as construction is complete, regardless of the time of year.
                        </p>
                    </template>
    
                    <template v-slot:tab-head-tradition>
                        Tradition
                    </template>
                    <template v-slot:tab-panel-tradition>
                        <p class="text-slate-700 text-xl mb-4">
                                The Structural Insulated Panels (SIPs) technology that forms the basis of the house's rough construction 
                           has been tested by sixty years of use abroad. It accounts for up to 80% of new construction in Canada 
                           and nearly 60% in Europe.
                        </p>
                        <p class="text-slate-700 text-xl">
                            This progressive method of building houses is becoming increasingly popular 
                           because of its undeniable advantages determining fast and precise construction, high comfort, healthy 
                           ecological and economical living.
                        </p>
                    </template>
                </Tabs>
            </div>
        </div>
    </section>
</template>

<script>
import { Carousel, Navigation, Slide } from "vue3-carousel";
import Tabs from '../Shared/Tabs.vue';

import "vue3-carousel/dist/carousel.css";

export default {
    components: {
        Carousel,
        Slide,
        Navigation,
        Tabs,
    },

    data() {
        return {
            initialTab: 'speed',
            tabs: ['speed', 'tradition',]
        };
    }
}
</script>

<style lang="scss">
.title {
    margin-top: 10px;
    margin-bottom: 20px;
}

.description {
    margin-top: 5px;
    max-width: 85%;
    line-height: 22px;
    margin-bottom: 10px;
}

.image {
    height: 160px;
    width: auto;
}



.carousel__prev,
.carousel__next {
    background: none;
    transition: all .15 cubic-bezier(0.4, 0, 0.2, 1);

    svg {
        height: 30px;

        &:hover {
            color: rgb(245 158 11);
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
        background: linear-gradient(to bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        z-index: 1;
    }
}
</style>
