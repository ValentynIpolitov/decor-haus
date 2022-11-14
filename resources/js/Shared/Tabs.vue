<template>
    <div class="flex flex-col w-full">
        <!-- Tabs labels -->
        <div class="w-full flex flex-col justify-start items-center content-center lg:flex-row items-stretch">
            <div class="w-full px-12 py-8 rounded-xl cursor-pointer mb-4 lg:mr-4 transition-all hover:text-amber-400 hover:border-amber-400 hover:border-2 text-2xl uppercase text-center flex items-center content-center justify-center" 
                v-bind:class="{'border-amber-400 border-2 text-amber-400': activeTab === 'speed', 'border-2 border-slate-700 text-slate-700': activeTab != 'speed'}" 
                v-on:click="switchTab('speed')"
            >
                <i class="fa-solid fa-gauge-high text-4xl mr-2"></i>
                {{ __('home_tabs_speed') }}
            </div>

            <div class="w-full px-12 py-8 rounded-xl cursor-pointer mb-4 lg:mr-4 transition-all hover:text-amber-400 hover:border-amber-400 hover:border-2 text-2xl uppercase text-center flex items-center content-center justify-center" 
                v-bind:class="{'border-amber-400 border-2 text-amber-400': activeTab === 'tradition', 'border-2 border-slate-700 text-slate-700': activeTab != 'tradition'}" 
                v-on:click="switchTab('tradition')"
            >
                <i class="fa-solid fa-hand-back-fist text-4xl mr-2"></i>
                {{ __('home_tabs_tradition') }}
            </div>
        </div>

        <!-- Tabs content -->
        <div class="relative">
            <transition  name="fade" mode="out-in">
                    <div key="1" v-if="activeTab == 'speed'">
                        <p class="text-slate-700 text-xl">
                            {{ __('home_tabs_speed_text') }}
                            
                        </p>
                    </div>
                    <div key="2" v-if="activeTab == 'tradition'">
                        <p class="text-slate-700 text-xl mb-4">
                            {{ __('home_tabs_tradition_text_1') }}
                            
                        </p>
                        <p class="text-slate-700 text-xl">
                            {{ __('home_tabs_tradition_text_2') }}
                            
                        </p>
                    </div>
            </transition>
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


<style lang="scss" scoped>
    .fade-enter-active,
    .fade-leave-active {
        transition: opacity 0.3s ease;
    }
    .fade-enter-from,
    .fade-leave-to {
        opacity: 0;
    }
</style>