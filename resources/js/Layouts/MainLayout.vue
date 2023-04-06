<template>
  <Link href="/job">Main Page Job</Link>&nbsp;
  <Link href="/job/create">Job Create</Link>
  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <slot>Default</slot>
  
</template>

<script setup>
import { Link ,usePage} from '@inertiajs/vue3'
import {ref,computed} from 'vue'
const page = usePage()
const flashSuccess = computed(
  () => page.props.flash.message,
)
</script>
<style scoped>
  .success {
    background-color: green;
    color: white;
  }
</style>