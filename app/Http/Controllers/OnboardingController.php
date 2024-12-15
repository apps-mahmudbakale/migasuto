<?php

namespace App\Http\Controllers;

use App\Models\FractionalCFO;
use App\Models\Leadership;
use Illuminate\Http\Request;

class OnboardingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cfoRecords = FractionalCfo::where('user_id', auth()->id())->first();
        $leadershipRecords = Leadership::where('user_id', auth()->id())->first();
        return view('onboarding.index', compact('cfoRecords', 'leadershipRecords'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('onboarding.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
        if ($request->service == 'fractional_cfo'){
            return view('onboarding.fractional_cfo');
        }elseif ($request->service == 'leadership'){
            return view('onboarding.leadership');
        }  else {
            return view('onboarding.index');
        }
    }

    public function fractional_cfo(Request $request){
//        dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'inspiration' => 'required|string',
            'product' => 'required|string',
            'solution' => 'required|string',
            'advantage' => 'required|string',
            'envision' => 'required|string',
            'goals' => 'required|string',
            'business_model' => 'required|string',
            'revenue_stream' => 'required|string',
            'pricing' => 'required|string',
            'startup_cost' => 'required|string',
            'expenditure' => 'required|string',
            'profitability' => 'required|string',
            'capital' => 'required|string',
            'investor' => 'required|string',
            'self_funding' => 'required|string',
            'capital_invest' => 'required|string',
            'capital_raised' => 'nullable|string',
            'projected_needs' => 'required|string',
            'hiring' => 'required|string',
            'job_hire' => 'required|string',
            'sale_target' => 'required|string',
            'marketing' => 'required|string',
            'risk' => 'required|string',
            'compliance_concern' => 'required|string',
            'financial_metrics' => 'required|string',
            'cash_flow_time' => 'required|string',
            'bank_statement' => 'nullable|file|mimes:pdf,xlsx',
            'cash_flow_statement' => 'nullable|file|mimes:pdf,xlsx',
            'budget_document' => 'nullable|file|mimes:pdf,xlsx',
        ]);

        // Handle file uploads
        $validatedData['bank_statement'] = $request->file('bank_statement') ? $request->file('bank_statement')->store('documents') : null;
        $validatedData['cash_flow_statement'] = $request->file('cash_flow_statement') ? $request->file('cash_flow_statement')->store('documents') : null;
        $validatedData['budget_document'] = $request->file('budget_document') ? $request->file('budget_document')->store('documents') : null;

        // Save to database
        FractionalCFO::create(array_merge($validatedData, ['user_id' => auth()->user()->id]));

        return redirect()->route('onboard.index')->with('success', 'Form submitted successfully.');
    }

    public function leadership(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'leader' => 'required|string',
            'impact' => 'nullable|array',
            'impact_other' => 'nullable|string',
            'research' => 'required|string',
            'clients' => 'required|string',
            'important_client' => 'required|string',
            'content' => 'required|string',
        ]);

        Leadership::create([
            'user_id' => auth()->id(),
            'leader' => $request->leader,
            'impact' => $request->impact,
            'impact_other' => $request->impact_other,
            'research' => $request->research,
            'clients' => $request->clients,
            'important_client' => $request->important_client,
            'content' => $request->content,
        ]);

        return redirect()->route('onboard.index')->with('success', 'Form submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
