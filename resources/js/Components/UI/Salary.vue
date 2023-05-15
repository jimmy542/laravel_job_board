<template>
  <span class="text-sm bg-green-300">{{ formattedSalary }}</span>
</template>

<script setup>
import {computed} from 'vue'
const props = defineProps({
  salary: [Number, String],
})
const formattedSalary = computed(
  () => Number(props.salary).toLocaleString('en-US', {
    style: 'currency',
    currency: 'GBP',
    maximumFractionDigits: 0,
  }),
)
</script>