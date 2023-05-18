<template>
  <form @submit.prevent="filter">
    <div class="mb-2 sm:grid-cols-2 p-6 flex flex-wrap gap-6 justify-center mx-auto">
      <div class="flex flex-nowrap items-center gap-4">
        <div>
          <input
          v-model.trim="filterForm.job_name"
          type="text" placeholder="Job Title" 
          class="input-filter-r w-28 rounded-md"
        />
        </div>

        <div>

          <input
          v-model.trim="filterForm.city"
          type="text" placeholder="City" 
          class="input-filter-r w-28 rounded-md"
        />
        </div>
        
         <div>

          <input
          v-model.trim="filterForm.salaryFrom"
          type="text" placeholder="Salary From" 
          class="input-filter-r w-28 rounded-md"
        />
        </div>
         <div>

          <input
          v-model.trim="filterForm.salaryTo"
          type="text" placeholder="Salary To" 
          class="input-filter-r w-28 rounded-md"
        />
        </div>
      </div>

     
      <div class="flex flex-nowrap items-center gap-4">
        <button type="submit" class="btn-primary">Filter</button>
      </div>
      <div class="flex flex-nowrap items-center gap-4">
        <button type="reset" @click="clear">Clear</button>
      </div>
    </div>
  </form>
</template>

<script setup>
import {useForm} from '@inertiajs/vue3'

const props = defineProps({
  filters: Object,
})

const filterForm = useForm({
  salaryFrom: props.filters.salaryFrom ?? null,
  salaryTo: props.filters.salaryTo ?? null,
  job_name: props.filters.job_name ?? null,
  city: props.filters.city ?? null,
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
  filterForm.salaryFrom = null
  filterForm.salaryTo = null
  filterForm.job_name = null
  filterForm.city = null
  filter()
}
</script>