<script lang="ts">
    import IconHome from "../assets/icon-home.svelte";
    import IconAdd from "../assets/icon-add.svelte";
    import IconCategory from "../assets/icon-category.svelte";
    import IconUser from "../assets/icon-user.svelte";
    import IconSetting from "../assets/icon-setting.svelte";
    
    let navElement: HTMLElement;
    export let visible: boolean = true;

    $: if (navElement) {
    navElement.style.transform = visible ? 'translateY(0)' : 'translateY(100%)';
    }
</script>


<nav class="navbar-container fixed bottom-0 flex md:space-x-4 w-full justify-between content-center border-solid border-2 border-[#9940FA] bg-white z-10">
    <!-- HOME -->
    <a href="https://" class="flex">
        <div class="home flex flex-col px-4 my-4 text-center md:flex-row">
        <IconHome className="content-center place-self-center "/>
        <p class="text-style pt-1">Home</p>

        </div>
    </a>

    <!-- ADD TASK -->
    <a href="https://" class="flex">
        <div class="add-task flex flex-col px-4 my-4 text-center md:flex-row">
            <IconAdd className="content-center place-self-center "/>
            <p class="text-style pt-1">Add</p>
        </div>
    </a>

    <!-- MY CATEGORY -->
    <a href="https://" class="flex">
        <div class="my-category flex flex-col px-4 my-4 text-center md:flex-row">
            <IconCategory className="content-center place-self-center "/>
            <p class="text-style pt-1">My Category</p>


        </div>
    </a>

    <!-- USER -->
    <a href="https://" class="flex">
        <div class="user flex flex-col px-4 my-4 text-center md:flex-row">
            <IconUser className="content-center place-self-center " />
            <p class="text-style pt-1">Home</p>
        </div>
    </a>

    <!-- SETTING -->
    <a href="https://" class="logo">
        <div class="setting flex flex-col px-4 my-4 text-center md:flex-row">
            <IconSetting className="justify-center place-self-center " />
            <p class="text-style pt-1">Setting</p>
        </div>
    </a>
</nav>

<style>
    nav p{
        font-size: 0.79rem;
    }

    /*@media only screen and (max-width: 768px) {
  For mobile phones: 
 .navbar-container{
        display: flex;
        width:max-content;
        justify-content: space-between;
        margin:1rem 1rem;
        align-self: center;
    } 

    a{
        width: max-content;
        display: flex;
        padding: 1rem 2rem;
    }

    .logo{
        display: flex;
    }
}*/

</style>