<template>
    <div>
        <span class="font-bold">{{job.job_name}}</span> | <span class="font-bold">{{job.company}}</span>
       | <span class="font-bold">{{job.area}}</span>
    </div>
</template>

<script setup>
    defineProps({
        job:Object
    })
</script>