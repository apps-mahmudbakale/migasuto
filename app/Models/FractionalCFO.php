<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FractionalCFO extends Model
{
    protected $fillable = [
       'user_id','name', 'country', 'inspiration', 'product', 'solution', 'advantage',
        'envision', 'goals', 'business_model', 'revenue_stream', 'pricing',
        'startup_cost', 'expenditure', 'profitability', 'capital', 'investor',
        'self_funding', 'capital_invest', 'capital_raised', 'projected_needs',
        'hiring', 'job_hire', 'sale_target', 'marketing', 'risk', 'compliance_concern',
        'financial_metrics', 'cash_flow_time', 'bank_statement', 'cash_flow_statement',
        'budget_document',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
