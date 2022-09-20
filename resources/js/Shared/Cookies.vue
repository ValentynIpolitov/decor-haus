<template>
    <vue-cookie-accept-decline 
        :debug="false" 
        :disableDecline="false" 
        :showPostponeButton="false"
        @clicked-accept="cookieClickedAccept" 
        @clicked-decline="cookieClickedDecline"
        @clicked-postpone="cookieClickedPostpone" 
        @removed-cookie="cookieRemovedCookie" 
        @status="cookieStatus"
        elementId="myPanel1" 
        position="bottom-left" 
        ref="myPanel1" 
        transitionName="slideFromBottom" 
        type="floating">

        <!-- Optional -->
        <template #postponeContent>&times;</template>

        <!-- Optional -->
        <template #message>
            We use cookies 🍪 to ensure you get the best experience on our website.
            <a href="https://cookiesandyou.com/" target="_blank">Learn More...</a>
        </template>

        <!-- Optional -->
        <template #declineContent>Opt Out</template>

        <!-- Optional -->
        <template #acceptContent>Got It!</template>
    </vue-cookie-accept-decline>
</template>

<script>

</script>

<style lang="scss">
.cookie {
    // z-index: 10;
    // position: absolute;
    // height: 100px;
    // width: 100%;
    // bottom: 0;
    // left: 0;
    // background-color: white;

    // Bar style
    &__bar {
        &--bottom {}

        &--top {}

        &__postpone-button {}

        &__content {}

        &__buttons {

            &__button {
                &--accept {}

                &--decline {}
            }
        }
    }

    // Floating style
    &__floating {
        &--bottom-left {}

        &--bottom-right {}

        &--top-right {}

        &--top-left {}

        &__postpone-button {}

        &__content {}

        &__buttons {

            &__button {
                &--accept {}

                &--decline {}
            }
        }
    }
}
</style>