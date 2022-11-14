<template>

    <Head>
        <title>Explore SIP</title>
    </Head>

    <section>
        <div
            class="w-full h-96 bg-[url('/images/bg_tecgnology.jpg')] black-shadow bg-bottom bg-no-repeat bg-cover bg-fixed">
            <div class="container h-full m-auto px-6 py-12 md:py-28 flex justify-center items-center content-center">
                <h1 class="text-white text-5xl mt-16 z-50 white-text-shadow" data-aos="fade-right">{{ __('explore_page_explore_sip') }}</h1>
            </div>
        </div>
    </section>

    <section>
        <div>
            <div class="container m-auto px-6 pt-12 md:pt-28">
                <div class="w-full flex flex-col justify-start items-center content-center lg:flex-row items-stretch">
                    <div class="sip-ref text-slate-700 w-full px-12 py-8 rounded-xl cursor-pointer mb-4 lg:mr-4 transition-all text-2xl uppercase text-center flex items-center content-center justify-center"
                        v-on:click="scrollMeTo('explore')">
                        <i class="fa-brands fa-wpexplorer text-4xl mr-4"></i>
                        {{ __('explore_page_explore_sip') }}
                    </div>

                    <div class="sip-ref text-slate-700 w-full px-12 py-8 rounded-xl cursor-pointer mb-4 lg:mr-4 transition-all text-2xl uppercase text-center flex items-center content-center justify-center"
                        v-on:click="scrollMeTo('process')">
                        <i class="fa-solid fa-person-digging text-4xl mr-4"></i>
                        {{ __('explore_page_link_2') }}
                    </div>

                    <div class="sip-ref text-slate-700 w-full px-12 py-8 rounded-xl cursor-pointer mb-4 lg:mr-4 transition-all text-2xl uppercase text-center flex items-center content-center justify-center"
                        v-on:click="scrollMeTo('benefits')">
                        <i class="fa-solid fa-medal text-4xl mr-4"></i>
                        {{ __('explore_page_main_benef') }} 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section ref="explore" id="explore">
        <div>
            <div class="container m-auto px-6 pt-12 md:pt-28">
                <div class="flex items-center content-center">
                    <i class="fa-brands fa-wpexplorer text-emerald-500 text-4xl mr-4"></i>
                    <h2 class="text-4xl text-emerald-500 ">{{ __('explore_page_explore_sip') }}</h2>
                </div>
                
                <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                    <div class="w-full h-full lg:w-1/2 flex justify-center">
                        <img class="mb-8 lg:mb-0 w-full lg:w-4/5" src="/images/sip-sandwich-1.jpg" alt="">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="mb-4 text-slate-700 text-xl">
                            {{ __('explore_page_sip_1') }}
                            
                        </p>
                        <p class="mb-4 text-slate-700 text-xl">{{ __('explore_page_sip_2') }}</p>
                        <p class="mb-4 text-slate-700 text-xl">{{ __('explore_page_sip_4') }}</p>
                    </div>
                </div>


                <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                    <div class="w-full h-full lg:w-1/2 flex justify-center">
                        <img class="mb-8 lg:mb-0 w-full lg:w-3/5" src="/images/sip-sandwich-2.jpg" alt="">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="mb-4 text-slate-700 text-xl">{{ __('explore_page_sip_5') }}</p>
                        <p class="mb-4 text-slate-700 text-xl">{{ __('explore_page_sip_6') }}</p>
                        <p class="mb-4 text-slate-700 text-xl">{{ __('explore_page_sip_7') }}</p>
                        <p class="mb-4 text-slate-700 text-xl">{{ __('explore_page_sip_8') }}</p>
                    </div>
                </div>

                <div class="flex flex-col pt-12">
                    <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">{{ __('explore_page_sip_9') }}</h3>
                    <ul class="ml-8 text-slate-700 text-xl list-disc mb-4">
                        <li>{{ __('explore_page_sip_10') }}</li>
                        <li>{{ __('explore_page_sip_11') }}</li>
                        <li>{{ __('explore_page_sip_12') }}</li>
                        <li>{{ __('explore_page_sip_13') }}</li>
                        <li>{{ __('explore_page_sip_14') }}</li>
                        <li>{{ __('explore_page_sip_15') }}</li>
                        <li>{{ __('explore_page_sip_16') }}</li>
                    </ul>
                    <p class="mb-4 text-slate-700 text-xl">
                        {{ __('explore_page_sip_17') }}
                        
                    </p>
                </div>

                <div class="flex flex-col pt-12">
                    <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">{{ __('explore_page_sip_18') }}</h3>
                    <p class="mb-4 text-slate-700 text-xl">
                        {{ __('explore_page_sip_19') }}
                        
                    </p>

                    <h4 class="text-slate-700 text-xl mb-4 text-emerald-500">{{ __('explore_page_sip_20') }}</h4>
                    <ul class="ml-8 text-slate-700 text-xl list-disc mb-4">
                        <li>{{ __('explore_page_sip_21') }}</li>
                        <li>{{ __('explore_page_sip_22') }}</li>
                        <li>{{ __('explore_page_sip_23') }}</li>
                        <li>{{ __('explore_page_sip_24') }}</li>
                    </ul>
                </div>

                <div class="flex flex-col pt-12">
                    <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                        {{ __('explore_page_sip_25') }}
                    </h3>

                     <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-8 lg:mb-0 w-full lg:w-4/5" src="/images/sip-advantages-1.jpg" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_sip_26') }}
                                
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_sip_27') }}
                                
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-8 lg:mb-0 w-full lg:w-4/5" src="/images/sip-advantages-2.jpg" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_sip_28') }}
                                                            
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_sip_29') }}
                                
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_sip_30') }}
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section ref="process" id="process">
        <div>
            <div class="container m-auto px-6 pt-12 md:pt-28">
                <div class="flex items-center content-center">
                    <i class="fa-solid fa-person-digging text-emerald-500 text-4xl mr-4"></i>
                    <h2 class="text-4xl text-emerald-500 ">{{ __('explore_page_prod_1') }}</h2>
                </div>

                <p class="mb-4 text-slate-700 text-xl pt-12">
                    {{ __('explore_page_prod_2') }}
                    
                </p>

                <div class="flex flex-col">
                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-8 lg:mb-0 w-full lg:w-4/5" src="/images/sip-design.jpg" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_prod_3') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_prod_4') }}
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_prod_5') }}
                                                            
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-8 lg:mb-0 w-full lg:w-4/5" src="/images/sip-production.png" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_prod_6') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_prod_7') }}
                                                           
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_prod_8') }}
                                
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-8 lg:mb-0 w-full lg:w-4/5" src="/images/sip-asembly.jpg" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_prod_10') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_prod_11') }}
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_prod_12') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-8 lg:mb-0 w-full lg:w-4/5" src="/images/sip-construction.jpg" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_prod_13') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_prod_14') }}
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_prod_15') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-8 lg:mb-0 w-full lg:w-4/5" src="/images/sip-floor.jpg" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_prod_16') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_prod_17') }}                            
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-8 lg:mb-0 w-full lg:w-4/5" src="/images/sip-roof.jpg" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_prod_18') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_prod_19') }}
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_prod_20') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col pt-12">
                    <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                        {{ __('explore_page_prod_21') }}
                    </h3>
                    <p class="mb-8 text-slate-700 text-xl">
                        {{ __('explore_page_prod_22') }}
                    </p>
                    <div class="w-full flex flex-wrap">
                        <div class="w-full md:w-1/2 pt-12">
                            <img class="mb-4 lg:mb-0 m-auto w-full lg:w-4/5" src="/images/sip-1.jpg" alt="">
                        </div>
                        <div class="w-full md:w-1/2 pt-12">
                            <img class="mb-4 lg:mb-0 m-auto w-full lg:w-4/5" src="/images/sip-2.jpg" alt="">
                        </div>
                        <div class="w-full md:w-1/2 pt-12">
                            <img class="mb-4 lg:mb-0 m-auto w-full lg:w-4/5" src="/images/sip-3.jpg" alt="">
                        </div>
                        <div class="w-full md:w-1/2 pt-12">
                            <img class="mb-4 lg:mb-0 m-auto w-full lg:w-4/5" src="/images/sip-4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section ref="benefits" id="benefits">
        <div>
            <div class="container m-auto px-6 py-12 md:py-28">
                <div class="flex items-center content-center">
                    <i class="fa-solid fa-medal text-emerald-500 text-4xl mr-4"></i>
                    <h2 class="text-4xl text-emerald-500 ">{{ __('explore_page_main_benef') }}Main benefits</h2>
                </div>
                

                <div class="flex flex-col">
                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center mb-12 lg:mb-0">
                            <i class="text-9xl text-emerald-500 fa-solid fa-circle-dollar-to-slot"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_main_1') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_main_2') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center mb-12 lg:mb-0">
                            <i class="text-9xl text-emerald-500 fa-solid fa-gauge-high"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_main_3') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_main_4') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center mb-12 lg:mb-0">
                            <i class="text-9xl text-emerald-500 fa-solid fa-house-medical"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_main_5') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_main_6') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center mb-12 lg:mb-0">
                            <i class="text-9xl text-emerald-500 fa-solid fa-wind"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_main_7') }} 
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_main_8') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center mb-12 lg:mb-0">
                            <i class="text-9xl text-emerald-500 fa-solid fa-layer-group"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_main_9') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_main_10') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center mb-12 lg:mb-0">
                            <i class="text-9xl text-emerald-500 fa-solid fa-building-shield"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_main_11') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_main_12') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center mb-12 lg:mb-0">
                            <i class="text-9xl text-emerald-500 fa-solid fa-seedling"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_main_13') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_main_14') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center mb-12 lg:mb-0">
                            <i class="text-9xl text-emerald-500 fa-solid fa-diagram-project"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_main_15') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_main_16') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center mb-12 lg:mb-0">
                            <i class="text-9xl text-emerald-500 fa-solid fa-stamp"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_main_17') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_main_18') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center mb-12 lg:mb-0">
                            <i class="text-9xl text-emerald-500 fa-solid fa-medal"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                {{ __('explore_page_main_19') }}
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_main_20') }}
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_main_21') }}
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                {{ __('explore_page_main_22') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<script>
    export default {
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

.sip-ref {
    transition: all .150 ease-out;

    &:hover {
        color: rgb(16, 185, 129);
        transform: scale(1.2);
    }
}

</style>