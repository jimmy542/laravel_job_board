<template>
  <div v-for="item in job" :key="item.id">
    <div>
    <Link :href="`/job/${item.id}`">
    {{item.job_name}}
    </Link>
    </div>
    <div>
      <Link :href="`/job/${item.id}/edit`">
      Edit
    </Link> 
    </div>
  </div>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    defineProps({
        job:Array,
    })

    

</script>

<style>

</style>