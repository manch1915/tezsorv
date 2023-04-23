<template>
    <img src="/images/logo.svg" alt="">
</template>
<style scoped>
    img{
        filter: drop-shadow(0 0 20px rgba(88, 40, 139, 0.8));
        animation: mymove 5s infinite;
    }
    @keyframes mymove {
        0%   {filter: drop-shadow(0 0 1px rgba(88, 40, 139, 0.8));}
        25%  {filter: drop-shadow(0 0 15px rgba(88, 40, 139, 0.8));}
        75%  {filter: drop-shadow(0 0 20px rgba(88, 40, 139, 0.8));}
        100% {filter: drop-shadow(0 0 1px rgba(88, 40, 139, 0.8));}
    }
</style>
