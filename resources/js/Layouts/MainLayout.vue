<template>
  <Link href="/">Main Page</Link>&nbsp;
  <Link href="/job">Show Page</Link>
  <div>the page with timer {{timer}}</div>
  <slot>Default</slot>
</template>

<script setup>
import { Link ,usePage} from '@inertiajs/vue3'
import {ref} from 'vue'
const timer = ref(0)
setInterval(()=>timer.value++,1000)
</script>