<template>
    <div class="flex flex-col  lg:flex-row items-center">
        <div class="w-full mb-8 lg:w-1/2 md:mr-8">
            <h2 class="text-emerald-500 text-4xl mb-4">
                Why me?
            </h2>

            <transition name="fade" mode="out-in">

                <template>
                    <div key="benefit_1" v-if="activeTab == 'quality'">
                        <h3 class="text-slate-700 text-2xl mb-4">
                            Quality
                        </h3>
                        <p class="text-slate-700 text-xl">
                            We build based on a proven and certified SIP building system, using only wood with a good reputation. 
                            Construction is carried out under continuous multi-stage supervision. We do not part ways with the 
                            client once the building is handed over, our concern for your satisfaction continues, we respond immediately 
                            to any minor defects, etc. All critical work is carried out by our own professionally trained maintenance staff.
                        </p>
                    </div>
        
                    <div key="benefit_2" v-if="activeTab == 'certification'">
                        <h3 class="text-slate-700 text-2xl mb-4">
                            Certification
                        </h3>
                        <p class="text-slate-700 text-xl">
                           We use only certified materials and construction elements, at the end of the construction you receive from us 
                           Certificates and Inspection Reports for the approval procedure.
                        </p>
                    </div>
        
                    <div key="benefit_3" v-if="activeTab == 'tradition'">
                        <h3 class="text-slate-700 text-2xl mb-4">
                            Tradition
                        </h3>
                        <p class="text-slate-700 text-xl">
                            The Structural Insulated Panels (SIPs) technology that forms the basis of the house's rough construction has been 
                            tested by sixty years of use abroad. It accounts for up to 80% of new construction in Canada and nearly 60% 
                            in Europe. This progressive method of building houses is becoming increasingly popular because of its undeniable 
                            advantages determining fast and precise construction, high comfort, healthy ecological and economical living.
                        </p>
                    </div>
        
                    <div key="benefit_4" v-if="activeTab == 'garantie'">
                        <h3 class="text-slate-700 text-2xl mb-4">
                            Garantie
                        </h3>
                        <p class="text-slate-700 text-xl">
                            The quality of the construction of the house will guarantee you at least 50 years of durability. 
                            We provide standard warranties for structural elements, works, technologies and subcontractors' deliveries.
                        </p>
                    </div>
        
                    <div key="benefit_5" v-if="activeTab == 'service'">
                        <h3 class="text-slate-700 text-2xl mb-4">
                            Service
                        </h3>
                        <p class="text-slate-700 text-xl">
                            We take care of our customers not only during the warranty period, but we also provide you with 
                            after-warranty service and care for the flawless and comfortable use of your home.
                        </p>
                    </div>
                </template>
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
                            <p>Quality</p>
                        </div>
                    </div>
                </div>
                <div class="triangle-2"
                     v-bind:class="{'active': activeTab === 'certification', '': activeTab != ''}" 
                     v-on:click="switchTab('certification')"
                >
                    <div class="inner-triangle">
                         <div>
                            <i class="fa-solid fa-scroll"></i>
                            <p>Certification</p>
                        </div>
                    </div>
                </div>
                <div class="triangle-3"
                     v-bind:class="{'active': activeTab === 'tradition', '': activeTab != ''}" 
                     v-on:click="switchTab('tradition')"
                >
                    <div class="inner-triangle">
                         <div>
                            <i class="fa-solid fa-hand-back-fist"></i>
                            <p>Tradition</p>
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
                            <p>Garantie</p>
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
                            <p>Service</p>
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

        >div:has(.quality) {
            transform: rotate(100deg);
        }

        @media only screen and (min-width: 576px) {
            width: 23rem;
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

        width: 130px;
        height: 130px;
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
        width: 97px;
        height: 97px;
        clip-path: polygon(83% 0, 98% 98%, 0 83%);


        >div {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-content: center;
            align-items: center;
            font-size: 1.25rem;
            line-height: 1.75rem;
            text-transform: uppercase;
            font-weight: 500;

            color: rgb(16 185 129);

            transform: rotate(-45deg);

            padding-top: 90px;

            i {
                font-size: 1.75rem;
                margin-bottom: 5px;
            }

            p {
                display: none;
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