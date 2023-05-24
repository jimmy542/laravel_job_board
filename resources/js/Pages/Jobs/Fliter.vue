<template>
  <form @submit.prevent="filter">
    <div class="p-6 mx-auto">
      <div class="flex flex-wrap gap-6 justify-center">
        <div class="flex flex-wrap justify-center gap-4">
          <div>
            <input v-model.trim="filterForm.job_name" type="text" placeholder="Job Title" class="input-filter-r w-40 rounded-full" />
          </div>
          <div>
            <input v-model.trim="filterForm.city" type="text" placeholder="City" class="input-filter-r w-40 rounded-full" />
          </div>
          <div class="flex flex-wrap gap-4">
            <select @change="filter()" v-model="filterForm.salaryFrom" class="input-filter-r w-40 rounded-full">
              <option :value="null">Salary From</option>
              <option v-for="n in 5" :key="n" :value="n * 10000">{{ n * 10000 }}</option>
              <option :value="60000">60000</option>
            </select>
          </div>
          <div class="flex flex-wrap gap-4">
            <select @change="filter()" v-model="filterForm.salaryTo" class="input input-filter-r w-40 rounded-full">
              <option :value="null">Salary To</option>
              <option v-for="n in 5" :key="n" :value="n * 10000">{{ n * 10000 }}</option>
              <option :value="60000">60000</option>
            </select>
          </div>
        </div>
        <div class="flex flex-wrap justify-center gap-4 w-full">
          <button type="submit" class="btn-primary w-40">Filter</button>
          <button type="reset" @click="clear" class="w-40">Clear</button>
        </div>
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