<template>
  <form @submit.prevent="create">
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
      </div>

      <div>
        <label>Area</label>
        <input v-model="form.area" type="text" />
      </div>

      <div>
        <label>Postcode</label>
        <input v-model="form.post_code" type="text" />
      </div>
      <div>
        <label>city</label>
        <input v-model="form.city" type="text" />
      </div>
        <div>
        <label>Details</label>
        <input v-model="form.detail" type="text" />
      </div>
      <div>
        <label>skills</label>
        <input v-model="form.skills" type="text" />
      </div>

      <div>
        <label>salary</label>
        <input v-model.number="form.salary" type="number"/>
      </div>

      <div>
        <button type="submit">Create</button>
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
const create = () => form.post('/job',form)
</script>

<style scoped>
label {
  margin-right: 2em;
}

div {
  padding: 2px
}
</style>