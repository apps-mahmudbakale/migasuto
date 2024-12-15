<?php

namespace App\Http\Controllers;

use App\Models\FormField;
use Illuminate\Http\Request;

class FormFieldController extends Controller
{
    // Store form field in database
    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'type' => 'required|string',
            'name' => 'required|string',
            'title' => 'required|string',
            'is_required' => 'nullable|boolean',
            'choices' => 'nullable|string',
        ]);

        // Convert the choices string to an array (if provided)
        $choices = $request->input('choices') ? explode(',', $request->input('choices')) : null;

        // Save the form field
        FormField::create([
            'form_id' => 1,  // You can change this if you have multiple forms
            'type' => $request->input('type'),
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'is_required' => $request->input('is_required', false),
            'choices' => $choices,
        ]);

        return redirect()->back()->with('success', 'Form field saved successfully!');
    }
}

