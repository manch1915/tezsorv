<script setup>
import { ref} from "vue";
import {darkTheme, NConfigProvider} from 'naive-ui'
import {NButton, NCard, NModal, NUpload} from "naive-ui";
import VuePictureCropper, { cropper } from 'vue-picture-cropper'
import axios from 'axios'

const showModal = ref(false);
const loading = ref(false);

const selectedFile = ref(null);
const imagePreview = ref(null);
const blobFile = ref(null);

const handleFileChange = (e) => {
    selectedFile.value = e.file.file
    imagePreview.value = URL.createObjectURL(e.file.file)
};

async function getResult() {
    if (!cropper) return
    const blob = await cropper.getBlob()
    if (!blob) return
    blobFile.value = blob
    saveAvatar()
}

const saveAvatar = () => {
    loading.value = true
    const formData = new FormData();
    formData.append('avatar', blobFile.value);

    axios.post(route('avatarUpload'), formData, {
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    }).then(res => {
        loading.value = false
        showModal.value = false
    }).catch(err => {
        console.log(err)
    })

}


</script>
<template>
    <n-config-provider :theme="darkTheme">
    <n-button class="w-full mt-2" @click="showModal = true">
        Upload pfp
    </n-button>
    <n-modal v-model:show="showModal">
        <n-card
            style="width: 600px"
            title="Upload pfp"
            :bordered="false"
            size="huge"
            role="dialog"
            aria-modal="true"
        >
            <n-upload
                :show-upload-list="false"
                accept="image/jpeg, image/png"
                @change="handleFileChange"
            >
                <n-button class="w-full">Upload Image</n-button>
            </n-upload>
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
            <n-button v-show="imagePreview !== null" class="w-full mt-5" :loading="loading" @click="getResult">Crop</n-button>
        </n-card>
    </n-modal>
    </n-config-provider>
</template>

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
.n-upload-trigger{
    width: 100%;
}
</style>
