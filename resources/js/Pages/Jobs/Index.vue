<template>
<Video/>
<Filters :filters="filters" class="w-full flex justify-center "/>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-3 rounded-xl text-center sm:text-left ">
  <Box v-for="item in job.data" :key="item.id" class="bg-zinc-100">
    <div>
    <Link :href="route('job.show',{job:item.id})">
       <JobSpace :job="item" class="text-gray-500" />
       <JobListing :job="item" class="text-gray-500" />
       <Salary :salary="item.salary" class="text-2xl font-bold"/>
    </Link>
    </div>
    <div v-if="$page.props.user">
      <Link :href="route('job.edit',{job:item.id})">
        Edit
      </Link> 
    </div>

    <div v-if="$page.props.user">
      <Link :href="route('job.destroy',{job:item.id})" method="DELETE" as="button">
      Delete
    </Link> 
    </div>
    
  </Box>

</div>
  <div v-if="job.data.length" class="w-full flex justify-center mt-8 mb-8">
    <Pagination :links="job.links" />
  </div>
  <div v-if="!loading && isSmallScreen" class="w-full flex justify-center mt-8 mb-8">
      <Pagination :links="job.links" />
  </div>
    
</template>

<script setup>
    import { Link ,usePage} from '@inertiajs/vue3'
    import Box from '../../Components/UI/Box.vue'
    import JobListing from '../../Components/UI/JobListing.vue'
    import JobSpace from '../../Components/UI/JobSpace.vue'
    import Salary from '../../Components/UI/Salary.vue'
    import Pagination from '../../Components/UI/Pagination.vue'
    import Filters from './Fliter.vue'
    import Video from './Video.vue'
    const page = usePage()
    
    defineProps({
        job:Object,
        filters: Object,
    })

    

</script>

<style>

</style>