<template>
  <div v-for="item in job" :key="item.id">
    <div>
    <Link :href="route('job.show',{job:item.id})">
    {{item.job_name}}
    </Link>
    </div>
    <div>
      <Link :href="route('job.edit',{job:item.id})">
      Edit
    </Link> 
    </div>

    <div>
      <Link :href="route('job.destroy',{job:item.id})" method="DELETE" as="button">
      Delete
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