<script lang="ts">
    import { onMount } from 'svelte';
    import '../../styles/global.css';
    import Navbar from "../../components/NavBar.svelte";
    import CardAddNewCategory from "../../components/CardAddNewCategory.svelte";
    import IconPlus from "../../assets/icon-plus.svelte";
    import CardCategoryInfo from "../../components/CardCategoryInfo.svelte";
    import CardAddNewTask from '../../components/CardAddNewTask.svelte';

    let showModal = false;

    // close modal
    function closeModal() {
        showModal = false;
    }

    // fetch data on categories from DB
    let categories: Category[] = [];

    interface Category {
        [x: string]: any;
        data: {
            category_title: string;
            task_amount: number;
            group_amount: number;
        };
    }

    async function fetchData() {
        try{
            const response = await fetch('http://localhost/task-minder/src/model/fetchCategories.php');
            const data: Category[] = await response.json();
            categories = data;
            return data;

        } catch (error) {
            console.error('Error fetching data:', error); 
        }
    }
    
    onMount(() => {
        fetchData();
    }); 

    function handleSubmit() {
        console.log('Form submitted');  // Add this log
    }
</script>

{#if showModal}
    <CardAddNewCategory 
        on:close={closeModal}
        on:submit={handleSubmit}
    />
    <div class="z-30 absolute w-screen h-screen bg-black opacity-50"></div>
{/if}

<Navbar />

<main class="mx-8 py-20">
    
    <!-- TOP PAGE -->
    <h1 class="font-bold text-2xl underline-offset-4">My Category</h1>
    
    <!-- Content box -->
    <div class="flex flex-col flex-1 mt-8 rounded-xl h-fit bg-[#FBF4FE]">
        <div class="mb-8"></div>
        
        <!-- Add New Category -->
         <button on:click={() => showModal = true} type="button">
             <div class="bg-white flex  mt-1 mb-3 p-3 h-[5.5rem] lign-middle rounded-lg drop-shadow-lg hover:bg-gradient-to-r from-white to-purple-200 mx-6 items-center text-[#A3A3A3] hover:text-black hover:scale-105 cursor-default">
                     <IconPlus />
                     <p class="font-bold ml-3">Add New Category</p>
             </div>
         </button>

        <!-- My Category -->
        <div id="my-category" class="flex flex-col h-fit mb-2">
            {#each categories as category}
                <CardCategoryInfo 
                    categoryTitle={category.category_title}
                    taskAmount={category.task_amount}
                    groupAmount={category.group_amount} 
                />
            {/each}
        </div>
    </div>
    <br><br><br>
</main>



<style>

</style>