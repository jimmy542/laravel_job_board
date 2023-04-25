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
    <div>
        <span class="font-light"> Lat : {{job.lat}}</span>
    </div>
    <div>
        <span class="font-light"> Long : {{job.long}}</span>
    </div>
</template>

<script setup>
    defineProps({
        job:Object
    })
</script>