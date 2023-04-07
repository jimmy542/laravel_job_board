<template>
  <form @submit.prevent="update">
    <div>
      <div>
        <label>Job</label>
        <input v-model="form.job_name" type="text" />
        <div v-if="form.errors.job_name">
          {{form.errors.job_name}}
        </div>
      </div>

      <div>
        <label>Company</label>
        <input v-model="form.company" type="text" />
        <div v-if="form.errors.company">
          {{form.errors.company}}
        </div>
      </div>

      <div>
        <label>Area</label>
        <input v-model="form.area" type="text" />
        <div v-if="form.errors.area">
          {{form.errors.area}}
        </div>
      </div>

      <div>
        <label>Postcode</label>
        <input v-model="form.post_code" type="text" />
         <div v-if="form.errors.post_code">
          {{form.errors.post_code}}
        </div>
      </div>
      <div>
        <label>city</label>
        <input v-model="form.city" type="text" />
        <div v-if="form.errors.city">
          {{form.errors.city}}
        </div>
      </div>
        <div>
        <label>Details</label>
        <input v-model="form.detail" type="text" />
        <div v-if="form.errors.detail">
          {{form.errors.detail}}
        </div>
      </div>
      <div>
        <label>skills</label>
        <input v-model="form.skills" type="text" />
        <div v-if="form.errors.skills">
          {{form.errors.skills}}
        </div>
      </div>

      <div>
        <label>salary</label>
        <input v-model.number="form.salary" type="number"/>
           <div v-if="form.errors.salary">
          {{form.errors.salary}}
        </div>
      </div>

      <div>
        <button type="submit">Save</button>
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
const update = () => form.put(`/job/${props.job.id}`)
</script>

<style scoped>
label {
  margin-right: 2em;
}

div {
  padding: 2px
}
</style>