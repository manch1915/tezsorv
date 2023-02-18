<template>
    <div>
        <div class="font-bold text-3xl"><slot></slot>{{ displayText }}</div>
    </div>
</template>

<script>
export default {
    name: 'AnimetedText',
    props: {
      texts: Array,
    },
    data() {
        return {
            currentIndex: 0,
            currentText: '',
            isTyping: true,
            typingDelay: 100,
            eraseDelay: 50,
            typingIndex: 0,
            eraseIndex: 0,
        };
    },
    computed: {
        displayText() {
            return this.currentText;
        }
    },
    methods: {
        typeText() {
            this.isTyping = true;
            if (this.typingIndex < this.texts[this.currentIndex].length) {
                this.currentText += this.texts[this.currentIndex][this.typingIndex];
                this.typingIndex++;
                setTimeout(() => {
                    this.typeText();
                }, this.typingDelay);
            } else {
                setTimeout(() => {
                    this.eraseText();
                }, 1000);
            }
        },
        eraseText() {
            this.isTyping = false;
            if (this.eraseIndex < this.texts[this.currentIndex].length) {
                this.currentText = this.currentText.slice(0, -1);
                this.eraseIndex++;
                setTimeout(() => {
                    this.eraseText();
                }, this.eraseDelay);
            } else {
                this.currentIndex = (this.currentIndex + 1) % this.texts.length;
                this.typingIndex = 0;
                this.eraseIndex = 0;
                setTimeout(() => {
                    this.typeText();
                }, 500);
            }
        }
    },
    mounted() {
        this.typeText();
    }
};
</script>
<style>

</style>
