<template>
    <canvas id="bg" ref="canvas" class="bg-transparent">

    </canvas>
</template>

<script>
import { renderModel } from '@/ThreeModel';

export default {
    name: "BookModel",
    components: {renderModel},
    mounted() {
        renderModel()
    },
}
</script>

<style scoped>
 #bg{
max-width: 100%;
 }
</style>
