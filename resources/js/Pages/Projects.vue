<template>

    <Head>
        <title>Projects</title>
    </Head>

    <section>
        <div
            class="w-full h-96 bg-[url('/images/bg_tecgnology.jpg')] black-shadow bg-bottom bg-no-repeat bg-cover bg-fixed">
            <div class="container m-auto h-full px-6 py-12 md:py-28 flex justify-center items-center content-center">
                <h1 class="text-white text-5xl mt-16 z-50 white-text-shadow" data-aos="fade-right">{{ __('project_page_header') }}</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container m-auto flex flex-col align-center items-center pt-12 md:pt-28 cursor-pointer" v-on:click="scrollMeTo('price')">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
            <p class="text-slate-700 text-xl">{{ __('project_page_price') }}</p>
        </div>
    </section>

    <section ref="prefabricated_houses" id="prefabricated_houses">
        <div class="container m-auto px-6 py-12 md:py-28">
            <div class="flex items-center content-center">
                <h2 class="text-4xl text-emerald-500">{{ __('project_page_pref_h2') }}</h2>
            </div>

            <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                <div class="w-full h-full lg:w-1/2 flex justify-center">
                    <img class="mb-4 lg:mb-0 w-full lg:w-10/12" src="/images/pref.jpg" alt="">
                </div>
                <div class="w-full lg:w-1/2">
                    <p class="mb-4 text-slate-700 text-xl">
                        {{ __('project_page_pref_text_1') }}
                        
                    </p>
                    <p class="mb-4 text-slate-700 text-xl">
                        {{ __('project_page_pref_text_2') }}
                    </p>
                    <p class="text-slate-700 text-xl">
                        {{ __('project_page_pref_text_3') }}
                    </p>
                </div>
            </div>

            <div class="flex flex-col pt-12 project-link-anchor" id="modular_hauses">
                <h2 class="text-4xl text-emerald-500 ">{{ __('home_page_link_1') }}</h2>
            </div>

            <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                <div class="w-full h-full lg:w-1/2 flex justify-center">
                    <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/mod_3.jpg" alt="">
                </div>
                <div class="w-full lg:w-1/2">
                    <p class="mb-4 text-slate-700 text-xl">
                        {{ __('project_page_mod_text_1') }}
                    </p>
                    <p class="mb-4 text-slate-700 text-xl">
                        {{ __('project_page_mod_text_2') }}
                    </p>
                    <p class="text-slate-700 text-xl">
                        {{ __('project_page_mod_text_3') }}
                    </p>
                </div>
            </div>

            <div class="flex flex-col pt-12">
                <h4 class="text-slate-700 text-xl mb-4 text-emerald-400">{{ __('project_page_ener') }}</h4>
                <p class="mb-4 text-slate-700 text-xl">
                    {{ __('project_page_ener_text') }}
                    
                </p>
                <h4 class="text-slate-700 text-xl mb-4 text-emerald-500">{{ __('project_page_fixed') }}</h4>
                <p class="mb-4 text-slate-700 text-xl">
                    {{ __('project_page_fixed_text') }}
                    
                </p>
                <h4 class="text-slate-700 text-xl mb-4 text-emerald-600">{{ __('project_page_speed') }}</h4>
                <p class="mb-4 text-slate-700 text-xl">
                    {{ __('project_page_speed_text') }}
                    
                </p>
                <h4 class="text-slate-700 text-xl mb-4 text-emerald-700">{{ __('project_page_pos') }}</h4>
                <p class="text-slate-700 text-xl">
                    {{ __('project_page_pos_text') }}
                    
                </p>
            </div>

            <div class="flex flex-col pt-12 project-link-anchor" id="residents_and_apartments">
                <h2 class="text-4xl text-emerald-500">{{ __('project_page_cons') }}</h2>

                <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                    <div class="w-full h-full lg:w-1/2 flex justify-center">
                        <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/const.jpg">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="mb-4 text-slate-700 text-xl">
                            {{ __('project_page_pos_text_1') }}
                            </p>
                        <p class="mb-4 text-slate-700 text-xl">
                            {{ __('project_page_pos_text_2') }}
                            
                        </p>
                        <p class="text-slate-700 text-xl">
                            {{ __('project_page_pos_text_3') }}
                            </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col pt-12 project-link-anchor" id="commercial_buildings">
                <h2 class="text-4xl text-emerald-500">{{ __('home_page_link_3') }}</h2>

                <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                    <div class="w-full h-full lg:w-1/2 flex justify-center">
                        <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/com_1.jpg">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="text-slate-700 text-xl">
                            {{ __('project_page_com_text') }}
                            
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col pt-12 project-link-anchor" id="school_and_kindergartens">
                <h2 class="text-4xl text-emerald-500">{{ __('home_page_link_4') }}</h2>

                <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                    <div class="w-full h-full lg:w-1/2 flex justify-center">
                        <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/school.jpg">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="text-slate-700 text-xl">
                            {{ __('project_page_sch_text') }}
                            
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col pt-12 project-link-anchor" id="superstructures_and_extensions">
                <h2 class="text-4xl text-emerald-500">{{ __('home_page_link_5') }}</h2>

                <div class="flex flex-col lg:flex-row align-center items-center pt-12">
                    <div class="w-full h-full lg:w-1/2 flex justify-center">
                        <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/super_2.jpg">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="mb-4 text-slate-700 text-xl">
                            {{ __('project_page_sup_text_1') }}
                            
                        </p>
                        <p class="mb-4 text-slate-700 text-xl">
                            {{ __('project_page_sup_text_2') }}
                            
                        </p>
                        <p class="text-slate-700 text-xl">
                            {{ __('project_page_sup_text_3') }}
                            
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col pt-12 project-link-anchor" id="cotteges">

                <h2 class="text-4xl text-emerald-500">{{ __('home_page_link_6') }}</h2>

                <div class="flex flex-col lg:flex-row-reverse align-center items-center pt-12">
                    <div class="w-full h-full lg:w-1/2 flex justify-center">
                        <img class="mb-4 lg:mb-0 w-full lg:w-4/5" src="/images/cottage_1.jpg">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="mb-4 text-slate-700 text-xl">
                            {{ __('project_page_cot_text_1') }}
                            
                        </p>
                        <p class="mb-4 text-slate-700 text-xl">
                            {{ __('project_page_cot_text_2') }}
                            
                        </p>
                        <p class="text-slate-700 text-xl">
                            {{ __('project_page_cot_text_3') }}
                            
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col pt-12" ref="price" id="price">
                <h2 class="text-4xl text-emerald-500">{{ __('project_page_what') }}</h2>
                <div class="grid grid-cols-2 gap-4 flex items-center pt-12">
                    <div class="mb-4">
                        <img class="max-w-[92%] h-auto rounded-lg mb-4" src="/images/view_1c.jpg">
                        <p class="mb-4 text-slate-700 text-xl">
                            {{ __('project_page_ex_1') }}
                            
                        </p>
                    </div>

                    <div class="mb-4">
                        <img class="max-w-full h-auto rounded-lg mb-4" src="/images/view_2.jpg">
                        <p class="mb-4 text-slate-700 text-xl">
                            {{ __('project_page_ex_2') }}
                            
                        </p>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <p class="mb-4 text-slate-700 text-xl">
                        {{ __('project_page_what_text_1') }}
                        
                    </p>
                    <p class="mb-4 text-slate-700 text-xl">
                        {{ __('project_page_what_text_2') }}
                        
                    </p>

                    <h4 class="text-slate-700 text-xl mb-4 text-emerald-600">{{ __('project_page_newex') }}</h4>
                    <p class="mb-4 text-slate-700 text-xl">{{ __('project_page_newex_1') }}</p>
                    <p class="mb-4 text-slate-700 text-xl">
                        {{ __('project_page_newex_2') }}
                        
                    </p>
                    <p class="mb-4 text-slate-700 text-xl">{{ __('project_page_newex_3') }}</p>
                    <p class="mb-4 text-slate-700 text-xl">
                        {{ __('project_page_newex_4') }}
                        </p>
                    <p class="mb-4 text-slate-700 text-xl">
                        {{ __('project_page_newex_5') }}
                        </p>
                    <p class="text-slate-700 text-xl">
                        {{ __('project_page_newex_6') }}
                        </p>
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
