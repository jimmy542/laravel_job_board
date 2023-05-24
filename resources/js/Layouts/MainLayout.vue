<template>
    <div class="font-mono mx-auto">
        <Nav1Vue/>
        <main>
            <div class="w-full max-w-6xl mx-auto">
                <article>
                    <slot />
                </article>
            </div>
        </main>
        <Footer/>
    </div>
</template>

<script>
import Footer from './Footer.vue'
import Nav1Vue from './Nav1.vue'


export default {
     components: {
         Nav1Vue,
         Footer,
     }
}
</script>