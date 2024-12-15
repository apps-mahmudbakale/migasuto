@extends('layouts.app')

@section('content')
<main class="py-10 bg-gray-100 min-h-screen">
    <div class="max-w-[68rem] mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Role Details</h2>

        <div class="mb-6">
            <p class="text-lg font-semibold text-gray-800">Role Name:</p>
            <p class="text-gray-700">{{ $role->name }}</p>
        </div>

        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-800">Permissions:</h3>
            @if ($permissions->isEmpty())
            <p class="text-gray-600">No permissions assigned to this role.</p>
            @else
            <ul class="list-disc pl-6">
                @foreach ($permissions as $permission)
                <li class="text-gray-700">{{ $permission->name }}</li>
                @endforeach
            </ul>
            @endif
        </div>

        <a href="{{ route('roles.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
            Back to Roles
        </a>
    </div>
</main>
@endsection
