<script lang="ts">
    import Navbar from '../components/NavBar.svelte';

    import '../styles/global.css';


    // SCROLL LOGIC - SCROLL DOWN GONE, SCROLL UP APPEAR
    // import { onMount } from 'svelte';

    // let prevScrollPos = window.pageYOffset;
    // let visible = true;

    // function handleScroll() {
    //     const currentScrollPos = window.pageYOffset;
    //     visible = prevScrollPos > currentScrollPos;
    //     prevScrollPos = currentScrollPos;
    // }

    // onMount(() => {
    //     window.addEventListener('scroll', handleScroll);
    //     return () => window.removeEventListener('scroll', handleScroll);
    // });

</script>

<!-- <Navbar {visible}/> -->
<Navbar />

<main>
<link rel="stylesheet" href="../styles/output.css">
    <h1>Hello!</h1>

</main>

<style>
  main {
    padding-bottom: 60px; /* To prevent content from being hidden behind the navbar */
  }

</style>