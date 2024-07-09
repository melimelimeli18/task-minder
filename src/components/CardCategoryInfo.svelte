<script lang="ts">
    import IconOpen from "../assets/icon-open.svelte";
    import { onMount } from 'svelte';
    import type { Category } from '../utils/interfaces.ts'; 
    export let category;
    let categories: Category[] = [];

    // onMount(async () => {
    //     const response = await fetch('/path/to/fetch_categories.php');
    //     categories = await response.json() as Category[];
    // });

</script>

<div id="category-container" class="{`bg-${category.color}-200`} bg-white flex  mt-1 mb-3 p-3 h-[5.5rem] lign-middle rounded-lg drop-shadow-lg hover:bg-gradient-to-r from-white to-purple-200 mx-6 justify-between hover:scale-105 cursor-default">
            
    <div class="ml-3 mt-1">
        <!-- category title -->
        <p id="task-title" class="{`text-${category.color}-800`} font-bold text-lg">{category.category_title}</p>

        <div class="flex mt-1">
            <!-- Group -->
            <p class="text-xs">{category.task_amount} Groups</p>
                
            <!-- Task -->
            <p class="text-xs ml-3">{category.task_amount} Tasks</p>
        </div>
    </div>

    <div class="flex items-center">
        <!-- vertical line -->
        <!-- <div class="fill-current border-l-2 border-[#A3A3A3] border-solid max-h-full h-full my-1"></div> -->
        <button type="button">  
            <IconOpen className="text-[#A3A3A3] hover:text-black justify-center size-6 mx-6" />   
        </button>
    </div>
</div>