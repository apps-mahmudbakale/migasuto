<!-- Static sidebar for desktop -->
<div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
    <!-- Sidebar component -->
    <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-100 dark:bg-gray-800 px-6 pb-4">
        <div class="flex h-16 shrink-0 items-center">
            <img class="h-8 w-auto" src="{{ asset('logo.png') }}" alt="Your Company">
            <h4 class="text-gray-950 dark:text-white  ml-2">Migasuto</h4>
        </div>
        <nav class="flex flex-1 flex-col">
            <ul role="list" class="flex flex-1 flex-col gap-y-7">
                <li>
                    <ul role="list" class="-mx-2 space-y-1">
                        <!-- Dashboard Link -->
                        <li>
                            <a href="{{ route('dashboard') }}"
                               class="{{ request()->is('dashboard') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }} group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M3 3h18M3 12h18M3 21h18"/>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <!-- Questionnaire Link -->
                        <li>
                            <a href="{{ route('onboard.index') }}"
                               class="{{ request()->is('forms.index') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }} group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M5.75 3.5h12.5c1.216 0 2.25.984 2.25 2.2v12.6c0 1.216-1.034 2.2-2.25 2.2H5.75A2.225 2.225 0 013.5 18.3V5.7C3.5 4.484 4.534 3.5 5.75 3.5zm5.25 3.75h4.5m-4.5 3.5h2.5m-5.5 4.75h8"/>
                                </svg>
                                Onboarding
                            </a>
                        </li>

                        <!-- Call Scheduling -->
                        <li>
                            <a href="{{route('schedule-meeting-form')}}"
                               class="{{ request()->is('call/scheduling') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }} group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M10 6h4m2 0h-8m-2 0h16M4 10h16M4 14h16M4 18h16"/>
                                </svg>
                                Call Scheduling
                            </a>
                        </li>

                        <!-- Note Taking -->
                        <li>
                            <a href="{{route('notes.index')}}"
                               class="{{ request()->is('note/taking') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }} group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M5 3h14a2 2 0 012 2v16a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"/>
                                </svg>
                                Notes
                            </a>
                        </li>

                        <!-- Performance Metrics -->
                        <li>
                            <a href=""
                               class="{{ request()->is('performance/metrics') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }} group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M12 9.75l1.75 2.75H7m12 5h-7l2.75-4H7M7 7v6l-4 6h14l4-6V7"/>
                                </svg>
                                Performance Metrics
                            </a>
                        </li>

                        <!-- Document Management -->
                        <li>
                            <a href=""
                               class="{{ request()->is('document/management') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }} group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M5 12h14m-6 8h-2V4h2v16z"/>
                                </svg>
                                Document Management
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
