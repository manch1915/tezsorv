<template>
    <div class="max-w-sm my-2 ring-1 dark:bg-white border dark:border-gray-200 rounded-lg shadow bg-gray-800 border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" :src="img" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight dark:text-gray-900 text-white">{{ header }}</h5>
            </a>
            <p class="mb-3 font-normal dark:text-gray-700 text-gray-400">{{ body }}</p>
            <a :href="link" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white dark:bg-blue-700 rounded-lg dark:hover:bg-blue-800 dark:focus:ring-4 dark:focus:outline-none dark:focus:ring-blue-300 bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Get
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: "SubjectCard",
    props: {
      img: String,
      header: String,
      body: String,
      link: String
    },
}
</script>

<style scoped>

</style>
