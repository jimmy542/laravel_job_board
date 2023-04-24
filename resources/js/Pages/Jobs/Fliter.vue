<template>
  <form @submit.prevent="filter">
    <div class="mb-8 mt-4 flex flex-wrap gap-2">
      <div class="flex flex-nowrap items-center">
        <input
          v-model.number="filterForm.salary"
          type="text" placeholder="Price from"
          class="input-filter-l w-28"
        />
        <input
          v-model.number="filterForm.job_name"
          type="text" placeholder="Price to" 
          class="input-filter-r w-28"
        />
      </div>

      <div class="flex flex-nowrap items-center">
        <select v-model="filterForm.area" class="input-filter-l w-28">
          <option :value="null">area</option>
          <option v-for="n in 5" :key="n" :value="n">{{ n }}</option>
          <option>6+</option>
        </select>
        <select v-model="filterForm.post_code" class="input-filter-r w-28">
          <option :value="null">post_code</option>
          <option v-for="n in 5" :key="n" :value="n">{{ n }}</option>
          <option>6+</option>
        </select>
      </div>

      <div class="flex flex-nowrap items-center">
        <input
          v-model.number="filterForm.areaFrom"
          type="text" placeholder="Area from"
          class="input-filter-l w-28"
        />
        <input
          v-model.number="filterForm.skills"
          type="text" placeholder="Area to"
          class="input-filter-r w-28"
        />
      </div>

      <button type="submit" class="btn-normal">Filter</button>
      <button type="reset" @click="clear">Clear</button>
    </div>
  </form>
</template>

<script setup>
import {useForm} from '@inertiajs/vue3'

const props = defineProps({
  filters: Object,
})

const filterForm = useForm({
  salary: props.filters.salary ?? null,
  job_name: props.filters.job_name ?? null,
  area: props.filters.area ?? null,
  post_code: props.filters.post_code ?? null,
  areaFrom: props.filters.areaFrom ?? null,
  skills: props.filters.skills ?? null,
})

const filter = () => {
  filterForm.get(
    route('job.index'),
    {
      preserveState: true,
      preserveScroll: true,
    },
  )
}

const clear = () => {
  filterForm.salary = null
  filterForm.job_name = null
  filterForm.area = null
  filterForm.post_code = null
  filterForm.areaFrom = null
  filterForm.skills = null
  filter()
}
</script>