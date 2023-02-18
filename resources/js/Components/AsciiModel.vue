<template>
<div id="ascii">

</div>
</template>

<script>
import {init, animate} from '@/AsciiModel'
export default {
    name: "AsciiModel",
    components: {init, animate},
    mounted() {
        init()
        animate()
    }
}
</script>

<style scoped>
#ascii{
    max-width: 100%;
}
</style>
