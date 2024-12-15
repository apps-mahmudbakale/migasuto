@extends('layouts.app')

@section('content')
<main class="py-10 bg-gray-100 min-h-screen">
    <div class="max-w-[68rem] mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Roles</h2>

        <a href="{{ route('roles.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Add New Role</a>

        <table class="min-w-full divide-y divide-gray-200 mt-6">
            <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($roles as $role)
            <tr>
                <td class="px-6 py-4">{{ $role->name }}</td>
                <td class="px-6 py-4">
                    <a href="{{ route('roles.show', $role) }}" class="bg-blue-500 text-white px-4 py-1 rounded-md hover:bg-blue-600">View</a>
                    <a href="{{ route('roles.edit', $role) }}" class="bg-yellow-500 text-white px-4 py-1 rounded-md hover:bg-yellow-600">Edit</a>
                    <form action="{{ route('roles.destroy', $role) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded-md hover:bg-red-600" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
