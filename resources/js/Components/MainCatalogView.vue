<template>
    <main class="px-4 my-11">
        <div class="flex justify-between items-center catalogcard px-4 min-h-[6rem]">
            <div v-if="props.side === 'left'" class="image-wrapper w-2/6">
                <img :src="`/images/${props.image}`" class="w-full" alt="">
            </div>
            <div :class="props.side === 'right' ? 'flex w-4/6 justify-start' : 'flex w-4/6 justify-end'" >
                <p class="card-text text-[7vw] glow max-w-fit ">{{ props.text }}</p>
            </div>
            <div v-if="props.side === 'right'" class="image-wrapper w-2/6">
                <img :src="`/images/${props.image}`" alt="">
            </div>
        </div>
    </main>
</template>

<script setup>

const props = defineProps({
    text: String,
    image: String,
    side: {
        type: String,
        validator: (value) => ["left", "right"].includes(value),
    }
})
</script>

<style scoped>
.catalogcard{
    margin-top: 1rem;
    border-radius: 4rem;
    background: url("/images/pybg.png");
    box-shadow: 0 0 10px #FFFFFF;
}
.catalogcard:hover{
    box-shadow: 0 0 20px #FFFFFF;
}
.image-wrapper{
    position: relative;
    display: flex;
    overflow: hidden;
    padding: 1px;
    justify-content: center;
    align-items: center;
    border-radius: 24%;
}
.card-text{
    color: #f1f0ee;
}
.glow{
    text-shadow: 0 0 10px #FFFFFF;
}
.item-overlay{
    position: absolute;
    left: 0;
    top: auto;
    right: 0;
    bottom: 0;
    z-index: 2;
    height: 20rem;
    background-image: linear-gradient(180deg,rgba(22,22,22,0),#161616);
    background-repeat: no-repeat;
}
</style>
