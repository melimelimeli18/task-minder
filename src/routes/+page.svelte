<script lang="ts">
    import { onMount } from 'svelte';
    import Navbar from '../components/NavBar.svelte';
    import CardUrgentTask from '../components/CardUrgentTask.svelte';
    import CardAddNewTask from '../components/CardAddNewTask.svelte';

    import LogoApp from '../assets/logo-task-minder.svelte';
    import IconDiagram from '../assets/icon-diagram.svelte';
    import IconTarget from '../assets/icon-target.svelte';

    import '../styles/global.css';
    import { formatDate } from '../utils/todaydate.js';



    let todayDateElement;
    const formattedDate = formatDate();

    onMount(() => {
        todayDateElement = document.getElementById('today-date');
        console.log(todayDateElement);
        if (todayDateElement) {
            todayDateElement.textContent = formattedDate;
        } else {
            console.error('Element with ID "today-date" not found.');
        }
    });
    
    // SCROLL LOGIC - SCROLL DOWN GONE, SCROLL UP APPEAR

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

    // #task-finished-percent
    // #task-ongoing-percent
    // #user-name
    // #today-date DONE
    // #content-most-urgent-task




</script>
<!-- <Navbar {visible}/> -->

<CardAddNewTask />
<Navbar />

<main class="mx-8">
    <link rel="stylesheet" href="../styles/output.css">

    <div class="header flex flex-row justify-between">
        <LogoApp className="w-12" />

        <div class="task-status flex flex-row space-x-5 text-white">

            <!-- Task Finished -->
            <div class="text-[0.6rem] task-finished place-self-center bg-[#00B01C] px-2 py-2 rounded-lg">
                <div class="flex flex-row">
                    <IconDiagram className="text-white"/>
                    <p class="font-bold mx-2"><span id="task-finished-percent"></span>%</p>
                </div>
                <p class="font-bold">Task finished</p>
            </div>

            <!-- Task Ongoing -->
            <div class="text-[0.6rem] tasks-ongoing place-self-center bg-[#CA0000] px-2 py-2 rounded-lg">
                <div class="flex flex-row">
                    <IconTarget className="icon-target"/>
                <p class="font-bold mx-2"><span id="task-ongoing-percent"></span>%</p>
                </div>
                <p class="font-bold">Task ongoing</p>
            </div>
        </div>
    </div>


    <!-- CONTENT Home-->
    <h1 class="font-bold text-2xl underline-offset-4">Hi<span id="user-name"></span>!</h1>
    <h2 class="text-lg py-2">
        Today is 
        <span id="today-date" class="underline decoration-2 decoration-[#9940FA] underline-offset-[0.3rem] "></span>. Check out any tasks today!
    </h2>

    <!-- Most Urgent Task -->
    <h2 class="font-bold text-lg py-2 mt-6">Most urgent task</h2>
    <div class="flex flex-1 w-screen mx-[-2rem] h-[8rem] bg-[#FBF4FE]">
        <div id="content-most-urgent-task" class="flex mx-8 overflow-x-scroll scrollbar-thumb-[#9940FA] scrollbar-track-white scrollbar-thin">
            <CardUrgentTask />
            <CardUrgentTask />
            <CardUrgentTask />
            <CardUrgentTask />
        </div>
    </div>

    <!-- Task that due date is near -->
    <h2 class="font-bold text-lg py-2 mt-6">Tasks that due date is near!</h2>
    <div class="flex flex-1 w-screen mx-[-2rem] h-[8rem] bg-[#FBF4FE]">
        <div id="content-most-urgent-task" class="flex mx-8 overflow-x-scroll scrollbar-thumb-[#9940FA] scrollbar-track-white scrollbar-thin">
            <CardUrgentTask />
            <CardUrgentTask />
            <CardUrgentTask />
            <CardUrgentTask />
        </div>
    </div>

    <!-- Recent Category -->
    <h2 class="font-bold text-lg py-2 mt-6">Recent category</h2>
    <div class="flex flex-1 w-screen mx-[-2rem] h-[8rem] bg-[#FBF4FE]">
        <div id="content-most-urgent-task" class="flex mx-8 overflow-x-scroll scrollbar-thumb-[#9940FA] scrollbar-track-white scrollbar-thin">
            <CardUrgentTask />
            <CardUrgentTask />
            <CardUrgentTask />
            <CardUrgentTask />
        </div>
    </div>

    <!-- Recent Group -->
    <h2 class="font-bold text-lg py-2 mt-6">Recent group</h2>
    <div class="flex flex-1 w-screen mx-[-2rem] h-[8rem] bg-[#FBF4FE]">
        <div id="content-most-urgent-task" class="flex mx-8 overflow-x-scroll scrollbar-thumb-[#9940FA] scrollbar-track-white scrollbar-thin">
            <CardUrgentTask />
            <CardUrgentTask />
            <CardUrgentTask />
            <CardUrgentTask />
        </div>
    </div>
    
    <br>
    <br>
    <br>


</main>

<style>
  main {
    padding-bottom: 60px; /* To prevent content from being hidden behind the navbar */
  }

  ::-webkit-scrollbar-track{
    margin-bottom: 1rem;
  }
  ::-webkit-scrollbar-thumb {
    border-radius: 10px;
}
</style>