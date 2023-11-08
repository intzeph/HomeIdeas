<nav id="scrolling-navbar" class="bg-yellow-400 shadow">
    <div class="container flex items-center justify-between mx-auto p-4 md:container md:mx-auto ">

        <!--logo-->

        <a href="<?php echo e(route('home')); ?>" class="flex items-center">
            <img src="<?php echo e(asset('homeIdeasLogo.svg')); ?>" class="h-12" alt="Flowbite Logo" />
        </a>



        <!--search-->
        <div class="flex md:order-2">
            <button id="search-toggle" type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                aria-expanded="false"
                class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>

            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search...">
            </div>

            <button id="navbar-toggle" data-collapse-toggle="navbar-search" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>

        <!--content-->
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <div class="relative mt-3 md:hidden">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search...">
            </div>
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium  md:flex-row md:space-x-8 md:mt-0 md:border-0">
                <li>
                    <a href="<?php echo e(route('home')); ?>"
                        class="text-lg block py-2 pl-3 pr-4 text-indigo-900 bg-blue-700 rounded md:bg-transparent
                        md:p-0"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#"
                        class="text-lg font-medium block py-2 pl-3 pr-4 text-indigo-900 bg-blue-700 rounded bg-transparent
                        md:p-0">About</a>
                </li>
                <li>
                    <a href="#"
                        class="text-lg font-medium block py-2 pl-3 pr-4 text-indigo-900 bg-blue-700 rounded bg-transparent
                        md:p-0">Products</a>
                </li>
                <li>
                    <a href="#"
                        class=" text-lg font-medium block py-2 pl-3 pr-4 text-indigo-900 bg-blue-700 rounded bg-transparent
                        md:p-0">Contact</a>
                </li>
                <li class="flex items-center">
                    <img class="h-4 pr-1" src="<?php echo e(asset('icons/shopping_cart.svg')); ?>" alt="shopping Cart">
                    <a href="#"
                        class=" text-lg font-medium block py-2 pl-3 pr-4 text-indigo-900 bg-blue-700 rounded bg-transparent
                        md:p-0">Cart</a>
                </li>
            </ul>
        </div>

        <div class="relative group md:order-2 hover:bg-yellow-500/50 rounded p-2">
            <a id="user-dropdown-toggle" class="nav-link dropdown-toggle dropdowntoggle_1 user" href="#"
                role="button" aria-expanded="false">
                <img src="<?php echo e(asset('icons/user_icon.svg')); ?>" alt="user_icon" class="h-">
            </a>

            <ul id="user-dropdown" class="dropdown-menu drpmenu_1 absolute hidden  text-indigo-900 text-md rounded-lg shadow-lg bg-yellow-400">
                <li class="drplist_1">
                  <div class="drpdown_menu_profile">
                    <img src="<?php echo e(asset('resources/profile_icon.svg')); ?>" alt="">
                    <a href="<?php echo e(route('login')); ?>" class="dropdown-item drpdwn__menu hover:bg-gray-300 ">Sign In</a>
                  </div>
                </li>
                <li class="drplist_1">
                  <div>
                    <img src="<?php echo e(asset('resources/register_icon2.svg')); ?>" alt="">
                    <a href="<?php echo e(route('register')); ?>" class="dropdown-item drpdwn__menu hover:bg-gray-300">Register</a>
                  </div>
                </li>
              </ul>


    </div>
</nav>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        const button = document.getElementById('navbar-toggle');
        const searchButton = document.getElementById('search-toggle');
        const menu = document.getElementById('navbar-search');

        searchButton.addEventListener('click', function() {
            menu.classList.toggle('hidden');
        });

        button.addEventListener('click', function() {
            menu.classList.toggle('hidden');
        });
    });

    document.getElementById('user-dropdown-toggle').addEventListener('mouseenter', function() {
        document.getElementById('user-dropdown').classList.remove('hidden');
    });

    document.getElementById('user-dropdown-toggle').addEventListener('mouseleave', function() {
        document.getElementById('user-dropdown').classList.add('hidden');
    });

    document.getElementById('user-dropdown').addEventListener('mouseenter', function() {
        document.getElementById('user-dropdown').classList.remove('hidden');
    });

    document.getElementById('user-dropdown').addEventListener('mouseleave', function() {
        document.getElementById('user-dropdown').classList.add('hidden');
    });
</script>
<?php /**PATH C:\xampp\htdocs\HomeIdeas\resources\views/layout/navLayout.blade.php ENDPATH**/ ?>