<script lang="ts">
    import IconCross from "../assets/icon-cross.svelte";
    import { Radio, Input, Modal, Label, Helper, Button, Checkbox, A, Datepicker } from 'flowbite-svelte';
    import { createEventDispatcher } from 'svelte';
    
    const dispatch = createEventDispatcher();

    function closeModal() {
        dispatch('close');
    }
    const closeButton = document.getElementById("close-button");
    let colors = "text-purple-500";
</script>

<form class="z-50 centered-axis-xy w-[80%] h-content absolute bg-white rounded-lg justify-center px-6 py-4 drop-shadow-lg">
    <!-- <button on:click={closeModal} type="button" id="close-button"> -->
    <button type="button" id="close-button">
        <label for="close-button">
            <IconCross className="size-[1.5rem] text-gray-400 hover:text-gray-600 focus:text-gray-600"/>
        </label>
    </button>
    <div class="flex justify-center">
        <p class="font-bold text-base">Add New Category</p>
    </div>

    <!-- Category Title Input -->
    <Label class="space-y-2 mt-9">
        <span class="task-title">Category Title</span>
        <Input id="task-title-input" type="text" placeholder="Enter category name..." size="md" class="input-field focus:ring-violet-500 focus:border-violet-500 "/>
    </Label>

    <hr class="fill-current border-[#9940FA] border-solid border-1 my-1 mt-5">

    <p class="mb-4 font-semibold {colors}">Select color</p>
    <Label class="space-y-2 mt-3">
        <span>Color</span>

        <!-- BORDER DOESNT WORKING FIX THIS -->
        <div class="flex flex-wrap gap-1.5">
            <!-- pink -->
            <input type="radio" bind:group={colors} color="pink" value="text-pink-300" class="hidden peer/pink" id="pink">
            <label for="pink" class="bg-pink-300 size-6 rounded-full items-center peer-checked/pink:border-[2px] peer-checked/pink:border-purple-600 peer-checked/pink:border-solid hover:scale-125"></label>

            <!-- red -->
            <input type="radio" bind:group={colors} color="red" value="text-red-500" class="hidden peer/red" id="red">
            <label for="red" class="bg-red-600 size-6 rounded-full items-center peer-checked/red:border-[2px] peer-checked/red:border-purple-600 peer-checked/red:border-solid hover:scale-125"></label>

            <!-- orange -->
            <input type="radio" bind:group={colors} color="green" value="text-green-500" class="hidden peer/orange" id="orange">
            <label for="orange" class="bg-orange-400 size-6 rounded-full items-center peer-checked/orange:border-[2px] peer-checked/orange:border-purple-600 peer-checked/orange:border-solid hover:scale-125"></label>

            <!-- yellow -->
            <input type="radio" bind:group={colors} color="yellow" value="text-purple-500" class="hidden peer/yellow" id="yellow">
            <label for="yellow" class="bg-yellow-300 size-6 rounded-full items-center peer-checked/yellow:border-[2px] peer-checked/yellow:border-purple-600 peer-checked/yellow:border-solid hover:scale-125"></label>

            <!-- lime -->
            <input type="radio" bind:group={colors} color="lime" value="text-teal-500" class="hidden peer/lime" id="lime">
            <label for="lime" class="bg-lime-400 size-6 rounded-full items-center peer-checked/lime:border-[2px] peer-checked/lime:border-purple-600 peer-checked/lime:border-solid hover:scale-125"></label>
            
            <!-- green -->
            <input type="radio" bind:group={colors} color="green" value="text-yellow-500" class="hidden peer/green" id="green">
            <label for="green" class="bg-green-500 size-6 rounded-full items-center peer-checked/green:border-[2px] peer-checked/green:border-purple-600 peer-checked/green:border-solid hover:scale-125"></label>

            <!-- cyan -->
            <input type="radio" bind:group={colors} color="cyan" value="text-cyan-500" class="hidden peer/cyan" id="cyan">
            <label for="cyan" class="bg-cyan-400 size-6 rounded-full items-center peer-checked/cyan:border-[2px] peer-checked/cyan:border-purple-600 peer-checked/cyan:border-solid hover:scale-125"></label>

            <!-- blue -->
            <input type="radio" bind:group={colors} color="blue" value="text-blue-500" class="hidden peer/blue" id="blue">
            <label for="blue" class="bg-blue-600 size-6 rounded-full items-center peer-checked/blue:border-[2px] peer-checked/blue:border-purple-600 peer-checked/blue:border-solid hover:scale-125"></label>

            <!-- purple -->
            <input type="radio" bind:group={colors} color="purple" value="text-orange-500" class="hidden peer/purple" id="purple">
            <label for="purple" class="bg-purple-500 size-6 rounded-full items-center peer-checked/purple:border-[2px] peer-checked/purple:border-purple-600 peer-checked/purple:border-solid hover:scale-125"></label>
            
            <!-- gray -->
            <input type="radio" bind:group={colors} color="gray" value="text-gray-500" class="hidden peer/gray" id="gray">
            <label for="gray" class="bg-gray-400 size-6 rounded-full items-center peer-checked/gray:border-[2px] peer-checked/gray:border-purple-600 peer-checked/gray:border-solid hover:scale-125"></label>

            <!-- black -->
            <input type="radio" bind:group={colors} color="black" value="text-orange-500" class="hidden peer/black" id="black">
            <label for="black" class="bg-black size-6 rounded-full items-center peer-checked/black:border-[2px] peer-checked/black:border-purple-600 peer-checked/black:border-solid hover:scale-125"></label>
          
        </div>
    </Label>

        
    <div class="flex justify-end mt-9 mb-4">
        <!-- <button on:click={closeModal} id="cancel-add-task-button" class="mr-9 text-gray-400 hover:text-gray-600 focus:text-gray-600 " type="button">Cancel</button> -->
        <button id="cancel-add-task-button" class="mr-9 text-gray-400 hover:text-gray-600 focus:text-gray-600 " type="button">Cancel</button>
        <Button id="add-task-button" type="submit" class="px-10 bg-violet-500 hover:bg-violet-800 focus:ring-violet-100">Add</Button>
    </div>
</form>

<style>
    .centered-axis-xy{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
    }
</style>

