<template>
    <nav class="navbar z-50">
        <div class="w-40">
            <NavLink :href="route('homepage')">
                <img id="logo" class="w-full nav-logo" src="/images/logo_1_white_active.svg" alt="">
            </NavLink>
        </div>

        <ul class="nav-menu z-50">
            <li class="nav-item white-text-shadow hover-underline-animation">
                <NavLink :href="route('homepage')" @click="closeMenu()" :active="$page.component === 'Home'"  >{{ __('nav_home') }}</NavLink>
            </li>
            <li class="nav-item white-text-shadow hover-underline-animation">
                <NavLink :href="route('technologies')" @click="closeMenu()" :active="$page.component === 'Technologies'"  >{{ __('nav_sip') }}</NavLink>
            </li>
            <li class="nav-item white-text-shadow hover-underline-animation">
                <NavLink :href="route('projects')" @click="closeMenu()" :active="$page.component === 'Projects'"  >{{ __('nav_projects') }}</NavLink>
            </li>
            <li v-if="this.$page.props.locale !== 'ua'" class="nav-item white-text-shadow hover-underline-animation" id="serv">
                <NavLink :href="route('materials')" @click="closeMenu()" :active="$page.component === 'Services'" >{{ __('nav_service') }}</NavLink>
            </li>
            <li class="nav-item white-text-shadow hover-underline-animation">
                <NavLink :href="route('contact')" @click="closeMenu()" :active="$page.component === 'Contact'"  >{{ __('nav_contact') }}</NavLink>
            </li>
            <li class="nav-item">
                <LanguageSelector/>
            </li>
        </ul>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</template>

<script>
    import NavLink from './NavLink.vue';
    import LanguageSelector from './LanguageSelector.vue';

    export default {
        components: {NavLink, LanguageSelector},

        data() {

        },

        mounted() {
            const hamburger = document.querySelector(".hamburger");
            const navMenu = document.querySelector(".nav-menu");

            hamburger.addEventListener("click", this.mobileMenu);

            const navLink = document.querySelectorAll(".nav-link");
            navLink.forEach(n => n.addEventListener("click", this.closeMenu));
        },

        methods: {
            mobileMenu() {
                const hamburger = document.querySelector(".hamburger");
                hamburger.classList.toggle("active");

                const navMenu = document.querySelector(".nav-menu");
                navMenu.classList.toggle("active");
            },

            closeMenu() {
                const hamburger = document.querySelector(".hamburger");
                hamburger.classList.remove("active");

                const navMenu = document.querySelector(".nav-menu");
                navMenu.classList.remove("active");
            }
        }
    }
</script>

<style lang="scss" scoped>
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .hamburger {
        display: none;
    }

    .bar {
        display: block;
        width: 25px;
        height: 3px;
        margin: 5px auto;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        background-color: white;
    }

    .nav-menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav-item {
        margin-left: 5rem;
        text-transform: uppercase;
    }

    .nav-link{
        font-size: 1.6rem;
        font-weight: 400;
        color: #475569;
    }

    .nav-link:hover{
        color: #482ff7;
    }

    .nav-logo {
        font-size: 2.1rem;
        font-weight: 500;
        color: #482ff7;
    }

    // when header sticky
    .is-sticky {
        .bar {
            color: rgb(245 158 11);
            background-color: rgb(245, 158, 11);
        }
    }

    @media only screen and (max-width: 1023px) {
        .nav-menu {
            position: fixed;
            background: black !important;
            left: -100%;
            top: 6rem;
            flex-direction: column;
            background-color: #fff;
            width: 100%;
            border-radius: 10px;
            text-align: center;
            transition: 0.3s;
            box-shadow:
                0 10px 27px rgba(0, 0, 0, 0.05);
        }
        .is-sticky .nav-menu {
            top: 4rem;
        }

        .nav-menu.active {
            left: 0;
        }

        .nav-item {
            margin: 2.5rem 0;
        }

        .hamburger {
            display: block;
            cursor: pointer;
        }

        .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger.active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }
    }
</style>

