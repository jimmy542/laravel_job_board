<template>
  <div>
    <div>
      <span  class="font-light">
        {{ job.detail }}
      </span>
    </div>
  </div>
</template>

<script setup>
 defineProps({
    job:Object,
 })
</script>
