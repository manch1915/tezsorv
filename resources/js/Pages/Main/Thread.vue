<script setup>
import {NConfigProvider, NInput, darkTheme, NSelect, NButton} from "naive-ui";
import NeoEditor from "@/Components/NeoEditor.vue";
import {computed, ref, watch} from "vue";
import axios from 'axios';
import MainLayout from "@/Layouts/MainLayout.vue";

const props = defineProps({
    auth: Object,
    slideList: Object
})
const editorRef = ref()
const title = ref('')
const category = ref(null)
const subcategory = ref(null)

const categories = computed(() => props.slideList.map(function (num){
    return {
        label: num.name,
        value: num.id,
    }
}));

const subcategories = ref({})

const select = () => {
    if (category.value === null) {
        return;
    }
    subcategories.value = props.slideList[category.value - 1].subcategories
        .map((subcategory) => ({
            label: subcategory.name,
            value: subcategory.id,
        }))
        .reverse();
    subcategory.value = null
};

watch(category, select);

const saveThread = (data) => {
    axios.post(route('thread.store'), {
        title: title.value,
        category: category.value,
        subcategory: subcategory.value,
        body: JSON.stringify(data)
    })
        .then(res => console.log(res))
        .catch(error => console.log(error))
}
const getEditorData = () => {
    editorRef.value.saveData()
}
defineOptions({layout: MainLayout})
</script>
<template>
        <div class="h-screen">
        <section class="headerMover bg-mine-second rounded">
            <div class="w-full p-6">

                <h1 class="text-white bold text-lg">Վերնագիր։ </h1>
                <h3 class="text-white">Մի քանի բառով ձևակերպեք, թե ինչի մասին է ձեր թեման </h3>

                <n-config-provider :theme="darkTheme">
                    <n-input v-model:value="title" placeholder="Աշոտ Սմբատ" class="mt-2"/>
                </n-config-provider>

                <NeoEditor ref="editorRef" @saveData="saveThread"/>
                <n-config-provider :theme="darkTheme">

                <n-select v-model:value="category" :options="categories" placeholder="Ընտրեք կատեգորիան" @update-value="select"/>
                <n-select :options="subcategories" v-model:value="subcategory"  placeholder="Ընտրեք թեման" class="my-6"/>

                <div>
                    <n-button type="primary" ghost :on-click="getEditorData">Պահպանել</n-button>
                </div>
                </n-config-provider>
            </div>
        </section>
        </div>
</template>

<style scoped>
section{
    max-width: 1076px;
}
.headerMover {
    max-width: 1076px;
    margin: 20px auto;
    position: relative;
    zoom: 1;
    box-sizing: border-box;
}

</style>
