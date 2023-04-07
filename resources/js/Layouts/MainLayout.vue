<template>
  <Link href="/">Home</Link>&nbsp;
  <Link href="/job">Main Page Job</Link>&nbsp;
  <Link href="/job/create">Job Create</Link>
  <div v-if="$page.props.flash.message" class="success">
        {{ $page.props.flash.message }}
      </div>
  <slot>Default</slot>
  
</template>

<script setup>
import { Link ,usePage} from '@inertiajs/vue3'
import {ref,computed} from 'vue'
const page = usePage()
</script>
<style scoped>
  .success {
    background-color: green;
    color: white;
  }
</style>