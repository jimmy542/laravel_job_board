<template>
  <div>Index</div>
  <Link href="/show">show Page</Link>
  <div>message is {{message}}</div>
</template>

<script setup>

import { Link } from '@inertiajs/vue3'
defineProps(['message'])


</script>

<style>

</style>