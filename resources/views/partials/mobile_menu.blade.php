<div id="mobile-menu" class="relative hidden z-50" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-900/80"></div>
    <div class="fixed inset-0 flex">
        <div class="relative mr-16 flex w-full max-w-xs flex-1">
            <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                <button onclick="toggleElement('#mobile-menu')" type="button" class="-m-2.5 p-2.5">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 px-6 pb-4 ring-1 ring-white/10">
                <div class="flex h-16 shrink-0 items-center">
                    <img class="h-8 w-auto" src="{{ asset('logo.png') }}" alt="Your Company">
                </div>
                <nav class="flex flex-1 flex-col">
                    <ul role="list" class="flex flex-1 flex-col gap-y-7">
                        <li>
                            <ul role="list" class="-mx-2 space-y-1">
                                <li>
                                    <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
                                    <a href="{{route('dashboard')}}"
                                       class="bg-gray-800 text-white group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href=""
                                       class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <svg width="34" height="30" viewBox="0 0 34 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M33.4408 6.86075C33.4414 7.17662 33.3655 7.48768 33.2198 7.76592C33.0741 8.04415 32.8632 8.28082 32.6062 8.4546C32.3492 8.62838 32.0541 8.73382 31.7475 8.76142C31.4409 8.78902 31.1324 8.73791 30.8499 8.6127L26.2268 20.0583H7.75226L3.13288 8.61803C2.71542 8.79786 2.24831 8.81483 1.81951 8.66575C1.3907 8.51668 1.0298 8.21185 0.804769 7.80866C0.579736 7.40547 0.5061 6.93175 0.597729 6.47672C0.689357 6.02168 0.939927 5.61673 1.30225 5.33812C1.66457 5.05952 2.11365 4.92648 2.5649 4.96407C3.01615 5.00166 3.43844 5.20728 3.75225 5.5422C4.06605 5.87713 4.24971 6.31825 4.26864 6.7825C4.28758 7.24674 4.14047 7.70207 3.85503 8.06274L10.3121 13.4862L11.8647 3.85805C11.4276 3.77844 11.0328 3.54063 10.752 3.1878C10.4711 2.83496 10.3229 2.39048 10.3341 1.93502C10.3453 1.47957 10.5152 1.04332 10.813 0.705471C11.1108 0.367619 11.5168 0.150549 11.9573 0.0936607C12.3977 0.0367718 12.8434 0.143834 13.2135 0.395415C13.5836 0.646997 13.8536 1.02642 13.9744 1.46483C14.0952 1.90324 14.0588 2.37157 13.8719 2.78482C13.685 3.19807 13.36 3.52885 12.9557 3.71713L16.9866 12.6292L21.0255 3.69428C20.6238 3.49981 20.3033 3.16386 20.1224 2.74747C19.9415 2.33109 19.9121 1.86191 20.0397 1.4252C20.1672 0.988493 20.4432 0.613232 20.8174 0.367617C21.1916 0.122001 21.6393 0.022331 22.0791 0.0867189C22.5188 0.151107 22.9215 0.375279 23.2139 0.718499C23.5063 1.06172 23.669 1.50121 23.6724 1.9571C23.6759 2.41299 23.5199 2.85502 23.2327 3.20287C22.9456 3.55073 22.5464 3.78131 22.1076 3.85272L23.661 13.4824L30.1374 8.05131C29.952 7.81382 29.8247 7.53418 29.7663 7.23583C29.7079 6.93748 29.72 6.6291 29.8016 6.33653C29.8832 6.04396 30.0319 5.77572 30.2353 5.55429C30.4387 5.33286 30.6908 5.16468 30.9706 5.06386C31.2504 4.96303 31.5496 4.93248 31.8433 4.97478C32.1369 5.01708 32.4164 5.13098 32.6583 5.30696C32.9002 5.48293 33.0975 5.71585 33.2337 5.98619C33.3698 6.25653 33.4409 6.55643 33.4408 6.86075ZM28.1223 25.2372H5.85671V29.8075H28.1223V25.2372ZM26.0628 21.2763H7.93706V24.0185H26.0628V21.2763Z" fill="#F5F5F5"/>
                                        </svg>
                                        Contestants
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="mt-auto">
                            <a href="#"
                               class="group -mx-2 flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-400 hover:bg-gray-800 hover:text-white">
                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                Settings
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
