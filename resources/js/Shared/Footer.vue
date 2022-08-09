<template>
    <footer>
        <div class="container m-auto px-6 py-12 md:py-14">
            <div class="w-full flex flex-col justyfy-center items-center content-center">
                <!-- social links -->
                <div class="mb-8">
                    <a href="https://t.me/servus_ukraine" title="telegram" class="white-text-shadow mr-8 text-white transition-all hover:text-amber-500"><span class="fa fa-telegram text-2xl"></span></a>
                    <a href="https://www.instagram.com/servus.ukraine/" title="Instagram" class="white-text-shadow mr-8 text-white transition-all hover:text-amber-500"><span class="fa fa-instagram text-2xl"></span></a>
                    <a href="https://www.facebook.com/pages/%D0%A1%D0%B5%D1%80%D0%B2%D1%83%D1%81/174897179233857?ref=hl" title="Facebook" class="white-text-shadow mr-8 text-white transition-all hover:text-amber-500"><span class="fa fa-facebook text-2xl"></span></a>
                    <a href="https://www.youtube.com/channel/UC945vgyx3C2pMhBYTE6SIPg" title="Youtube" class="white-text-shadow transition-all text-white hover:text-amber-500"><span class="fa fa-youtube text-2xl"></span></a>
                </div>

                <!-- sitemap -->
                <div class="hidden mb-8 md:flex">
                    <ul>
                        <li class="white-text-shadow hover-underline-animation uppercase mr-8">
                            <NavLink :href="route('homepage')" :active="$page.component === 'Home'" class="text-amber-500" >Home</NavLink>
                        </li>
                        <li class="white-text-shadow hover-underline-animation uppercase mr-8">
                            <NavLink :href="route('technologies')" :active="$page.component === 'Technologies'"  class="text-amber-500">Explore SIP</NavLink>
                        </li>
                        <li class="white-text-shadow hover-underline-animation uppercase mr-8">
                            <NavLink :href="route('projects')" :active="$page.component === 'Projects'"  class="text-amber-500">Projects</NavLink>
                        </li>
                        <li class="white-text-shadow hover-underline-animation uppercase mr-8">
                            <NavLink :href="route('materials')" :active="$page.component === 'Materials'"  class="text-amber-500">Materials</NavLink>
                        </li>
                        <li class="white-text-shadow hover-underline-animation uppercase mr-8">
                            <NavLink :href="route('contact')" :active="$page.component === 'Contact'"  class="text-amber-500">Contact</NavLink>
                        </li>
                    </ul>
                </div>

                <!-- copyrtghts -->
                <div>
                    <p class="text-white">&copy; 2022 company name</p>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
    import NavLink from '../Shared/NavLink.vue';

    export default {
        components: {NavLink},
    }
</script>

<style lang="scss">
    footer {
        background-color: #1a1a1a;
    }
</style>