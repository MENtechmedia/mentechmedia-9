<template>
    <div class="" @click="toggle()">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props:['identifier'],
        methods: {
            toggle() {
                this.$store.commit('toggle');
            }
        }
    }
</script>