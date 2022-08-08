<template>
    <nav class="navbar z-50">
        <div class="w-24">
            <img id="logo" class="w-full nav-logo" src="/images/logo.png" alt="">
        </div>

        <ul class="nav-menu z-50">
            <li class="nav-item white-text-shadow">
                <NavLink :href="route('homepage')" :active="$page.component === 'Home'"  >Home</NavLink>
            </li>
            <li class="nav-item white-text-shadow">
                <NavLink :href="route('technologies')" :active="$page.component === 'Technologies'"  >Technologies</NavLink>
            </li>
            <li class="nav-item white-text-shadow">
                <NavLink :href="route('house-plans')" :active="$page.component === 'HousePlans'"  >House Plans</NavLink>
            </li>
            <li class="nav-item white-text-shadow">
                <NavLink :href="route('gallery')" :active="$page.component === 'Gallery'"  >Gallery</NavLink>
            </li>
            <li class="nav-item white-text-shadow">
                <NavLink :href="route('prices')" :active="$page.component === 'Prices'"  >Prices</NavLink>
            </li>
            <li class="nav-item white-text-shadow">
                <NavLink :href="route('contact')" :active="$page.component === 'Contact'"  >Contact</NavLink>
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
    
    export default {
        components: {NavLink},

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

<style lang="scss">
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
            top: 13rem;
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