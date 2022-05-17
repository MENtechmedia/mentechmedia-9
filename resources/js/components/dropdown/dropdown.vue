<template>
    <div class="relative z-20 w-full">
        <div @click="toggle()">
            <!--Button slot-->
            <slot></slot>
        </div>

        <transition name="fade">
            <!--Dropdown-->
            <div class="dropdown--contents  absolute top-0 right-0" v-if="open">
                <slot name="dropdown"></slot>
            </div>
        </transition>
    </div>
</template>
<style lang="scss">
    .dropdown--contents {
        top: 50px;
    }
</style>
<script>
    export default {
        props: ['showByDefault'],
        data() {
            return {
                open: this.showByDefault || false,
            }
        },

        methods: {
            toggle() {
                this.open = !this.open;
            }
        }


    }
</script>