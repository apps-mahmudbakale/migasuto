<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResponseEntry extends Model
{
    protected $fillable = ['response_id', 'form_field_id', 'value'];
    public function response()
    {
        return $this->belongsTo(FormResponse::class);
    }
    public function formField()
    {
        return $this->belongsTo(FormField::class);
    }
}
