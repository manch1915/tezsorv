<script setup>
import {ref, toRefs} from 'vue'
import {mdiStar} from '@mdi/js'
import axios from 'axios'
import BaseIcon from "@/Components/BaseIcon.vue"

const props = toRefs(defineProps({
    threadId: {type: Number},
    hasFavorite: {type: Boolean}
}))

let starColor = ref(props.hasFavorite.value ? 'yellow' : 'gray')
const addToFavorite = async () => {
    axios
        .post(route('addToFavorites'), {thread_id: props.threadId.value})
        .then(response => {
            starColor.value = response.data ? 'yellow' : 'gray'
        })
        .catch((error) => {
            console.error(error)
        })
}

</script>

<template>
    <div class="cursor-pointer">
        <BaseIcon :path="mdiStar" size="30" :fill="starColor.value" @click="addToFavorite"/>
    </div>
</template>
