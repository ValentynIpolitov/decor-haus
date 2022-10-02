<template>

    <Head>
        <title>Projects</title>
    </Head>

    <section>
        <div
            class="w-full h-96 bg-[url('/images/bg_tecgnology.jpg')] black-shadow bg-bottom bg-no-repeat bg-cover bg-fixed">
            <div class="container m-auto h-full px-6 py-12 md:py-28 flex justify-center items-center content-center">
                <h1 class="text-white text-5xl mt-16 z-50 white-text-shadow" data-aos="fade-right">Projects</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container m-auto flex flex-col align-center items-center pt-12 md:pt-28 cursor-pointer" v-on:click="scrollMeTo('price')">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
            <p class="text-slate-700 text-xl">Price</p>
        </div>
    </section>

    <section ref="prefabricated_houses" id="prefabricated_houses">
        <div class="container m-auto px-6 py-12 md:py-28">
            <div class="flex items-center content-center">
                <h2 class="text-4xl text-emerald-500">Prefabricated Houses</h2>
            </div>

            <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                <div class="w-full h-full lg:w-1/2 flex justify-center">
                    <img class="mb-4 lg:mb-0 w-full lg:w-10/12" src="/images/pref.jpg" alt="">
                </div>
                <div class="w-full lg:w-1/2">
                    <p class="mb-4 text-slate-700 text-xl">
                        The advantage of the SIP building system is its assembly into individual pre-engineered
                        building units as "prefabricated units".
                        The prefabricated structures of prefabricated buildings meet all the building criteria set
                        by the technical standards,
                        such as static parameters, thermal and acoustic insulation properties, and fire protection
                        parameters.
                    </p>
                    <p class="mb-4 text-slate-700 text-xl">For the builder, this means a tremendous speed of
                        construction and therefore savings in time and construction management costs.</p>
                    <p class="text-slate-700 text-xl">Prefabrication is produced under controlled factory
                        conditions. The high precision and accuracy significantly reduce errors that normally occur
                        in on-site implementations. In addition, thanks to prefabrication, there is no construction
                        waste on site.</p>
                </div>
            </div>

            <div class="flex flex-col pt-12 project-link-anchor" id="modular_hauses">
                <h2 class="text-4xl text-emerald-500 ">Modular Houses</h2>
            </div>

            <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                <div class="w-full h-full lg:w-1/2 flex justify-center">
                    <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/mod_3.jpg" alt="">
                </div>
                <div class="w-full lg:w-1/2">
                    <p class="mb-4 text-slate-700 text-xl">Modular houses are a variety of low-energy or passive
                        buildings manufactured in a production hall in single unit "modules".</p>
                    <p class="mb-4 text-slate-700 text-xl">After the manufacturing process is completed, the modules
                        are transported to a specified location where they are placed on a pre-prepared foundation.
                        Once the module is installed, it is connected to the public utilities and the customer can
                        start using it almost immediately. The modules can be connected to each other and expanded
                        according to the customer's needs. If necessary, the modules are designed so that they can
                        be moved to another location in the future.</p>
                    <p class="text-slate-700 text-xl">Modular buildings have a wide range of applications. They
                        can be used as recreational buildings, living quarters, family modular houses,
                        administrative and business premises, schools and nurseries, or as temporary buildings.</p>
                </div>
            </div>

            <div class="flex flex-col pt-12">
                <h4 class="text-slate-700 text-xl mb-4 text-emerald-400">Energy Efficiency</h4>
                <p class="mb-4 text-slate-700 text-xl">
                    Modular buildings are designed in low-energy or even passive standard. This means that the
                    buildings consume only a minimal amount of energy for heating and cooling, resulting in up to
                    50% lower operating costs than conventional masonry buildings.
                </p>
                <h4 class="text-slate-700 text-xl mb-4 text-emerald-500">Fixed Price</h4>
                <p class="mb-4 text-slate-700 text-xl">
                    A great advantage of modular houses is their fixed price. Their production takes place in the
                    production hall, so there is no budget increase as in the case of on-site construction.
                </p>
                <h4 class="text-slate-700 text-xl mb-4 text-emerald-600">The Speed of Construction</h4>
                <p class="mb-4 text-slate-700 text-xl">
                    The construction process takes place in the production hall, i.e., under dry construction
                    method. Therefore, the production process is not interrupted due to weather conditions. The
                    controlled production process ensures that all technological procedures are followed, thus
                    eliminating possible defects that happen on construction sites.
                </p>
                <h4 class="text-slate-700 text-xl mb-4 text-emerald-700">The Possibility of Shipment</h4>
                <p class="text-slate-700 text-xl">
                    Modular buildings are mainly used as permanent structures. However, should the need arise in the
                    future to transport the building, a modular house can easily handle this process. Modules are
                    manufactured and designed in such a way that they can be transported to another location.
                </p>
            </div>

            <div class="flex flex-col pt-12 project-link-anchor" id="residents_and_apartments">
                <h2 class="text-4xl text-emerald-500">Construction of Residential and Apartment Buildings</h2>

                <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                    <div class="w-full h-full lg:w-1/2 flex justify-center">
                        <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/const.jpg">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="mb-4 text-slate-700 text-xl">One of the most essential requirements for the design
                            and construction of buildings in the future is the reduction of CO2 emissions.</p>
                        <p class="mb-4 text-slate-700 text-xl">
                            The SIP construction system as an independent unit can be used in the construction of
                            apartment buildings up to four floors high.
                            When combining a SIP building system with traditional construction methods, the height
                            of the building is not limited. In this case, the building system is used as the shell
                            of the building.
                        </p>
                        <p class="text-slate-700 text-xl">The main advantage of using the SIP building system
                            in the construction of apartments and condominiums is the unsurpassed speed of
                            construction and thermal insulation properties.</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col pt-12 project-link-anchor" id="commercial_buildings">
                <h2 class="text-4xl text-emerald-500">Commercial Buildings</h2>

                <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                    <div class="w-full h-full lg:w-1/2 flex justify-center">
                        <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/com_1.jpg">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="text-slate-700 text-xl">
                            For all these buildings, the following aspects will be important for your business:
                            speed of building that does not unnecessarily slow down your business, and energy
                            efficiency.
                            Simply put, a business property with minimal operating costs.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col pt-12 project-link-anchor" id="school_and_kindergartens">
                <h2 class="text-4xl text-emerald-500">Schools and Kindergartens</h2>

                <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                    <div class="w-full h-full lg:w-1/2 flex justify-center">
                        <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/school.jpg">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="text-slate-700 text-xl">
                            The SIP building system is the perfect solution for the construction of schools and
                            nurseries, allowing a quick installation during holidays.
                            The excellent thermal insulation properties of the SIP panels ensure minimal building
                            and operating costs.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col pt-12 project-link-anchor" id="superstructures_and_extensions">
                <h2 class="text-4xl text-emerald-500">Superstructures and Extensions</h2>

                <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                    <div class="w-full h-full lg:w-1/2 flex justify-center">
                        <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/super_2.jpg">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="mb-4 text-slate-700 text-xl">
                            The building SIP system will be your ideal solution and is perfect for building an
                            extension or superstructure.
                            As it is a lightweight construction system (8 times lighter than a brick building),
                            it will not put too much weight on the original building in the case of an extension.
                        </p>
                        <p class="mb-4 text-slate-700 text-xl">
                            The speed of construction will ensure a smooth implementation process.
                            If your existing building houses your business or is occupied, there is no need to leave
                            the building or close your business during construction.
                            The robustness of the SIP construction system will ensure the final appearance of the
                            new building is almost indistinguishable from the original structure.
                        </p>
                        <p class="text-slate-700 text-xl">
                            The thermal insulation properties of the panels ensure the highest thermal comfort.
                            At the same time, it will be a low-energy building, which will mean a rapid reduction in
                            operating costs.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col pt-12 project-link-anchor" id="cotteges">

                <h2 class="text-4xl text-emerald-500">Cottages and Recreational Facilities</h2>

                <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                    <div class="w-full h-full lg:w-1/2 flex justify-center">
                        <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/cottage_1.jpg">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="mb-4 text-slate-700 text-xl">
                            The SIP building system is the ideal solution for the building of lightweight objects
                            such as cottages, recreational objects, or houseboats (buildings located on the surface
                            of the water).
                            Its flexibility allows for building even in difficult to access areas, such as mountain
                            areas, or river or lake levels.
                        </p>
                        <p class="mb-4 text-slate-700 text-xl">
                            Your property will therefore be free from architectural constraints, allowing architects
                            to enjoy complete freedom in designing the shape of the house.
                        </p>
                        <p class="text-slate-700 text-xl">
                            As the building system is lightweight and is easy to transport to hard-to-reach areas.
                            Moreover, its implementation is possible even without building machinery
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col pt-12" ref="price" id="price">
                <h2 class="text-4xl text-emerald-500">What is Included</h2>
                <div class="grid grid-cols-2 gap-4 flex items-center pt-12">
                    <div class="mb-4">
                        <img class="max-w-[92%] h-auto rounded-lg mb-4" src="/images/view_1c.jpg">
                        <p class="mb-4 text-slate-700 text-xl">
                            1) Option one (example).
                        </p>
                    </div>

                    <div class="mb-4">
                        <img class="max-w-full h-auto rounded-lg mb-4" src="/images/view_2.jpg">
                        <p class="mb-4 text-slate-700 text-xl">
                            2) Option two (example).
                        </p>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <p class="mb-4 text-slate-700 text-xl">
                        It takes up to seven days to assemble a single house on the production line.
                        Assembling a medium-sized house on foundations can take about a week, regardless of the
                        weather and season.
                        The company has several dozens of ready projects, however, you can request an individual
                        project for an additional cost.
                        In case of an individual project, preparation of documentation and technical drawings takes
                        up to three weeks.
                    </p>
                    <p class="mb-4 text-slate-700 text-xl">
                        The design of the house is shown below for information only.
                        The production cost of this house is given as of July 2022.
                        Due to the fluctuating prices of materials on the market, the final price of the house may
                        also vary.
                    </p>
                    <p class="mb-4 text-slate-700 text-xl">
                        As the building system is lightweight and is easy to transport to hard-to-reach areas.
                        Moreover, its implementation is possible even without building machinery
                    </p>

                    <h4 class="text-slate-700 text-xl mb-4 text-emerald-600">Example:</h4>
                    <p class="mb-4 text-slate-700 text-xl">A house has a floor area of 108 m2.</p>
                    <p class="mb-4 text-slate-700 text-xl">
                        1) Option one. A house with a hip roof (hipped roof type with 4 sloping sides) costs €45,000
                        (415 €/m2).
                    </p>
                    <p class="mb-4 text-slate-700 text-xl">2) Option two. House with flat roof, price €48 500 (450
                        €/m2).</p>
                    <p class="mb-4 text-slate-700 text-xl">The price includes: assembly, wall mounting in the
                        workshop with electrical preparation, plasterboard, foam and fittings + on-site
                        installation.</p>
                    <p class="mb-4 text-slate-700 text-xl">Price does not include: assembly, delivery to site,
                        windows and doors, completion of roofing work.</p>
                    <p class="text-slate-700 text-xl">Additional costs for internal and external finishing,
                        wiring, ventilation, heating, etc. at the customer's request, are priced separately.</p>
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
            top -= 66;

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

.project-link-anchor {
    padding-top: calc(3rem + 60px);
    margin-top: -60px;
}
</style>
