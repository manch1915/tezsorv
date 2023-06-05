<script setup>
import BaseIcon from "@/Components/BaseIcon.vue";
import { mdiStar } from '@mdi/js';
import axios from 'axios';
import {ref} from "vue";

const props = defineProps({
    threadId: Number,
    hasFavorite: Boolean,
})

const starColor = ref(props.hasFavorite ? 'yellow' : 'gray')

const addToFavorite = () => {
    axios.post(route('addToFavorites'), {thread_id: props.threadId})
        .then(res => {
            if (res.data === true){
                starColor.value = 'yellow'
            }else {
                starColor.value = 'gray'
            }
        })
}
</script>

<template>
    <div class="cursor-pointer">
        <BaseIcon :path="mdiStar" size="30" :fill="starColor" @click="addToFavorite"/>
    </div>
</template>


<style scoped>

</style>
