<template>

    <Head>
        <title>Technologies</title>
    </Head>

    <section>
        <div
            class="w-full h-96 bg-[url('/images/bg_tecgnology.jpg')] black-shadow bg-bottom bg-no-repeat bg-cover bg-fixed">
            <div class="container h-full m-auto px-6 py-12 md:py-28 flex justify-center items-center content-center">
                <h1 class="text-white text-5xl mt-16 z-50 white-text-shadow" data-aos="fade-right">Explore SIP</h1>
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
                        Explore SIP
                    </div>

                    <div class="sip-ref text-slate-700 w-full px-12 py-8 rounded-xl cursor-pointer mb-4 lg:mr-4 transition-all text-2xl uppercase text-center flex items-center content-center justify-center"
                        v-on:click="scrollMeTo('process')">
                        <i class="fa-solid fa-person-digging text-4xl mr-4"></i>
                        Production process
                    </div>

                    <div class="sip-ref text-slate-700 w-full px-12 py-8 rounded-xl cursor-pointer mb-4 lg:mr-4 transition-all text-2xl uppercase text-center flex items-center content-center justify-center"
                        v-on:click="scrollMeTo('benefits')">
                        <i class="fa-solid fa-medal text-4xl mr-4"></i>
                        Main benefits 
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
                    <h2 class="text-4xl text-emerald-500 ">Explore SIP</h2>
                </div>
                
                <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                    <div class="w-full h-full lg:w-1/2 flex justify-center">
                        <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/sip-sandwich-1.jpg" alt="">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="mb-4 text-slate-700 text-xl">
                            The basis of the SIP panel technology is a sandwich panel. The panel consists of 
                            two OSB TOP4 boards and an insulating core made of expanded flame retardant polystyrene EPS, 
                            PIR (polyisocyanurate foam), graphite NEOPOR or Mineral wool.
                        </p>
                        <p class="mb-4 text-slate-700 text-xl">The production process results in a structural sandwich panel that is characterized by excellent thermal insulation properties, low bulk density and high structural rigidity.</p>
                        <p class="mb-4 text-slate-700 text-xl">The production process results in a structural sandwich panel that is characterized by excellent thermal insulation properties, low bulk density and high structural rigidity.</p>
                        <p class="mb-4 text-slate-700 text-xl">The panels are manufactured in several thicknesses and so their use covers a wide range of needs. They can be used as floors, perimeter walls, partitions, and roofs.</p>
                    </div>
                </div>


                <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                    <div class="w-full h-full lg:w-1/2 flex justify-center">
                        <img class="mb-4 lg:mb-0 w-full lg:w-3/5" src="/images/sip-sandwich-2.jpg" alt="">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="mb-4 text-slate-700 text-xl">The SIP panel building system is classified as a timber frame building system, but its physical and thermal insulation properties make it significantly superior to conventional timber frame buildings.</p>
                        <p class="mb-4 text-slate-700 text-xl">In addition to the panels, the SIP building system also includes KVH and BSH certified structural lumber in strength class C24 or GL24h, glued laminated timber I-joists or CLT panels. Their quantity and size depend on the individual structural assessments of the buildings.</p>
                        <p class="mb-4 text-slate-700 text-xl">Various fasteners, carpentry fittings, PUR foams, sealants and compression tapes are used to seal the joints between the panels. All materials are included in the individual delivery of the building system according to the submitted offers and no additional procurement is required.</p>
                        <p class="mb-4 text-slate-700 text-xl">Higher levels of energy efficiency, prevention of thermal bridges, airtightness of the building shell, and environmental aspects favourably distinguish the SIP building system from many traditional building systems.</p>
                    </div>
                </div>

                <div class="flex flex-col pt-12">
                    <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">THE PROPERTIES OF OSB BOARDS:</h3>
                    <ul class="ml-8 text-slate-700 text-xl list-disc mb-4">
                        <li>good thermal resistance (wood is a natural insulator)</li>
                        <li>large formats allow fewer joints and thus less acoustic and heat loss</li>
                        <li>good fire resistance depending on the type of OSB</li>
                        <li>resistance to shock and vibration</li>
                        <li>resistance to earthquakes and strong winds (proven in California, Florida and Japan)</li>
                        <li>health safety</li>
                        <li>excellent workability</li>
                    </ul>
                    <p class="mb-4 text-slate-700 text-xl">
                        Those OSB and plywood tiles no longer contain urea formaldehyde (UF), so they really aren't that toxic anymore, especially on the exterior of the house. 
                    </p>
                </div>

                <div class="flex flex-col pt-12">
                    <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">POLYSTYROL (EPS)</h3>
                    <p class="mb-4 text-slate-700 text-xl">
                        Polystyrene is commonly used in the construction industry. In its closed structure, polystyrene cells absorb almost no water. This occurs to some limited extent only in the pores between the interlocking foam particles. After drying, they return to their original form. In a short time, demand has led to the development of 'self-extinguishing polystyrene', which is better suited to the requirements for fire protection in buildings. From a fire protection point of view, the widespread use of EPS in sandwich constructions is suitable among non-combustible materials. Polystyrene insulations are now HBCD-free (hexabromocyclododecane).
                    </p>

                    <h4 class="text-slate-700 text-xl mb-4 text-emerald-500">Polystyrene properties:</h4>
                    <ul class="ml-8 text-slate-700 text-xl list-disc mb-4">
                        <li>water resistance</li>
                        <li>excellent thermal insulation properties</li>
                        <li>fire safety</li>
                        <li>easy and safe handling</li>
                    </ul>
                </div>

                <div class="flex flex-col pt-12">
                    <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                        ADVANTAGES OF THE SIP CONSTRUCTION SYSTEM
                    </h3>

                     <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/sip-advantages-1.jpg" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <p class="mb-4 text-slate-700 text-xl">
                                The SIP panel technology can solve a wide range of needs and its applications are almost unlimited. Its versatility can be used in the most demanding designs. It is therefore ideal for building atypical building structures, where it will also ensure the absence of thermal bridges. The SIP panel technology can be applied as a single building system to the entire building shell or combined with other building systems.
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                With the SIP construction system, we can build the foundation of the building, external perimeter walls, interior partition walls, ceilings, flat and even sloping roofs. It can be used in the construction of houses, apartment buildings, administrative buildings, industrial buildings, schools and kindergartens, recreational facilities, cottages, and houseboats. The SIP construction system is an ideal solution for superstructures and extensions.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/sip-advantages-2.jpg" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <p class="mb-4 text-slate-700 text-xl">
                                The SIP panel is a lightweight building material (approx. 22 kg/m2) and there are several options for the foundation of the building. The most used method is a concrete slab foundation. It already saves on material as it will not need to carry as much load as heavy stonework or concrete buildings. For the customer, this therefore allows construction even in hard-to-reach places where construction machinery cannot reach. It is ideal for superstructure and extension projects where the original building would not be structurally able to cope with traditional construction systems such as masonry or concrete. The insulating core is strong and stable even after decades. It does not sag or become damp, which can be a common problem with conventional framed construction when poorly built.                            
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                The SIP panel technology also allows the building foundations to be made from panels. An alternative and unique solution for construction is foundations on screw piles. The construction of the foundation plate on screw piles for a detached house takes from 2 to 3 days and results in no damage to the ground. A support structure of wooden or steel beams, on which SIP 210mm panels are placed, is fitted on drilled screw piles.
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                The SIP panel technology has a unique application in construction is in the case of houseboats. Panels placed on the pontoon make for quick and efficient foundations of the building.
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
                    <h2 class="text-4xl text-emerald-500 ">Design and production process</h2>
                </div>

                <p class="mb-4 text-slate-700 text-xl pt-12">
                    The SIP certified building system is manufactured in controlled and monitored factory conditions. The production process is carried out in several stages. The standard production process takes between two and four weeks.
                </p>

                <div class="flex flex-col">
                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/sip-design.jpg" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                DESIGN
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                The project takes about 2-3 weeks if the customer requests a bespoke project
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                During the design phase, technical, installation and production documentation is prepared. During the design phase, communication and approval of the design documentation takes place. Our professional team of engineers is available to provide advice regarding the design process, the finalising of designs, and the structural evaluation of buildings.                            
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/sip-production.png" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                PRODUCTION
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                This takes approximately 7 days                            
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                The sandwich panel is created by adhesively glueing an insulating core between two 15mm thick OSB TOP 4 boards. The panel is then hardened and matured in a hydraulic press. After solidification, the panels are formatted and labelled. Once the job is complete, the panels and all other materials required for the construction are placed on lorries to be transported to the construction site.
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                The SIP panel technology has a unique application in construction is in the case of houseboats. Panels placed on the pontoon make for quick and efficient foundations of the building.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/sip-asembly.jpg" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                ASSEMBLY
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                Takes approximately 7 days
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                We provide our customers with full technical support.  Our company offers a complete construction system, including all the necessary materials to complete the rough installation. We provide professional building management for the customer without unnecessary interruptions due to involvement of subcontractors.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/sip-construction.jpg" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                CONSTRUCTION OF PERIMETER WALLS AND INTERIOR PARTITION WALLS
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                A layer of waterproofing is applied to the fabricated foundation plate. After its application, the foundation springs are anchored to the foundation plate and form the base for the construction system. An embedded KVH element is fitted on the foundation spring to install the panels.
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                Construction of the perimeter walls begins from the corner of the building and continues around the perimeter. After their completion follows the installation of internal partition walls. Finally, wooden KVH elements are inserted in the mounting grooves from the top to support the panels with each other. The panels may contain a pre-prepared tunnel for wiring. All panels are marked and custom-made according to the project documentation, so the installation of the panels is very simple, fast, and precise.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/sip-flor.jpg" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                FLOOR CONSTRUCTION
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                Between the perimeter walls and the interior partition walls, a ceiling structure for the construction of the floor is made. To create a ceiling structure, we have several solutions. The ceiling can consist of KVH, BSH ceiling elements, glued timber I-beams, SIP panels or CLT. The suitability of the materials used depends on the static assessment of the project architect and the requirements of customers. Folowing this, the construction perimeter walls and internal partition walls of the second floor begins.                            
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/sip-roof.jpg" alt="">
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                ROOF CONSTRUCTION
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                SIP panels are an effective solution for the construction of sloping roofs with a residential attic. The SIP construction system essentially creates both a structural and an insulating element of the roof. The attic is therefore directly insulated with SIP panels and no additional application of insulation materials is required. The joints are straight and precise, so the interior has a ready base for the installation of gypsum or fibrous gypsum plaster boards, which are applied directly to the panel.
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                SIP panel is also an ideal solution for flat roofs. As with both sloping and flat roofs, the panel is a structural as well as an insulating element of the roof. Its installation and application are very fast and saves a lot of additional work. From the inside, it is possible to install gypsum or fibrous gypsum boards directly to the panel. From the outside, EPS perimeter drains for water drainage and final waterproofing are applied.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col pt-12">
                    <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                        WIDE VARIABILITY OF FINAL FINISHES
                    </h3>
                    <p class="mb-4 text-slate-700 text-xl">
                        The SIP construction system can be easily completed with a wide range of finishes from classic plaster to vented facades.
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
                    <h2 class="text-4xl text-emerald-500 ">Main benefits</h2>
                </div>
                

                <div class="flex flex-col">
                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <i class="mb-4 lg:mb-0 text-9xl text-emerald-500 fa-solid fa-circle-dollar-to-slot"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                COST SAVINGS
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                The SIP construction system provides excellent thermal insulation properties. Heating and cooling costs are therefore up to 50% lower than conventional masonry buildings. The buildings made of SIP panels provide a thermal resistance of the external walls and roof structure of R=6.5 m2.K/W and more. The buildings therefore belong to the category of low-energy or passive houses. They provide the necessary thermal comfort during the winter period and keep the building cool during the summer months.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <i class="mb-4 lg:mb-0 text-9xl text-emerald-500 fa-solid fa-gauge-high"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                THE SPEED OF CONSTRUCTION
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                Whether you choose an individual building from SIP panels or prefabricated assembled houses, their production is several times quicker than conventional masonry buildings, which requires countless wet technological processes to be carried out. SIP panel construction is entirely a dry process that can be carried out at any time of the year. The speed of building significantly reduces the time of completion and related costs such as accommodation of workers, scaffolding hire, or construction machinery. This significantly reduces the cost of building construction.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <i class="mb-4 lg:mb-0 text-9xl text-emerald-500 fa-solid fa-house-medical"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                HEALTHY AND COMFORTABLE LIVING
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                The airtight design is ideal for modern ventilation systems that reduce energy costs and improve indoor air quality. The use of heat recovery units ensures a constant supply of fresh air into buildings without additional heat leakage. The air in the building is therefore constantly fresh, preventing mould and dust allergens from spreading in the building.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <i class="mb-4 lg:mb-0 text-9xl text-emerald-500 fa-solid fa-wind"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                HIGH STRENGTH
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                Once the panel structure is constructed, the building system behaves as a monolithic shell, providing up to five times the structural performance of conventional timber frame construction. A building constructed with SIP panels has a sturdy and solid feel that is hard to distinguish from a traditional construction system once completed.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <i class="mb-4 lg:mb-0 text-9xl text-emerald-500 fa-solid fa-layer-group"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                MORE USEFUL FLOOR AREA
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                Buildings made of SIP panels provide 7-10% more usable floor space than traditional masonry buildings. Building users can enjoy a larger and more spacious environment. For developers who sell square meters of usable floor space, this percentage increase will provide extra profit.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <i class="mb-4 lg:mb-0 text-9xl text-emerald-500 fa-solid fa-building-shield"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                A STABLE INSULATION
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                The insulation core of the SIP building system is strong and stable even after decades. It cannot get wet, sag or be misapplied, as can happen with conventional frame constructions that are technologically demanding.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <i class="mb-4 lg:mb-0 text-9xl text-emerald-500 fa-solid fa-seedling"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                ENVIRONMENTAL ASPECTS
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                The SIP construction system is classified as a timber building, so the overall process of production, construction and recycling of materials significantly reduces CO2 production.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <i class="mb-4 lg:mb-0 text-9xl text-emerald-500 fa-solid fa-diagram-project"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                THE DESIGN FLEXIBILITY AND OTHER ADVANTAGES OF THE SIP BUILDING SYSTEM
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                Current legislation and new market demands require ever greater attention during the design and planning of buildings. The design flexibility and other advantages of the SIP building system, thermal bridge prevention, building airtightness, environmental aspects and others pose a challenge to many traditional building systems.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <i class="mb-4 lg:mb-0 text-9xl text-emerald-500 fa-solid fa-stamp"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                CERTIFIED BUILDING SYSTEM
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                The manufacturing process is subject to regular inspection by a notified person. Our company provides a 50-year certified warranty for the building system.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                        <div class="w-full h-full lg:w-1/2 flex justify-center">
                            <i class="mb-4 lg:mb-0 text-9xl text-emerald-500 fa-solid fa-medal"></i>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-slate-700 text-2xl mb-4 text-emerald-500">
                                CONSTRUCTION OF CONDOMINIUM AND APARTMENT BUILDINGS
                            </h3>
                            <p class="mb-4 text-slate-700 text-xl">
                                One of the most important requirements for the design of buildings and their construction in the future is the reduction of CO2.
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                The SIP building system as a stand-alone unit can be used in the construction of apartment buildings up to four floors high. When combining the SIP building system with traditional construction methods, the height of the buildings is unlimited. In this case, the building system is used as the building shell.
                            </p>
                            <p class="mb-4 text-slate-700 text-xl">
                                The main benefit of using the SIP building system in apartment and condominium construction is the unrivalled speed of building and thermal insulation properties.
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