<template>

    <Head>
        <title>Home</title>
    </Head>

    <!-- Slider -->
    <section>
        <swiper
            :slides-per-view="1"
            :space-between="0"
            :pagination="{
                clickable: true,
            }"
            :navigation="true" 
            :loop="true"
            :modules="modules"
            :autoplay="{
                delay: 8500,
                disableOnInteraction: false,
            }"
            class="swiper-button-white"
        >
            <swiper-slide>
                <div class="carousel__item w-full h-screen bg-[url('/images/slide-bg-1.jpg')] bg-center bg-no-repeat bg-cover"
                    :key="1">
                    <div class="container m-auto px-6 flex flex-col justify-center content-center items-center h-full">
                        <h1 class="text-white text-5xl mb-6 z-50 white-text-shadow" data-aos="fade-right">CUSTOM-MADE
                            PREFABRICATED WOODEN HOUSES</h1>

                        <div class="bg-opacity-30 rounded-xl bg-black py-10 box-shadow z-50 px-8" data-aos="fade-right">
                            <p class="text-white text-xl z-50 white-text-shadow" data-aos="flip-down"
                                data-aos-delay="600" data-aos-offset="0">
                                Production and assembly of low-energy passive prefabricated SIP houses
                            </p>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="carousel__item w-full h-screen bg-[url('/images/slide-bg-2.jpg')] bg-center bg-no-repeat bg-cover"
                    :key="2">
                    <div class="container m-auto px-6 flex flex-col justify-center content-center items-center h-full">
                        <h1 class="text-white text-5xl mb-6 z-50 white-text-shadow" data-aos="fade-right">CUSTOM-MADE
                            PREFABRICATED WOODEN HOUSES</h1>

                        <div class="bg-opacity-30 rounded-xl bg-black py-10 box-shadow z-50 px-8" data-aos="fade-right">
                            <p class="text-white text-xl z-50 white-text-shadow" data-aos="flip-down"
                                data-aos-delay="900" data-aos-offset="0">
                                Production and assembly of low-energy passive prefabricated SIP houses
                            </p>
                        </div>
                    </div>
                </div>
            </swiper-slide>
        </swiper>
    </section>

    <!-- Info + Tabs -->
    <section id="our_goal">
        <div
            class="container m-auto px-6 py-12 md:py-28 h-full flex flex-col justify-start content-center items-center z-50">
            <div class="h-full z-50 flex flex-col justify-start content-center items-center md:flex-row md:justify-between md:content-start md:items-start mb-12">
                <div class="flex flex-col justify-center content-start items-start mb-4 md:w-1/2 md:mb-0 md:mr-8">
                    <h2 class="text-amber-400 text-4xl mb-4">Header ?</h2>
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
                    <Tabs />
                </div>
            </div>

            <a @click="scrollMeTo('our_benefits')" class="btn btn-secondary transition-all z-50">
                Show more
            </a>
        </div>
    </section>

    <!-- Dynamyc sections -->
    <section ref="our_benefits" id="our_benefits">
        <div class="container m-auto px-6 py-12 md:py-28">
            <OurBenefits />
        </div>
    </section>
    
    <!-- Projects -->
    <section data-aos="fade-up">
        <div>
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 lg:w-1/3 project-link">
                    <a href="">
                        <img src="/images/odnoetazh.jpg" alt="">

                        <div class="text-xl">
                            One flor
                        </div>
                    </a>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 project-link">
                    <a href="">
                        <img src="/images/dvuhetazh.jpg" alt="">

                        <div class="text-xl">
                            2 flors
                        </div>
                    </a>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 project-link">
                    <a href="">
                        <img src="/images/dacha.jpg" alt="">

                        <div class="text-xl">
                            Dacha
                        </div>
                    </a>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 project-link">
                    <a href="">
                        <img src="/images/haitech.jpg" alt="">

                        <div class="text-xl">
                            Haitech
                        </div>
                    </a>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 project-link">
                    <a href="">
                        <img src="/images/commerc.jpg" alt="">

                        <div class="text-xl">
                            Commercial
                        </div>
                    </a>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 project-link">
                    <a href="">
                        <img src="/images/sauna.jpg" alt="">

                        <div class="text-xl">
                            Sauna
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Tabs from "../Shared/Tabs.vue";
import OurBenefits from "../Shared/OurBenefits.vue";

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Autoplay } from "swiper";
// Import Swiper styles
import 'swiper/css';
import "swiper/css/navigation";
import "swiper/css/pagination";


export default {
    components: {
        Tabs,
        OurBenefits,
        Swiper,
        SwiperSlide,
    },

    setup() {
        return {
            modules: [Navigation, Pagination, Autoplay],
        };
    },

    methods: {
        scrollMeTo(refName) {
            const el = document.getElementById(refName);

            var top = el.offsetTop;
            top -= 72;

            window.scrollTo({ top: top, behavior: 'smooth' })
        },

    },
}
</script>

<style lang="scss">
.project-link {
    position: relative;
    overflow: hidden;

    >a {
        img {
            transition: transform 0.3s ease;
            transform: translateX(-30px);
            width: calc(100% + 30px);
            max-width: none;
        }
        
        div {
            background-color:rgb(251,191,35);
            color: white;
            padding: 13px 67px 12px 40px;
            clip-path: polygon(0 0, calc(100% - 47px) 0, 100% 100%, 0% 100%);
            position: absolute;
            bottom: 0;
            left: 0;
        }
    }

    &:hover {
        >a {
            img {
                transform: translateX(0px);
            }
        }
    }
}


// slider starts
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

:root {
    --swiper-theme-color: #fff;
}

.swiper-button-next,
.swiper-button-prev {
    right:10px;
    padding: 10px;
    padding-top: 131px;

    @media only screen and (min-width: 768px) {
        padding: 30px;
        padding-top: 80px;
    }

    @media only screen and (min-width: 768px) {
        padding-top: 30px;
    }
}
// slider ends

// section our benifits starts
#our_goal {
    position: relative;
    overflow: hidden;
    padding-bottom: 230px;

    &::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url(/images/listia.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: top center;
        transform: rotate(180deg);
        opacity: .3;

    }
}
// section our benifits ends


// section our benifits starts
#our_benefits {
    position: relative;
    overflow: hidden;

    &::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url(/images/listia.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: top center;
        opacity: .3;

    }
}
// section our benifits ends
</style>
