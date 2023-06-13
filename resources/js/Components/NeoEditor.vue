<template>
    <QuillEditor theme="snow" :options="options" v-model:content="editorContent"/>
</template>

<script setup>
import {QuillEditor, Quill} from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import ImageUploader from 'quill-image-uploader';
import axios from 'axios'
import ResizeModule from "@ssumo/quill-resize-module";
import {ref, watch} from "vue";

Quill.register('modules/imageUploader', ImageUploader);
Quill.register("modules/resize", ResizeModule);

const options = {
    modules: {
        toolbar: {
            container: [
                ['link', 'image'],
                ['bold', 'italic', 'underline', 'strike'],
                [{'header': 1}, {'header': 2}],
                [{'list': 'ordered'}, {'list': 'bullet'}],
                [{'script': 'sub'}, {'script': 'super'}],
                [{'indent': '-1'}, {'indent': '+1'}],
                [{'direction': 'rtl'}],

                [{'size': ['small', false, 'large', 'huge']}],
                [{'header': [1, 2, 3, 4, 5, 6, false]}],

                [{'color': []}, {'background': []}],
                [{'align': []}],

                ['clean']
            ],
        },
        imageUploader: {
            upload: (file) => {
                return new Promise((resolve, reject) => {
                    const formData = new FormData()
                    formData.append('image', file)

                    axios.post(route('thread.uploadFile'), formData)
                        .then(response => {
                            const imageUrl = response.data.url
                            resolve(imageUrl)
                        })
                        .catch(error => {
                            reject('Upload failed')
                            console.error('Error:', error)
                        })
                });
            },
        },
        resize: {
            locale: {
                altTip: "按住alt键比例缩放",
                inputTip: "回车键确认",
                floatLeft: "Ձախ",
                floatRight: "Աջ",
                center: "|",
                restore: "Հետ",
            },
        },
    }
}

const editorContent = ref('');

const emits = defineEmits(['update:modelValue']);

watch(editorContent, (newValue) => {
    emits('update:modelValue', newValue);
});
</script>

<style >
.ql-container .ql-editor {
    color: white;
}
</style>
