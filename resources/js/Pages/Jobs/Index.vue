<template>
<Filters :filters="filters" />
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
  <Box v-for="item in job.data" :key="item.id">
    <div>
    <Link :href="route('job.show',{job:item.id})">
       <JobSpace :job="item" class="text-gray-500" />
       <JobListing :job="item" class="text-gray-500" />
       <Salary :salary="item.salary" class="text-2xl font-bold"/>
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
    
  </Box>

</div>
  <div v-if="job.data.length" class="w-full flex justify-center mt-8 mb-8">
    <Pagination :links="job.links" />
  </div>
    
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    import Box from '../../Components/UI/Box.vue'
    import JobListing from '../../Components/UI/JobListing.vue'
    import JobSpace from '../../Components/UI/JobSpace.vue'
    import Salary from '../../Components/UI/Salary.vue'
    import Pagination from '../../Components/UI/Pagination.vue'
    import Filters from './Fliter.vue'
    defineProps({
        job:Object,
        filters: Object,
    })

    

</script>

<style>

</style>