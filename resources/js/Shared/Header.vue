<template>
    <section class="header">
        <!-- top bar -->
        <div id="top_bar" class="top-bar py-8">
            <div class="container m-auto">
                <div class="flex justify-between content-center items-center">
                    <!-- social links -->
                    <div class="hidden md:block ">
                        <a href="https://t.me/servus_ukraine" title="telegram" class="mr-2 text-white transition-all hover:text-amber-500"><span class="fa fa-telegram"></span></a>
                        <a href="https://www.instagram.com/servus.ukraine/" title="Instagram" class="mr-2 text-white transition-all hover:text-amber-500"><span class="fa fa-instagram"></span></a>
                        <a href="https://www.facebook.com/pages/%D0%A1%D0%B5%D1%80%D0%B2%D1%83%D1%81/174897179233857?ref=hl" title="Facebook" class="mr-2 text-white transition-all hover:text-amber-500"><span class="fa fa-facebook"></span></a>
                        <a href="https://www.youtube.com/channel/UC945vgyx3C2pMhBYTE6SIPg" title="Youtube" class="mr-2  transition-all hover:text-amber-500"><span class="fa fa-youtube"></span></a>
                    </div>

                    <!-- contact info -->
                    <div class="flex flex-start content-center items-center">
                        <a href="tel:5819823246" class="mr-2"> <span class="fa fa-phone"> </span> 5819823246 </a>
                        <a href="" class="mr-2 hidden md:block"> <span class="fa fa-location-dot"></span> ДРОГОБЫЧ, УЛ. П. ОРЛИКА, 24 </a>
                        <span class="fa fa-globe mr-2"> </span>
                        <a href="" class="mr-2">
                            <img src="/images/ua.png" alt="">
                        </a>
                        <a href="">
                            <img src="/images/gb.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- header -->
        <header id="header" class="py-6" :class="{'is-sticky': isSticky}">
            <div class="container m-auto">
                <div class="flex justify-between content-center items-center">
                    <div class="flex justify-between content-center items-center">
                        <div class="w-24">
                            <img id="logo" class="w-full" src="/images/logo.png" alt="">
                        </div>

                        <div class="md:hidden">
                            <button @click="isOpen = !isOpen" type="button" class="block text-gray-500 hover:text-white focus:text-white focus:outline-none">
                                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                                    <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                                    <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div>
                        <Nav />
                    </div>
                </div>
            </div>
        </header>
    </section>
</template>

<script>
    import Nav from '../Shared/Nav.vue';

    export default {
        components: {Nav},

        data() {
            return {
                isSticky: false,
            }
        },

        mounted() {
            window.addEventListener('scroll', this.updateSticky);
                console.log('b');

        },

        methods: {
            updateSticky() {
                console.log('a');
                // Get the header
                var header = document.getElementById("header");

                // Get the offset position of the header
                var headerOffset = header.offsetTop;


                var topBar = document.getElementById("top_bar");

                var botBarOffset = topBar.offsetHeight;

                console.log('bo: '+botBarOffset);
                if (window.pageYOffset >= headerOffset && window.pageYOffset >= botBarOffset) {
                    this.isSticky = true;
                    // header.classList.add("sticky")
                } else {
                    this.isSticky = false;
                    // header.classList.remove("sticky");
                }
            },
        },
    }


</script>

<style lang="scss">
    .is-sticky {
        position: fixed;
        top: 0;
        width: 100%;

        background-color: #000;
        opacity: .8;

        transition: all .2s ease, background-position 1ms;

        padding-top: 0.5rem;
        padding-bottom: 0.5rem;

        #logo {
            transform: scale(.7);
            transition: all linear .2s
        }
    }

    #logo {
        transition: all linear .2s
    }

    header {
        transition: all .2s ease, background-position 1ms;
    }
</style>