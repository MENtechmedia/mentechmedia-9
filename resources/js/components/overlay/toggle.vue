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
                eventsHub.$emit(`overlay:toggle:${this.identifier}`);
            }
        }
    }
</script>