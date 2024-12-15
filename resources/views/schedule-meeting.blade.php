@extends('layouts.app')

@section('content')
<main class="py-10 bg-gray-100 min-h-screen">
    <div class="max-w-[65rem] mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Schedule a Meeting</h2>

        @if (session('meet_link'))
        <div class="p-4 mb-6 bg-green-100 text-green-700 rounded">
            Meeting scheduled successfully!
            <a href="{{ session('meet_link') }}" target="_blank" class="text-blue-500 underline">Join Meet</a>
        </div>
        @endif

        <form action="{{ route('schedule-meeting') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="user_id" class="block text-sm font-medium text-gray-700">Select User</label>
                <select id="user_id" name="user_id" class="w-full mt-1 p-2 border rounded-lg" required>
                    <option value="">Select a User</option>
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Meeting Title</label>
                <input type="text" id="title" name="title" class="w-full mt-1 p-2 border rounded-lg" placeholder="Enter meeting title" required>
            </div>

            <div class="mb-4">
                <label for="start_time" class="block text-sm font-medium text-gray-700">Start Time</label>
                <input type="datetime-local" id="start_time" name="start_time" class="w-full mt-1 p-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="end_time" class="block text-sm font-medium text-gray-700">End Time</label>
                <input type="datetime-local" id="end_time" name="end_time" class="w-full mt-1 p-2 border rounded-lg" required>
            </div>

            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg">
                Schedule Meeting
            </button>
        </form>
    </div>
</main>
@endsection
