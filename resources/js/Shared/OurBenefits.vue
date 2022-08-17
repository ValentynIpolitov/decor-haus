<template>
    <div class="flex flex-col  md:flex-row">
        <div class="w-full md:w-1/2">
            <h2 class="text-slate-700 text-4xl mb-4">
                Why me?
            </h2>

            <div v-show="activeTab == 'quality'">
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

            <div v-show="activeTab == 'certification'">
                <h3 class="text-slate-700 text-2xl mb-4">
                    Certification
                </h3>
                <p class="text-slate-700 text-xl">
                   We use only certified materials and construction elements, at the end of the construction you receive from us 
                   Certificates and Inspection Reports for the approval procedure.
                </p>
            </div>

            <div v-show="activeTab == 'tradition'">
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

            <div v-show="activeTab == 'garantie'">
                <h3 class="text-slate-700 text-2xl mb-4">
                    Garantie
                </h3>
                <p class="text-slate-700 text-xl">
                    The quality of the construction of the house will guarantee you at least 50 years of durability. 
                    We provide standard warranties for structural elements, works, technologies and subcontractors' deliveries.
                </p>
            </div>

            <div v-show="activeTab == 'service'">
                <h3 class="text-slate-700 text-2xl mb-4">
                    Service
                </h3>
                <p class="text-slate-700 text-xl">
                    We take care of our customers not only during the warranty period, but we also provide you with 
                    after-warranty service and care for the flawless and comfortable use of your home.
                </p>
            </div>
        </div>

        <div class="w-full flex justify-center items-center content-center md:w-1/2">
            <div class="relative w-full h-80">
                <div class="triangle-1"
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
                     v-on:click="switchTab('certification')"
                >
                    <div class="inner-triangle">

                    </div>
                </div>
                <div class="triangle-3"
                     v-on:click="switchTab('tradition')"
                >
                    <div class="inner-triangle">

                    </div>
                </div>
                <div class="triangle-4"
                     v-on:click="switchTab('garantie')"
                >
                    <div class="inner-triangle">

                    </div>
                </div>
                <div class="triangle-5"
                     v-on:click="switchTab('service')"
                >
                    <div class="inner-triangle">

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
    @mixin triangle {
        width: 0;
        height: 0;
        border-top: 100px solid transparent;
        border-bottom: 100px solid transparent;
        border-right: 137px solid rgb(251,191,35);

        position: absolute;
        top: 0;
        left: 0;

        transition: all .3 ease;
        transition: transform 0.3s ease;

        cursor: pointer;

        // &:hover {
        //     border-top: 115px solid transparent;
        //     border-bottom: 115px solid transparent;
        //     border-right: 140px solid red;
        // }
    }

    .inner-triangle {
        position: relative;
        top: -100px;
        left: 2px;
        width: 0;
        height: 0;
        border-top: 100px solid transparent;
        border-bottom: 100px solid transparent;
        border-right: 135px solid rgb(16 185 129);

        transition: all .3 ease;

        // &:hover {
        //     border-top: 110px solid transparent;
        //     border-bottom: 110px solid transparent;
        //     border-right: 138px solid blue;
        // }
    }

    .triangle-1 {
        @include triangle;
        transform: rotate(126deg) translateY(0%) translateX(50%);

        &:hover {
            transform: rotate(126deg) translateY(0%) translateX(60%);
        }
    }

    .triangle-2 {
        @include triangle;
        transform: rotate(198deg) translateY(0%) translateX(50%);

        &:hover {
            transform: rotate(198deg) translateY(0%) translateX(60%);
        }
    }

    .triangle-3 {
        @include triangle;
        transform: rotate(270deg) translateY(0%) translateX(50%);

        &:hover {
            transform: rotate(270deg) translateY(0%) translateX(60%);
        }
    }

    .triangle-4 {
        @include triangle;
        transform: rotate(342deg) translateY(0%) translateX(50%);

        &:hover {
            transform: rotate(342deg) translateY(0%) translateX(60%);
        }
    }

    .triangle-5 {
        @include triangle;
        transform: rotate(54deg) translateY(0%) translateX(50%);

        &:hover {
            transform: rotate(54deg) translateY(0%) translateX(60%);
        }
    }
</style>