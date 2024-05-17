<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surveys = Survey::orderBy('id', 'desc')->paginate(5);
        return view('survey.index', compact('surveys'));
    }

    public function search4(Request $request)
{
    $search4 = $request->search4;
    $surveys = Survey::where(function ($query4) use ($search4) {
        $query4->where('id','like',"%$search4%")
        ->orWhereHas('users4',function($query) use($search4){
            $query->where('customerID','like',"%$search4%");
        })
            ->orWhere('solve_problem', 'like', "%$search4%")
            ->orWhere('time_taken', 'like', "%$search4%")
            ->orWhere('customer_satisfaction', 'like', "%$search4%")
            ->orWhere('job_location', 'like', "%$search4%")
            ->orWhere('suggestion', 'like', "%$search4%");
    })->paginate(5);
    return view('survey.index', compact('surveys', 'search4'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('survey.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'solve_problem' => 'required',
            'time_taken' => 'required',
            'customer_satisfaction' => 'required',
            'job_location' => 'required',
            'suggestion' => 'required',
        ]);
        $user = auth()->user(); // Retrieve the authenticated user
        $survey = new Survey($request->only(['solve_problem', 'time_taken', 'customer_satisfaction', 'job_location', 'suggestion'])); // Create a new order instance with request data
        $user->orders()->save($survey); // Save the order, automatically linking it to the user
        return redirect()->route('survey.index')->with('success', 'Survey has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Survey $survey)
    {
        return view('survey.show', compact('survey'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Survey $survey)
    {
        return view('survey.edit', compact('survey'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Survey $survey)
    {
        $request -> validate([
            'solve_problem' => 'required',
            'time_taken' => 'required',
            'customer_satisfaction' => 'required',
            'job_location' => 'required',
            'suggestion' => 'required',
        ]);
        $survey->fill($request->post())->save();
        return redirect()->route('survey.index')->with('success', 'Survey has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survey $survey)
    {
        $survey->delete();
        return redirect()->route('survey.index')->with('success', 'Survey has been deleted successfully');
    }
}
