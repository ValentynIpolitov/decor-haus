<template>
    <Head>
        <title>Services</title>
    </Head>

    <section>
        <div class="w-full h-96 bg-[url('/images/bg_tecgnology.jpg')] black-shadow bg-bottom bg-no-repeat bg-cover bg-fixed">
            <div class="container m-auto h-full px-6 py-12 md:py-28 flex justify-center items-center content-center">
                <h1 class="text-white text-5xl mt-16 z-50 white-text-shadow" data-aos="fade-right">Services</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container m-auto px-6 py-12 md:py-28 h-full flex flex-col justify-start content-center items-center">
            <div class="flex flex-col w-full md:flex-row">
                <!-- Tabs labels -->
                <div class="w-full md:w-auto flex flex-col justify-start items-start content-start">
                    <div class="w-full md:w-auto mb-4 lg:mr-4 transition-all hover:text-amber-400 text-2xl  text-center flex-col items-start content-start justify-center" >
                        <div class="flex items-center uppercase"
                            v-bind:class="{'text-amber-400': activeTab.startsWith('materials-'), 'text-slate-700': !activeTab.startsWith('materials-')}"  
                        >
                            <i class="fa-solid fa-igloo text-4xl mr-2"></i>
                            Materials
                        </div>

                        <div class="ml-12 flex hover:text-amber-400 cursor-pointer"
                            v-bind:class="{'text-amber-400': activeTab === 'materials-japanise-burnt-wood', 'text-slate-700': activeTab != 'materials-japanise-burnt-wood'}" 
                            v-on:click="switchTab('materials-japanise-burnt-wood')"
                        >
                            - Japanise burnt wood
                        </div>
                    </div>

                    <div class="w-full mb-4 lg:mr-4 transition-all hover:text-amber-400 text-2xl  text-center flex-col items-start content-start justify-center" >
                        <div class="flex items-center cursor-pointer uppercase"
                            v-bind:class="{'text-amber-400': activeTab.startsWith('service-'), 'text-slate-700': !activeTab.startsWith('service-')}" 
                        >
                            <i class="fa-regular fa-handshake text-4xl mr-2"></i>
                            Services
                        </div>

                        <div class="ml-12 mb-2 flex hover:text-amber-400 cursor-pointer"
                            v-bind:class="{'text-amber-400': activeTab === 'service-fences', 'text-slate-700': activeTab != 'service-fences'}" 
                            v-on:click="switchTab('service-fences')"
                        >
                            - Fences
                        </div>
                        <div class="ml-12 mb-2 flex hover:text-amber-400 cursor-pointer"
                            v-bind:class="{'text-amber-400': activeTab === 'service-interior-materials', 'text-slate-700': activeTab != 'service-interior-materials'}" 
                            v-on:click="switchTab('service-interior-materials')"
                        >
                            - Interior materials
                        </div>
                        <div class="ml-12 flex hover:text-amber-400 cursor-pointer"
                            v-bind:class="{'text-amber-400': activeTab === 'service-outdoor', 'text-slate-700': activeTab != 'service-outdoor'}" 
                            v-on:click="switchTab('service-outdoor')"
                        >
                            - Outdoor living products
                        </div>
                    </div>
                </div>

                <!-- Tabs content -->
                <div class="relative">
                    <transition  name="fade" mode="out-in">
                            <div key="1" v-if="activeTab == 'materials-japanise-burnt-wood'">
                                <h2 class="text-amber-400 text-4xl mb-4">Japanise burnt wood</h2>
                                <p class="text-slate-700 text-xl">
                                    Our company offers a wide range of possibilities for external and internal finishing works
                                </p>
                                <div>
                                    <div class="images" v-viewer>
                                        <img v-for="src in images" :key="src" :src="src">
                                    </div>

                                    <viewer :images="images"
                                        :options="viewer_options"
                                    >
                                    </viewer>
                                </div>
                            </div>

                            <div key="2" v-if="activeTab == 'service-fences'">
                                <h2 class="text-amber-400 text-4xl mb-4">Fences</h2>
                                <p class="text-slate-700 text-xl">
                                    Our company offers a wide range of possibilities for external and internal finishing works
                                </p>
                                <p class="text-slate-700 text-xl">
                                    Gabion fences with great use in modern architecture, providing a high level of
                                    privacy. It can be used as a design exterior fence for family houses and
                                    companies, as well as for internal partitioning of gardens/buildings to create
                                    relaxation zones, etc. Gabions guarantee high strength and long life. A very high
                                    quality double anti-corrosion treatment is ensured by galvanizing and baked
                                    polyester paint. Gabions are available in galvanised or anthracite versions.
                                </p>
                                <p class="text-slate-700 text-xl">
                                    There are no fences like fences. Choose a quality wooden garden fence from us.
                                    We offer a wide selection of wooden fence parts that will perfectly enclose your
                                    home, garden or plot. The variability of these parts allows you a variety of
                                    combinations. Assemble your garden fence according to your wishes and your
                                    garden will be unique. Wooden fence parts can be used not only as wooden
                                    fencing, but also as a decorative fence with which your garden architecture will
                                    stand out. Wood is a natural material. Wood will not drive the warmth of home
                                    out of your garden. That is why it is the ideal element that must not be missing
                                    in the garden.
                                </p>
                                <div>
                                    <div class="images" v-viewer>
                                        <img v-for="src in images" :key="src" :src="src">
                                    </div>

                                    <viewer :images="images"
                                        :options="viewer_options"
                                    >
                                    </viewer>
                                </div>
                            </div>

                            <div key="3" v-if="activeTab == 'service-interior-materials'">
                                <h2 class="text-amber-400 text-4xl mb-4">Interior materials</h2>
                                <p class="text-slate-700 text-xl">
                                    Our company offers a complete building system including all the necessary
                                    materials to complete the rough construction.
                                </p>
                                <p class="text-slate-700 text-xl">
                                    We build professionally and use quality certified materials.
                                </p>

                                <div>
                                    <div class="images" v-viewer>
                                        <img v-for="src in images" :key="src" :src="src">
                                    </div>

                                    <viewer :images="images"
                                        :options="viewer_options"
                                    >
                                    </viewer>
                                </div>
                            </div>

                            <div key="4" v-if="activeTab == 'service-outdoor'">
                                <h2 class="text-amber-400 text-4xl mb-4">Glass Verandas & Retractable Pergolas, glass rooms - outdoor living products /
                                    * Engineered for Life, Outdoor and windows system.
                                </h2>
                                <p class="text-slate-700 text-xl">
                                    We guarantee the highest build quality, maximum reliability and quick post
                                    installment services.
                                </p>
                                <div>
                                    <div class="images" v-viewer>
                                        <img v-for="src in images" :key="src" :src="src">
                                    </div>

                                    <viewer :images="images"
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
            images: [
              "https://picsum.photos/200/200",
              "https://picsum.photos/300/200",
              "https://picsum.photos/250/200"
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
</style>