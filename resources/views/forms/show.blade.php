@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">{{ $form->title }}</h1>
    <p>{{ $form->description }}</p>

    <form action="{{ route('form-answers.store', $form) }}" method="POST">
        @csrf

        <!-- Dynamic Fields from Form Fields Table -->
        @foreach($form->fields as $field)
        <div class="mb-4">
            <label for="{{ $field->name }}" class="block text-gray-700">{{ $field->title }}</label>

            @if($field->type == 'text')
            <input type="text" name="{{ $field->name }}" id="{{ $field->name }}" class="w-full p-2 border rounded" @if($field->is_required) required @endif>
            @elseif($field->type == 'textarea')
            <textarea name="{{ $field->name }}" id="{{ $field->name }}" class="w-full p-2 border rounded" @if($field->is_required) required @endif></textarea>
            @elseif($field->type == 'radiogroup')
            @foreach(explode(',', $field->choices) as $choice)
            <label class="inline-flex items-center mt-2">
                <input type="radio" name="{{ $field->name }}" value="{{ $choice }}" class="form-radio">
                <span class="ml-2">{{ $choice }}</span>
            </label>
            @endforeach
            @elseif($field->type == 'checkbox')
            @foreach(explode(',', $field->choices) as $choice)
            <label class="inline-flex items-center mt-2">
                <input type="checkbox" name="{{ $field->name }}[]" value="{{ $choice }}" class="form-checkbox">
                <span class="ml-2">{{ $choice }}</span>
            </label>
            @endforeach
            @endif
        </div>
        @endforeach

        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md text-white hover:bg-blue-600">
            Submit Form
        </button>
    </form>
</div>
@endsection
