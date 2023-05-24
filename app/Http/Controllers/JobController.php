<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobModel;

class JobController extends Controller
{   
  

    public function __construct()
    {
        // $this->authorizeResource(JobModel::class, 'job');
        $this->middleware('auth')->except(['index', 'show','about','ourteam']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   


        
        
        $filters = $request->only([
            'job_name','area','city','salaryFrom','salaryTo',
        ]);
        
    
       return inertia('Jobs/Index', [
        'filters' => $filters,
        'job' => JobModel::orderByDesc('created_at')
        
        ->when($filters['salaryFrom'] ?? false, fn($query, $value) => $query->where('salary', '>=', $value))
        ->when($filters['salaryTo'] ?? false, fn($query, $value) => $query->where('salary', '<=', $value))
        ->when($filters['job_name'] ?? false, fn($query, $value) => $query->where('job_name', 'LIKE', '%' . $value . '%'))
        ->when($filters['city'] ?? false, fn($query, $value) => $query->where('city', 'LIKE', '%' . $value . '%'))
        ->paginate(18)
        ->withQueryString(),
        ]);
        dd($filters);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Jobs/Create',
        [
            
        ]);
    }

    public function about(){
        return inertia('Jobs/About',
        [
            
        ]);
    }

    public function ourteam(){
        return inertia('Jobs/OurTeam',
        [
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->user()->job_model()->create(
                $request->validate([
                'job_name' => 'required|min:0|max:100',
                'company' => 'required|min:0|max:100',
                'area' => 'required|min:3|max:1500',
                'post_code' => 'required',
                'city' => 'required',
                'detail' => 'required|min:1|max:1000',
                'skills' => 'required',
                'salary' => 'required|integer|min:1|max:20000000',
            ])
        );
        return redirect()->route('job.index')
        ->with('message','job save success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
 
        return inertia('Jobs/Show',
        [
            'job'=>JobModel::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return inertia('Jobs/Edit',
        [
            'job'=>JobModel::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jobmodel $job)
    {
        $job->update(
            $request->validate([
                'job_name' => 'required|min:0|max:100',
                'company' => 'required|min:0|max:100',
                'area' => 'required|min:3|max:1500',
                'post_code' => 'required',
                'city' => 'required',
                'detail' => 'required|min:1|max:1000',
                'skills' => 'required',
                'salary' => 'required|integer|min:1|max:20000000',
            ]));
        return redirect()->route('job.index')
        ->with('message','job update succeed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jobmodel $job)
    {
        $job->delete();
        return redirect()->back()->with('message','delete record success');
    }
}
