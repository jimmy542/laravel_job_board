<template>
  <form @submit.prevent="create">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Job</label>
        <input v-model="form.job_name" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="form.errors.job_name">
          {{form.errors.job_name}}
        </div>
      </div>

      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Company</label>
        <input v-model="form.company" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
        <div v-if="form.errors.company">
          {{form.errors.company}}
        </div>
      </div>

      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Area</label>
        <input v-model="form.area" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
        <div v-if="form.errors.area">
          {{form.errors.area}}
        </div>
      </div>

      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Postcode</label>
        <input v-model="form.post_code" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
         <div v-if="form.errors.post_code">
          {{form.errors.post_code}}
        </div>
      </div>
      <div class="col-span-4">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">city</label>
        <input v-model="form.city" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
        <div v-if="form.errors.city">
          {{form.errors.city}}
        </div>
      </div>
        <div class="col-span-6">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Details</label>
        <input v-model="form.detail" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
        <div v-if="form.errors.detail">
          {{form.errors.detail}}
        </div>
      </div>
      <div class="cal-span-6">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">skills</label>
        <input v-model="form.skills" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
        <div v-if="form.errors.skills">
          {{form.errors.skills}}
        </div>
      </div>

      <div class="cal-span-6">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">salary</label>
        <input v-model.number="form.salary" type="number" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
           <div v-if="form.errors.salary">
          {{form.errors.salary}}
        </div>
      </div>

      <div class="col-span-6">
        <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">Create</button>
      </div>
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  job_name: null,
  company: null,
  area: null,
  post_code:null,
  city: null,
  detail:null,
  skills:null,
  salary:0,
  user_id:0,
})
const create = () => form.post(route('job.store'),form)
</script>

<style scoped>
label {
  margin-right: 2em;
}

div {
  padding: 2px
}
</style>