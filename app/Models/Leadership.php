<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    protected $fillable = [
        'user_id',
        'leader',
        'impact',
        'impact_other',
        'research',
        'clients',
        'important_client',
        'content'
    ];

    protected $casts = [
        'impact' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
