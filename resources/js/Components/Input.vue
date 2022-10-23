<script setup>
import { onMounted, ref } from 'vue';

defineProps(['modelValue', 'type', 'label']);

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});
</script>

<template>
    <div class="inputBox">
        <input required :type="type" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input">
        <span>{{label}}</span>
        <i></i>
    </div>
</template>

<style lang="scss">
    .inputBox {
        position: relative;
        width: 100%;
        background: transparent;
        border: none;
        padding: 0;
        
        input {
            width: 100%;
            background: transparent;
            color: #fff;
            border: none;
            outline: none;
            box-shadow: none;
            font-size: 1em;
            letter-spacing: 0.1em;

            &:focus {
                box-shadow: none;
            }

            &:valid ~ span, &:focus ~ span {
                color: rgb(245 158 11);
                transform: translateY(-23px);
                font-size: 0.8em;
            }
        }
         
        span {
            position: absolute;
            left: 0;
            padding: 10px 0 5px;
            color: rgba($color: white, $alpha: 0.9);
            text-transform: uppercase;
            pointer-events: none;
            letter-spacing: 0.1em;
            transition: 0.5s;
            font-size: 1em;
        }

        i {
            position: absolute;
            width: 100%;
            height: 2px;
            background: white;
            left: 0;
            bottom: 0;
            overflow: hidden;

            &::before {
                content: '';
                position: absolute;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, rgb(251, 191, 36),  rgb(245, 158, 11));
                animation: animate 1s linear infinite;
            }
        }
    }

    .inputBox input:valid ~ i::before,
    .inputBox input:focus ~ i::before {
        left: 0;
    }

    @keyframes animate {
        0%{
            background-position-x: 0;
        }
        100%{
            background-position-x: 250px;

        }
    }
</style>
