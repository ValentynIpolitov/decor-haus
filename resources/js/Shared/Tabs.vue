<template>
    <div class="flex flex-col w-full">
        <div class="w-full flex flex-col justify-start items-center content-center lg:flex-row items-stretch">
            <div class="w-full border-amber-400 px-20 py-12 rounded-xl box-shadow cursor-pointer mb-4 lg:mr-4 transition hover:bg-amber-400 text-2xl uppercase text-center hover:text-white" 
                v-for="tab in tabs" :key="tab" 
                v-bind:class="{'bg-amber-400 text-white font-semibold': activeTab === tab, 'text-slate-700': activeTab != tab}" 
                v-on:click="switchTab(tab)"
            >
                <slot :name="tabHeadSlotName(tab)"> </slot>
            </div>
        </div>


        <div >
            <slot :name="tabPanelSlotName"> </slot>
        </div>
    </div>
</template>

<script>

export default {
    props: {
        initialTab: String,
        tabs: Array
    },

    data() {
        return {
            activeTab: this.initialTab
        };
    },

    computed: {
        tabPanelSlotName() {
            return `tab-panel-${this.activeTab}`;
        }
    },

    methods: {
        tabHeadSlotName(tabName) {
            return `tab-head-${tabName}`;
        },
        tabHeadSlotIcon(tabName) {
            return `tab-head-icon-${tabName}`;
        },

        switchTab(tabName) {
            this.activeTab = tabName;
        }
    }
};

</script>
