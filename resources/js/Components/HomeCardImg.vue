<template>
    <div class="flex flex-col w-full items-center text-center box-item">
        <div class="mb-5">
            <div class="image-wrapper">
                <img :src=image alt="">
                <div class="item-overlay"/>
            </div>
        </div>
        <div class="mb-3">
            <h3 class="text-white"> {{zagalovok}} </h3>
        </div>
        <p>{{prov}}</p>
    </div>
</template>

<script>
export default {
    name: "HomeCardImg",
    props: {
        image: String,
        zagalovok: String,
        prov: String,
    }
}
</script>

<style scoped>
.image-wrapper{
    position: relative;
    display: flex;
    overflow: hidden;
    width: 100%;
    padding: 1px;
    justify-content: center;
    align-items: center;
    border-radius: 1.0625rem;
    background-image: linear-gradient(180deg,hsla(0,0%,100%,.15),hsla(0,0%,100%,0));
}
.item-overlay{
    position: absolute;
    left: 0;
    top: auto;
    right: 0;
    bottom: 0;
    z-index: 2;
    height: 6rem;
    background-image: linear-gradient(180deg,rgba(22,22,22,0),#161616);
}
h3{
    font-size: 2rem;
    line-height: 1.2;
    font-weight: 400;
    letter-spacing: -.02em;
}
p{
    margin-top: 0;
    margin-bottom: 0;
    color: rgba(216,213,209,.8);
}
</style>
