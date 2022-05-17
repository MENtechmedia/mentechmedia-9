<template>
    <div class="w-full">
        <slot></slot>
        <input @input="search($event.target.value)" value=""
               type="text"
               :placeholder="placeholder"
               name="phone"
               :class="classes">
    </div>
</template>

<script>
    import collect from 'collect.js';

    export default {
        props: ['value', 'searchAttributes', 'classes', 'placeholder'],
        data() {
            return {
                originalData: null,
            }
        },
        methods: {
            search(value) {
                this.storeCopyOfOriginalData();

                this.$emit(
                    'input',
                    this.originalData.filter((dataEntity) => {
                        return this.matchSearchAttributes(value, dataEntity);
                    }).toArray()
                );

            },

            matchSearchAttributes(value, dataEntity) {
                return collect(this.searchAttributes).filter((attribute) => {
                    let attributeValue = this.getEntityValueByAttribute(dataEntity, attribute);

                    return this.valueFoundInAttributeValue(value, attributeValue);
                }).count() > 0;
            },

            getEntityValueByAttribute(entity, attribute) {

                if(this.attributeIsNestedProperty(attribute)) {
                    return this.getNestedValueFromEntityByAttribute(entity, attribute);
                }

                return entity[attribute];
            },

            valueFoundInAttributeValue(value, attributeValue) {
                if(attributeValue === null || attributeValue === undefined) {
                    return false;
                }

                return attributeValue.toString().toLowerCase().includes(value.toLowerCase());
            },

            storeCopyOfOriginalData() {
                if(this.originalData === null) {
                    this.originalData = collect(this.value);
                }
            },

            attributeIsNestedProperty(attribute) {
                return attribute.includes('.');
            },

            getNestedValueFromEntityByAttribute(entity, attribute) {
                let nestedAttribute = attribute.split('.');

                let nestedEntities = entity[nestedAttribute[0]];

                if(this.nestedEntityHasMultipleValues(entity, nestedAttribute[0])) {
                    return this.combineMultipleValues(nestedEntities, nestedAttribute[1]);
                }

                return nestedEntities[nestedAttribute[1]];
            },

            nestedEntityHasMultipleValues(entity, attribute) {
                return collect(entity[attribute]).count() > 0;
            },

            combineMultipleValues(nestedEntities, attribute) {
                return collect(nestedEntities).map((nestedEntity) => {
                    return nestedEntity[attribute];
                }).implode(' ');
            }

        }
    }
</script>
