<template>
  <span>{{ formattedSalary }}</span>
</template>

<script setup>
import {computed} from 'vue'
const props = defineProps({
  salary: [Number, String],
})
const formattedSalary = computed(
  () => Number(props.salary).toLocaleString('en-US', {
    style: 'currency',
    currency: 'USD',
    maximumFractionDigits: 0,
  }),
)
</script>