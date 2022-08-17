<template>
    <div class="flex flex-col w-full">
        <!-- Tabs labels -->
        <div class="w-full flex flex-col justify-start items-center content-center lg:flex-row items-stretch">
            <div class="w-full px-12 py-8 rounded-xl cursor-pointer mb-4 lg:mr-4 transition-all hover:text-amber-400 hover:border-amber-400 hover:border-2 text-2xl uppercase text-center flex items-center content-center justify-center" 
                v-bind:class="{'border-amber-400 border-2 text-amber-400': activeTab === 'speed', 'border-2 border-slate-700 text-slate-700': activeTab != 'speed'}" 
                v-on:click="switchTab('speed')"
            >
                <i class="fa-solid fa-gauge-high text-4xl mr-2"></i>
                Speed
            </div>

            <div class="w-full px-12 py-8 rounded-xl cursor-pointer mb-4 lg:mr-4 transition-all hover:text-amber-400 hover:border-amber-400 hover:border-2 text-2xl uppercase text-center flex items-center content-center justify-center" 
                v-bind:class="{'border-amber-400 border-2 text-amber-400': activeTab === 'tradition', 'border-2 border-slate-700 text-slate-700': activeTab != 'tradition'}" 
                v-on:click="switchTab('tradition')"
            >
                <i class="fa-solid fa-hand-back-fist text-4xl mr-2"></i>
                Tradition
            </div>
        </div>

        <!-- Tabs content -->
        <div>
            <div v-show="activeTab == 'speed'">
                <p class="text-slate-700 text-xl">
                    An unbeatable advantage of our houses is the customized production in the factory and the completion 
                    exactly according to the production project on the land. Dry processes allow you to occupy your 
                    home as soon as construction is complete, regardless of the time of year.
                </p>
            </div>

            <div v-show="activeTab == 'tradition'">
                <p class="text-slate-700 text-xl mb-4">
                    The Structural Insulated Panels (SIPs) technology that forms the basis of the house's rough construction 
                    has been tested by sixty years of use abroad. It accounts for up to 80% of new construction in Canada 
                    and nearly 60% in Europe.
                </p>
                <p class="text-slate-700 text-xl">
                    This progressive method of building houses is becoming increasingly popular 
                    because of its undeniable advantages determining fast and precise construction, high comfort, healthy 
                    ecological and economical living.
                </p>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            activeTab: 'speed'
        };
    },

    methods: {
        switchTab(tabName) {
            this.activeTab = tabName;
        }
    }
};

</script>
