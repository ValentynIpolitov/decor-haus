<template>
    <vue-cookie-accept-decline :debug="false" :disableDecline="false" :showPostponeButton="false"
        @clicked-accept="cookieClickedAccept" @clicked-decline="cookieClickedDecline"
        @clicked-postpone="cookieClickedPostpone" @removed-cookie="cookieRemovedCookie" @status="cookieStatus"
        elementId="myPanel1" position="bottom-left" ref="myPanel1" transitionName="slideFromBottom" type="floating">

        <!-- Optional -->
        <template #postponeContent>&times;</template>

        <!-- Optional -->
        <template #message>
            <p class="text-slate-700 text-xl mb-4 text-center xl:text-left xl:mb-0 xl:mr-12">
                We use cookies 🍪 to ensure you get the best experience on our website.
                <a class="text-amber-400" href="https://cookiesandyou.com/" target="_blank">Learn More...</a>
            </p>
        </template>

        <!-- Optional -->
        <template #acceptContent>Accept</template>
        
        <!-- Optional -->
        <template #declineContent>Decline</template>
    </vue-cookie-accept-decline>
</template>

<script>

</script>

<style lang="scss">
.cookie {
    z-index: 100;
    position: fixed;
    height: auto;
    width: 100%;
    bottom: 0;
    left: 0;
    background-color: white;
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
    padding: 20px 10px;

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
                padding: 1rem 3rem;
                border-radius: 10px;
                color: white;
                text-transform: uppercase;
                font-weight: 600;
                cursor: pointer;

                transition-property: all;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                transition-duration: 150ms;
                width: 100%;
                // max-width: 200px;

                &--accept {
                    background-color: rgb(251,191,35) !important;
                    border: 2px solid rgb(251,191,35);

                    &:hover {
                        color: rgb(251,191,35);
                        background-color: white !important;
                        border: 2px solid rgb(251,191,35);
                    }
                }

                &--decline {
                    background-color: white;
                    border: 2px solid rgb(251,191,35);
                    color: rgb(251,191,35);
                    margin-bottom: 10px;

                    &:hover {
                        color: white;
                        background-color: rgb(251,191,35);
                    }
                }
            }
        }
    }

    @media only screen and (min-width: 640px) {
        .cookie__floating__buttons {
            display: flex;
            justify-content: space-between;
            align-content: center;
            align-items: center;
            gap: 10px;

            button {
                margin-bottom: 0;
            }
        }
    }

    @media only screen and (min-width: 1280px) {
        .cookie__floating__wrap {
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
        }
    }
}
</style>