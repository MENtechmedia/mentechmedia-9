<template>
    <div>
        <label class="image_upload relative">
            <div class="flex flex-col items-center flex-wrap relative">

                <div class="border border-gray-200 mb-4 w-64 h-64 overflow-hidden rounded-sm bg-white relative">
                    <div class="z-50 bg-tangarine-500 rounded w-10 h-10 flex items-center justify-center absolute top-0 right-0 mt-4 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17.9" height="18.2" viewBox="0 0 17.9 18.2">
                            <path id="path" d="M40,573.1,51,562l3.8,3.8L43.7,576.9H40Zm17.7-10.3-1.8,1.8-3.8-3.8,1.8-1.8a.967.967,0,0,1,1.4,0l2.3,2.3a.908.908,0,0,1,.3.7C57.9,562.3,57.9,562.7,57.7,562.8Z" transform="translate(-40 -558.7)" fill="#fff"/>
                        </svg>
                    </div>
                    <div class="w-64 h-64 p-2 flex items-center justify-center ">
                        <img v-if="innerImageUrl !== null" ref="imagePlaceholder" class="w-full h-full object-cover" :src="innerImageUrl">
                        <p v-else class="mb-6">Nog geen afbeelding geupload.</p>
                    </div>


                </div>

                <input @change="showImagePreview" ref="fileInput" type="file" :name="name">
            </div>
        </label>

    </div>
</template>

<script>
    export default {
        props: ['imageUrl', 'name'],
        data() {
            return {
                innerImageUrl: null,
            }
        },
        mounted() {
            this.innerImageUrl = this.imageUrl;
        },

        methods: {
            loadFile(event) {
                this.innerImageUrl = URL.createObjectURL(event.target.files[0]);
                this.$refs.imagePlaceholder.onload = function() {
                    URL.revokeObjectURL(this.innerImageUrl) // free memory
                }
            },

            showImagePreview(e) {
                this.loadFile(e);
                this.filename = collect(e.target.value.split('\\')).last();

                if(this.filename) {
                    toastr.success('Bestand succesvol geselecteerd.');
                }
            }
        }
    }
</script>