<script>
    // Toggle dark mode
    function toggleDarkMode() {
        document.documentElement.classList.toggle('dark');
    }
</script>

<div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800 px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
    <button onclick="toggleElement('#mobile-menu')" type="button" class="-m-2.5 p-2.5 text-gray-700 dark:text-gray-300 lg:hidden">
        <span class="sr-only">Open sidebar</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
        </svg>
    </button>

    <div class="h-6 w-px bg-gray-900/10 dark:bg-gray-700 lg:hidden" aria-hidden="true"></div>

    <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
        <form class="relative flex flex-1" action="#" method="GET"></form>
        <div class="flex items-center gap-x-4 lg:gap-x-6">
            <button onclick="toggleDarkMode()" type="button" class="p-2.5 text-gray-400 hover:text-gray-500 dark:text-gray-300 dark:hover:text-white">
                <span class="sr-only">Toggle Dark Mode</span>
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3.75v.75M12 20.25v.75M4.47 4.47l.53.53M18.47 18.47l.53.53M3.75 12h.75M20.25 12h.75M4.47 19.53l.53-.53M18.47 5.53l.53-.53M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z"></path>
                </svg>
            </button>

            <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-900/10 dark:bg-gray-700" aria-hidden="true"></div>

            <div id="dropdownMenu" class="relative">
                <button onclick="toggleElement('#dropdownMenu #dropdown')" type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full bg-gray-50 dark:bg-gray-700" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                    <span class="hidden lg:flex lg:items-center">
                        <span class="ml-4 text-sm font-semibold leading-6 text-gray-950 dark:text-gray-100" aria-hidden="true">{{auth()->user()->name}}</span>
                        <svg class="ml-2 h-5 w-5 text-gray-400 dark:text-gray-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </button>
                <div id="dropdown" class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white dark:bg-gray-800 dark:text-gray-200 py-2 shadow-lg ring-1 ring-gray-900/5 dark:ring-gray-700 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <a href="http://migasuto.test/profile" class="block px-3 py-1 text-sm leading-6 text-gray-900 dark:text-gray-300" role="menuitem" tabindex="-1" id="user-menu-item-0">Your profile</a>
                    <form action="http://migasuto.test/logout" method="POST" class="block px-3 py-1 text-sm leading-6 text-gray-900 dark:text-gray-300" role="menuitem" tabindex="-1">
                        <input type="hidden" name="_token" value="HATYqIEAmC2mn761TEP8SKq5bnMxMQNKiFDwrUQu" autocomplete="off">
                        <button type="submit" class="w-full text-left">Sign out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
