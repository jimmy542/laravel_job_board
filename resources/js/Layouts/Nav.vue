<template>
    <header class="bg-white shadow">
        <div class="w-full max-w-6xl mx-auto sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-3">
            <div class="flex justify-between items-center px-4 py-3 sm:p-0">
                <div>
                    <Link class="navbar-brand text-xl text-indigo-600 dark:text-indigo-300 font-bold text-center" :href="route('job.index')">Job Board</Link>
                </div>

                <div class="sm:hidden">
                    <button @click="isOpen = !isOpen" type="button" class="block text-gray-700 hover:text-gray-600 focus:text-gray-600 focus:outline-none">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                            <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                        </svg>
                    </button>
                </div>
            </div>
            
            <nav :class="isOpen ? 'block' : 'hidden'" class="px-2 pb-4 sm:flex sm:p-0">
                <Link class="mt-1 block px-2 py-1 text-xm text-indigo-600 dark:text-indigo-300  text-center font-bold hover:bg-gray-100 focus:bg-gray-100 focus:outline-none sm:mt-0 sm:ml-2" :href="route('about')">About</Link>
                <Link class="mt-1 block px-2 py-1 text-xm text-indigo-600 dark:text-indigo-300 text-center font-bold hover:bg-gray-100 focus:bg-gray-100 focus:outline-none sm:mt-0 sm:ml-2" :href="route('job.create')">Post Job</Link>
                <Link class="mt-1 block px-2 py-1 text-xm text-indigo-600 dark:text-indigo-300 text-center font-bold hover:bg-gray-100 focus:bg-gray-100 focus:outline-none sm:mt-0 sm:ml-2" href="/contact">Training</Link>
                
                <div v-if="$page.props.user" class="flex items-center gap-4">
                    <div class="text-sm text-gray-500">{{ $page.props.user.name }}</div>
                <div>
                    <Link :href="route('logout')" method="delete" as="button">Logout</Link>
                </div>
                </div>
                <div v-else>
                    <Link class="mt-1 block px-2 py-1 text-xm text-indigo-600 dark:text-indigo-300 text-center font-bold hover:bg-gray-100 focus:bg-gray-100 focus:outline-none sm:mt-0 sm:ml-2" :href="route('login')">Login</Link>
                </div>
            </nav>
        </div>
    </header>
</template>

<script setup>
import { Link ,usePage} from '@inertiajs/vue3'
import {ref,computed} from 'vue'
const page = usePage()
</script>

<script>
export default {
    data() { 
        return {
            isOpen: false,
        }
    }
}
</script>