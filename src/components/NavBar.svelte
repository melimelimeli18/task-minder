<script lang="ts">
    // Icons
    import IconHome from "../assets/icon-home.svelte";
    import IconAdd from "../assets/icon-add.svelte";
    import IconCategory from "../assets/icon-category.svelte";
    import IconUser from "../assets/icon-user.svelte";
    import IconSetting from "../assets/icon-setting.svelte";
    import CardAddNewTask from "./CardAddNewTask.svelte";
    import { Button, Modal } from 'flowbite-svelte'
    // let formModal = false;
    import { goto } from '$app/navigation';
    import MyCategory from "../routes/MyCategory/+page.svelte";



    let showModal = false;

    function closeModal() {
    showModal = false;
    }
  

</script>

{#if showModal}
<CardAddNewTask on:close={closeModal}/>
<div class="z-30 absolute w-screen h-screen bg-black opacity-50"></div>

{/if}

<nav class="navbar-container fixed bottom-0 flex md:space-x-4 w-full justify-between content-center border-solid border-2 border-[#9940FA] bg-white z-10">
    <!-- HOME -->
    <a href="/" class="flex hover:text-[#9940FA]  focus:text-[#9940FA] active:text-[#9940FA] box-border hover:border-t-4">
        <div class="home flex flex-col px-4 my-4 text-center md:flex-row">
            <IconHome className="content-center place-self-center size-[2rem]"/>
            <p class="text-style pt-1">Home</p>
        </div>
    </a>

    <!-- ADD TASK -->
    <button on:click={() => (showModal = true)} type="button" class="flex hover:text-[#9940FA] focus:text-[#9940FA] active:text-[#9940FA]">
        <div class="add-task flex flex-col px-4 my-4 text-center md:flex-row">
            <IconAdd className="content-center place-self-center size-[2rem]"/>
            <p class="text-style pt-1">Add Task</p>
        </div>
    </button>

    <!-- MY CATEGORY -->
    <a href="/MyCategory" class="flex hover:text-[#9940FA] focus:text-[#9940FA] active:text-[#9940FA]">
        <div class="my-category flex flex-col px-4 my-4 text-center md:flex-row">
            <IconCategory className="content-center place-self-center size-[2rem]"/>
            <p class="text-style pt-1">My Category</p>
        </div>
    </a>

    <!-- USER -->
    <a href="/User" class="flex hover:text-[#9940FA] focus:text-[#9940FA] active:text-[#9940FA]">
        <div class="user flex flex-col px-4 my-4 text-center md:flex-row">
            <IconUser className="content-center place-self-center size-[2rem] " />
            <p class="text-style pt-1">User</p>
        </div>
    </a>

    <!-- SETTING -->
    <a href="/Setting" class="logo hover:text-[#9940FA] focus:text-[#9940FA] active:text-[#9940FA]">
        <div class="setting flex flex-col px-4 my-4 text-center md:flex-row">
            <IconSetting className="justify-center place-self-center size-[2rem]" />
            <p class="text-style pt-1">Setting</p>
        </div>
    </a>
</nav>

<style>

    nav p{
        font-size: 0.79rem;
    }
</style>