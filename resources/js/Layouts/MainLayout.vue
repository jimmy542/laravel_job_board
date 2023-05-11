<template>
    <div>
        <Brandner/>
        <Navbar/>
        <main>
            <div class="w-full max-w-6xl mx-auto p-4">
                <article>
                    <slot />
                </article>
            </div>
        </main>

    </div>
</template>

<script>
import Navbar from './Nav.vue'
import Brandner from '../Pages/Jobs/Brandner.vue'


export default {
     components: {
         Navbar,
        Brandner
     }
}
</script>