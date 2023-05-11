<template>
  <header class="relative flex items-center justify-center h-60 mb-12 overflow-hidden">
    <div class="relative z-30 justify-center">
        <div class="flex flex-col text-center sm:text-left">
            <div class="shadow-xl text-3xl  font-bold text-white"> Welcome to Job Board </div>
            <div class="text-1xl  font-bold text-white">Unlock your potential with our dynamic job board!</div>
            <div class="text-1xl  font-bold text-white">Discover your dream job and embark on a journey of professional growth.</div>
            <div class="flex items-center gap-4 p-4 text-1xl font-bold text-white justify-center sm:justify-start">
            <Link :href="route('user.create')" class="btn-primary">Join us</Link>
          </div>
        </div>
     
    </div>
    <video autoplay loop muted class="brightness-50 bg-black bg-opacity-75 absolute z-10 w-auto min-w-full min-h-full max-w-none">
  <source src="https://assets.mixkit.co/videos/preview/mixkit-open-office-space-914-large.mp4" type="video/mp4" />
  Your browser does not support the video tag.
</video>

  </header>
</template>

<script setup>
import { Link ,usePage} from '@inertiajs/vue3'
import {ref,computed} from 'vue'
const page = usePage()
</script>

<script>
export default {

}
</script>

<style>

</style>