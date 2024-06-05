<script lang="ts">
    import IconCross from "../assets/icon-cross.svelte";
    import IconCalendar from "../assets/icon-calendar.svelte";
  import { onMount } from "svelte";

    // #task-title-input
    // #task-description-input

</script>

<div class=" z-50 centered-axis-xy w-[75%] h-[50%] absolute bg-red-200 rounded-lg justify-center px-6 py-4 drop-shadow-lg">

    <!-- TOP -->
    <div class="flex justify-between">
        <IconCross className="size-[1.5rem]"/>
        <div></div>
        <p class="font-bold text-base">Add New Task</p>
        <div></div>
    </div>


    <!-- INPUT FIELD -->
    <!-- <div class="border-2 border-[#A3A3A3] rounded-lg p-2 mt-9 focus:border-[#9940FA]">
        <p class="text-xs">Task Title</p>
        <p id="task-title-input">Designing a website</p>
        <input type="text" name="Input title here" id="" 
        class="peer block min-h-[auto] w-full rounded-lg bg-transparent px-3 py-[0.5rem] leading-[1.6] outline-none transition-all duration-200 ease-linear  focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-black dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0">
    </div> -->

    <div id="task-container" class="border-2 border-[#A3A3A3] rounded-lg p-2 mt-9 focus:border-purple-600">
        <p class="text-xs">Task Title</p>
    </div>

    <div class="mb-6">
        <label for="default-input" class="block mb-2 text-xs font-medium text-gray-900 dark:text-black">Task Title</label>
        <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div>
    
    <div class="relative max-w-sm">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
           <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
        </div>
        <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
      </div>


    <!-- <div class="flex justify-between border-2 border-[#A3A3A3] rounded-lg p-2 mt-3">
        <div>
            <p class="text-xs">Due Date</p>
            <p id="task-title-input">XXXXX</p>
        </div>
        <IconCalendar className="size-[1.5rem]" />
    </div> -->
    <div class=" border-2 border-[#A3A3A3] rounded-lg p-2 mt-3">
        <p class="text-xs">Description</p>
        <p id="task-description-input">Designing a website</p>
    </div>

    <hr class="fill-current border-[#9940FA] border-solid border-1 my-1 mt-3">

    <!-- URGENT LEVEL -->

    <p class="text-xs mt-3">Urgent Level</p>
    <!-- <button type="button"></button> -->
</div>

<style>
.centered-axis-xy {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
}

</style>