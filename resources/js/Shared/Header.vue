<template>
    <section class="header z-50 absolute w-full top-0 left-0">
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

                if (window.pageYOffset > headerOffset) {
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