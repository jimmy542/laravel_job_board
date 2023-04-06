<template>
    <MainLayout>
    <div>
        {{job}}
    </div>
     </MainLayout>
</template>

<script setup>
import MainLayout from '../../Layouts/MainLayout.vue';
    defineProps({
        job:Object
    })

</script>

<style>

</style>