@extends('layouts.app')

@section('content')
<main class="py-10 bg-gray-100 min-h-screen">
    <div class="max-w-[68rem] mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Welcome {{auth()->user()->name}}</h2>
        <h4 class="text-center text-3xl">Migasuto Client Content Execution</h4>
        <br>
        <form action="{{route('onboard.leadership')}}" method="post">
            @csrf
            <fieldset class="border border-solid border-gray-300 p-3 mb-6 mt-2 rounded-2xl">
                <legend class="text-sm text-gray-950 dark:text-gray-100">Thought Leadership</legend>
                <div class="mb-6">
                    <label for="leader" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">What would
                        you like to become a thought leader in?</label>
                    <textarea name="leader" id="leader" rows="4" required
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                <div class="mb-6">
                    <label for="research" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">What
                        sources do you enjoy reading and obtaining your research to advise your clients or write about?
                        Share the links please</label>
                    <textarea name="research" id="research" rows="4" required
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                <div class="mb-6">
                    <label for="clients" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">What are
                        your major types of clients? e.g. Industry, job titles.</label>
                    <textarea name="clients" id="clients"
                              rows="4" required
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    ></textarea>
                </div>
                <div class="mb-6">
                    <label for="important_client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">What
                        are the most important things your clients would like to see in your content? </label>
                    <textarea name="important_client" id="important_client" rows="4" required
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                <div class="mb-6">
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desired
                        Tone for your content</label>
                    <select id="content" name="content" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="">Select..</option>
                        <option value="Formal">Formal</option>
                        <option value="Informal">Informal</option>
                        <option value="Blend">Blend</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="content_advice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">To
                        what extent can you give advice on your content? E.g. Any compliance restrictions we should be
                        aware of? or anything else.</label>
                    <textarea name="content_advice" id="content_advice" rows="4" required
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                <div class="mb-6">
                    <label for="quotes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desired
                        Tone for your content</label>
                    <select id="quotes" name="quotes" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="">Select..</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="award" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">What
                        industry awards would you like to become a constituent of in the near future? </label>
                    <textarea name="award" id="award" rows="4" required
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                <!-- Inserted Form Section -->
                <div class="mb-6">
                    <label for="impact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Who would you like to have the biggest impact on your content?</label>
                    <div class="flex flex-wrap gap-4">
                        <label class="flex items-center">
                            <input type="checkbox" name="impact[]" value="Clients" class="mr-2">
                            Clients
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="impact[]" value="Prospects" class="mr-2">
                            Prospects
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="impact[]" value="Younger Generation" class="mr-2">
                            Younger Generation
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="impact[]" value="Working Class" class="mr-2">
                            Working Class
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="impact[]" value="Other" class="mr-2">
                            Other:
                            <input type="text" name="impact_other" class="ml-2 border border-gray-300 rounded p-1 text-sm">
                        </label>
                    </div>
                </div>
                <!-- End of Inserted Section -->
            </fieldset>
            <div class="flex justify-end">
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Continue
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
