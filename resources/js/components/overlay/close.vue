<template>
    <div class="inline-block flex items-center justify-center relative z-50" @click="close()">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props: ['identifier'],
        created() {
            const onEscape = (e) => {

                if (e.keyCode === 27) {
                    eventsHub.$emit(`overlay:close:${this.identifier}`);
                }
            };

            document.addEventListener('keydown', onEscape);

            this.$once('hook:destroyed', () => {
                eventsHub.$emit(`overlay:close:${this.identifier}`)

            });
        },
        methods: {
            close() {

                setTimeout(() => {
                    eventsHub.$emit(`overlay:close:${this.identifier}`)
                });
            }
        }
    }
</script>