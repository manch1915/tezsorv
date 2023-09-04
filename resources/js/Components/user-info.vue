<template>
    <div class="inline-grid grid-cols-2 mt-4">
        <div class="pr-10 text-mainText">
            <ul>
                <li v-for="(value, key) in memberContent">{{ key }}</li>
            </ul>
        </div>
        <div class="text-white">
            <ul>
                <li v-for="value in memberContent">{{ value }}</li>
            </ul>
        </div>
    </div>
</template>

<script setup>

import {computed, toRefs} from "vue";

const props = defineProps({
    member: {
        type: Object,
        required: true
    }
})

const {member} = toRefs(props);

const memberContent = computed(() => {
    const content = {
        'Անուն': member.value.first_name,
        'Ազգանուն': member.value.last_name,
        'Գրանցվել է': member.value.createdAt,
        'Սեռ': member.value.sex?.name,
        'Դեր': member.value.role,
        'Երկիր': member.value.country,
        'Քաղաք': member.value.city
    };
    return Object.fromEntries(Object.entries(content).filter(([_, v]) => v));
});
</script>
