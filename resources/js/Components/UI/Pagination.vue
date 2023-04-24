<template>
  <div v-if="!loading"  class="flex gap-1 items-center">
    <Link
      v-for="(link, index) in links" 
      :key="index" class="py-2 px-4 rounded-md" 
      :href="link.url" 
      :class="{'bg-indigo-500 dark:bg-indigo-800 text-gray-300': link.active}"
      v-html="link.label"
      />
    <div class="py-2 px-4 rounded-md bg-gray-200 animate-pulse" v-if="loading"></div> <!-- Add skeleton loading state with the animate-pulse class -->
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'; 
defineProps({ links: Array });

const loading = ref(false);
</script>
