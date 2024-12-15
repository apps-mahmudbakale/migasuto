<?php

// app/Http/Controllers/FormResponseController.php
namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormResponse;
use Illuminate\Http\Request;

class FormResponseController extends Controller
{
    public function showResponses(Form $form)
    {
        $responses = $form->responses;
        return view('forms.responses', compact('form', 'responses'));
    }

    public function store(Request $request, Form $form)
    {
        $validated = $request->validate([
            'responses' => 'required|array',
        ]);

        FormResponse::create([
            'form_id' => $form->id,
            'responses' => $validated['responses'],
        ]);

        return redirect()->route('forms.index')->with('success', 'Response submitted successfully.');
    }
}

