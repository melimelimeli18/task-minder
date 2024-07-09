<script lang="ts">    
    // INPUT FIELD #task-title-input //#task-description-input #due-date-input
    // NAME #urgent-level
    // VALUE / urgent-high / urgent-medium / urgent-low
    // BUTTON #add-task-button #cancel-add-task-button #close-button
    document.addEventListener("DOMContentLoaded", function(event) {
        // document.getElementById("date").innerHTML = dateGenerator(); //date generator
        // document.getElementById("todolist").addEventListener("click", inputArea); //make the input text appear when we clicked "create new things "
        // document.getElementById("myForm").addEventListener("submit", submit);
        // document.getElementById("add-new-task").addEventListener('submit', handleFormSubmit);
    });

    import IconCross from "../assets/icon-cross.svelte";
    import { Input, Modal, Label, Helper, Button, Checkbox, A, Datepicker } from 'flowbite-svelte';
    import TextUrgentHigh from "./text/TextUrgentHigh.svelte"
    import TextUrgentMedium from "./text/TextUrgentMedium.svelte";
    import TextUrgentLow from './text/TextUrgentLow.svelte';

    import { createEventDispatcher } from 'svelte';
    import { onMount } from 'svelte';
    // import php from "../model/newTask.php"

    const dispatch = createEventDispatcher();

    function closeModal() {
        dispatch('close');
    }

    // const closeButton = document.getElementById("close-button");
    // const cancelButton = document.getElementById("cancel-button");
    // const buttons = [closeButton, cancelButton];


    // onMount(() => {
    //     const NewTaskForm = document.getElementById('add-new-task');
    //     console.log(NewTaskForm);
    //     if (NewTaskForm) {
    //         NewTaskForm.addEventListener('submit', handleFormSubmit);
    //     } else {
    //         console.error('Element with ID "today-date" not found.');
    //     }
    // });
    
    // Function to handle form submission
    function submit(event: Event) {
        event.preventDefault();
    }
</script>

<form action="../model/addTask.php" method="POST" id="add-new-task" class=" z-50 centered-axis-xy w-content h-content relative bg-white rounded-lg justify-center px-6 py-4 drop-shadow-lg">
    <!-- TOP -->
    <button on:click={closeModal} type="button" id="close-button">
        <label for="close-button">
            <IconCross className="size-[1.5rem] text-gray-400 hover:text-gray-600 focus:text-gray-600"/>
        </label>
    </button>
    <div class="flex justify-center">
        <p class="font-bold text-base">Add New Task</p>
    </div>

    <!-- Task Title -->
    <Label class="space-y-2 mt-9">
        <span class="task-title">Task Title</span>
        <Input id="task-title-input" name="task-title" type="text" placeholder="Enter task title..." size="md" class="input-field focus:ring-violet-500 focus:border-violet-500 "/>
      </Label>
    
    <!-- Description -->
    <Label class="space-y-2 mt-3 ">
        <span>Description</span>
        <Input id="task-description-input" name="task-description" type="text" placeholder="Describe the task..." size="md" class="focus:ring-violet-500 focus:border-violet-500"/>
      </Label>

    <!-- Due date -->
    <Label class="space-y-2 mt-3">
        <span>Due Date</span>
        <input id="due-date-input" name="due-date" type="date" class="bg-gray-50 w-full focus:border-violet-500 border-gray-300 focus:ring-violet-500 rounded-lg text-gray-500 text-sm p-2.5">
    </Label>

    <hr class="fill-current border-[#9940FA] border-solid border-1 my-1 mt-5">

    <p class="text-sm font-semibold mt-3">Urgent Level</p>

    <div class="flex">
        <input type="radio" id="high" name="urgent-level" value="urgent-high" class="hidden radio-button peer/high">
        <label for="high" 
        class="py-2 px-4 mt-3 mr-2 border-[1.5px] border-violet-500 rounded-lg bg-white peer-checked/high:bg-red-200 peer-hover/high:bg-red-200">
            <TextUrgentHigh />
        </label>
        
        <!-- peer-checked: peer-hover: -->
        <input type="radio" id="medium" name="urgent-level" value="-urgent-medium" class="hidden radio-button peer/medium">
        <label for="medium" 
        class="py-2 px-4 mt-3 mr-2 border-[1.5px] border-violet-500 rounded-lg bg-white peer-checked/medium:bg-orange-200 peer-hover/medium:bg-orange-200">
            <TextUrgentMedium />
        </label>

        <input type="radio" id="low" name="urgent-level" value="urgent-low" class="hidden radio-button peer/low">
        <label for="low" 
        class="py-2 px-4 mt-3 mr-2 border-[1.5px] border-violet-500 rounded-lg peer-checked/low:bg-green-200 peer-hover/low:bg-green-200">
            <TextUrgentLow />
        </label>
    </div>


    <div class="flex justify-end mt-9 mb-4">
        <button on:click={closeModal} id="cancel-add-task-button" class="mr-9 text-gray-400 hover:text-gray-600 focus:text-gray-600 " type="button">Cancel</button>
        <Button id="add-task-button" type="submit" name="submit" value="Submit" class="px-10 bg-violet-500 hover:bg-violet-800 focus:ring-violet-100">Add</Button>
    </div>
</form>

<style>
    .centered-axis-xy {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
    }
</style>
