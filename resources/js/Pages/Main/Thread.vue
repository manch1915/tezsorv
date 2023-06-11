<template>
    <main class="min-h-screen">
        <MainHeader :auth="props.auth"/>
        <section class="headerMover bg-mine-second rounded">
            <div class="w-full p-6">
                <n-config-provider :theme="darkTheme">
                    <n-space vertical>
                        <h1 class="text-white bold text-lg">Վերնագիր։ </h1>
                        <h3 class="text-white">Մի քանի բառով ձևակերպեք, թե ինչի մասին է ձեր թեման </h3>

                        <n-input v-model:value="title" placeholder="Thread title" class="mt-2"/>
                        <NeoEditor v-model="body"/>
                        <n-select v-model:value="category" class="mt-6" :options="categories" placeholder="Select category"
                                  @update-value="select"/>
                        <n-select :options="subcategories" v-model:value="subcategory"
                                  placeholder="Select subcategory"/>
                        <div>
                            <n-button type="primary" @click.prevent="saveThread" ghost>Save your thread</n-button>
                        </div>
                    </n-space>
                </n-config-provider>
            </div>
        </section>
        <div class="h-6"></div>
    </main>
</template>

<script setup>
import MainHeader from "@/Components/MainHeader.vue";
import {NConfigProvider, NInput, darkTheme, NSelect, NButton, NSpace} from "naive-ui";
import {useMainStore} from "@/stores/main";
import {computed, onMounted, ref, watch} from "vue";
import axios from 'axios';
import {toast} from "vue3-toastify";
import 'vue3-toastify/dist/index.css';
import {router} from "@inertiajs/vue3";
import NeoEditor from "@/Components/NeoEditor.vue";

const props = defineProps({
    auth: Object,
})

const title = ref('')
const body = ref('');
const category = ref(null)
const subcategory = ref(null)
const store = useMainStore();

onMounted(async () => {
    await store.fetchSlideList();
});

const categories = computed(() => store.slideList.map(function (num) {
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
    subcategories.value = store.slideList[category.value - 1].subcategories
        .map((subcategory) => ({
            label: subcategory.name,
            value: subcategory.id,
        }))
        .reverse();
    subcategory.value = null
};

watch(category, select);

const saveThread = () => {
    axios.post(route('thread.store'), {
        title: title.value,
        category: category.value,
        subcategory: subcategory.value,
        body: JSON.stringify(body.value)
    }).then(function (response) {
        router.visit(response.data.redirect);
    })
        .catch(error => Object.entries(error.response.data.errors).forEach(([key,value]) => {
            toast(value, {
                autoClose: 3000,
                theme: "dark",
                type: "warning"
            })
    }))
}
</script>

<style>
main {
    background-color: #303030;
}

section {
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
