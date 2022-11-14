<template>
    <Head>
        <title>Services</title>
    </Head>

    <section>
        <div class="w-full h-96 bg-[url('/images/bg_tecgnology.jpg')] black-shadow bg-bottom bg-no-repeat bg-cover bg-fixed">
            <div class="container m-auto h-full px-6 py-12 md:py-28 flex justify-center items-center content-center">
                <h1 class="text-white text-5xl mt-16 z-50 white-text-shadow" data-aos="fade-right">{{ __('service_page_header') }}</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container m-auto px-6 py-12 md:py-28 h-full flex flex-col justify-start content-center items-center">
            <div class="flex flex-col w-full lg:flex-row">
                <!-- Tabs labels -->
                <div class="w-full flex flex-col justify-start items-start content-start lg:w-1/3">
                    <div class="w-full mb-8 lg:mr-4 transition-all hover:text-amber-400 text-2xl  text-center flex-col items-start content-start justify-center" >
                        <div class="flex items-center uppercase"
                            v-bind:class="{'text-amber-400': activeTab.startsWith('materials-'), 'text-slate-700': !activeTab.startsWith('materials-')}"  
                        >
                            <i class="fa-solid fa-igloo text-4xl mr-2"></i>
                            {{ __('service_page_materials') }}
                        </div>

                        <div class="ml-12 flex hover:text-amber-400 cursor-pointer"
                            v-bind:class="{'text-amber-400': activeTab === 'materials-japanise-burnt-wood', 'text-slate-700': activeTab != 'materials-japanise-burnt-wood'}" 
                            v-on:click="switchTab('materials-japanise-burnt-wood')"
                        >
                        {{ __('service_page_mat_1') }}
                        </div>
                    </div>

                    <div class="w-full mb-4 lg:mr-4 transition-all hover:text-amber-400 text-2xl  text-center flex-col items-start content-start justify-center" >
                        <div class="flex items-center cursor-pointer uppercase"
                            v-bind:class="{'text-amber-400': activeTab.startsWith('service-'), 'text-slate-700': !activeTab.startsWith('service-')}" 
                        >
                            <i class="fa-regular fa-handshake text-4xl mr-2"></i>
                            {{ __('service_page_services') }}
                        </div>

                        <div class="ml-12 mb-2 flex hover:text-amber-400 cursor-pointer"
                            v-bind:class="{'text-amber-400': activeTab === 'service-fences', 'text-slate-700': activeTab != 'service-fences'}" 
                            v-on:click="switchTab('service-fences')"
                        >
                        {{ __('service_page_serv_1') }}
                        </div>
                        <div class="ml-12 mb-2 flex hover:text-amber-400 cursor-pointer"
                            v-bind:class="{'text-amber-400': activeTab === 'service-interior-materials', 'text-slate-700': activeTab != 'service-interior-materials'}" 
                            v-on:click="switchTab('service-interior-materials')"
                        >
                        {{ __('service_page_serv_2') }}
                        </div>
                        <div class="ml-12 flex hover:text-amber-400 cursor-pointer"
                            v-bind:class="{'text-amber-400': activeTab === 'service-outdoor', 'text-slate-700': activeTab != 'service-outdoor'}" 
                            v-on:click="switchTab('service-outdoor')"
                        >
                        {{ __('service_page_serv_3') }}
                        </div>
                    </div>
                </div>

                <!-- Tabs content -->
                <div class="relative w-full lg:w-2/3">
                    <transition  name="fade" mode="out-in">
                            <div key="1" v-if="activeTab == 'materials-japanise-burnt-wood'">
                                <h2 class="text-amber-400 text-4xl mb-4">{{ __('service_page_jap') }}</h2>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_jap_text') }}
                                </p>
                                <div>
                                    <div class="images flex flex-col md:flex-row gap-2 md:flex-wrap"  v-viewer>
                                        <img v-for="src in images_set_1" :key="src" :src="src">
                                    </div>

                                    <viewer :images="images_set_1"
                                        :options="viewer_options"
                                    >
                                    </viewer>
                                </div>
                            </div>

                            <div key="2" v-if="activeTab == 'service-fences'">
                                <h2 class="text-amber-400 text-4xl mb-4">{{ __('service_page_fences') }}</h2>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_fences_h') }}
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_fences_text_1') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_fences_text_2') }}
                                    
                                </p>
                                <div>
                                    <div class="images flex flex-col md:flex-row gap-2 md:flex-wrap"  v-viewer>
                                        <img v-for="src in images_set_2" :key="src" :src="src">
                                    </div>

                                    <viewer :images="images_set_2"
                                        :options="viewer_options"
                                    >
                                    </viewer>
                                </div>
                            </div>

                            <div key="3" v-if="activeTab == 'service-interior-materials'">
                                <h2 class="text-amber-400 text-4xl mb-4">{{ __('service_page_inter') }}</h2>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_1') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_2') }}
                                    
                                </p>

                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    {{ __('service_page_inter_text_3') }}
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_4') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_5') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_6') }}
                                </p>

                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    {{ __('service_page_inter_text_7') }}
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_8') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_9') }}
                                    
                                </p>

                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    {{ __('service_page_inter_text_10') }}
                                    
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_11') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_12') }}
                                     
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_13') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_14') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_15') }}
                                    
                                </p>

                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    {{ __('service_page_inter_text_16') }}
                                    
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_17') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_18') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_19') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_20') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_21') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_22') }}
                                    
                                </p>

                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    {{ __('service_page_inter_text_30') }}
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_23') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_24') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_25') }}
                                    
                                </p>

                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    {{ __('service_page_inter_text_26') }}
                                    
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_27') }}
                                     
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_inter_text_28') }}
                                    
                                </p>

                                <div>
                                    <div class="images flex flex-col md:flex-row gap-2 md:flex-wrap"  v-viewer>
                                        <img v-for="src in images_set_3" :key="src" :src="src">
                                    </div>

                                    <viewer :images="images_set_3"
                                        :options="viewer_options"
                                    >
                                    </viewer>
                                </div>
                            </div>

                            <div key="4" v-if="activeTab == 'service-outdoor'">
                                <h2 class="text-amber-400 text-4xl mb-4">{{ __('service_page_out') }}
                                </h2>
                                <p class="text-slate-700 text-xl  mb-4">
                                    {{ __('service_page_out_h') }}
                                    
                                </p>


                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    {{ __('service_page_out_text_1') }}
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_2') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_3') }}
                                    
                                </p>

                                <div class="mb-4">
                                    <div class="images flex flex-col md:flex-row gap-2 md:flex-wrap"  v-viewer>
                                        <img v-for="src in images_set_4" :key="src" :src="src">
                                    </div>

                                    <viewer :images="images_set_4"
                                        :options="viewer_options"
                                    >
                                    </viewer>
                                </div>


                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    {{ __('service_page_out_text_4') }}
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_5') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_6') }}
                                    
                                </p>
                                <div class="mb-4">
                                    <div class="images flex flex-col md:flex-row gap-2 md:flex-wrap"  v-viewer>
                                        <img v-for="src in images_set_5" :key="src" :src="src">
                                    </div>

                                    <viewer :images="images_set_5"
                                        :options="viewer_options"
                                    >
                                    </viewer>
                                </div>


                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    {{ __('service_page_out_text_7') }}
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_8') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_9') }}
                                    
                                </p>
                                <div class="mb-4">
                                    <div class="images flex flex-col md:flex-row gap-2 md:flex-wrap"  v-viewer>
                                        <img v-for="src in images_set_6" :key="src" :src="src">
                                    </div>

                                    <viewer :images="images_set_6"
                                        :options="viewer_options"
                                    >
                                    </viewer>
                                </div>

                                
                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    {{ __('service_page_out_text_10') }}
                                    
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_11') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_12') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_13') }}
                                    
                                </p>
                                <div class="mb-4">
                                    <div class="images flex flex-col md:flex-row gap-2 md:flex-wrap"  v-viewer>
                                        <img v-for="src in images_set_7" :key="src" :src="src">
                                    </div>

                                    <viewer :images="images_set_7"
                                        :options="viewer_options"
                                    >
                                    </viewer>
                                </div>


                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    {{ __('service_page_out_text_14') }}
                                    
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_15') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_16') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_17') }}
                                    
                                </p>
                                <div class="mb-4">
                                    <div class="images flex flex-col md:flex-row gap-2 md:flex-wrap"  v-viewer>
                                        <img v-for="src in images_set_8" :key="src" :src="src">
                                    </div>

                                    <viewer :images="images_set_8"
                                        :options="viewer_options"
                                    >
                                    </viewer>
                                </div>


                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    {{ __('service_page_out_text_18') }}
                                </h3>
                                <div class="mb-4">
                                    <div class="images flex flex-col md:flex-row gap-2 md:flex-wrap"  v-viewer>
                                        <img v-for="src in images_set_9" :key="src" :src="src">
                                    </div>

                                    <viewer :images="images_set_9"
                                        :options="viewer_options"
                                    >
                                    </viewer>
                                </div>


                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    {{ __('service_page_out_text_19') }}
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_20') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_21') }}
                                    
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    {{ __('service_page_out_text_22') }}
                                    
                                </p>
                                <div>
                                    <div class="images flex flex-col md:flex-row gap-2 md:flex-wrap"  v-viewer>
                                        <img v-for="src in images_set_10" :key="src" :src="src">
                                    </div>

                                    <viewer :images="images_set_10"
                                        :options="viewer_options"
                                    >
                                    </viewer>
                                </div>
                            </div>
                    </transition>
                </div>
            </div>
        </div>
    </section>

