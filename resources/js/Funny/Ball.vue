<template>
    <div id="ball" class="ball"></div>
</template>

<script>
    export default {


        mounted() {
            var f = document.getElementById('ball');
            
            document.addEventListener('click', function(ev){
                f.style.transform = 'translateY('+(ev.clientY-25)+'px)';
                f.style.transform += 'translateX('+(ev.clientX-25)+'px)';
            },false);
        }
    }
</script>

<style lang="scss">
    .ball {
        border-radius: 25px;
        width: 50px;
        height: 50px;
        background: #c00;
        position: absolute;
        top: 0;
        left: 0;
        transition: transform 1s;
    }
</style>