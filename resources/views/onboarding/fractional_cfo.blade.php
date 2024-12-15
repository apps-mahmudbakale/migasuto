@extends('layouts.app')

@section('content')
<main class="py-10 bg-gray-100 dark:bg-gray-900 min-h-screen">
    <div class="max-w-[68rem] mx-auto bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 mb-6">Welcome Admin John</h2>
        <h4 class="text-center text-3xl text-gray-800 dark:text-gray-100">Migasuto Fractional CFO Client Questionnaire
            (Idea Stage Businesses)</h4>

        <form action="{{ route('onboard.cfo') }}" method="POST" id="multi-step-form" enctype="multipart/form-data">
            @csrf
            <div id="step-1" class="form-step">
                <fieldset class="border border-solid border-gray-300 p-3 mb-6 mt-2 rounded-2xl">
                    <legend class="text-sm text-gray-950 dark:text-gray-100">Business Vision and Objectives</legend>
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Client Name:</label>
                        <input type="text" required id="name" name="name"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="mb-6">
                        <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country of Domicile:</label>
                        <select id="country" name="country" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Select Country</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Kenya">Kenya</option>
                            <option value="South Africa">South Africa</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="inspiration" class="block text-sm font-medium text-gray-700">What inspired the idea
                            for your business?</label>
                        <textarea id="inspiration" name="inspiration" required rows="4"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="product" class="block text-sm font-medium text-gray-700">What is your core product
                            or service, and who is your target market?</label>
                        <textarea id="product" name="product" required rows="4"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="solution" class="block text-sm font-medium text-gray-700">What problems does your
                            business aim to solve?</label>
                        <textarea id="solution" name="solution" required rows="4"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="advantage" class="block text-sm font-medium text-gray-700">How does your idea stand
                            out from competitors?</label>
                        <textarea id="advantage" name="advantage" required rows="4"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="envision" class="block text-sm font-medium text-gray-700">How do you envision your
                            business growing in the first few years?</label>
                        <textarea id="envision" name="envision" required rows="4"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="goals" class="block text-sm font-medium text-gray-700">What are your long-term
                            goals?</label>
                        <textarea id="goals" name="goals" required rows="4"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                </fieldset>
                <button type="button" class="next-step bg-blue-500 text-white px-4 py-2 rounded">Next</button>
            </div>
            <div id="step-2" class="form-step hidden">
                <fieldset class="border border-solid border-gray-300 p-3 mb-6 mt-2 rounded-2xl">
                    <legend class="text-sm text-gray-950 dark:text-gray-100">Business Model and Revenue Streams</legend>
                    <div class="mb-6">
                        <label for="business_model" class="block text-sm font-medium text-gray-100 dark:text-gray-700">What are your long-term goals?</label>
                        <textarea id="business_model" name="business_model" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="revenue_stream" class="block text-sm font-medium text-gray-100 dark:text-gray-700">Have you identified any potential revenue streams? If so, please describe</label>
                        <textarea id="revenue_stream" name="revenue_stream" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="pricing" class="block text-sm font-medium text-gray-100 dark:text-gray-700">Do you have ideas about pricing structures, and if so, what do they look like?</label>
                        <textarea id="pricing" name="pricing" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                </fieldset>
                    <div class="flex justify-between">
                        <button type="button" class="prev-step bg-gray-500 text-white px-4 py-2 rounded">Previous
                        </button>
                        <button type="button" class="next-step bg-blue-500 text-white px-4 py-2 rounded">Next</button>
                    </div>
            </div>
            <div id="step-3" class="form-step hidden">
                <fieldset class="border border-solid border-gray-300 p-3 mb-6 mt-2 rounded-2xl">
                    <legend class="text-sm text-gray-950 dark:text-gray-100">Initial Financial Assumptions</legend>
                    <div class="mb-6">
                        <label for="startup_cost" class="block text-sm font-medium text-gray-100 dark:text-gray-700">Have you estimated the initial start-up costs required to bring your idea to market?</label>
                        <textarea id="startup_cost" name="startup_cost" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="expenditure" class="block text-sm font-medium text-gray-100 dark:text-gray-700">Do you anticipate any significant capital expenditures in the near term (e.g., equipment, software, real estate)?</label>
                        <textarea id="expenditure" name="expenditure" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="profitability" class="block text-sm font-medium text-gray-100 dark:text-gray-700">What are your assumptions for your business’s break-even point and time frame for profitability?</label>
                        <textarea id="profitability" name="profitability" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                </fieldset>
                <div class="flex justify-between">
                    <button type="button" class="prev-step bg-gray-500 text-white px-4 py-2 rounded">Previous</button>
                    <button type="button" class="next-step bg-blue-500 text-white px-4 py-2 rounded">Next</button>
                </div>
            </div>
            <div id="step-4" class="form-step hidden">
                <fieldset class="border border-solid border-gray-300 p-3 mb-6 mt-2 rounded-2xl">
                    <legend class="text-sm text-gray-950 dark:text-gray-100">Funding and Capital Requirements</legend>
                    <div class="mb-6">
                        <label for="capital" class="block text-sm font-medium text-gray-100 dark:text-gray-700">How much capital are you currently seeking to raise, if any?</label>
                        <textarea id="capital" name="capital" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="investor" class="block text-sm font-medium text-gray-100 dark:text-gray-700">Do you have any committed investors?</label>
                        <select id="investor" name="investor" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Maybe">Maybe</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="self_funding" class="block text-sm font-medium text-gray-100 dark:text-gray-700">Are you planning on self-funding initially?</label>
                        <select id="self_funding" name="self_funding" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Maybe">Maybe</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="capital_invest" class="block text-sm font-medium text-gray-100 dark:text-gray-700">How much of your capital are you willing to invest initially?</label>
                        <textarea id="capital_invest" name="capital_invest" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="capital_raised" class="block text-sm font-medium text-gray-100 dark:text-gray-700">How do you plan to allocate any initial capital raised?</label>
                        <textarea id="capital_raised" name="capital_raised" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                </fieldset>
                <div class="flex justify-between">
                    <button type="button" class="prev-step bg-gray-500 text-white px-4 py-2 rounded">Previous</button>
                    <button type="button" class="next-step bg-blue-500 text-white px-4 py-2 rounded">Next</button>
                </div>
            </div>
            <div id="step-5" class="form-step hidden">
                <fieldset class="border border-solid border-gray-300 p-3 mb-6 mt-2 rounded-2xl">
                    <legend class="text-sm text-gray-950 dark:text-gray-100">Projected Financial Needs</legend>
                    <div class="mb-6">
                        <label for="projected_needs" class="block text-sm font-medium text-gray-100 dark:text-gray-700">What are your projected operating expenses (e.g., salaries, rent, etc) in the first year?</label>
                        <textarea id="projected_needs" name="projected_needs" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="hiring" class="block text-sm font-medium text-gray-100 dark:text-gray-700">Do you anticipate hiring employees, or will you work with contractors and freelancers?</label>
                        <select id="hiring" name="hiring" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="Employees">Employees (Internally)</option>
                            <option value="Contractors">Contractors</option>
                            <option value="Freelancers">Freelancers</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for=job_hire class="block text-sm font-medium text-gray-100 dark:text-gray-700">What Job roles will you initially hire for?</label>
                        <textarea id="job_hire" name="job_hire" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="capital_raised" class="block text-sm font-medium text-gray-100 dark:text-gray-700">How do you plan to allocate any initial capital raised?</label>
                        <textarea id="capital_raised" name="capital_raised" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                </fieldset>
                <div class="flex justify-between">
                    <button type="button" class="prev-step bg-gray-500 text-white px-4 py-2 rounded">Previous</button>
                    <button type="button" class="next-step bg-blue-500 text-white px-4 py-2 rounded">Next</button>
                </div>
            </div>
            <div id="step-6" class="form-step hidden">
                <fieldset class="border border-solid border-gray-300 p-3 mb-6 mt-2 rounded-2xl">
                    <legend class="text-sm text-gray-950 dark:text-gray-100">Revenue Projections</legend>
                    <div class="mb-6">
                        <label for="sale_target" class="block text-sm font-medium text-gray-100 dark:text-gray-700">Have you set initial sales targets for the first 12 months and thereafter? If so, what are they?</label>
                        <textarea id="sale_target" name="sale_target" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="marketing" class="block text-sm font-medium text-gray-100 dark:text-gray-700">How do you plan to market and promote your product or service?</label>
                        <textarea id="marketing" name="marketing" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                </fieldset>
                <div class="flex justify-between">
                    <button type="button" class="prev-step bg-gray-500 text-white px-4 py-2 rounded">Previous</button>
                    <button type="button" class="next-step bg-blue-500 text-white px-4 py-2 rounded">Next</button>
                </div>
            </div>
            <div id="step-7" class="form-step hidden">
                <fieldset class="border border-solid border-gray-300 p-3 mb-6 mt-2 rounded-2xl">
                    <legend class="text-sm text-gray-950 dark:text-gray-100">Risk Management and Challenges</legend>
                    <div class="mb-6">
                        <label for="risk" class="block text-sm font-medium text-gray-100 dark:text-gray-700">What do you see as the biggest risks or challenges to getting your business off the ground?</label>
                        <textarea id="risk" name="risk" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="compliance_concern" class="block text-sm font-medium text-gray-100 dark:text-gray-700">What do you see as the biggest risks or challenges to getting your business off the ground?</label>
                        <textarea id="compliance_concern" name="compliance_concern" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                </fieldset>
                <div class="flex justify-between">
                    <button type="button" class="prev-step bg-gray-500 text-white px-4 py-2 rounded">Previous</button>
                    <button type="button" class="next-step bg-blue-500 text-white px-4 py-2 rounded">Next</button>
                </div>
            </div>
            <div id="step-8" class="form-step hidden">
                <fieldset class="border border-solid border-gray-300 p-3 mb-6 mt-2 rounded-2xl">
                    <legend class="text-sm text-gray-950 dark:text-gray-100">Financial Goals and Metrics for Success</legend>
                    <div class="mb-6">
                        <label for="financial_metrics" class="block text-sm font-medium text-gray-100 dark:text-gray-700">What financial metrics (e.g., gross margin, net profit) do you see as key indicators of success for this business?</label>
                        <textarea id="financial_metrics" name="financial_metrics" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="cash_flow_time" class="block text-sm font-medium text-gray-100 dark:text-gray-700">What time frame are you considering for reaching profitability or achieving a stable cash flow?</label>
                        <textarea id="cash_flow_time" name="cash_flow_time" required rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg p-2.5 w-full"></textarea>
                    </div>
                </fieldset>
                <div class="flex justify-between">
                    <button type="button" class="prev-step bg-gray-500 text-white px-4 py-2 rounded">Previous</button>
                    <button type="button" class="next-step bg-blue-500 text-white px-4 py-2 rounded">Next</button>
                </div>
            </div>
            <div id="step-9" class="form-step hidden">
                <fieldset class="border border-solid border-gray-300 p-3 mb-6 mt-2 rounded-2xl">
                    <legend class="text-sm text-gray-950 dark:text-gray-100">Financial Document Uploads</legend>
                    <div class="mb-6">
                        <label for="bank_statement" class="block text-sm font-medium text-gray-100 dark:text-gray-700">Business Bank Statements (Format Required: Excel and PDF )</label>
                        <input type="file" required id="bank_statement" name="bank_statement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="mb-6">
                        <label for="cash_flow_statement" class="block text-sm font-medium text-gray-100 dark:text-gray-700">Cash Flow Statements (Format Required: PDF or Excel)</label>
                        <input type="file" required id="cash_flow_statement" name="cash_flow_statement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="mb-6">
                        <label for="budget_document" class="block text-sm font-medium text-gray-100 dark:text-gray-700">Forecasting/Budgeting Documents (Format Required: PDF or Excel)</label>
                        <input type="file" required id="budget_document" name="budget_document" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                </fieldset>
                <div class="flex justify-between">
                    <button type="button" class="prev-step bg-gray-500 text-white px-4 py-2 rounded">Previous</button>
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Submit</button>
                </div>
            </div>
        </form>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const steps = document.querySelectorAll('.form-step');
        let currentStep = 0;

        document.querySelectorAll('.next-step').forEach(button => {
            button.addEventListener('click', () => {
                steps[currentStep].classList.add('hidden');
                currentStep++;
                steps[currentStep].classList.remove('hidden');
            });
        });

        document.querySelectorAll('.prev-step').forEach(button => {
            button.addEventListener('click', () => {
                steps[currentStep].classList.add('hidden');
                currentStep--;
                steps[currentStep].classList.remove('hidden');
            });
        });
    });
</script>
@endsection
