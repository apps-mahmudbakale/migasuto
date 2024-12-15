<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    protected $fillable = [
        'form_id', 'type', 'name', 'title', 'is_required', 'choices'
    ];

    protected $casts = [
        'choices' => 'array',  // Automatically casts to an array
    ];
}

