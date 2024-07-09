<script lang="ts">
    import IconCross from "../assets/icon-cross.svelte";
    import { Radio, Input, Modal, Label, Helper, Button, Checkbox, A, Datepicker } from 'flowbite-svelte';
    import { createEventDispatcher } from 'svelte';
    // import Apa from '../model/addCategory.php'
    document.addEventListener("DOMContentLoaded", function(event) {

    });
    const dispatch = createEventDispatcher();

    function closeModal() {
        dispatch('close');
    }

    // async function handleSubmit(event: Event) {
    //     event.preventDefault();
    //     const form = event.target as HTMLFormElement;
    //     const formData = new FormData(form);

    //     const data = {
    //         categoryTitle: formData.get('category-title'),
    //         color: formData.get('color'),
    //     };

    //     try {
    //         const response = await fetch('/src/model/addCategory.php', {
    //             method: 'POST',
    //             headers: {
    //                 'Content-Type': 'application/json',
    //             },
    //             body: JSON.stringify(data),
    //         });

    //         if (!response.ok) {
    //             throw new Error(`HTTP error! status: ${response.status}`);
    //         }

    //         const result = await response.json();
    //         console.log(result);

    //         if (result.success) {
    //             alert('Category added successfully!');
    //         } else {
    //             alert('Error: ' + result.message);
    //         }
    //     } catch (error) {
    //         console.error('Error:', error);
    //         alert('An error occurred while adding the category.');
    //     }
    // }

//     async function handleSubmit(event: SubmitEvent<HTMLFormElement>) {
//     event.preventDefault();

//     try {
//       const response = await fetch('/model/addCategory.php', {
//         method: 'POST',
//         body: new FormData(event.target), // Assuming form data is in FormData format
//       });

//       if (!response.ok) {
//         throw new Error(`Error submitting form: ${response.statusText}`);
//       }

//       // Handle successful submission (e.g., display success message)
//       console.log('Form submitted successfully!');
//     } catch (error) {
//       console.error('Error:', error);
//       // Display error message to the user
//     }
//   }

    // /model/addCategory.php
    // ../../model/addCategory.php
</script>

