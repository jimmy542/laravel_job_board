<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobModel;
class IndexController extends Controller
{
    public function index(){
        dd(JobModel::all());
        return inertia('Index/Index',
        [
            'message'=>'hello from index'
        ]);

    }

    public function show(){

        return inertia('Index/Show');
    }
}
