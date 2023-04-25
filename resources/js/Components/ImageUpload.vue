<template>
    <n-config-provider :theme="darkTheme">
    <n-button @click="showModal = true">
        Start Me up
    </n-button>
    <n-modal v-model:show="showModal">
        <n-card
            style="width: 600px"
            title="Modal"
            :bordered="false"
            size="huge"
            role="dialog"
            aria-modal="true"
        >
            <template #header-extra>
                <n-upload
                    :show-upload-list="false"
                    accept="image/*"
                    @change="handleFileChange"
                >
                    <n-button>Upload File</n-button>
                </n-upload>
            </template>
            <VuePictureCropper
                :boxStyle="{
                  width: '100%',
                  height: '100%',
                  backgroundColor: '#f8f8f8',
                  margin: 'auto',
                }"
                :img="imagePreview"
                :options="{
                  viewMode: 1,
                  dragMode: 'crop',
                  aspectRatio: 1,
                }"
            />
            <n-button @click="getResult">Crop</n-button>
        </n-card>
    </n-modal>
    </n-config-provider>
</template>
<script setup>
import {reactive, ref} from "vue";
import {darkTheme, NConfigProvider} from 'naive-ui'
import {NButton, NCard, NModal, NUpload} from "naive-ui";
import VuePictureCropper, { cropper } from 'vue-picture-cropper'
import axios from 'axios'

const showModal = ref(false);

const selectedFile = ref(null);
const imagePreview = ref(null);
const blobURL = ref(null);
const blobFile = ref(null);

const handleFileChange = (e) => {
    selectedFile.value = e.file.file
    imagePreview.value = URL.createObjectURL(e.file.file)
};

async function getResult() {
    if (!cropper) return
    const blob = await cropper.getBlob()
    if (!blob) return
    blobURL.value = URL.createObjectURL(blob)
    blobFile.value = blob
    saveAvatar()
}

const saveAvatar = () => {
    const formData = new FormData();
    formData.append('avatar', blobFile.value);

    axios.post(route('avatarUpload'), formData, {
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    }).then(res => {
        console.log(res)
    }).catch(err => {
        console.log(err)
    })

}


</script>
<style>
.preview-wrapper {
    display: flex;
    justify-content: center;
    margin: 32px 0;
}

.preview-wrapper img {
    max-width: 100%;
    max-height: 300px;
}
</style>
