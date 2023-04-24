<template>
    <div>
        <span class="font-bold">{{job.job_name}}</span>
    </div>
    <div>
         <span class="font-light">{{job.company}}</span>
    </div>
    <div>
        <span class="font-light">{{job.area}}</span>
    </div>
    <div>
        <span class="font-light">{{job.city}}</span>
    </div>
</template>

<script setup>
    defineProps({
        job:Object
    })
</script>