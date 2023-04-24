<template>
  <form @submit.prevent="filter">
    <div class="mb-8 mt-4 flex flex-wrap gap-2">
      <div class="flex flex-nowrap items-center gap-4">
        <div>
          What ?
          <input
          v-model.trim="filterForm.job_name"
          type="text" placeholder="Job Title" 
          class="input-filter-r w-40 rounded-md"
        />
        </div>

        <div>
          Where ?
          <input
          v-model.trim="filterForm.city"
          type="text" placeholder="City" 
          class="input-filter-r w-40 rounded-md"
        />
        </div>
        
      </div>

      <div class="flex flex-nowrap items-center gap-4">
        <select v-model="filterForm.salary" class="input-filter-r w-40 rounded-md">
          <option :value="null">salary</option>
          <option v-for="n in 5" :key="n" :value="n * 10000">{{ n * 10000 }}</option>
          <option :value="60000">60000+</option>
        </select>
        <select v-model="filterForm.salary" class="input-filter-r w-40 rounded-md">
          <option :value="null">distance</option>
          <option v-for="n in 5" :key="n" :value="n * 5">{{ n * 5 }}</option>
          <option :value="30">30+</option>
        </select>
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