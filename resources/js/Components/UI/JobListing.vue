<template>
  <div>
    <span>
        {{ job.job_name }} | {{job.area }}
    </span>
  </div>
</template>

<script setup>
 defineProps({
    job:Object,
 })
</script>