<!-- <form on:submit={handleSubmit} id="form" class="z-50 centered-axis-xy w-[80%] h-content absolute bg-white rounded-lg justify-center px-6 py-4 drop-shadow-lg" autocomplete="off"> -->
<!-- <form action="/src/model/addCategory.php" method="POST" id="form" class="z-50 centered-axis-xy w-[80%] h-content absolute bg-white rounded-lg justify-center px-6 py-4 drop-shadow-lg" autocomplete="off"> -->
<form action="http://localhost/task-minder/src/model/addCategory.php" method="POST" id="form" class="z-50 centered-axis-xy w-[80%] h-content absolute bg-white rounded-lg justify-center px-6 py-4 drop-shadow-lg" autocomplete="off">
    <button on:click={closeModal} type="button" id="close-button">
    <!-- <button type="button" id="close-button"> -->
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
        <Input id="task-title-input" name="category-title" required type="text" value="" placeholder="Enter category name..." size="md" class="input-field focus:ring-violet-500 focus:border-violet-500 "/>
    </Label>

    <hr class="fill-current border-[#9940FA] border-solid border-1 my-1 mt-5">

    <Label class="space-y-2 mt-3">
        <span>Color</span>

        <!-- BORDER DOESNT WORKING FIX THIS -->
        <div class="flex flex-wrap gap-1.5">
            <!-- pink -->
            <input type="radio" name="color" required value="pink" class="hidden peer/pink" id="pink">
            <label for="pink" class="bg-pink-300 size-6 rounded-full items-center peer-checked/pink:border-[2px] peer-checked/pink:border-purple-600 peer-checked/pink:border-solid hover:scale-125"></label>

            <!-- red -->
            <input type="radio" name="color" value="red" class="hidden peer/red" id="red">
            <label for="red" class="bg-red-600 size-6 rounded-full items-center peer-checked/red:border-[2px] peer-checked/red:border-purple-600 peer-checked/red:border-solid hover:scale-125"></label>

            <!-- orange -->
            <input type="radio" name="color" value="orange" class="hidden peer/orange" id="orange">
            <label for="orange" class="bg-orange-400 size-6 rounded-full items-center peer-checked/orange:border-[2px] peer-checked/orange:border-purple-600 peer-checked/orange:border-solid hover:scale-125"></label>

            <!-- yellow -->
            <input type="radio" name="color" value="yellow" class="hidden peer/yellow" id="yellow">
            <label for="yellow" class="bg-yellow-300 size-6 rounded-full items-center peer-checked/yellow:border-[2px] peer-checked/yellow:border-purple-600 peer-checked/yellow:border-solid hover:scale-125"></label>

            <!-- lime -->
            <input type="radio" name="color" value="lime" class="hidden peer/lime" id="lime">
            <label for="lime" class="bg-lime-400 size-6 rounded-full items-center peer-checked/lime:border-[2px] peer-checked/lime:border-purple-600 peer-checked/lime:border-solid hover:scale-125"></label>
            
            <!-- green -->
            <input type="radio" name="color" value="green" class="hidden peer/green" id="green">
            <label for="green" class="bg-green-500 size-6 rounded-full items-center peer-checked/green:border-[2px] peer-checked/green:border-purple-600 peer-checked/green:border-solid hover:scale-125"></label>

            <!-- cyan -->
            <input type="radio" name="color" value="cyan" class="hidden peer/cyan" id="cyan">
            <label for="cyan" class="bg-cyan-400 size-6 rounded-full items-center peer-checked/cyan:border-[2px] peer-checked/cyan:border-purple-600 peer-checked/cyan:border-solid hover:scale-125"></label>

            <!-- blue -->
            <input type="radio" name="color" value="blue" class="hidden peer/blue" id="blue">
            <label for="blue" class="bg-blue-600 size-6 rounded-full items-center peer-checked/blue:border-[2px] peer-checked/blue:border-purple-600 peer-checked/blue:border-solid hover:scale-125"></label>

            <!-- purple -->
            <input type="radio" name="color" value="purple" class="hidden peer/purple" id="purple">
            <label for="purple" class="bg-purple-500 size-6 rounded-full items-center peer-checked/purple:border-[2px] peer-checked/purple:border-purple-600 peer-checked/purple:border-solid hover:scale-125"></label>
            
            <!-- gray -->
            <input type="radio" name="color" value="gray" class="hidden peer/gray" id="gray">
            <label for="gray" class="bg-gray-400 size-6 rounded-full items-center peer-checked/gray:border-[2px] peer-checked/gray:border-purple-600 peer-checked/gray:border-solid hover:scale-125"></label>

            <!-- black (zinc)-->
            <input type="radio" name="color" value="zinc" class="hidden peer/black" id="black">
            <label for="black" class="bg-black size-6 rounded-full items-center peer-checked/black:border-[2px] peer-checked/black:border-purple-600 peer-checked/black:border-solid hover:scale-125"></label>
          
            <!-- white (stone)-->
            <input type="radio" name="color" value="stone" class="hidden peer/white" id="white">
            <label for="white" class="bg-white size-6 rounded-full items-center shadow-md drop-shadow-lg peer-checked/white:border-[2px] peer-checked/white:border-purple-600 peer-checked/white:border-solid hover:scale-125"></label>
          
        </div>
    </Label>
        
    <div class="flex justify-end mt-9 mb-4">
        <button on:click={closeModal} id="cancel-add-category-button" class="mr-9 text-gray-400 hover:text-gray-600 focus:text-gray-600 " type="button">Cancel</button>
        <!-- <button id="cancel-add-task-button" class="mr-9 text-gray-400 hover:text-gray-600 focus:text-gray-600 " type="button">Cancel</button> -->
        <button type="submit" name="submit" id="add-task-button" class="px-10 bg-violet-500 hover:bg-violet-800 focus:ring-violet-100">Add</button>
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

