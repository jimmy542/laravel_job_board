<template>
    <div class="grid grid-cols-12 gap-4 ">
        <Box class="col-span-12 md:col-span-7 flex items-center w-full">
            <div class="w-full text-center font-medium">Image</div>
        </Box>
        <Box class="col-span-12 md:col-span-5">
       <JobSpace :job="job" class="text-gray-500" />
       <JobListing :job="job" class="text-gray-500" />
       <Salary :salary="job.salary" class="text-2xl font-bold"/>
        </Box>
    </div>
</template>

<script setup>
import Box from '../../Components/UI/Box.vue'
import JobListing from '../../Components/UI/JobListing.vue'
import JobSpace from '../../Components/UI/JobSpace.vue'
import Salary from '../../Components/UI/Salary.vue'
    defineProps({
        job:Object
    })

</script>

<style>

</style>