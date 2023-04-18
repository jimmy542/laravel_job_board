<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobModel;

class JobController extends Controller
{   
  
    public function __construct()
    {
        $this->authorizeResource(JobModel::class, 'job');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return inertia('Jobs/Index',
        [
            'job'=>JobModel::orderByDesc('created_at')
            ->paginate(12)
        ]);
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
