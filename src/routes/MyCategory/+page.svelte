<script>
    import Navbar from "../../components/NavBar.svelte";
    import CardAddNewCategory from "../../components/CardAddNewCategory.svelte"
    import CardCategoryInfo from "../../components/CardCategoryInfo.svelte"
    import IconPlus from "../../assets/icon-plus.svelte"
</script>
<CardAddNewCategory />
<Navbar />
<!-- ADD MODAL -->

<main class="mx-8 py-20">

    
    <!-- TOP PAGE -->
    <h1 class="font-bold text-2xl underline-offset-4">My Category</h1>
    
    <!-- Content box -->
    <div class="flex flex-col flex-1 mt-8 rounded-xl h-full bg-[#FBF4FE]">
        <div class="mb-8"></div>
        
        <!-- Add New Category -->
        <div class="bg-white flex  mt-1 mb-3 p-3 h-[5.5rem] lign-middle rounded-lg drop-shadow-lg hover:bg-gradient-to-r from-white to-purple-200 mx-6 items-center text-[#A3A3A3] hover:text-black hover:scale-105 cursor-default">
                <IconPlus />
                <p class="font-bold ml-3">Add New Category</p>
        </div>

        <!-- My Category -->
        <CardCategoryInfo />
        <CardCategoryInfo />
        <CardCategoryInfo />
        <CardCategoryInfo />
        <CardCategoryInfo />
        <CardCategoryInfo />
        <CardCategoryInfo />
        <CardCategoryInfo />
        <CardCategoryInfo />
        <CardCategoryInfo />
        <CardCategoryInfo />
        <CardCategoryInfo />
    </div>

    <br>
    <br>
</main>

<style>

</style>