@extends('layouts.app')

@section('content')
<div class="max-w-[68rem] mx-auto p-6 bg-white rounded-lg shadow-md">
    @if(isset($form))
    @else
    <h1 class="text-2xl font-bold mb-6">Create New Form</h1>

    <!-- Form to create form title and description -->
    <form action="{{ route('forms.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Form Title</label>
            <input type="text" name="title" id="title" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700">Form Description</label>
            <textarea name="description" id="description" class="w-full p-2 border rounded" rows="3" required></textarea>
        </div>

        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md text-white">
            Create Form
        </button>
    </form>
    @endif
    @if(isset($form))
    <!-- Add Form Fields Section -->
    <h2 class="text-xl font-bold mt-6 mb-4">Add Fields to Form: {{ $form->title }}</h2>

    <form action="{{ route('form-fields.store', $form) }}" method="POST">
        @csrf

        <!-- Container for dynamically added fields -->
        <div id="fields-container"></div>

        <button type="button" id="add-field" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md text-white">
            Add Field
        </button>

        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md text-white mt-4">
            Save Fields
        </button>
    </form>
    @endif
</div>

<script>
    let fieldCount = 0;

    // Add a new field when clicking the 'Add Field' button
    document.getElementById('add-field').addEventListener('click', function() {
        fieldCount++;
        const fieldHTML = `
            <div class="mb-4 field-container" id="field-${fieldCount}">
                <div class="mb-2">
                    <label for="type-${fieldCount}" class="block text-gray-700">Field Type</label>
                    <select name="fields[${fieldCount}][type]" id="type-${fieldCount}" class="w-full p-2 border rounded">
                        <option value="text">Text</option>
                        <option value="textarea">Textarea</option>
                        <option value="radiogroup">Radio Group</option>
                        <option value="checkbox">Checkbox</option>
                    </select>
                </div>

                <div class="mb-2">
                    <label for="name-${fieldCount}" class="block text-gray-700">Field Name</label>
                    <input type="text" name="fields[${fieldCount}][name]" id="name-${fieldCount}" class="w-full p-2 border rounded" required>
                </div>

                <div class="mb-2">
                    <label for="title-${fieldCount}" class="block text-gray-700">Field Title</label>
                    <input type="text" name="fields[${fieldCount}][title]" id="title-${fieldCount}" class="w-full p-2 border rounded" required>
                </div>

                <div class="mb-2">
                    <label for="is_required-${fieldCount}" class="block text-gray-700">Is Required?</label>
                    <input type="checkbox" name="fields[${fieldCount}][is_required]" id="is_required-${fieldCount}" value="1">
                </div>

                <div class="mb-2">
                    <label for="choices-${fieldCount}" class="block text-gray-700">Choices (Comma Separated)</label>
                    <textarea name="fields[${fieldCount}][choices]" id="choices-${fieldCount}" class="w-full p-2 border rounded" placeholder="Comma separated values" rows="3"></textarea>
                </div>
            </div>
        `;

        document.getElementById('fields-container').insertAdjacentHTML('beforeend', fieldHTML);
    });
</script>
@endsection
