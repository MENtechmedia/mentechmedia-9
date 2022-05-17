<template>
    <div>
        <slot></slot>

        <select @input="sort($event.target.value)" v-model="selected" class="border border-gray-300 w-full bg-white rounded px-4 py-3 text-gray-700 font-bold text-sm focus:outline-none">
            <option v-for="(sorter, sorterNumber) in sorters" class="border-none" :value="sorterNumber">{{ sorter.label }}</option>
        </select>
    </div>
</template>

<script>
    import _ from 'lodash';

    import collect from 'collect.js';

    export default {
        props: ['value', 'sorters'],

        data() {
            return {
                originalData: null,
                selected: collect(this.sorters).keys().first(),
            }
        },
        watch: {
            value() {

                if(collect(this.value).count() !== this.originalData.count()) {
                    this.originalData = collect(this.value);
                    this.sort(this.selected);
                }
            }
        },

        mounted() {

            this.storeCopyOfOriginalData();
            this.sort(this.selected);
        },

        methods: {
            sort(sorterNumber) {
                let selected = this.sorters[sorterNumber];
                let sorter = selected.sorter;

                sorter.setData(this.originalData);
                sorter.setAttribute(selected.attribute);

                this.$emit('input', sorter.sort());
            },

            storeCopyOfOriginalData() {
                if(this.originalData === null) {
                    this.originalData = collect(this.value);
                }
            },


        }
    }
</script>
