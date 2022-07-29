<template>
    <nav>
        <ul class="flex justify-between">
            <li class="mr-6">
                <NavLink :href="route('homepage')" :active="$page.component === 'Home'"  >Home</NavLink>
            </li>

            
            <li class="mr-6">
                <NavLink :href="route('technologies')" :active="$page.component === 'Technologies'"  >Technologies</NavLink>
            </li>

            <li class="mr-6">
                <NavLink :href="route('house-plans')" :active="$page.component === 'HousePlans'"  >House Plans</NavLink>
            </li>
            
            <li class="mr-6">
                <NavLink :href="route('gallery')" :active="$page.component === 'Gallery'"  >Gallery</NavLink>
            </li>

            <li class="mr-6">
                <NavLink :href="route('prices')" :active="$page.component === 'Prices'"  >Prices</NavLink>
            </li>

            <li>
                <NavLink :href="route('contact')" :active="$page.component === 'Contact'"  >Contact</NavLink>
            </li>
        </ul>
    </nav>
</template>

<script>
    import NavLink from './NavLink.vue';
    
    export default {
        components: {NavLink}
    }
</script>