</template>

<script>
export default {
    data() {
        return {
            activeTab: 'materials-japanise-burnt-wood',
            images_set_1: [
              "/images/Pages/services/wood-1.jpg",
              "/images/Pages/services/wood-2.jpeg",
              "/images/Pages/services/wood-3.jpg",
              "/images/Pages/services/wood-4.png",
            ],
            images_set_2: [
              "/images/Pages/services/fence-1.jpeg",
              "/images/Pages/services/fence-2.jpeg",
              "/images/Pages/services/fence-3.jpeg",
              "/images/Pages/services/fence-4.jpeg",
              "/images/Pages/services/fence-5.jpg",
              "/images/Pages/services/fence-6.jpg",
              "/images/Pages/services/fence-7.jpg",
              "/images/Pages/services/fence-8.jpg",
              "/images/Pages/services/fence-10.jpg",
              "/images/Pages/services/fence-11.jpg",
              "/images/Pages/services/fence-12.jpg",
            ],
            images_set_3: [
              "/images/Pages/services/interior-1.jpg",
              "/images/Pages/services/interior-2.jpg",
              "/images/Pages/services/interior-3.jpg",
              "/images/Pages/services/interior-4.jpg",
              "/images/Pages/services/interior-5.jpg",
              "/images/Pages/services/interior-6.jpg",
              "/images/Pages/services/interior-7.jpg",
              "/images/Pages/services/interior-8.jpg",
              "/images/Pages/services/interior-9.jpg",
              "/images/Pages/services/interior-10.jpg",
              "/images/Pages/services/interior-11.jpg",
              "/images/Pages/services/interior-12.jpg",
              "/images/Pages/services/interior-13.jpg",
              "/images/Pages/services/interior-14.jpg",
            ],

            images_set_4: [
              "/images/Pages/services/guillitine__1.jpg",
              "/images/Pages/services/guillitine__2.jpg",
              "/images/Pages/services/guillitine__3.jpg",
              "/images/Pages/services/guillitine__4.jpg",
              "/images/Pages/services/guillitine__5.jpg",
              "/images/Pages/services/guillitine__6.png",
              "/images/Pages/services/guillitine__7.jpg",
            ],
            images_set_5: [
              "/images/Pages/services/glass_roof_1.jpg",
              "/images/Pages/services/glass_roof_2.jpeg",
              "/images/Pages/services/glass_roof_3.jpg",
              "/images/Pages/services/glass_roof_4.jpg",
              "/images/Pages/services/glass_roof_5.jpg",
            ],
            images_set_6: [
              "/images/Pages/services/pasific_1.jpg",
              "/images/Pages/services/pasific_2.jpg",
              "/images/Pages/services/pasific_3.jpeg",
              "/images/Pages/services/pasific_4.jpg",
            ],
            images_set_7: [
              "/images/Pages/services/aerolux_1.jpg",
              "/images/Pages/services/aerolux_2.jpg",
              "/images/Pages/services/aerolux_3.jpg",
              "/images/Pages/services/aerolux_4.jpg",
              "/images/Pages/services/aerolux_5.jpg",
              "/images/Pages/services/aero.gif",
            ],
            images_set_8: [
              "/images/Pages/services/wind_stop_1.jpeg",
              "/images/Pages/services/wind_stop_2.jpeg",
              "/images/Pages/services/wind_stop_3.jpg",
              "/images/Pages/services/wind_stop_4.jpg",
              "/images/Pages/services/wind_stop_5.jpeg",
            ],
            images_set_9: [
              "/images/Pages/services/sliding_1.jpg",
              "/images/Pages/services/sliding_2.jpg",
              "/images/Pages/services/sliding_3.jpg",
              "/images/Pages/services/sliding_4.jpg",
              "/images/Pages/services/sliding_5.jpg",
              "/images/Pages/services/sliding_6.jpg",
            ],
            images_set_10: [
              "/images/Pages/services/shadow_1.jpg",
              "/images/Pages/services/shadow_2.jpg",
            ],

            viewer_options: { 
                "inline": true, 
                "button": true, 
                "navbar": true, 
                "title": true, 
                "toolbar": true, 
                "tooltip": false, 
                "movable": true, 
                "zoomable": true, 
                "rotatable": false, 
                "scalable": false, 
                "transition": false, 
                "fullscreen": true, 
                "keyboard": true, 
                "url": "data-source" 
            }
        };
    },

    methods: {
        switchTab(tabName) {
            this.activeTab = tabName;
        },
    }
};
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

    .fade-enter-active,
    .fade-leave-active {
        transition: opacity 0.3s ease;
    }
    .fade-enter-from,
    .fade-leave-to {
        opacity: 0;
    }

    .images {
        img {
            width: 100%;
            height: auto;
            cursor: pointer;

            @media only screen and (min-width: 768px) {
                height: 200px;
                width: auto;
            }
        }
    }
</style>
