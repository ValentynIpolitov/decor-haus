<template>
    <div class="custom-input">
        <input  :type="type" 
                :name="name" 
                :value="modelValue"
                @input="$emit('update:modelValue', $event.target.value)"
                :placeholder="placeholder"
                :id="id"            
                required
                :class="{'filled' : isFilled, 'withIcon' : icon}"
                :style="cssVars">
        
        <label for="{{$name}}">{{ label }}</label>
    </div>
</template>

<script>
import { defaults } from 'autoprefixer'

export default {
    props: {
        type: {
            type: String,
            default: 'text',
        },
        name: {
            type: String,
            default: null,
        },
        modelValue: {
            default: null,
        },
        placeholder: {
            default: null,
        },
        id: {
            default: null,
        },
        label: {
            default: null,
        },
        required: {
            type: String,
            default: null
        },
        icon: {
            default: null
        }
    },

    emits: ['update:modelValue'],
    mounted() {
        this.some();
        console.log('icon: '+this.icon)
    },
    computed: {
        cssVars() {
            if (this.icon) {
                return {
                    'background' : 'url('+this.icon+') no-repeat scroll calc(100% - 13px) 7px',
                    'padding-right': '30px'
                }
            }
        },
    },
    methods: {
        focus() {
            this.$refs.input.focus()
        },

        some() {
                let inputs =$('.custom-input input, .custom-input select');
                inputs.on('change keyup blur input', function(event) {
                    if ($(this).val() && $(this).val().length > 0) {
                        $(this).addClass('filled');
                    } else {
                        $(this).removeClass('filled');
                    }
                });
                inputs.each(function() {
                    if ($(this).val() && $(this).val().length > 0) {
                        $(this).addClass('filled');
                    }
                });
        }
    },
}
</script>

<style lang="scss" scoped>
    .custom-input {
        position: relative;
        input {
            border: 1px solid #c9c5c5;
            border-radius: 10px;
            width: 100%;
            height: 40px;
            color: #00081f;
            font-size: 14px;
            font-weight: 300;
            padding: 10px;
            
            &::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
                color: #00081f;
                font-size: 14px;
                font-weight: 300;
            }

            &:-ms-input-placeholder { /* Internet Explorer 10-11 */
                color: #00081f;
                font-size: 14px;
                font-weight: 300;
            }

            & ::-ms-input-placeholder { /* Microsoft Edge */
                color: #00081f;
                font-size: 14px;
                font-weight: 300;
            }

            @media (min-width: 992px) {
                padding: 15px 20px;
            }
        }

        input:focus ~ label, input.filled ~ label {
            display: block;
            transform: translateY(-30px);
            white-space: nowrap;
        }

        label {
            font-size: 14px;
            color: #000000;
            font-weight: 300;
            font-family: "Poppins";
            background: white;
            padding-left: 10px;
            position: absolute;
            margin: 0;
            top: 50%;
            left: 10px;
            transition: all .15s ease-out;
            transform: translateY(-50%);
        }
    }
</style>

