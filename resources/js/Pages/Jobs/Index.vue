<template>
<MainLayout>
  <div v-for="item in job" :key="item.id">
    <Link :href="`/job/${item.id}`">
    {{item.job_name}}
    </Link>
  </div>
 </MainLayout>
</template>

<script setup>
    import MainLayout from '../../Layouts/MainLayout.vue';
    import { Link } from '@inertiajs/vue3'
    defineProps({
        job:Array,
    })

    

</script>

<style>

</style>