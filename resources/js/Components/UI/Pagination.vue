<template>
  <div v-if="!loading"  class="flex gap-1 items-center">
    <Link
      v-for="(link, index) in links" 
      :key="index" class="py-2 px-4 rounded-full" 
      :href="link.url" 
      :class="{'w-10 h-10 bg-indigo-500 text-white p-4 inline-flex items-center text-sm font-medium rounded-full': link.active}"
      v-html="link.label"/>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'; 
defineProps({ links: Array });
</script>
