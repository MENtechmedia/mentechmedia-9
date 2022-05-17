<template>
    <div class="inline-block" @click="open()">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props: ['identifier'],
        methods: {
            open() {

                eventsHub.$emit(`overlay:open:${this.identifier}`)
            }
        }
    }
</script>