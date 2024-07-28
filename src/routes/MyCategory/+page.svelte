<script lang="ts">
    import { onMount } from 'svelte';
    import Navbar from "../../components/NavBar.svelte";
    import CardAddNewCategory from "../../components/CardAddNewCategory.svelte";
    import IconPlus from "../../assets/icon-plus.svelte";
    import IconOpen from "../../assets/icon-open.svelte";
    import CardCategoryInfo from "../../components/CardCategoryInfo.svelte";
    import Category from "../../components/CardCategoryInfo.svelte";


    let showModal = false;
    function closeModal() {
        showModal = false;
    }


    let categories: Category[] = [];

    interface Category {
        [x: string]: any;
        data: {
            category_title: string;
            color: string;
            task_amount: number;
            group_amount: number;
        };
    }

    async function fetchData() {
        try{
            const response = await fetch('http://localhost/task-minder/src/model/fetchCategories.php');
            const data: Category[] = await response.json();
            categories = data;
        } catch (error) {
            console.error('Error fetching data:', error); 
        }
        
    }
    
    onMount(() => {
        fetchData();
    });
</script>

{#if showModal}
    <!-- <CardAddNewCategory on:close={closeModal}/> -->
    <!-- <CardAddNewCategory on:categoryAdded={handleCategoryAdded} /> -->
    <CardAddNewCategory on:close={closeModal}/>
    <div class="z-30 absolute w-screen h-screen bg-black opacity-50"></div>
{/if}

<!-- <CardAddNewCategory /> -->
<Navbar />
<!-- ADD MODAL -->

<main class="mx-8 py-20">
    
    <!-- TOP PAGE -->
    <h1 class="font-bold text-2xl underline-offset-4">My Category</h1>
    
    <!-- Content box -->
    <div class="flex flex-col flex-1 mt-8 rounded-xl h-full bg-[#FBF4FE]">
        <div class="mb-8"></div>
        
        <!-- Add New Category -->
         <button on:click={() => (showModal = true)} type="button">
             <div class="bg-white flex  mt-1 mb-3 p-3 h-[5.5rem] lign-middle rounded-lg drop-shadow-lg hover:bg-gradient-to-r from-white to-purple-200 mx-6 items-center text-[#A3A3A3] hover:text-black hover:scale-105 cursor-default">
                     <IconPlus />
                     <p class="font-bold ml-3">Add New Category</p>
             </div>
         </button>

        <!-- My Category -->
        <div id="my-category" class="flex flex-col">
            {#each categories as category}
                <CardCategoryInfo 
                    categoryTitle={category.category_title}
                    color={category.color}
                    taskAmount={category.task_amount}
                    groupAmount={category.group_amount} 
                />
            {/each}
        </div>
    </div>

    <br>
    <br>
</main>



<style>

</style>