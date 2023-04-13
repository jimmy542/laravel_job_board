<template>
  <form @submit.prevent="update">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-2">
        <label class="label">Job</label>
        <input v-model="form.job_name" type="text" class="input" />
        <div v-if="form.errors.job_name">
          {{form.errors.job_name}}
        </div>
      </div>

      <div class="col-span-2">
        <label class="label">Company</label>
        <input v-model="form.company" type="text" class="input"/>
        <div v-if="form.errors.company">
          {{form.errors.company}}
        </div>
      </div>

      <div class="col-span-2">
        <label class="label">Area</label>
        <input v-model="form.area" type="text" class="input"/>
        <div v-if="form.errors.area">
          {{form.errors.area}}
        </div>
      </div>

      <div class="col-span-2">
        <label class="label">Postcode</label>
        <input v-model="form.post_code" type="text" class="input"/>
         <div v-if="form.errors.post_code">
          {{form.errors.post_code}}
        </div>
      </div>
      <div class="col-span-6">
        <label class="label">city</label>
        <input v-model="form.city" type="text" class="input" />
        <div v-if="form.errors.city">
          {{form.errors.city}}
        </div>
      </div>
        <div col-span-6>
        <label class="label">Details</label>
        <input v-model="form.detail" type="text" class="input"/>
        <div v-if="form.errors.detail">
          {{form.errors.detail}}
        </div>
      </div>
      <div class="col-span-6">
        <label class="label">skills</label>
        <input v-model="form.skills" type="text" class="input"/>
        <div v-if="form.errors.skills">
          {{form.errors.skills}}
        </div>
      </div>

      <div class="col-span-4">
        <label class="label">salary</label>
        <input v-model.number="form.salary" type="number" class="input"/>
           <div v-if="form.errors.salary">
          {{form.errors.salary}}
        </div>
      </div>

      <div class="col-span-6">
        <button type="submit" class="btn-primary">Save</button>
      </div>
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
  job:Object  
})
const form = useForm({
  job_name: props.job.job_name,
  company: props.job.company,
  area: props.job.area,
  post_code:props.job.post_code,
  city:props.job.city,
  detail:props.job.detail,
  skills:props.job.skills,
  salary:props.job.salary,
  user_id:0,
})
const update = () => form.put(route('job.update',{job:props.job.id}))
</script>

<style scoped>
label {
  margin-right: 2em;
}

div {
  padding: 2px
}
</style>