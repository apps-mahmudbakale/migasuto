@extends('layouts.app')

@section('content')
<div class="max-w-[68rem] mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Forms List</h1>

    <!-- List of Forms -->
    <table class="min-w-full table-auto">
        <thead>
        <tr>
            <th class="px-4 py-2 border">ID</th>
            <th class="px-4 py-2 border">Title</th>
            <th class="px-4 py-2 border">Description</th>
            <th class="px-4 py-2 border">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($forms as $form)
        <tr>
            <td class="px-4 py-2 border">{{ $form->id }}</td>
            <td class="px-4 py-2 border">{{ $form->title }}</td>
            <td class="px-4 py-2 border">{{ $form->description }}</td>
            <td class="px-4 py-2 border">
                <a href="{{ route('form-fields.create', $form) }}" class="text-blue-500 hover:underline">Add Fields</a>
                <a href="{{ route('forms.show', $form) }}" class="text-blue-500 hover:underline">View & Fill Form</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Create New Form Button -->
    <div class="mt-6">
        <a href="{{ route('forms.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md text-white hover:bg-blue-600">
            Create New Form
        </a>
    </div>
</div>
@endsection
