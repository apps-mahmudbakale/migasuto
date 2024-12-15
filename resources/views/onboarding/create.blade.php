"@extends('layouts.app')

@section('content')
<main class="py-10 bg-gray-100 min-h-screen">
    <div class="max-w-[68rem] mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Welcome {{auth()->user()->name}}</h2>
        <p>Please Select Migasuto service which you are seekig for  .</p>

        <form action="{{route('onboard.store')}}" method="post">
            @csrf
            <div class="mb-6">
                <label for="service" class="block text-sm font-medium text-gray-700">Service:</label>
                <select  id="service" name="service" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Select Service</option>
                    <option value="fractional_cfo">
                        Fractional CFO
                    </option>
                    <option value="leadership">Leadership</option>
                </select>
            </div>
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
