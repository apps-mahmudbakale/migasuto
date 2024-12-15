<?php

// app/Models/FormAnswer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['form_id', 'form_field_id', 'value'];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function field()
    {
        return $this->belongsTo(FormField::class, 'form_field_id');
    }
}

