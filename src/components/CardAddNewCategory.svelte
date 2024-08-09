<script lang="ts">
    import { onMount } from 'svelte';
    import IconCross from "../assets/icon-cross.svelte";
    import { Radio, Input, Modal, Label, Helper, Button, Checkbox, A, Datepicker } from 'flowbite-svelte';
    import { createEventDispatcher } from 'svelte';
    import type { FormEventHandler } from "svelte/elements";
    
    const dispatch = createEventDispatcher();

    // Closing modal
    function closeModal() {
        dispatch('close');
    }

    //Prevent data being submitted many times in one click 
    let loading = false;
    async function submitForm(event: Event) {
        event.preventDefault();
        loading = true;

        const target = event.target;
        if (!(target instanceof HTMLFormElement)) {
            console.error('Event target is not a form');
            loading = false;
            return;
        }

        const form = target;
        const formData = new FormData(form);
        formData.append('submit', 'true');

        try {
            const response = await fetch(form.action, {
                method: form.method,
                body: formData
            });

            const text = await response.text();
            console.log('Response:', text);  // Log the raw response

            let data;
            try {
                data = JSON.parse(text);
            } catch (error) {
                console.error('Failed to parse JSON:', error);
                // Assume success if we can't parse JSON
                data = { success: true };
            }

            if (data.success) {
                dispatch('submit');
                dispatch('close');
                window.location.href = 'http://localhost:5173/MyCategory';  // Redirect after successful submission
            } else {
                console.error('Submission failed:', data.message);
                // Handle error (e.g., show error message to user)
            }
        } catch (error) {
            console.error('Error:', error);
        } finally {
            loading = false;
        }
    }

    //Prevent null value (category title) be submitted


 
    
</script>
<!-- on:submit|preventDefault={submitForm} -->

<form 
    action="http://localhost/task-minder/src/model/addCategory.php" 
    method="POST"
    class="z-50 centered-axis-xy w-[80%] h-content absolute bg-white rounded-lg justify-center px-6 py-4 drop-shadow-lg" 
    autocomplete="off"
    id="addCategoryForm"
    on:submit={submitForm}
    >

    <!-- Close Button -->
    <button on:click={closeModal} type="button" id="close-button">
        <label for="close-button">
            <IconCross className="size-[1.5rem] text-gray-400 hover:text-gray-600 focus:text-gray-600"/>
        </label>
    </button>

    <!-- Category Title Input -->
    <div class="flex justify-center">
        <p class="font-bold text-base">Add New Category</p>
    </div>

    <Label class="space-y-2 mt-9">
        <span class="task-title">Category Title</span>
        <Input 
            name="category-title" 
            required 
            type="text" 
            placeholder="Enter category name..." 
            size="md" 
            disabled={loading}
            class="input-field focus:ring-violet-500 focus:border-violet-500 "/>
    </Label>

    <div class="flex justify-end mt-9 mb-4">

        <!-- cancel btn -->
        <button 
            on:click={closeModal} 
            class="mr-9 text-gray-400 hover:text-gray-600 focus:text-gray-600 " 
            type="button"
            disabled={loading}
            >
            Cancel 
        </button>
        <!-- <button id="cancel-add-task-button" class="mr-9 text-gray-400 hover:text-gray-600 focus:text-gray-600 " type="button">Cancel</button> -->

        <!-- submit btn -->
        <Button 
            type="submit"  
            class="px-10 bg-violet-500 hover:bg-violet-800 focus:ring-violet-100 "
            disabled={loading}
            >
            {loading ? 'Add' : 'Add'}
        </Button>
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

