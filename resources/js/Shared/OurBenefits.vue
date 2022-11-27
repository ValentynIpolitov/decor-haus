<template>
    <div class="flex flex-col">
        <h2 class="text-emerald-500 text-4xl mb-4 text-center lg:text-left">
            {{ __('home_benefits_whyme') }}
        </h2>
        
        <div class="w-full flex flex-col-reverse lg:flex-row lg:items-center">
            <div class="w-full lg:w-1/2">
                <transition name="fade" mode="out-in">
                        <div key="benefit_1" v-if="activeTab == 'quality'">
                            <h3 class="text-slate-700 text-2xl mb-4">
                                {{ __('home_benefits_h3_1') }}
                            </h3>
                            <p class="text-slate-700 text-xl">
                                {{ __('home_benefits_qual_text') }}
                            </p>
                        </div>
            
                        <div key="benefit_2" v-if="activeTab == 'certification'">
                            <h3 class="text-slate-700 text-2xl mb-4">
                                {{ __('home_benefits_h3_2') }} 
                            </h3>
                            <p class="text-slate-700 text-xl">
                                {{ __('home_benefits_cert_text') }}
                               
                            </p>
                        </div>
            
                        <div key="benefit_3" v-if="activeTab == 'tradition'">
                            <h3 class="text-slate-700 text-2xl mb-4">
                                {{ __('home_benefits_h3_3') }}
                            </h3>
                            <p class="text-slate-700 text-xl">
                                {{ __('home_benefits_cena_text') }}
                                
                            </p>
                        </div>
            
                        <div key="benefit_4" v-if="activeTab == 'garantie'">
                            <h3 class="text-slate-700 text-2xl mb-4">
                                {{ __('home_benefits_h3_4') }}
                            </h3>
                            <p class="text-slate-700 text-xl">
                                {{ __('home_benefits_garant_text') }}
                                
                            </p>
                        </div>
            
                        <div key="benefit_5" v-if="activeTab == 'service'">
                            <h3 class="text-slate-700 text-2xl mb-4">
                                {{ __('home_benefits_h3_5') }}
                            </h3>
                            <p class="text-slate-700 text-xl">
                                {{ __('home_benefits_service_text') }}
                                
                            </p>
                        </div>
                </transition>
            </div>

            <div class="w-full flex justify-center items-center content-center lg:w-1/2">
                <div class="relative polygon-wrapper">
                    <div class="triangle-1"
                         v-bind:class="{'active quality': activeTab === 'quality', '': activeTab != ''}" 
                         v-on:click="switchTab('quality')"
                    >
                        <div class="inner-triangle">
                            <div>
                                <i class="fa-solid fa-hand-point-up"></i>
                                <p>{{ __('home_benefits_h3_1') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="triangle-2"
                         v-bind:class="{'active': activeTab === 'certification', '': activeTab != ''}" 
                         v-on:click="switchTab('certification')"
                    >
                        <div class="inner-triangle">
                             <div>
                                <i class="rotate-180 fa-solid fa-scroll"></i>
                                <p class="rotate-180">{{ __('home_benefits_h3_2') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="triangle-3"
                         v-bind:class="{'active': activeTab === 'tradition', '': activeTab != ''}" 
                         v-on:click="switchTab('tradition')"
                    >
                        <div class="inner-triangle">
                             <div>
                                <i class="rotate-180 fa-solid fa-hand-back-fist"></i>
                                <p class="rotate-180">{{ __('home_benefits_h3_3') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="triangle-4"
                         v-bind:class="{'active': activeTab === 'garantie', '': activeTab != ''}" 
                         v-on:click="switchTab('garantie')"
                    >
                        <div class="inner-triangle">
                             <div>
                                <i class="fa-solid fa-file-signature"></i>
                                <p>{{ __('home_benefits_h3_4') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="triangle-5"
                         v-bind:class="{'active': activeTab === 'service', '': activeTab != ''}" 
                         v-on:click="switchTab('service')"
                    >
                        <div class="inner-triangle">
                             <div>
                                <i class="fa-solid fa-bell-concierge"></i>
                                <p>{{ __('home_benefits_h3_5') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                activeTab: 'quality'
            };
        },

         methods: {
            switchTab(tabName) {
                this.activeTab = tabName;
            }
        }
    }
</script>

<style lang="scss" scoped>
    .polygon-wrapper {
        height: 22rem;
        width: 100%;
        padding-bottom: 100%;

        >div:has(.quality) {
            transform: rotate(100deg);
        }

        @media only screen and (min-width: 576px) {
            width: 23rem;
            padding-bottom: 0;
        }
        
        @media only screen and (min-width: 1024px) {
            height: 25rem;
            width: 23rem;
        }
    }

    @mixin triangle {
        position: absolute;
        top: 20%;
        left: 25%;

        transition: all .3 ease;
        transition: transform 0.3s ease;

        cursor: pointer;

        width: 45%;
        padding-bottom: 45%;
        height: 0;
        background: rgb(16 185 129);
        clip-path: polygon(83% 0, 98% 98%, 0 83%);


        &.active {
            background: rgb(251,191,35);

            .inner-triangle {
                > div {
                    color: rgb(251,191,35);
                }
            }
        }

        @media only screen and (min-width: 576px) {
            width: 185px;
            height: 185px;
        }

        @media only screen and (min-width: 1024px) {
            width: 210px;
            height: 210px;            
        }
    }

    .inner-triangle {
        position: relative;
        background: rgb(16 185 129) linear-gradient(rgb(16 185 129), rgb(16 185 129));
        background: white linear-gradient(white, white);
        transition: all .3 ease;
        width: 98%;
        padding-bottom: 98%;
        height: 98%;
        clip-path: polygon(83% 0, 98% 98%, 0 83%);


        >div {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column-reverse;
            justify-content: flex-start;
            align-content: center;
            align-items: center;
            font-size: 1.25rem;
            line-height: 1.75rem;
            text-transform: uppercase;
            font-weight: 500;

            color: rgb(16 185 129);

            transform: rotate(-45deg);

            padding-top: 95%;
            padding-bottom: 3%;

            i {
                font-size: 1.75rem;
                margin-bottom: 5px;
            }

            p {
                margin-bottom: 10px;
                // display: none;
            }
        }

        // todo
        @media only screen and (min-width: 400px) {
            >div {
                p {
                    display: block;
                }
            }
        }

        @media only screen and (min-width: 576px) {
            width: 183px;
            height: 183px;

            >div {
                flex-direction: column;
                padding-top: 45%;
                padding-bottom: 57%;
                p {
                    display: block;
                }
            }
        }

        @media only screen and (min-width: 1024px) {
            width: 207px;
            height: 207px;            
        }
    }

    .triangle-1 {
        @include triangle;
        transform: rotate(117deg) translateY(-50%) translateX(-50%);

        &:hover {
            transform: rotate(117deg) translateY(-55%) translateX(-55%);
        }

        &.active {
            transform: rotate(117deg) translateY(-55%) translateX(-55%);
        }
    }

    .triangle-2 {
        @include triangle;
        transform: rotate(189deg) translateY(-50%) translateX(-50%);

        &:hover {
            transform: rotate(189deg) translateY(-55%) translateX(-55%);
        }

        &.active {
            transform: rotate(189deg) translateY(-55%) translateX(-55%);
        }
    }

    .triangle-3 {
        @include triangle;
        transform: rotate(261deg) translateY(-50%) translateX(-50%);

        &:hover {
            transform: rotate(261deg) translateY(-55%) translateX(-55%);
        }

        &.active {
            transform: rotate(261deg) translateY(-55%) translateX(-55%);
        }
    }

    .triangle-4 {
        @include triangle;
        transform: rotate(333deg) translateY(-50%) translateX(-50%);

        &:hover {
            transform: rotate(333deg) translateY(-55%) translateX(-55%);
        }

        &.active {
            transform: rotate(333deg) translateY(-55%) translateX(-55%);
        }
    }

    .triangle-5 {
        @include triangle;
        transform: rotate(45deg) translateY(-50%) translateX(-50%);

        &:hover {
            transform: rotate(45deg) translateY(-55%) translateX(-55%);
        }

        &.active {
            transform: rotate(45deg) translateY(-55%) translateX(-55%);
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