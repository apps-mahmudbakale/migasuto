<?php

// app/Http/Controllers/FormController.php
namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;


class FormController extends Controller
{
    public function index()
    {
        // Fetch all forms from the database
        $forms = Form::all(); // You can add pagination or filtering if needed

        // Return the view and pass the forms data
        return view('forms.index', compact('forms'));
    }

    // Show form creation page
    public function create()
    {
        return view('forms.create');
    }

    // Store form data
    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Create the form
        $form = Form::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Redirect to the form field creation page
        return redirect()->route('form-fields.create', $form);
    }

    // Store form fields
    public function storeFields(Request $request, Form $form)
    {
        $request->validate([
            'fields' => 'array|required',
            'fields.*.type' => 'required|string',
            'fields.*.name' => 'required|string',
            'fields.*.title' => 'required|string',
        ]);

        // Save form fields
        foreach ($request->fields as $field) {
            $form->fields()->create([
                'type' => $field['type'],
                'name' => $field['name'],
                'title' => $field['title'],
                'is_required' => $field['is_required'] ?? false,
                'choices' => $field['choices'] ?? null,
            ]);
        }

        return redirect()->route('form-fields.create', $form)->with('success', 'Form fields saved successfully');
    }
    public function createFields(Form $form)
    {
        // Pass the form to the view
        return view('forms.create', compact('form'));
    }
    public function show(Form $form)
    {
        return view('forms.show', compact('form'));
    }
    public function storeAnswers(Request $request, Form $form)
    {
        foreach ($form->fields as $field) {
            // Check if the field is required and validate if necessary
            if ($field->is_required && !$request->has($field->name)) {
                return back()->withErrors(['message' => 'Please fill out all required fields.']);
            }

            // Save each response
            FormAnswer::create([
                'form_id' => $form->id,
                'form_field_id' => $field->id,
                'value' => $request->input($field->name),
            ]);
        }

        return redirect()->route('forms.index')->with('success', 'Form submitted successfully!');
    }

    public function showResponses(Form $form)
    {
        $responses = $form->answers()->with('field')->get();
        return view('form.responses', compact('form', 'responses'));
    }


}



