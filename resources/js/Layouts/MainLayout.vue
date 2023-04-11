<template>
    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 w-full">
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('job.index')">Job Listings</Link>
        </div>
        <div class="text-xl text-indigo-600 dark:text-indigo-300 font-bold text-center">
          <Link :href="route('job.index')">Jobs</Link>
        </div>
        <div>
          <Link :href="route('job.create')" class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">+ New Listing</Link>
        </div>
      </nav>
    </div>
  </header>
  <main class="container mx-auto p-4">
    <div v-if="$page.props.flash.message" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
         {{ $page.props.flash.message }}
      </div>
  <slot>Default</slot>
  </main>
  
  
</template>

<script setup>
import { Link ,usePage} from '@inertiajs/vue3'
import {ref,computed} from 'vue'
const page = usePage()
</script>
