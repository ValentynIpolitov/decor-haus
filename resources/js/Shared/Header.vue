<template>
    <section class="header z-50 absolute w-full top-0 left-0">
        <!-- top bar -->
        <div id="top_bar" class="top-bar py-8 z-50">
            <div class="container m-auto px-6">
                <div class="flex justify-between content-center items-center">
                    <!-- social links -->
                    <div>
                        <a href="https://t.me/servus_ukraine" title="telegram" class="white-text-shadow mr-4 text-white transition-all hover:text-amber-500"><span class="fa fa-telegram"></span></a>
                        <a href="https://www.instagram.com/servus.ukraine/" title="Instagram" class="white-text-shadow mr-4 text-white transition-all hover:text-amber-500"><span class="fa fa-instagram"></span></a>
                        <a href="https://www.facebook.com/pages/%D0%A1%D0%B5%D1%80%D0%B2%D1%83%D1%81/174897179233857?ref=hl" title="Facebook" class="white-text-shadow mr-4 text-white transition-all hover:text-amber-500"><span class="fa fa-facebook"></span></a>
                        <a href="https://www.youtube.com/channel/UC945vgyx3C2pMhBYTE6SIPg" title="Youtube" class="white-text-shadow transition-all text-white hover:text-amber-500"><span class="fa fa-youtube"></span></a>
                    </div>

                    <!-- contact info -->
                    <div class="flex flex-start content-center items-center">
                        <!-- phone number -->
                        <a href="tel:5819823246" class="hidden mr-4 text-white transition-all white-text-shadow hover:text-amber-500 md:block"> <span class="fa fa-phone white-text-shadow mr-2"> </span> 5819823246 </a>
                        
                        <!-- address -->
                        <a href="" class="mr-4 hidden text-white transition-all white-text-shadow hover:text-amber-500 md:block"> <span class="fa fa-location-dot white-text-shadow mr-2"></span> ДРОГОБЫЧ, УЛ. П. ОРЛИКА, 24 </a>
                        
                        <!-- language nutations -->
                        <span class="fa fa-globe white-text-shadow mr-4 text-white transition-all hover:text-amber-500"> </span>
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

        <header id="header" class="py-6 z-50" :class="{'is-sticky': isSticky}">
        <!-- header -->
            <div class="container m-auto px-6">
               <Nav />
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
        },

        methods: {
            updateSticky() {
                // Get the header
                var header = document.getElementById("header");

                // Get the offset position of the header
                var headerOffset = header.offsetTop;


                var topBar = document.getElementById("top_bar");

                var botBarOffset = topBar.offsetHeight;

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
        padding-top: 40px;

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