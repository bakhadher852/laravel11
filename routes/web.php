<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');
});

//Jobs list
Route::get('/jobs', function () {
    // This is to sovle N +1 problem
    $job = Job::with('employer')->latest()->simplePaginate(5);
    return view('jobs.index', [
        'jobs' => $job
    ]);
});
//Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});
//Store
Route::post('/jobs', function () {
    // request('title')
    // request('salary')
    // request()->all()
    // validation
    request()->validate(['title' => ['required', 'min:3'], 'salary' => ['required']]);
    Job::create(['title' => request('title'), 'salary' => request('salary'), 'employer_id' => 1]);

    return redirect('/jobs');
});
//show
Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', ['job' => Job::find($id)]);
});


//Edit
Route::get('/jobs/{id}/edit', function ($id) {
    return view('jobs.edit', ['job' => Job::find($id)]);
});

//Update
Route::patch('/jobs/{id}', function ($id) {
    //validate
    request()->validate(['title' => ['required', 'min:3'], 'salary' => ['required']]);
    //authorize On hold
    //update the job
    //and persist
    //redirect to the job page
});
//Destroy
Route::delete('/jobs/{id}', function ($id) {
    return view('jobs.show', ['job' => Job::find($id)]);
});

Route::get('/contact', function () {
    return view('contact');
});
