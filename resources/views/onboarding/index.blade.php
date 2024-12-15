@extends('layouts.app')

@section('content')
<main class="py-10 bg-gray-100 min-h-screen">
    <div class="max-w-[68rem] mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Welcome {{ auth()->user()->name }}</h2>
        @if($cfoRecords)
        <div class="mt-6">
            <button
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                onclick="toggleCollapse('cfo-section')">
                Your Fractional CFO Records
                <span id="cfo-section-icon" class="ml-2 transform rotate-0">
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </span>
            </button>
            <div id="cfo-section" class="mt-4 hidden p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                <div>
                    <div class="px-4 sm:px-0">
                        <h3 class="text-base/7 font-semibold text-gray-900">Fractional CFO Response</h3>
                        <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Business Vision and Objectives</p>
                    </div>
                    <div class="mt-6 border-t border-gray-100">
                        <dl class="divide-y divide-gray-100">
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Client Name</dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$cfoRecords->name}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Country of Domicile</dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->country}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">What inspired the idea for your
                                    business?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->inspiration}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">What is your core product or service,
                                    and who is your target market?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$cfoRecords->product
                                    }}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">What problems does your business aim to
                                    solve?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->solution}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">How does your idea stand out from
                                    competitors?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->advantage}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">How do you envision your business
                                    growing in the first few years?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->envision}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">What are your long-term goals?</dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$cfoRecords->goals}}
                                </dd>
                            </div>
                            <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Business Model and Revenue Streams</p>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Have you identified any potential
                                    revenue streams? If so, please describe?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->revenue_stream}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Do you have ideas about pricing
                                    structures, and if so, what do they look like?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$cfoRecords->pricing
                                    }}
                                </dd>
                            </div>
                            <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Initial Financial Assumptions</p>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Have you estimated the initial start-up
                                    costs required to bring your idea to market?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->startup_cost}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Do you anticipate any significant
                                    capital expenditures in the near term (e.g., equipment, software, real estate)?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->expenditure}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">What are your assumptions for your
                                    business’s break-even point and time frame for profitability?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->profitability}}
                                </dd>
                            </div>
                            <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Funding and Capital Requirements</p>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">How much capital are you currently
                                    seeking to raise, if any?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->capital}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900"> Do you have any committed investors?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->investor}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Are you planning on self-funding
                                    initially?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->self_funding}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900"> How much of your capital are you
                                    willing to invest initially?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->capital_invest}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900"> How do you plan to allocate any initial
                                    capital raised?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->capital_raised}}
                                </dd>
                            </div>
                            <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Projected Financial Needs</p>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900"> What are your projected operating
                                    expenses (e.g., salaries, rent, etc) in the first year?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->projected_needs }}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900"> Do you anticipate hiring employees, or
                                    will you work with contractors and freelancers?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$cfoRecords->hiring
                                    }}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900"> What Job roles will you initially hire
                                    for?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$cfoRecords->job_hire
                                    }}
                                </dd>
                            </div>
                            <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Revenue Projections</p>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900"> Have you set initial sales targets for
                                    the first 12 months and thereafter? If so, what are they?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->sale_target }}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">How do you plan to market and promote
                                    your product or service?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$cfoRecords->marketing
                                    }}
                                </dd>
                            </div>
                            <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Risk Management and Challenges</p>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900"> What do you see as the biggest risks or
                                    challenges to getting your business off the ground
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$cfoRecords->risk }}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900"> Are there legal, regulatory, or
                                    compliance concerns specific to your industry?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->compliance_concern }}
                                </dd>
                            </div>
                            <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Financial Goals and Metrics for
                                Success</p>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900"> What financial metrics (e.g., gross
                                    margin, net profit) do you see as key indicators of success for this business?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->financial_metrics }}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900"> What time frame are you considering for
                                    reaching profitability or achieving a stable cash flow?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$cfoRecords->cash_flow_time }}
                                </dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Financial Document Uploads</dt>
                                <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                    <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                                        <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm/6">
                                            <div class="flex w-0 flex-1 items-center">
                                                <svg class="size-5 shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd"
                                                          d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                    <span class="truncate font-medium">Business Bank Statements (Format Required: Excel and PDF )</span>
                                                    <!--                                                    <span class="shrink-0 text-gray-400">2.4mb</span>-->
                                                </div>
                                            </div>
                                            <div class="ml-4 shrink-0">
                                                <a href="{{ asset('storage/' . $cfoRecords->bank_statement) }}" download
                                                   class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                            </div>
                                        </li>
                                        <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm/6">
                                            <div class="flex w-0 flex-1 items-center">
                                                <svg class="size-5 shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd"
                                                          d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                    <span class="truncate font-medium">Cash Flow Statements (Format Required: PDF or Excel)</span>
                                                    <!--                                                    <span class="shrink-0 text-gray-400">2.4mb</span>-->
                                                </div>
                                            </div>
                                            <div class="ml-4 shrink-0">
                                                <a href="{{ asset('storage/' . $cfoRecords->cash_flow_statement) }}"
                                                   download class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                            </div>
                                        </li>
                                        <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm/6">
                                            <div class="flex w-0 flex-1 items-center">
                                                <svg class="size-5 shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd"
                                                          d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                    <span class="truncate font-medium">Forecasting/Budgeting Documents (Format Required: PDF or Excel) </span>
                                                    <!--                                                    <span class="shrink-0 text-gray-400">2.4mb</span>-->
                                                </div>
                                            </div>
                                            <div class="ml-4 shrink-0">
                                                <a href="{{ asset('storage/' . $cfoRecords->budget_document) }}"
                                                   download class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                            </div>
                                        </li>
                                    </ul>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>

            </div>
        </div>
        @else
        <p class="text-gray-600 mt-6">You have no Fractional CFO records.</p>
        @endif
        @if($leadershipRecords)
        <div class="mt-6">
            <button
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                onclick="toggleCollapse('leadership-section')">
                Your Leadership Records
                <span id="leadership-section-icon" class="ml-2 transform rotate-0">
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </span>
            </button>
            <div id="leadership-section" class="mt-4 hidden p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                <div>
                    <div class="px-4 sm:px-0">
                        <h3 class="text-base/7 font-semibold text-gray-900">Leadership Response</h3>
                        <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Content Execution</p>
                    </div>
                    <div class="mt-6 border-t border-gray-100">
                        <dl class="divide-y divide-gray-100">
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">What would you like to become a thought leader in?</dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$leadershipRecords->leader}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">What sources do you enjoy reading and obtaining your research to advise your clients or write about? Share the links please. </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$leadershipRecords->research}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">What are your major types of clients? e.g. Industry, job titles.
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$leadershipRecords->clients}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">What are the most important things your clients would like to see in your content?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$leadershipRecords->important_client }}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Desired Tone for your content
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$leadershipRecords->content}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">To what extent can you give advice on your content? E.g. Any compliance restrictions we should be aware of? or anything else
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$leadershipRecords->advice ?? ''}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">
                                    Would you like to see quotes from industry specialists and books on your content?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{$leadershipRecords->quotes ?? ''}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">What industry awards would you like to become a constituent of in the near future? </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$leadershipRecords->award ?? ''}}
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">
                                    Who would you like to have the biggest impact on your content?
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    @php
                                    $leadershipImpact = $leadershipRecords->impact;
                                    if (!is_array($leadershipImpact)) {
                                        $leadershipImpact = json_decode($leadershipImpact, true);
                                    }
                                    @endphp
                                    @if (!empty($leadershipImpact))
                                    <ul class="list-disc list-inside">
                                        @foreach ($leadershipImpact as $impact)
                                        <li>{{ $impact }}</li>
                                        @endforeach
                                    </ul>
                                    @else
                                    <p>No impact records available.</p>
                                    @endif
                                </dd>
                            </div
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm/6 font-medium text-gray-900">Financial Document Uploads</dt>
                                <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                    <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                                        <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm/6">
                                            <div class="flex w-0 flex-1 items-center">
                                                <svg class="size-5 shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd"
                                                          d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                    <span class="truncate font-medium">Business Bank Statements (Format Required: Excel and PDF )</span>
                                                    <!--                                                    <span class="shrink-0 text-gray-400">2.4mb</span>-->
                                                </div>
                                            </div>
                                            <div class="ml-4 shrink-0">
                                                <a href="{{ asset('storage/' . $cfoRecords->bank_statement) }}" download
                                                   class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                            </div>
                                        </li>
                                        <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm/6">
                                            <div class="flex w-0 flex-1 items-center">
                                                <svg class="size-5 shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd"
                                                          d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                    <span class="truncate font-medium">Cash Flow Statements (Format Required: PDF or Excel)</span>
                                                    <!--                                                    <span class="shrink-0 text-gray-400">2.4mb</span>-->
                                                </div>
                                            </div>
                                            <div class="ml-4 shrink-0">
                                                <a href="{{ asset('storage/' . $cfoRecords->cash_flow_statement) }}"
                                                   download class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                            </div>
                                        </li>
                                        <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm/6">
                                            <div class="flex w-0 flex-1 items-center">
                                                <svg class="size-5 shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd"
                                                          d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                    <span class="truncate font-medium">Forecasting/Budgeting Documents (Format Required: PDF or Excel) </span>
                                                    <!--                                                    <span class="shrink-0 text-gray-400">2.4mb</span>-->
                                                </div>
                                            </div>
                                            <div class="ml-4 shrink-0">
                                                <a href="{{ asset('storage/' . $cfoRecords->budget_document) }}"
                                                   download class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                            </div>
                                        </li>
                                    </ul>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        @else
        <p class="text-gray-600 mt-6">You have no Leadership records.</p>
        @endif

        <div class="mt-6">
            <a href="{{route('onboard.create')}}"
               class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Request for New Service
            </a>
        </div>
    </div>
</main>

<script>
    function toggleCollapse(sectionId) {
        const section = document.getElementById(sectionId);
        const icon = document.getElementById(`${sectionId}-icon`);

        if (section.classList.contains('hidden')) {
            section.classList.remove('hidden');
            icon.style.transform = 'rotate(180deg)';
        } else {
            section.classList.add('hidden');
            icon.style.transform = 'rotate(0)';
        }
    }
</script>
@endsection
