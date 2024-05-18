<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;






Route::get('/', function () {

    return view('home');
});
Route::get('/jobs', function () {
    // This is to sovle N +1 problem
    $job = Job::with('employer')->get();
    return view('jobs', [
        'jobs' => $job
    ]);
});
// Route::get('/jobs/{id}', function ($id) {



//     return view('job', ['job' => Job::find($id)]);
// });
Route::get('/contact', function () {
    return view('contact');
});
