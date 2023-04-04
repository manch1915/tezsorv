<template>
    <div ref="myElement" class="animeted_scroll w-full">
        <slot/>
    </div>
</template>

<script>
export default {
    name: "AnimateOnVisible",
    mounted() {
        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5 // The threshold at which the intersection callback is called
        };

        const observer = new IntersectionObserver(this.handleIntersection, options);
        const target = this.$refs.myElement; // The element you want to observe
        observer.observe(target);
    },
    methods: {
        handleIntersection(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // The observed element is within the visibility threshold
                    // Do something, like adding a CSS class to animate the element
                    entry.target.classList.add('visible');
                } else {
                    // The observed element is not within the visibility threshold
                    // Do something else, like removing the CSS class
                    entry.target.classList.remove('visible');
                }
            });
        }
    }
}
</script>

<style scoped>
.animeted_scroll{
    opacity: 0;
    transform: translate(0, 10%);
    transition: opacity 1s ease, transform 1s ease;
}
.visible {
    opacity: 1;
    transform: translate(0, 0);
    transition: opacity 1s ease, transform 1s ease;
}
</style>
