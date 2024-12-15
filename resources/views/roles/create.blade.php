@extends('layouts.app')

@section('content')
<main class="py-10 bg-gray-100 min-h-screen">
    <div class="max-w-[68rem] mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Create New Role</h2>

        <form action="{{ route('roles.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Role Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Assign Permissions</label>
                <div class="grid grid-cols-2 gap-4 mt-2">
                    @foreach($permissions as $permission)
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" class="mr-2">
                        {{ $permission->name }}
                    </label>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Create Role</button>
        </form>
    </div>
</main>
@endsection
