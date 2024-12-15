@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Responses for "{{ $form->title }}"</h1>

    <!-- Display success messages -->
    @if(session('success'))
    <div class="bg-green-100 text-green-700 p-4 rounded mb-6">
        {{ session('success') }}
    </div>
    @endif

    <!-- Check if there are responses -->
    @if($responses->isEmpty())
    <p class="text-gray-500">No responses yet.</p>
    @else
    <table class="min-w-full bg-white mt-4">
        <thead>
        <tr>
            <th class="py-2 px-4 border-b">Response ID</th>
            <th class="py-2 px-4 border-b">Submitted Data</th>
            <th class="py-2 px-4 border-b">Submitted At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($responses as $response)
        <tr>
            <td class="py-2 px-4 border-b">{{ $response->id }}</td>
            <td class="py-2 px-4 border-b">
                <!-- Display each response field with label and value -->
                <pre class="text-gray-700 bg-gray-100 p-2 rounded">{{ json_encode($response->responses, JSON_PRETTY_PRINT) }}</pre>
            </td>
            <td class="py-2 px-4 border-b">{{ $response->created_at->format('Y-m-d H:i') }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endif

    <div class="mt-6">
        <a href="{{ route('forms.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Back to Forms</a>
    </div>
</div>
@endsection
