<template>
    <div class="font-mono container">
        <Navbar/>
        <main>
            <div class="w-full max-w-6xl mx-auto">
                <article>
                    <slot />
                </article>
            </div>
        </main>
        <Nav1vue/>
        <Footer/>
    </div>
</template>

<script>
import Footer from './Footer.vue'
import Navbar from './Nav.vue'
import Nav1Vue from './Nav1.vue'


export default {
     components: {
         Navbar,
         Nav1Vue,
         Footer,
     }
}
</script>