<script>
// #task-title
// #group-name

import IconTest from "../assets/icon-test.svg"
import IconOpen from "../assets/icon-open.svelte"
</script>

<main>
    <!-- <div class="container absolute mx-[-2rem] h-[6rem] bg-[#FBF4FE]"> -->
    <div class="bg-white w-[7rem] p-3 h-[5.5rem] mr-3 my-3 lign-middle rounded-lg drop-shadow-lg">
        <p id="task-title" class="font-bold text-xs"> Task 1</p>
        <hr class="fill-current border-[#9940FA] border-solid border-1 my-1">
        <p id="group-name" class="text-xs"> Group 1</p>
        
        <div class="flex justify-between my-1">
        <!-- <img src={IconTest} alt="" srcset="" class="w-3 fill-red-500 text-red-500 icon-color"> B -->
        <p class="text-xs">214515</p>
        <IconOpen />
        </div>

    </div>
</main>


<style>

</style>