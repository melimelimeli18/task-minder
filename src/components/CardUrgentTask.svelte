<script>
// #task-title
// #group-name
// #urgent-level
// bg-red-500/green/yellow
//text-red-600/green/yellow
// hover:bg-gradient-to-r from-white to-purple-100

import IconOpen from "../assets/icon-open.svelte"
</script>

<main>
    <!-- <div class="container absolute mx-[-2rem] h-[6rem] bg-[#FBF4FE]"> -->
    <div class="bg-white w-[7rem] p-3 h-[5.5rem] mr-3 my-3 lign-middle rounded-lg drop-shadow-lg hover:bg-gradient-to-r from-white to-purple-100">
        <p id="task-title" class="font-bold text-xs"> Task 1</p>
        <hr class="fill-current border-[#9940FA] border-solid border-1 my-1">
        <p id="group-name" class="text-xs truncate">Matematika Aljabar</p>
        
        <div class="flex justify-between my-1 mt-2 justify-items-center">
            <div class="flex">
                <div id="urgent-level" class="w-3 h-3 bg-green-500 rounded-full mt-[2px]"></div>
                <p id="urgent-text" class="text-xs ml-2 text-green-600 ">High</p>
            </div>
            <IconOpen className=" text-[#A3A3A3]"/>
        </div>

    </div>
</main>


<style>

</style>