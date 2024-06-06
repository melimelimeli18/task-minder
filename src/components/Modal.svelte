<script>
    import { CloseButton } from "flowbite-svelte";
    import CardAddNewTask from "./CardAddNewTask.svelte";
    import NavBar from "./NavBar.svelte";
    
    export let showModal = false;
    import { createEventDispatcher } from 'svelte';
    import CardUrgentTask from "./CardUrgentTask.svelte";

    const dispatch = createEventDispatcher();

    function closeModal() {
        dispatch('close');
        // let showModal = false;
    }

    //     function modalClose(){
    //     let showModal = false;
    // }

    // const buttons = [closeBtn, cancelBtn];
    // // Loop through the array and add the event listener to each button
    // buttons.forEach(button => {
    //     if (button) {
    //         button.addEventListener("click", modalClose);
    //     }
    // });


</script>
{#if showModal}
<div class=" z-50 backdrop flex justify-center items-center w-screen h-screen fixed bg-[rgb(169, 169, 169, 31%)]">
    <div class="modal">
        <!-- <CardAddNewTask on:close={closeModal} /> -->
        <CardAddNewTask/>
        <closeBtn />
        <!-- CONTENT -->
        <!-- <closeBtn showModal="false"/> -->
        <!-- relative position? -->
        <!-- <button on:click={closeModal}>Close Modal</button> -->
    </div>
</div>
{/if}