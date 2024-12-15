@extends('layouts.app')

@section('content')
<main class="py-10 bg-gray-100 min-h-screen">
    <div class="max-w-[65rem] mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Your Notes</h2>

        @if(session('success'))
        <div class="p-4 mb-6 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
        @endif

        <!-- Upload Form -->
        <form action="{{ route('notes.upload') }}" method="POST" enctype="multipart/form-data" class="mb-6">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Note Title</label>
                <input type="text" id="title" name="title" class="w-full mt-1 p-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="file" class="block text-sm font-medium text-gray-700">Upload File</label>
                <input type="file" id="file" name="file" class="w-full mt-1 p-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="target_user_id" class="block text-sm font-medium text-gray-700">Target User</label>
                <select id="target_user_id" name="target_user_id" class="w-full mt-1 p-2 border rounded-lg" required>
                    <option value="">Select a User</option>
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg">Upload</button>
        </form>


        <!-- List of Notes -->
        <h3 class="text-xl font-semibold text-gray-700 mb-4">Uploaded Notes</h3>
        <ul class="list-disc list-inside">
            @forelse ($notes as $note)
            <li class="mb-2">
                <strong>{{ $note->title }}</strong>
                <a href="{{ route('notes.download', $note) }}" class="text-blue-600 hover:underline">Download</a>
            </li>
            @empty
            <p>No notes uploaded yet.</p>
            @endforelse
        </ul>
    </div>
</main>
@endsection
