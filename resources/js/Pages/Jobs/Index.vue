<template>
<Video/>
<Filters :filters="filters" class="w-full flex justify-center mx-auto"/>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-3 rounded-xl sm:text-left ">
  <Box v-for="item in job.data" :key="item.id" class="bg-zinc-100">
    <div>
    <Link :href="route('job.show',{job:item.id})">{{item.job_name}}</Link>
    </div>
    <div>
      <p>
    <JobSpace :job="item" class="text-gray-900" />
       <JobListing :job="item" class="text-gray-700" />
       <Salary :salary="item.salary" class="text-2xl font-bold"/>
      </p>
    </div>
    <div v-if="$page.props.user" >
      <Link :href="route('job.edit',{job:item.id})" class="inline-block py-1 px-2 text-xs font-bold rounded-md bg-indigo-900 text-white">
        Edit
      </Link> 
      <Link :href="route('job.destroy',{job:item.id})" class="inline-block py-1 px-2 text-xs font-bold rounded-md bg-rose-500 text-white" method="DELETE" as="button">
      Delete
    </Link> 
    </div>

    <div v-if="$page.props.user">
      
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