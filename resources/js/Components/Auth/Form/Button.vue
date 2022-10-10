<template>
    <button
        class="btn btn-primary items-center text-white"
        :type="type"
        :disabled="processing" :class="{'disabled': processing}">
        <slot/>
    </button>
</template>

<script>

export default {
    name: 'BreezeButton',
    props: {
        type: {
            type: String,
            default: 'submit',
        },
        buttonClass: {
            type: String,
            default: 'btn-primary'
        },
        processing: Boolean
    },
    mounted() {
        console.log ('sdas: '+this.buttonClass);
    }
}
</script>

<style lang="scss" scoped>
    button {
        width: 100%;
        max-width: 395px;
        font-size: 14px;
        color: #ffffff;
        font-weight: 500;
        padding-top: 11px;
        padding-bottom: 11px;
    }
</style>