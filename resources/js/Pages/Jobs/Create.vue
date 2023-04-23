<template>
  <form @submit.prevent="create">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-2">
        <label class="label">Job</label>
        <input v-model="form.job_name" type="text" class="input" />
        <div v-if="form.errors.job_name" class="input-error">
          {{form.errors.job_name}}
        </div>
      </div>

      <div class="col-span-2">
        <label class="label">Company</label>
        <input v-model="form.company" type="text" class="input"/>
        <div v-if="form.errors.company" class="input-error">
          {{form.errors.company}}
        </div>
      </div>

      <div class="col-span-2">
        <label class="label">Area</label>
        <input v-model="form.area" type="text" class="input"/>
        <div v-if="form.errors.area" class="input-error">
          {{form.errors.area}}
        </div>
      </div>

      <div class="col-span-2">
        <label class="label">Postcode</label>
        <input v-model="form.post_code" type="text" class="input"/>
         <div v-if="form.errors.post_code" class="input-error">
          {{form.errors.post_code}}
        </div>
      </div>
      <div class="col-span-4">
        <label class="label">city</label>
        <input v-model="form.city" type="text" class="input"/>
        <div v-if="form.errors.city" class="input-error">
          {{form.errors.city}}
        </div>
      </div>
        <div class="col-span-6">
        <label class="label">Details</label>
        <input v-model="form.detail" type="text" class="input"/>
        <div v-if="form.errors.detail" class="input-error">
          {{form.errors.detail}}
        </div>
      </div>
      <div class="col-span-6">
        <label class="label">skills</label>
        <input v-model="form.skills" type="text" class="input"/>
        <div v-if="form.errors.skills" class="input-error">
          {{form.errors.skills}}salary
        </div>
      </div>

      <div class="col-span-6">
        <label class="label">salary</label>
        <input v-model.number="form.salary" type="number" class="input"/>
           <div v-if="form.errors.salary" class="input-error">
          {{form.errors.salary}}
        </div>
      </div>

      <div class="col-span-6">
        <button type="submit" class="btn-primary">Create</button>
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
  by_user_id:1,
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