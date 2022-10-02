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
            <div class="flex flex-col w-full lg:flex-row">
                <!-- Tabs labels -->
                <div class="w-full flex flex-col justify-start items-start content-start lg:w-1/3">
                    <div class="w-full mb-8 lg:mr-4 transition-all hover:text-amber-400 text-2xl  text-center flex-col items-start content-start justify-center" >
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
                <div class="relative w-full lg:w-2/3">
                    <transition  name="fade" mode="out-in">
                            <div key="1" v-if="activeTab == 'materials-japanise-burnt-wood'">
                                <h2 class="text-amber-400 text-4xl mb-4">Japanise burnt wood</h2>
                                <p class="text-slate-700 text-xl mb-4">
                                    Our company offers a wide range of possibilities for external and internal finishing works
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
                                <h2 class="text-amber-400 text-4xl mb-4">Fences</h2>
                                <p class="text-slate-700 text-xl mb-4">
                                    Our company offers a wide range of possibilities for external and internal finishing works.
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Gabion fences with great use in modern architecture, providing a high level of
                                    privacy. It can be used as a design exterior fence for family houses and
                                    companies, as well as for internal partitioning of gardens/buildings to create
                                    relaxation zones, etc. Gabions guarantee high strength and long life. A very high
                                    quality double anti-corrosion treatment is ensured by galvanizing and baked
                                    polyester paint. Gabions are available in galvanised or anthracite versions.
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
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
                                <h2 class="text-amber-400 text-4xl mb-4">Interior materials</h2>
                                <p class="text-slate-700 text-xl mb-4">
                                    Our company offers a complete building system including all the necessary
                                    materials to complete the rough construction.
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    We build professionally and use quality certified materials.
                                </p>

                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    Walls and roof
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of load-bearing and perimeter walls made of prefabricated SIP panels (170x2800x1250 mm)
                                    with EPS polystyrene core (or Mineral wool), including dividing non-load-bearing partitions made of prisms
                                    (140 mm) filled with thermoacoustic insulation
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of the roof truss structure + sheet metal roofing (roof trusses, battens + counter battens,
                                    diffusion foil, etc.)
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Flat roof
                                </p>

                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    Exterior
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of entrance doors and windows mounted on strips + external and internal windowsills
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of external wall cladding - complete facade insulation system (polystyrene 100mm), fiberglass
                                    mesh, squeegee, silicone facade plaster of any choice.
                                </p>

                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    Interior: Water and Electricity
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of complete electricity, water and sewage systems inside the building
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of faucets in the toilet (if the toilet room is separate) and in the bathroom 
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of LED light fittings
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of sockets and switches 
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of a domestic hot water (DHW) tank (if the project does not have a tech. room only electric hot
                                    water heater)
                                </p>

                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    Interior: walls and tiles
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of ceiling insulation, internal suspended ceilings and internal wall cladding - complete
                                    plasterboard system RIGIPS (white, green in wet rooms)
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Construction of the floor bearing layer of concrete (cement-sand) screed, preparation for laying floor
                                    coverings
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of the flooring layer in the rooms, usually made of 8 mm thick laminate
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of tiles in the utility room, installation of either tiles or laminate in the corridor
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    White interior painting (2x PRIMALEX hygienic paint)
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of tiles and wall cladding in the toilet (if the toilet room is separate) and in the bathroom
                                </p>

                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    Interior: heating
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of solar DHW system with HP collectors
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of heaters, electric wall convectors, 1 pc in each room ( in STANDARD), possibility of designing
                                    alternative heating (heat pump, underfloor heating, Canadian wood stove, inserts with hot air distribution
                                    to the whole house
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of recuperation ventilation system 
                                </p>

                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    Interior: additional equipment
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of smooth interior doors + trim 
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Installation of sanitary equipment in the toilet and bathroom
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
                                <h2 class="text-amber-400 text-4xl mb-4">Glass Verandas & Retractable Pergolas, glass rooms - outdoor living products /
                                    * Engineered for Life, Outdoor and windows system.
                                </h2>
                                <p class="text-slate-700 text-xl  mb-4">
                                    We guarantee the highest build quality, maximum reliability and quick post
                                    installment services.
                                </p>


                                <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                    GUILLOTINE GLASS SYSTEM
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    A guillotine window is a window that moves vertically. The basic guillotine windows are
                                    made of two vertically sliding frames and remotely powered by electric motor. 
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Meanwhile guillotine windows are with bottom or top fixed frames, opening from
                                    bottom to top or from top to bottom with several sliding frames. The vertical movement
                                    of the sashes allows you to save interior space and provide ventilation. There is a choice
                                    of using a single tempered glass or energy saving double-glazed window for it. 
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
                                    SLIDING GLASS ROOF – The Smart Roof
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    All sliding glass roofs are tailor made for your house, apartment or commercial
                                    premises. The automatic sliding roof is designed for rooms that are converted from
                                    open summer to heated winter roofs. The main element is energy-efficient glazing.
                                    This system gives your room plenty of natural light but retains the heat inside.
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    Heated glazing helps to get rid of snow.
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
                                    PASIFIC – Motorized
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    Motorized Outdoor waterproof Aluminum pergola Retractable roof Awnings 
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    The aluminum frame construction is very strong and can withstand strong winds at
                                    the seaside or on the roof of a high-rise building. Using different design options, it
                                    is possible to make a pavilion separate from the building as well as adjacent to it.
                                    The drainage system is hidden inside the structure. The electric actuator allows
                                    the system to be easily operated by remote control. Rain and wind sensors can
                                    also be connected and integrated into a smart home system.
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
                                    AEROLUX - Louvered roof system
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    Louvered roof system – the bioclimatic pergola is designed to protect the
                                    seating area from precipitation and provide shade in sunny weather.
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    The roof surface is assembled with aluminum pivoting slats. This allows you to
                                    regulate the sun's flow. The configuration of the lamellae allows the inner
                                    cavity to be filled with polyurethane foam. This gets rid of unpleasant sound
                                    when it rains.
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    The main feature of the system is the ability to control the solar flow by
                                    rotating and sliding the lamellas. In the parked position, the slats occupy 23%
                                    of the roof space.
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
                                    Automatic WIND STOP railing system
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    Louvered roof system – the bioclimatic pergola is designed to protect the
                                    seating area from precipitation and provide shade in sunny weather.
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    The roof surface is assembled with aluminum pivoting slats. This allows you
                                    to regulate the sun's flow. The configuration of the lamellae allows the inner
                                    cavity to be filled with polyurethane foam. This gets rid of unpleasant sound
                                    when it rains.
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    The main feature of the system is the ability to control the solar flow by
                                    rotating and sliding the lamellas. In the parked position, the slats occupy
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
                                    SLIDING window system
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
                                    SHADOW LINE - The automatic sun visor curtains system
                                </h3>
                                <p class="text-slate-700 text-xl mb-4">
                                    The automatic sunshade system effectively protects against direct sunlight.
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    The fabric canvas is resistant to UV rays and atmospheric effects. The perforated
                                    structure does not hinder air movement.
                                </p>
                                <p class="text-slate-700 text-xl mb-4">
                                    The electric actuator allows you to control the ZIP system with the remote control and
                                    connect the sun shades to the Smart House system.
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
