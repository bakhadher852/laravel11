<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');
});


Route::get('/jobs', function () {
    // This is to sovle N +1 problem
    $job = Job::with('employer')->latest()->simplePaginate(5);
    return view('jobs.index', [
        'jobs' => $job
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});
Route::post('/jobs', function () {
    // request('title')
    // request('salary')
    // request()->all()
    // validation
    request()->validate(['title' => ['required', 'min:3'], 'salary' => ['required']]);
    Job::create(['title' => request('title'), 'salary' => request('salary'), 'employer_id' => 1]);

    return redirect('/jobs');
});

Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', ['job' => Job::find($id)]);
});


Route::get('/contact', function () {
    return view('contact');
});
