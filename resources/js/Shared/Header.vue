<template>
    <section class="header">
        <!-- top bar -->
        <div class="top-bar py-8">
            <div class="container m-auto">
                <div class="flex justify-between content-center items-center">
                    <!-- social links -->
                    <div class="hidden md:block">
                        <a href="https://t.me/servus_ukraine" title="telegram" class="mr-2"><span class="fa fa-telegram"></span></a>
                        <a href="https://www.instagram.com/servus.ukraine/" title="Instagram" class="mr-2"><span class="fa fa-instagram"></span></a>
                        <a href="https://www.facebook.com/pages/%D0%A1%D0%B5%D1%80%D0%B2%D1%83%D1%81/174897179233857?ref=hl" title="Facebook" class="mr-2"><span class="fa fa-facebook"></span></a>
                        <a href="https://www.youtube.com/channel/UC945vgyx3C2pMhBYTE6SIPg" title="Youtube"><span class="fa fa-youtube"></span></a>
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

                    <!-- search -->
                    <div>
                        <span class="fa fa-search"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- header -->
        <header id="header" class="py-8" :class="{'sticky': isSticky}">
            <div class="container m-auto">
                <div class="flex justify-between content-center items-center">
                    <div class="w-40">
                        <img src="/images/logo.png" alt="">
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
        },

        methods: {
            updateSticky() {
                // Get the header
                var header = document.getElementById("header");

                // Get the offset position of the header
                var sticky = header.offsetTop;

                if (window.pageYOffset >= sticky) {
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

<!-- <style lang="scss">
    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
    }
</style> -->