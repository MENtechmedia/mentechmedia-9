<template>
    <!--Overlay background-->
    <div>
        <transition :name="`${directionFrom}-slide-fade`">
            <div v-show="visible && renderInOverlay()" class="overlay-background fixed  h-full flex flex-col justify-end w-full z-40" :class="directionFrom">
                <!--Overlay content area-->
                <div class="overlay-content-area  w-full h-full flex flex-col justify-end">
                    <slot></slot>
                </div>
            </div>
        </transition>

        <div v-if="!renderInOverlay()">
            <slot></slot>
        </div>
    </div>
</template>
<style  lang="scss" scoped>
    .overlay-background {
        background: rgba(0,0,0,0.5);
    }

    .overlay-content-area {}

    .bottom {bottom: 68px; left: 0px;}
    .bottom--no-spacing {bottom: 0px; left: 0px; };
    .right {right: 0px; top:0px; }
    .left {left: 0px; top: 0px; }
    .top {top: 0px; left: 0px;}

    .bottom-slide-fade-enter, .bottom-slide-fade-leave-to { opacity: 0; margin-bottom: -100px; }
    .bottom-slide-fade-enter-active, .bottom-slide-fade-leave-active {transition: 0.3s;}

    .bottom--no-spacing-slide-fade-enter, .bottom--no-spacing-slide-fade-leave-to { opacity: 0; margin-bottom: -100px; }
    .bottom--no-spacing-slide-fade-enter-active, .bottom--no-spacing-slide-fade-leave-active {transition: 0.3s;}

    .right-slide-fade-enter, .right-slide-fade-leave-to { opacity: 0; margin-right: -100px; }
    .right-slide-fade-enter-active, .right-slide-fade-leave-active {transition: 0.3s;}

    .left-slide-fade-enter, .left-slide-fade-leave-to { opacity: 0; margin-left: -100px; }
    .left-slide-fade-enter-active, .left-slide-fade-leave-active {transition: 0.3s;}

    .top-slide-fade-enter, .top-slide-fade-leave-to { opacity: 0; margin-top: -100px; }
    .top-slide-fade-enter-active, .top-slide-fade-leave-active {transition: 0.3s;}

</style>
<script>
    export default {
        props: ['identifier', 'directionFrom', 'open', 'notOnScreens'],
        data() {
            return {
                visible: this.open || false,
            }
        },

        mounted() {

            eventsHub.$on(`overlay:close:${this.identifier}`, () => {
                this.visible = false;
                document.body.style.overflow = "auto";
                document.body.style.height = "auto";
                eventsHub.$emit(`overlay:isClosed:${this.identifier}`);
            });

            eventsHub.$on(`overlay:open:${this.identifier}`, () => {
                console.log('testjes')
                this.visible = true;
                eventsHub.$emit(`overlay:isOpen:${this.identifier}`);

                document.body.style.overflow = "hidden";
                document.body.style.height = "100%";
            });

            eventsHub.$on(`overlay:toggle:${this.identifier}`, () => {
                this.visible = !this.visible;
                if(this.visible) {
                    eventsHub.$emit(`overlay:isOpen:${this.identifier}`);
                    document.body.style.overflow = "hidden";
                    document.body.style.height = "100%";
                } else {
                    eventsHub.$emit(`overlay:isClosed:${this.identifier}`);
                    document.body.style.overflow = "auto";
                    document.body.style.height = "100%";
                }
            });

        },

        methods: {
            renderInOverlay() {
                if(this.notOnScreens === undefined) {
                    return true;
                }

                let screens = {
                    xxs: 375,
                    xs: 375,
                    sm: 640,
                    md: 768,
                    lg: 1024,
                    xl: 1280,
                };

                let xxs = getViewPortWidth() >= screens['xxs'] && this.notOnScreens.includes('xxs');
                let xs = getViewPortWidth() >= screens['xs'] && this.notOnScreens.includes('xs');
                let sm = getViewPortWidth() >= screens['sm'] && this.notOnScreens.includes('sm');
                let md = getViewPortWidth() >= screens['md'] && this.notOnScreens.includes('md');
                let lg = getViewPortWidth() >= screens['lg'] && this.notOnScreens.includes('lg');
                let xl = getViewPortWidth() >= screens['xl'] && this.notOnScreens.includes('xl');


                if(xxs) {
                    return false;
                } else if(xs) {
                    return false;
                } else if(sm) {
                    return false;
                } else if(md) {
                    return false;
                } else if(lg) {
                    return false;
                }

                if(xl) {
                    return false;
                }

                return true;
            }
        }
    }
</script>