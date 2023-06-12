<script setup>
import {mdiStar} from '@mdi/js';
import axios from 'axios';
import {ref} from 'vue';
import BaseIcon from "@/Components/BaseIcon.vue";

const props = defineProps({
    threadId: Number,
    hasFavorite: Boolean,
});

const starColor = ref(props.hasFavorite ? 'yellow' : 'gray');

const addToFavorite = async () => {
    try {
        const response = await axios.post(route('addToFavorites'), {thread_id: props.threadId});
        starColor.value = response.data ? 'yellow' : 'gray';
    } catch (error) {

    }
};
</script>

<template>
    <div class="cursor-pointer">
        <BaseIcon :path="mdiStar" size="30" :fill="starColor" @click="addToFavorite"/>
    </div>
</template>
