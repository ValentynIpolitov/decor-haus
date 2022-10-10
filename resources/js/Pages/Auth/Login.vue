<template>
    <div class="login-wrapper">
        <BreezeValidationErrors class="mb-4" />
        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div class="heading">
            <h1>
                Prihlasit sa
            </h1>
            <p>
                This is Photoshop's version  of Lorem Ipsum. 
            </p>
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputWithDinamycLabels icon="/images/pages/login/login.png" id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" label="E-mail"/>
            </div>

            <div class="mt-4">
                <InputWithDinamycLabels icon="/images/pages/login/password.png" id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" label="Password"/>
            </div>

            <div class="forget-password">
                <p>
                    + zabudol som heslo vytvorit nove 
                </p>
            </div>

            <div class="flex items-center justify-end">
                <BreezeButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Prihlasenie
                </BreezeButton>
            </div>
        </form>
    </div>
</template>

<script>
import BreezeButton from '@/Components/Auth/Form/Button.vue'
import BreezeCheckbox from '@/Components/Auth/Form/Checkbox.vue'
import BreezeValidationErrors from '@/Components/Auth/Form/ValidationErrors.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import Guest from "@/Layouts/Guest";
import InputWithDinamycLabels from '@/Components/Auth/Form/InputWithDinamycLabels';

export default {
    layout: Guest,

    components: {
        BreezeButton,
        BreezeCheckbox,
        BreezeValidationErrors,
        Head,
        Link,
        InputWithDinamycLabels,
    },

    props: {
        canResetPassword: Boolean,
        status: String,
    },

    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false
            })
        }
    },

    methods: {
        submit() {
            this.form.post(this.route('login'), {
                onFinish: () => this.form.reset('password'),
            })
        }
    }
}
</script>

<style lang="scss" scoped>
    .login-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        align-items: center;
        min-height: 85vh;

        .heading {
            h1 {
                text-align: center;
                margin-bottom: 5px;
            }
            p {
                width: 383px;
                height: 19px;
                font-size: 14px;
                color: #030303;
                font-weight: 300;
                font-family: "Poppins";
                text-align: center;
                margin-bottom: 25px;
            }
        }

        form {
        
            .forget-password {
                p {
                    font-size: 14px;
                    line-height: 55px;
                    color: #199be2;
                    font-weight: 500;
                    font-family: "Poppins";
                    text-align: center;
                }
            }
        }

    }
</style>