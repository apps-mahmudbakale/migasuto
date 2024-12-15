@extends('layouts.app')

@section('content')
<main class="py-10 bg-gray-100 min-h-screen">
    <div class="max-w-[68rem] mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Update Profile</h2>

        <form action="{{ route('profile.update') }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900">Date of Birth</label>
                <input type="date" id="date_of_birth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>

            <div class="mb-6">
                <label for="countries_disabled" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                <select  id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ $user->gender == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <div class="mb-6">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number:</label>
                <input type="text" name="phone"
                       value="{{ old('phone', $user->phone) }}"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                >
            </div>

            <div class="mb-6">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <textarea name="address" id="address"
                          rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >{{ old('address', $user->address) }}</textarea>
            </div>

            <div class="mb-6">
                <label for="biography" class="block text-sm font-medium text-gray-700">Biography:</label>
                <textarea name="biography" id="biography"
                          rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >{{ old('biography', $user->biography) }}</textarea>
            </div>

            <div class="mb-6">
                <label for="occupation" class="block text-sm font-medium text-gray-700">Occupation:</label>
                <input type="text" name="occupation"
                       value="{{ old('occupation', $user->occupation) }}"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                >
            </div>

            <div class="mb-6">
                <label for="company" class="block text-sm font-medium text-gray-700">Company:</label>
                <input type="text" name="company"
                       value="{{ old('company', $user->company) }}"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                >
            </div>

            <div class="mb-6">
                <label for="website" class="block text-sm font-medium text-gray-700">Website:</label>
                <input type="url" name="website"
                       value="{{ old('website', $user->website) }}"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                >
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Update Profile
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
